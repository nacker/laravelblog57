<?php
$a = 1;
if(isset($a)){   //判断变量是否存在
	echo "存在";
	unset($a);   //销毁
}else{
	echo "不存在";
}

echo $a;

?>