<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: gift.inc.php 16999 2008-12-02 02:16:40Z liuqiang $
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
	dheader("Location: task.php?action=draw&id={$GLOBALS[task][taskid]}");
}

function task_csc($task = array()) {
	return true;
}

function task_sufprocess() {
}

?>