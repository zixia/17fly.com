<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_doing.php 6565 2008-03-14 09:26:09Z liguode $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

//��ҳ
$perpage = 50;
$start = empty($_GET['start'])?0:intval($_GET['start']);
//��鿪ʼ��
ckstart($start, $perpage);
	
//��ҳ
$multi = smulti($start, $perpage, $count, $theurl);

include_once template("space_exchange_link");

?>
