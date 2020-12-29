<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: medal.php 16974 2008-12-01 02:48:50Z tiger $
*/

define('CURSCRIPT', 'medal');

require_once './include/common.inc.php';
require_once DISCUZ_ROOT.'./forumdata/cache/cache_medals.php';

if(!$discuz_uid) {
	showmessage('not_loggedin', NULL, 'HALTED');
}

$medallist = $medallogs = array();
$tpp = 10;
$page = max(1, intval($page));
$start_limit = ($page - 1) * $tpp;

if(empty($action)) {

	$medalnum = intval($db->result_first("SELECT * FROM {$tablepre}medals WHERE available='1' ORDER BY displayorder"));
	$multipage = multi($medalnum, $tpp, $page, "medal.php");

	$query = $db->query("SELECT * FROM {$tablepre}medals WHERE available='1' ORDER BY displayorder LIMIT $start_limit,$tpp");
	while($medal = $db->fetch_array($query)) {
		$medal['permission'] = formulaperm($medal['permission'], 2);
		$medallist[$medal['medalid']] = $medal;
	}

	$medaldata = $db->result_first("SELECT medals FROM {$tablepre}memberfields WHERE uid='$discuz_uid'");
	$membermedal = $medaldata ? explode("\t", $medaldata) : array();

	if(!empty($membermedal)) {
		$medalcount = count($membermedal);
		foreach($membermedal as $medalid) {
			$medallog['name'] = $_DCACHE['medals'][$medalid]['name'];
			$medallog['image'] = $medallist[$medalid]['image'];
			$medallogs[] = $medallog;
		}
	}

} elseif($action == 'apply') {

	$medalid = intval($medalid);
	$formulamessage = '';
	$medal = $db->fetch_first("SELECT * FROM {$tablepre}medals WHERE medalid='$medalid'");
	if(!$medal['type']) {
		showmessage('medal_required_invalid');
	}
	formulaperm($medal['permission'], 1) && $medal['permission'] = formulaperm($medal['permission'], 2);

	if(submitcheck('medalsubmit')) {
		$medaldetail = $db->fetch_first("SELECT medalid FROM {$tablepre}medallog WHERE uid='$discuz_uid' AND medalid='$medalid' AND type NOT IN('3', '4')");
		if($medaldetail['medalid']) {
			showmessage('medal_apply_existence', 'medal.php');
		} else {
			$expiration = empty($medal['expiration'])? 0 : $timestamp + $medal['expiration'] * 86400;
			$db->query("INSERT INTO {$tablepre}medallog (uid, medalid, type, dateline, expiration, status) VALUES ('$discuz_uid', '$medalid', '2', '$timestamp', '$expiration', '0')");
		}
		showmessage('medal_apply_succeed', 'medal.php');
	}

} elseif($action == 'log') {

	$medallognum = $db->result_first("SELECT COUNT(*) FROM {$tablepre}medallog WHERE uid='$discuz_uid' AND type IN ('0', '1')");
	$multipage = multi($medallognum, $tpp, $page, "medal.php?action=log");

	$query = $db->query("SELECT me.*, m.image FROM {$tablepre}medallog me
			LEFT JOIN {$tablepre}medals m USING (medalid)
			WHERE me.uid='$discuz_uid' AND me.type IN ('0', '1') ORDER BY me.dateline DESC LIMIT $start_limit,$tpp");
	while($medallog = $db->fetch_array($query)) {
		$medallog['name'] = $_DCACHE['medals'][$medallog['medalid']]['name'];
		$medallog['dateline'] = gmdate("$dateformat $timeformat", $medallog['dateline'] + $timeoffset * 3600);
		$medallog['expiration'] = !empty($medallog['expiration']) ? gmdate("$dateformat $timeformat", $medallog['expiration'] + $timeoffset * 3600) : '';
		$medallogs[] = $medallog;
	}

} else {
	showmessage('undefined_action', NULL, 'HALTED');
}

include template('medal');
?>