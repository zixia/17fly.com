<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: alipay.api.php 16795 2008-11-20 08:21:44Z monkey $
*/


if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

define('DISCUZ_PARTNER', '2088002872555901');
define('DISCUZ_SECURITYCODE', 'zwdr8lv1uaj4b438sjvdoqn8sjrxr0mm');
define('DISCUZ_COMMISION', 0);
define('DISCUZ_DIRECTPAY', 1);

define('STATUS_SELLER_SEND', 4);
define('STATUS_WAIT_BUYER', 5);
define('STATUS_TRADE_SUCCESS', 7);
define('STATUS_REFUND_CLOSE', 17);

function credit_payurl($price, &$orderid) {
	global $bbname, $discuz_userss, $language, $boardurl, $extcredits, $creditstrans, $onlineip, $ec_ratio, $ec_account, $timestamp, $authkey, $charset, $_DCACHE;

	$orderid = gmdate('YmdHis', $timestamp + $_DCACHE['settings']['timeoffset'] * 3600).random(18);

	$royaltyprice = sprintf('%1.2f', $price * 0.015);

	$args = array(
		'subject' 		=> $bbname.' - '.$discuz_userss.' - '.$language['credit_payment'],
		'body' 			=> $language['credit_forum_payment'].' '.$extcredits[$creditstrans]['title'].' '.intval($price * $ec_ratio).' '.$extcredits[$creditstrans]['unit'].' ('.$onlineip.')',
		'service' 		=> 'create_digital_goods_trade_p',
		'partner' 		=> DISCUZ_PARTNER,
		'notify_url' 		=> $boardurl.'api/trade/credit.notify.php',
		'show_url'		=> $boardurl,
		'_input_charset' 	=> $charset,
		'out_trade_no' 		=> $orderid,
		'price' 		=> $price,
		'quantity' 		=> 1,
		'seller_email' 		=> $ec_account,
		'royalty_type'		=> 10,
		'royalty_parameters'	=> 'comsenz@comsenz.com^'.$royaltyprice.'^'.$language['credit_forum_royalty'],
	);
	if(DISCUZ_DIRECTPAY) {
		$args['service'] = 'create_direct_pay_by_user';
		$args['payment_type'] = '1';
	}
	ksort($args);
	$urlstr = $sign = '';
	foreach($args as $key=>$val) {
		if($val != '') $sign .= '&'.$key.'='.$val;
		$urlstr .= $key.'='.rawurlencode($val).'&';
	}
	$sign = substr($sign, 1);
	$sign = md5($sign.DISCUZ_SECURITYCODE);
	return 'http://www.alipay.com/redir.do?id=307&site=allbbs&target='.rawurlencode('https://www.alipay.com/cooperate/gateway.do?'.$urlstr.'sign='.$sign.'&sign_type=MD5');
}

function trade_payurl($pay, $trade, $tradelog) {
	global $boardurl, $authkey, $charset;

	$args = array(
		'service' 		=> 'trade_create_by_buyer',
		'partner' 		=> DISCUZ_PARTNER,
		'notify_url' 		=> $boardurl.'api/trade/trade.notify.php',
		'show_url'		=> $boardurl.'viewthread.php?do=tradeinfo&tid='.$tradelog['tid'].'&pid='.$tradelog['pid'],
		'_input_charset' 	=> $charset,
		'subject' 		=> $trade['subject'],
		'body' 			=> $trade['subject'],
		'out_trade_no' 		=> $tradelog['orderid'],
		'price' 		=> $tradelog['baseprice'],
		'quantity' 		=> $tradelog['number'],
		'logistics_type' 	=> $pay['logistics_type'],
		'logistics_fee' 	=> $tradelog['transportfee'],
		'logistics_payment' 	=> $pay['transport'],
		'payment_type' 		=> $trade['itemtype'],
		'seller_email' 		=> $trade['account'],
	);

	if(DISCUZ_COMMISION) {
		$args += array(
			'commision_fee'	=> $pay['commision'],
			'commision_id' 	=> DISCUZ_PARTNER
		);
	}
	if($pay['logistics_type'] == 'VIRTUAL') {
		$args['service'] = 'create_direct_pay_by_user';
		$args['payment_type'] = '1';
		$royaltyprice = sprintf('%1.2f', $tradelog['baseprice'] * 0.015);
		$args['royalty_type'] = 10;
		$args['royalty_parameters'] = 'comsenz@comsenz.com^'.$royaltyprice.'^'.$language['credit_forum_royalty'];
	}
	ksort($args);
	$urlstr = $sign = '';
	foreach($args as $key=>$val) {
		if($val != '') $sign .= '&'.$key.'='.$val;
		$urlstr .= $key.'='.rawurlencode($val).'&';
	}
	$sign = substr($sign, 1);
	$sign = md5($sign.DISCUZ_SECURITYCODE);
	return 'http://www.alipay.com/redir.do?id=307&site=allbbs&target='.rawurlencode('https://www.alipay.com/cooperate/gateway.do?'.$urlstr.'sign='.$sign.'&sign_type=MD5');
}

