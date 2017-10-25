<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:50
 */

$str='Hello,My Name is zhangsan!';
echo '原字符串：'.$str.'<br>';
echo '长度：'.strlen($str).'<br>';
echo '截取：'.substr($str,6,7).'<br>';
echo '小写：'.strtolower($str).'<br>';
echo '大写：'.strtoupper($str).'<br>';
echo '倒转：'.strrev($str).'<br>';
echo 'a最先出现的位置：'.strpos($str,'a').'<br>';
echo 'a最后出现的位置：'.strrpos($str,'a').'<br>';
$ext="1.jpg.exe";
echo strchr($ext,'.').'<br>';
echo strrchr($ext,'.').'<br>';
$str2='       aaaa           ';
echo strlen(trim($str2));