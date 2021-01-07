<?php
/*
	[Ucenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: config.php 6798 2008-03-27 01:04:03Z liguode $
*/

$_SC = array();

//Ucenter Home ���ò���
$_SC['dbhost']  		= getenv('FLY17_MYSQL_HOST'); //��������ַ
$_SC['dbuser']  		= getenv('FLY17_MYSQL_USER'); //�û�
$_SC['dbpw'] 	 		= getenv('FLY17_MYSQL_PASS'); //����
$_SC['dbname']  		= '17fly'; //���ݿ�

$_SC['dbcharset'] 		= 'utf8'; //�ַ���
$_SC['pconnect'] 		= 0; //�Ƿ��������
$_SC['tablepre'] 		= 'uchome_'; //����ǰ׺
$_SC['charset'] 		= 'utf-8'; //ҳ���ַ���
$_SC['gzipcompress'] 	= 0; //����gzip
$_SC['founder'] 		= '1,4'; //��ʼ�� UID, ����֧�ֶ����ʼ�ˣ�֮��ʹ�� ��,�� �ָ�
$_SC['template']		= 'default'; //ѡ��ģ��Ŀ¼
$_SC['cookiepre'] 		= 'uchome_'; //COOKIEǰ׺
$_SC['cookiedomain'] 	= ''; //COOKIE������
$_SC['cookiepath'] 		= '/'; //COOKIE����·��
$_SC['attachdir']		= './attachment/'; //�������ر���λ��(������·��, ���� 777, ����Ϊ web �ɷ��ʵ���Ŀ¼, ���Ŀ¼����� "./" ��ͷ, ĩβ�� "/")
$_SC['attachurl']		= 'attachment/'; //��������URL��ַ(��Ϊ��ǰ URL �µ���Ե�ַ�� http:// ��ͷ�ľ��Ե�ַ, ĩβ�� "/")
$_SC['tplrefresh']		= 0; //�ж�ģ���Ƿ���µ�Ч�ʵȼ�����ֵԽ��Ч��Խ��; ����Ϊ0�����ò��ж�

//UCenter ���ò���
define('UC_CONNECT', 'mysql'); // ���� UCenter �ķ�ʽ: mysql/NULL, Ĭ��Ϊ��ʱΪ fscoketopen(), mysql ��ֱ�����ӵ����ݿ�, Ϊ��Ч��, ������� mysql
//���ݿ���� (mysql ����ʱ, ����û������ UC_DBLINK ʱ, ��Ҫ�������±���)
define('UC_DBHOST', getenv('FLY17_MYSQL_HOST')); // UCenter ���ݿ�����
define('UC_DBUSER', getenv('FLY17_MYSQL_USER')); // UCenter ���ݿ��û���
define('UC_DBPW', getenv('FLY17_MYSQL_PASS')); // UCenter ���ݿ�����
define('UC_DBNAME', '17fly'); // UCenter ���ݿ�����

define('UC_DBCHARSET', 'utf8'); // UCenter ���ݿ��ַ���
define('UC_DBTABLEPRE', '`17fly`.uc_'); // UCenter ���ݿ��ǰ׺
define('UC_DBCONNECT', '0'); // UCenter ���ݿ�־����� 0=�ر�, 1=��
//ͨ�����
define('UC_KEY', 'teke45w5Zac003BdDc92K568U0Yfl1oeYbw648q13cYeU9bcsci3q8b5sfI0b7C5'); // �� UCenter ��ͨ����Կ, Ҫ�� UCenter ����һ��
define('UC_API', 'https://17fly.zixia.net/center'); // UCenter �� URL ��ַ, �ڵ���ͷ��ʱ�����˳���
define('UC_CHARSET', 'utf-8'); // UCenter ���ַ���
define('UC_IP', '211.99.222.62'); // UCenter �� IP, �� UC_CONNECT Ϊ�� mysql ��ʽʱ, ���ҵ�ǰӦ�÷�������������������ʱ, �����ô�ֵ
define('UC_APPID', '1'); // ��ǰӦ�õ� ID