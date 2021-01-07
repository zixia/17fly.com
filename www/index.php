<?php
$domain = $_SERVER['HTTP_HOST'];
//echo $domain . "<br>";

// 如果是自定义域名，则需要到 /home
if ( !preg_match('/^17fly/i',$domain) 
	&& !preg_match('/^www\.17fly/i',$domain) )
{
	// 不能用 http:// ，否则自定义域名会失效
	header("Location: /home/",TRUE,302);
	die();
}

header("Location: /home/",TRUE,302);
die();

?>
