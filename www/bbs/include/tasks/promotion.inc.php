<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: promotion.inc.php 17065 2008-12-05 01:30:57Z liuqiang $
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function task_install() {
	global $db, $tablepre;
}

function task_uninstall() {
	global $db, $tablepre;
}

function task_upgrade() {
	global $db, $tablepre;
}

function task_condition() {
}

function task_preprocess() {
	global $db, $tablepre, $discuz_uid, $timestamp;

	$promotions = $db->result_first("SELECT COUNT(*) FROM {$tablepre}promotions WHERE uid='$discuz_uid'");
	$db->query("REPLACE INTO {$tablepre}spacecaches (uid, variable, value, expiration) VALUES ('$discuz_uid', 'promotion', '$promotions', '$timestamp')");
}

function task_csc($task = array()) {
	global $db, $tablepre, $discuz_uid;

	$num = $db->result_first("SELECT COUNT(*) FROM {$tablepre}promotions WHERE uid='$discuz_uid'") - $db->result_first("SELECT value FROM {$tablepre}spacecaches WHERE uid='$discuz_uid' AND variable='promotion'");
	$numlimit = $db->result_first("SELECT value FROM {$tablepre}taskvars WHERE taskid='$task[taskid]' AND variable='num'");
	if($num && $num >= $numlimit) {
		return TRUE;
	} else {
		return array('csc' => $num > 0 && $numlimit ? sprintf("%01.2f", $num / $numlimit * 100) : 0, 'remaintime' => 0);
	}
}

function task_sufprocess() {
	global $db, $tablepre, $discuz_uid;

	$db->query("DELETE FROM {$tablepre}spacecaches WHERE uid='$discuz_uid' AND variable='promotion'");
}

?>