function trade_notifycheck($type) {
	if(dfopen("http://notify.alipay.com/trade/notify_query.do?partner=".DISCUZ_PARTNER."&notify_id=".$_POST['notify_id'], 60) !== 'true') {
		exit('Access Denied');
	}

	ksort($_POST);
	$sign = '';
	foreach($_POST as $key => $val) {
		if($val != '' and $key != 'sign' and $key != 'sign_type') $sign .= "&$key=$val";
	}

	if($_POST['sign'] != md5(substr($sign,1).DISCUZ_SECURITYCODE)) {
		exit('Access Denied');
	}

	if($type == 'credit' && (!DISCUZ_DIRECTPAY && $_POST['notify_type'] == 'trade_status_sync' && $_POST['trade_status'] == 'WAIT_SELLER_SEND_GOODS' || DISCUZ_DIRECTPAY && $_POST['trade_status'] == 'TRADE_FINISHED')
		|| $type == 'trade' && $_POST['notify_type'] == 'trade_status_sync') {
		return array(
			'validator'	=> TRUE,
			'status' 	=> trade_getstatus(!empty($_POST['refund_status']) ? $_POST['refund_status'] : $_POST['trade_status'], 1),
			'order_no' 	=> $_POST['out_trade_no'],
			'price' 	=> !DISCUZ_DIRECTPAY ? $_POST['price'] : $_POST['total_fee'],
			'trade_no'	=> $_POST['trade_no'],
			'notify'	=> 'success'
			);
	} else {
		return array(
			'validator'	=> FALSE,
			'notify'	=> 'fail'
			);
	}
}

function trade_getorderurl($orderid) {
	return 'https://www.alipay.com/trade/query_trade_detail.htm?trade_no='.$orderid;
}

function trade_typestatus($method, $status = -1) {
	switch($method) {
		case 'buytrades'	: $methodvalue = array(1, 5, 11, 12);break;
		case 'selltrades'	: $methodvalue = array(2, 4, 10, 13);break;
		case 'successtrades'	: $methodvalue = array(7);break;
		case 'tradingtrades'	: $methodvalue = array(1, 2, 3, 4, 5, 6, 10, 11, 12, 13, 14, 15, 16);break;
		case 'closedtrades'	: $methodvalue = array(8, 17);break;
		case 'refundsuccess'	: $methodvalue = array(17);break;
		case 'refundtrades'	: $methodvalue = array(14, 15, 16, 17, 18);break;
		case 'unstarttrades'	: $methodvalue = array(0);break;
		case 'eccredittrades'	: $methodvalue = array(7, 17);break;
	}
	return $status != -1 ? in_array($status, $methodvalue) : implode('\',\'', $methodvalue);
}

function trade_getstatus($key, $method = 2) {
	global $language;
	$status[1] = array(
		'WAIT_BUYER_PAY' => 1,
		'WAIT_SELLER_CONFIRM_TRADE' => 2,
		'WAIT_SYS_CONFIRM_PAY' => 3,
		'WAIT_SELLER_SEND_GOODS' => 4,
		'WAIT_BUYER_CONFIRM_GOODS' => 5,
		'WAIT_SYS_PAY_SELLER' => 6,
		'TRADE_FINISHED' => 7,
		'TRADE_CLOSED' => 8,
		'WAIT_SELLER_AGREE' => 10,
		'SELLER_REFUSE_BUYER' => 11,
		'WAIT_BUYER_RETURN_GOODS' => 12,
		'WAIT_SELLER_CONFIRM_GOODS' => 13,
		'WAIT_ALIPAY_REFUND' => 14,
		'ALIPAY_CHECK' => 15,
		'OVERED_REFUND' => 16,
		'REFUND_SUCCESS' => 17,
		'REFUND_CLOSED' => 18
	);
	$status[2] = array(
		0  => $language['trade_unstart'],
		1  => $language['trade_waitbuyerpay'],
		2  => $language['trade_waitsellerconfirm'],
		3  => $language['trade_sysconfirmpay'],
		4  => $language['trade_waitsellersend'],
		5  => $language['trade_waitbuyerconfirm'],
		6  => $language['trade_syspayseller'],
		7  => $language['trade_finished'],
		8  => $language['trade_closed'],
		10 => $language['trade_waitselleragree'],
		11 => $language['trade_sellerrefusebuyer'],
		12 => $language['trade_waitbuyerreturn'],
		13 => $language['trade_waitsellerconfirmgoods'],
		14 => $language['trade_waitalipayrefund'],
		15 => $language['trade_alipaycheck'],
		16 => $language['trade_overedrefund'],
		17 => $language['trade_refundsuccess'],
		18 => $language['trade_refundclosed']
	);
	return $method == -1 ? $status[2] : $status[$method][$key];
}

function trade_setprice($data, &$price, &$pay, &$transportfee) {
	if($data['transport'] == 1) {
		$pay['transport'] = 'SELLER_PAY';
	} elseif($data['transport'] == 2) {
		$pay['transport'] = 'BUYER_PAY';
	} elseif($data['transport'] == 3) {
		$pay['logistics_type'] = 'VIRTUAL';
	} else {
		$pay['transport'] = 'BUYER_PAY_AFTER_RECEIVE';
	}

	if($data['transport'] != 3) {
		if($data['fee'] == 1) {
			$pay['logistics_type'] = 'POST';
			$pay['logistics_fee'] = $data['trade']['ordinaryfee'];
			if($data['transport'] == 2) {
				$price = $price + $data['trade']['ordinaryfee'];
				$transportfee = $data['trade']['ordinaryfee'];
			}
		} elseif($data['fee'] == 2) {
			$pay['logistics_type'] = 'EMS';
			$pay['logistics_fee'] = $data['trade']['emsfee'];
			if($data['transport'] == 2) {
				$price = $price + $data['trade']['emsfee'];
				$transportfee = $data['trade']['emsfee'];
			}
		} else {
			$pay['logistics_type'] = 'EXPRESS';
			$pay['logistics_fee'] = $data['trade']['expressfee'];
			if($data['transport'] == 2) {
				$price = $price + $data['trade']['expressfee'];
				$transportfee = $data['trade']['expressfee'];
			}
		}
	}
}

?>