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
## 2.Float:浮点型
说明：小数，负小数和正小数和0.0

```
<?php
//float类型
$num1 = 0.0;  //小数
var_dump($num1);
$num2 = -1.0;  //小数
var_dump($num2);
?>
```
## 3.String：字符串型
* 说明：只要是任何类型的数据加上引号（单引号和双引号）,就是字符串型。
* 引号：分单引号和双引号
* 单引号和双引号的区别：
双引号可以解析变量，单引号不能解析变量

```
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
```

## 4.Boolean：布尔型
说明：布尔型只有两个值，真(true)和假(false)，布尔值是和一些其他方式配合使用。如：流程语句

```
<?php
//boolean：布尔型
$a = null;   //真$b = false;  //假
var_dump($a,$b);$a = '';  //空字符串
//var_dump($a);
//布尔值是和一些其他方式配合使用。如：流程语句
if($a){
	echo '为真';
}else{
	echo '为假';
}
echo '<br>';
$b = 10;
if($b == 10) {
	echo "真";
}else{
	echo "假";
}
?>
```

## 5.Null：空类型
说明：没有任何值的一个给变量定义赋值方式。

```
<?php
//其他类型
//null：为了占用变量名。
$a = null;   //空  
var_dump($a);
if(isset($a)){  //不存在
	echo "存在";
}
```

## 6.Resource：资源
* 说明：资源说的不是一种具体的值，而是一个概念的多种数据的统称；
* 多种数据：上传文件、加载图片、路径、数据库等这些都称为“外部资源”，不是php本身就可以定义的数据。

# 四、运算符


