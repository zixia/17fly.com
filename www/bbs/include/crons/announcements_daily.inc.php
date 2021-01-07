<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: announcements_daily.inc.php 16688 2008-11-14 06:41:07Z cnteacher $
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$db->query("UPDATE {$tablepre}tasks SET available='1' WHERE available='2' AND endtime>'0' AND endtime<='$timestamp'", 'UNBUFFERED');
$db->query("UPDATE {$tablepre}tasks SET available='2' WHERE available='1' AND starttime>='$timestamp'", 'UNBUFFERED');

$db->query("DELETE FROM {$tablepre}announcements WHERE endtime<'$timestamp' AND endtime<>'0'");

if($db->affected_rows()) {
	require_once DISCUZ_ROOT.'./include/cache.func.php';
	updatecache('announcements');
	updatecache('announcements_forum');
	updatecache('pmlist');
}

?>