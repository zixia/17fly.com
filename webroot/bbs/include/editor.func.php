<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: editor.func.php 16688 2008-11-14 06:41:07Z cnteacher $
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function absoluteurl($url) {
	global $boardurl;
	if($url{0} == '/') {
		return 'http://'.$_SERVER['HTTP_HOST'].$url;
	} else {
		return $boardurl.$url;
	}
}

function atag($aoptions, $text) {
	$href = getoptionvalue('href', $aoptions);

	if(substr($href, 0, 7) == 'mailto:') {
		$tag = 'email';
		$href = substr($href, 7);
	} else {
		$tag = 'url';
		if(!preg_match("/^[a-z0-9]+:/i", $href)) {
			$href = absoluteurl($href);
		}
	}

	return "[$tag=$href]".trim(recursion('a', $text, 'atag'))."[/$tag]";
}

function divtag($divoptions, $text) {
	$prepend = $append = '';

	parsestyle($divoptions, $prepend, $append);
	$align = getoptionvalue('align', $divoptions);

	switch($align) {
		case 'left':
		case 'center':
		case 'right':
			break;
		default:
			$align = '';
	}

	if($align) {
		$prepend .= "[align=$align]";
		$append .= "[/align]";
	}
	$append .= "\n";

	return $prepend.recursion('div', $text, 'divtag').$append;
}

function fetchoptionvalue($option, $text) {
	if(($position = strpos($text, $option)) !== false) {
		$delimiter = $position + strlen($option);
		if($text{$delimiter} == '"') {
			$delimchar = '"';
		} elseif($text{$delimiter} == '\'') {
			$delimchar = '\'';
		} else {
			$delimchar = ' ';
		}
		$delimloc = strpos($text, $delimchar, $delimiter + 1);
		if($delimloc === false) {
			$delimloc = strlen($text);
		} elseif($delimchar == '"' OR $delimchar == '\'') {
			$delimiter++;
		}
		return trim(substr($text, $delimiter, $delimloc - $delimiter));
	} else {
		return '';
	}
}

function fonttag($fontoptions, $text) {
	$tags = array('font' => 'face=', 'size' => 'size=', 'color' => 'color=');
	$prependtags = $appendtags = '';

	foreach($tags AS $bbcode => $locate) {
		$optionvalue = fetchoptionvalue($locate, $fontoptions);
		if($optionvalue) {
			$prependtags .= "[$bbcode=$optionvalue]";
			$appendtags = "[/$bbcode]$appendtags";
		}
	}

	parsestyle($fontoptions, $prependtags, $appendtags);

	return $prependtags.recursion('font', $text, 'fonttag').$appendtags;
}

function getoptionvalue($option, $text) {
	preg_match("/$option(\s+?)?\=(\s+?)?[\"']?(.+?)([\"']|$|>)/is", $text, $matches);
	return trim($matches[3]);
}

