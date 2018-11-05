# 一、	PHP的基本语法

## 1.PHP的标示符
语法：<?php code; ?>

```
<?php //php的标示符
	echo "hello world";  //输出字符串“hello world”
?>
```

## 2.PHP和HTML的混编
``` 
<?php
//定义下面的数组
$arr = array("nav"=>"首页");
$a = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>网页标题</title>
</head>
<body>
	<ul>
		<li><?php echo "PHP和HTML";?></li>
		<li><?php echo $arr['nav'];?></li>
		<li>PHP和HTML1</li>
		<?php if($a == 1):?>
			<li>PHP和HTML</li>
		<?php endif;?>
		<li>上面不知道现不现实</li>
		<li>PHP和HTML</li>
	</ul>
</body>
</html>
``` 

# 二、	PHP变量

## 1.定义变量并赋值
``` 
<?php
//定义变量
//$a;
//定义变量并赋值
$a = 1;
$A = 2;
echo $a,$A;
echo "<br>";
$name = '张三';
//打印输出$name的值
echo $name;
//打印输出$name和$a的数据（类型+值+长度）
var_dump($name,$a);
$age = 18;
$sex = '男';
$get_user_name = 'itbullwyt';
//命名的规则
//$@s = 1;   //错误的
$a1 = 2;
//$1a = 3;
$_a = 4;

```

## 2.定义变量的规则
```
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
```

# 三、变量的数据类型
* 标量类型：int（整数型）、float（浮点型）、boolean（布尔型）、string（字符串型）
* 复合类型：array（数组）、object（对象）
* 特殊类型：null（空）、resource（资源）

## 1.Int：整数型
是正整数和负整数和0，在定义变量赋值的时候直接写数字就可以了。
```
<?php
//int类型--弱类型语言
$num1 = 1;  //整型
$num2 = 100;
$num3 = 0;
var_dump($num3);
$num4 = -1;
$num5 = -0;
var_dump($num5);
$age = 18;   //整型
```

