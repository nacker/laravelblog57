<?php
//string类型
$str1 = '你好';
var_dump($str1);
$str2 = "您好";
var_dump($str2);
$str3 = '1';  //失去了本身类型
$str4 = "0.0"; //失去了本身类型
var_dump($str3,$str4);
$str5 = 'php';
$str6 = "我在{$str5}";  //解析了变量
$str7 = '我在{$str5}';  //没有解析变量
var_dump($str7);
//大量的HTML代码
$str8 = '<ul><li>1</li><li>2</li><li>3</li></ul>';
echo $str8;
//heredoc
$str9 = <<<DDD
	<ul>
		<li>$str5</li>
		<li>2</li>
		<li>3</li>
	</ul>
DDD;
echo $str9;
$str10 = <<<'FFF'
	<ul>
		<li>$str5</li>
		<li>2</li>
		<li>3</li>
	</ul>
FFF;
echo $str10;


?>