function html2bbcode($text) {

	$text = strip_tags($text, '<table><tr><td><b><strong><i><em><u><a><div><span><p><strike><blockquote><ol><ul><li><font><img><br><br/><h1><h2><h3><h4><h5><h6><script>');

	if(ismozilla()) {
		$text = preg_replace("/(?<!<br>|<br \/>|\r)(\r\n|\n|\r)/", ' ', $text);
	}

	$pregfind = array(
		"/<script.*>.*<\/script>/siU",
		'/on(mousewheel|mouseover|click|load|onload|submit|focus|blur)="[^"]*"/i',
		"/(\r\n|\n|\r)/",
		"/<table([^>]*(width|background|background-color|bgcolor)[^>]*)>/siUe",
		"/<table.*>/siU",
		"/<tr.*>/siU",
		"/<td>/i",
		"/<td(.+)>/siUe",
		"/<\/td>/i",
		"/<\/tr>/i",
		"/<\/table>/i",
		'/<h([0-9]+)[^>]*>(.*)<\/h\\1>/siU',
		"/<img[^>]+smilieid=\"(\d+)\".*>/esiU",
		"/<img([^>]*src[^>]*)>/eiU",
		"/<a\s+?name=.+?\".\">(.+?)<\/a>/is",
		"/<br.*>/siU",
		"/<span\s+?style=\"float:\s+(left|right);\">(.+?)<\/span>/is",
	);
	$pregreplace = array(
		'',
		'',
		'',
		"tabletag('\\1')",
		'[table]',
		'[tr]',
		'[td]',
		"tdtag('\\1')",
		'[/td]',
		'[/tr]',
		'[/table]',
		"[size=\\1]\\2[/size]\n\n",
		"smileycode('\\1')",
		"imgtag('\\1')",
		'\1',
		"\n",
		"[float=\\1]\\2[/float]",
	);
	$text = preg_replace($pregfind, $pregreplace, $text);

	$text = recursion('b', $text, 'simpletag', 'b');
	$text = recursion('strong', $text, 'simpletag', 'b');
	$text = recursion('i', $text, 'simpletag', 'i');
	$text = recursion('em', $text, 'simpletag', 'i');
	$text = recursion('u', $text, 'simpletag', 'u');
	$text = recursion('a', $text, 'atag');
	$text = recursion('font', $text, 'fonttag');
	$text = recursion('blockquote', $text, 'simpletag', 'indent');
	$text = recursion('ol', $text, 'listtag');
	$text = recursion('ul', $text, 'listtag');
	$text = recursion('div', $text, 'divtag');
	$text = recursion('span', $text, 'spantag');
	$text = recursion('p', $text, 'ptag');

	$pregfind = array("/(?<!\r|\n|^)\[(\/list|list|\*)\]/", "/<li>(.*)((?=<li>)|<\/li>)/iU", "/<p.*>/iU", "/<p><\/p>/i", "/(<a>|<\/a>|<\/li>)/is", "/<\/?(A|LI|FONT|DIV|SPAN)>/siU", "/\[url[^\]]*\]\[\/url\]/i", "/\[url=javascript:[^\]]*\](.+?)\[\/url\]/is");
	$pregreplace = array("\n[\\1]", "\\1\n", "\n", '', '', '', '', "\\1");
	$text = preg_replace($pregfind, $pregreplace, $text);

	$strfind = array('&nbsp;', '&lt;', '&gt;', '&amp;');
	$strreplace = array(' ', '<', '>', '&');
	$text = str_replace($strfind, $strreplace, $text);

	return trim($text);
}

function imgtag($attributes) {
	$value = array('src' => '', 'width' => '', 'height' => '');
	preg_match_all("/(src|width|height)=([\"|\']?)([^\"']+)(\\2)/is", stripslashes($attributes), $matches);
	if(is_array($matches[1])) {
		foreach($matches[1] AS $key => $attribute) {
			$value[strtolower($attribute)] = $matches[3][$key];
		}
	}
	@extract($value);
	if(!preg_match("/^http:\/\//i", $src)) {
		$src = absoluteurl($src);
	}
	return $src ? ($width && $height ? '[img='.$width.','.$height.']'.$src.'[/img]' : '[img]'.$src.'[/img]') : '';
}

function ismozilla() {
	$useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
	if(strpos($useragent, 'gecko') !== FALSE) {
		preg_match("/gecko\/(\d+)/", $useragent, $regs);
		return $regs[1];
	}
	return FALSE;
}

function litag($listoptions, $text) {
	return '[*]'.rtrim($text);
}

function listtag($listoptions, $text, $tagname) {
	require_once DISCUZ_ROOT.'./include/post.func.php';
	$text = preg_replace('/<li>((.(?!<\/li))*)(?=<\/?ol|<\/?ul|<li|\[list|\[\/list)/siU', '<li>\\1</li>', $text).(isopera() ? '</li>' : NULL);
	$text = recursion('li', $text, 'litag');

	if($tagname == 'ol') {
		$listtype = fetchoptionvalue('type=', $listoptions) ? fetchoptionvalue('type=', $listoptions) : 1;
		if(in_array($listtype, array('1', 'a', 'A'))) {
			$opentag = '[list='.$listtype.']';
		}
	} else {
		$opentag = '[list]';
	}
	return $text ? $opentag.recursion($tagname, $text, 'listtag').'[/list]' : FALSE;
}

