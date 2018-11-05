<?php
//算术运算符：+ - * / %
$a = 1;
$b = 2;
$c = $a+$b;
$d = 2-1;
$f = 2-'a';   //字符串会自动转换成0
echo $c,$d,$f;
echo '<br>';
//%：取余数  7 % 5 = 2;
//最基本的余数是1和0.是可以余数别的数字的就是看运算数字怎么写。
$a  = 7;
$b = 5;
$c = $a%$b;
echo $c;
//案例：隔行变色
//制作余数
echo '<table width="500" height="500" border="1">';
for($i = 1; $i<=10; $i++){  //1234567910
	if($i % 2 == 0){  //强制性
		echo "<tr bgcolor='red'><td></td></tr>";
	}else{
		echo "<tr bgcolor='green'><td></td></tr>";
	}
}
echo '<table>';


?>
