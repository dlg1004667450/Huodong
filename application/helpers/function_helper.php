<?php


function mdate($time = NULL) {
	$text = '';
	$time = $time === NULL || $time > time() ? time() : intval($time);
	$t = time() - $time; //时间差 （秒）
	if ($t == 0)
		$text = '刚刚';
	elseif ($t < 60)
	$text = $t . '秒前'; // 一分钟内
	elseif ($t < 60 * 60)
	$text = floor($t / 60) . '分钟前'; //一小时内
	elseif ($t < 60 * 60 * 24)
	$text = floor($t / (60 * 60)) . '小时前'; // 一天内
	elseif ($t < 60 * 60 * 24 * 3)
	$text = floor($time/(60*60*24)) ==1 ?'昨天 ' . date('H:i', $time) : '前天 ' . date('H:i', $time) ; //昨天和前天
	elseif ($t < 60 * 60 * 24 * 30)
	$text = date('m月d日 H:i', $time); //一个月内
	elseif ($t < 60 * 60 * 24 * 365)
	$text = date('m月d日', $time); //一年内
	else
		$text = date('Y年m月d日', $time); //一年以前
	return $text;
}