function parsestyle($tagoptions, &$prependtags, &$appendtags) {
	$searchlist = array(
		array('tag' => 'align', 'option' => TRUE, 'regex' => 'text-align:\s*(left);?', 'match' => 1),
		array('tag' => 'align', 'option' => TRUE, 'regex' => 'text-align:\s*(center);?', 'match' => 1),
		array('tag' => 'align', 'option' => TRUE, 'regex' => 'text-align:\s*(right);?', 'match' => 1),
		array('tag' => 'color', 'option' => TRUE, 'regex' => '(?<![a-z0-9-])color:\s*([^;]+);?', 'match' => 1),
		array('tag' => 'font', 'option' => TRUE, 'regex' => 'font-family:\s*([^;]+);?', 'match' => 1),
		array('tag' => 'size', 'option' => TRUE, 'regex' => 'font-size:\s*(\d+(\.\d+)?(px|pt|in|cm|mm|pc|em|ex|%|));?', 'match' => 1),
		array('tag' => 'b', 'option' => FALSE, 'regex' => 'font-weight:\s*(bold);?'),
		array('tag' => 'i', 'option' => FALSE, 'regex' => 'font-style:\s*(italic);?'),
		array('tag' => 'u', 'option' => FALSE, 'regex' => 'text-decoration:\s*(underline);?')
	);

	$style = getoptionvalue('style', $tagoptions);
	$style = preg_replace(
		"/(?<![a-z0-9-])color:\s*rgb\((\d+),\s*(\d+),\s*(\d+)\)(;?)/ie",
		'sprintf("color: #%02X%02X%02X$4", $1, $2, $3)',
		$style
	);
	foreach($searchlist AS $searchtag) {
		if(preg_match('/'.$searchtag['regex'].'/i', $style, $match)) {
			$opnvalue = $match["$searchtag[match]"];
			$prependtags .= '['.$searchtag['tag'].($searchtag['option'] == TRUE ? '='.$opnvalue.']' : ']');
			$appendtags = '[/'.$searchtag['tag']."]$appendtags";
		}
	}
}

function ptag($poptions, $text) {
	$align = getoptionvalue('align', $poptions);

	switch($align) {
		case 'left':
		case 'center':
		case 'right':
			break;
		default:
			$align = '';
	}

	$prepend = $append = '';
	parsestyle($poptions, $prepend, $append);
	if($align) {
		$prepend .= "[align=$align]";
		$append .= "[/align]";
	}
	$append .= "\n";

	return $prepend.recursion('p', $text, 'ptag').$append;
}

function recursion($tagname, $text, $function, $extraargs = '') {
	$tagname = strtolower($tagname);
	$open_tag = "<$tagname";
	$open_tag_len = strlen($open_tag);
	$close_tag = "</$tagname>";
	$close_tag_len = strlen($close_tag);

	$beginsearchpos = 0;
	do {
		$textlower = strtolower($text);
		$tagbegin = @strpos($textlower, $open_tag, $beginsearchpos);
		if($tagbegin === FALSE) {
			break;
		}

		$strlen = strlen($text);

		$inquote = '';
		$found = FALSE;
		$tagnameend = FALSE;
		for($optionend = $tagbegin; $optionend <= $strlen; $optionend++) {
			$char = $text{$optionend};
			if(($char == '"' || $char == "'") && $inquote == '') {
				$inquote = $char;
			} elseif(($char == '"' || $char == "'") && $inquote == $char) {
				$inquote = '';
			} elseif($char == '>' && !$inquote) {
				$found = TRUE;
				break;
			} elseif(($char == '=' || $char == ' ') && !$tagnameend) {
				$tagnameend = $optionend;
			}
		}
		if(!$found) {
			break;
		}
		if(!$tagnameend) {
			$tagnameend = $optionend;
		}
		$offset = $optionend - ($tagbegin + $open_tag_len);
		$tagoptions = substr($text, $tagbegin + $open_tag_len, $offset);
		$acttagname = substr($textlower, $tagbegin + 1, $tagnameend - $tagbegin - 1);
		if($acttagname != $tagname) {
			$beginsearchpos = $optionend;
			continue;
		}

		$tagend = strpos($textlower, $close_tag, $optionend);
		if($tagend === FALSE) {
			break;
		}

		$nestedopenpos = strpos($textlower, $open_tag, $optionend);
		while($nestedopenpos !== FALSE && $tagend !== FALSE) {
			if($nestedopenpos > $tagend) {
				break;
			}
			$tagend = strpos($textlower, $close_tag, $tagend + $close_tag_len);
			$nestedopenpos = strpos($textlower, $open_tag, $nestedopenpos + $open_tag_len);
		}
		if($tagend === FALSE) {
			$beginsearchpos = $optionend;
			continue;
		}

		$localbegin = $optionend + 1;
		$localtext = $function($tagoptions, substr($text, $localbegin, $tagend - $localbegin), $tagname, $extraargs);

		$text = substr_replace($text, $localtext, $tagbegin, $tagend + $close_tag_len - $tagbegin);

		$beginsearchpos = $tagbegin + strlen($localtext);
	} while($tagbegin !== FALSE);

	return $text;
}

function simpletag($options, $text, $tagname, $parseto) {
	if(trim($text) == '') {
		return '';
	}
	$text = recursion($tagname, $text, 'simpletag', $parseto);
	return "[$parseto]{$text}[/$parseto]";
}

function smileycode($smileyid) {
	global $_DCACHE;

        if(!is_array($_DCACHE['smilies_display'])) {
        	@include DISCUZ_ROOT.'./forumdata/cache/cache_post.php';
        }
	foreach($_DCACHE['smilies_display'] AS $typeid => $smilies) {
		if(is_array($smilies)) {
			foreach($smilies AS $key => $smiley) {
				if($smileyid == $key) {
					return $smiley['code'];
				}
			}
		}
	}
}

function spantag($spanoptions, $text) {
	$prependtags = $appendtags = '';
	parsestyle($spanoptions, $prependtags, $appendtags);

	return $prependtags.recursion('span', $text, 'spantag').$appendtags;
}

function tabletag($attributes) {
	$attributes = stripslashes($attributes);
	$width = '';
	if(preg_match("/width=([\"|\']?)(\d{1,4}%?)(\\1)/is", $attributes, $matches)) {
		$width = substr($matches[2], -1) == '%' ? (substr($matches[2], 0, -1) <= 98 ? $matches[2] : '98%') : ($matches[2] <= 560 ? $matches[2] : '560');
	} elseif(preg_match("/width\s?:\s?(\d{1,4})([px|%])/is", $attributes, $matches)) {
		$width = $matches[2] == '%' ? ($matches[1] <= 98 ? $matches[1] : '98%') : ($matches[1] <= 560 ? $matches[1] : '560');
	}
	if(preg_match("/(?:background|background-color|bgcolor)[:=]\s*([\"']?)((rgb\(\d{1,3}%?,\s*\d{1,3}%?,\s*\d{1,3}%?\))|(#[0-9a-fA-F]{3,6})|([a-zA-Z]{1,20}))(\\1)/i", $attributes, $matches)) {
		$bgcolor = $matches[2];
		$width = $width ? $width : '98%';
	} else {
		$bgcolor = '';
	}
	return $bgcolor ? "[table=$width,$bgcolor]" :($width ? "[table=$width]" : '[table]');
}

function tdtag($attributes) {
	$value = array('colspan' => 1, 'rowspan' => 1, 'width' => '');
	preg_match_all("/(colspan|rowspan|width)=([\"|\']?)(\d{1,4}%?)(\\2)/is", stripslashes($attributes), $matches);
	if(is_array($matches[1])) {
		foreach($matches[1] AS $key => $attribute) {
			$value[strtolower($attribute)] = $matches[3][$key];
		}
	}
	@extract($value);
	return $width == '' ? ($colspan == 1 && $rowspan == 1 ? '[td]' : "[td=$colspan,$rowspan]") : "[td=$colspan,$rowspan,$width]";
}

?>