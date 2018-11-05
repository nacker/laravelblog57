# 1、PHP语法
## 1.1 基本的PHP语法
* PHP 脚本可以放在文档中的任何位置。
* PHP 脚本以 <?php 开始，以 ?> 结束：
* PHP 文件的默认文件扩展名是 ".php"。
* PHP 文件通常包含 HTML 标签和一些 PHP 脚本代码。

```
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
```
## 1.2 PHP中的注释
```
<!DOCTYPE html>
<html>
<body>

<?php
// 这是 PHP 单行注释

/*
这是
PHP 多行
注释
*/
?>

</body>
</html> 
```

# 2、PHP变量

## 2.1 PHP变量
* 变量以 $ 符号开始，后面跟着变量的名称
* 变量名必须以字母或者下划线字符开始
* 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
* 变量名不能包含空格
* 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

```
<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>
```

## 2.2 创建（声明）PHP 变量
* PHP 没有声明变量的命令。
* 变量在您第一次赋值给它的时候被创建：

```
<?php
$txt="Hello world!";
$x=5;
$y=10.5;
?>
```
## 2.3 PHP是一门弱类型语言
* 在上面的实例中，我们注意到，不必向 PHP 声明该变量的数据类型。
* PHP 会根据变量的值，自动把变量转换为正确的数据类型。
* 在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。

## 2.4 PHP 变量作用域
变量的作用域是脚本中变量可被引用/使用的部分。

PHP 有四种不同的变量作用域：

* local
* global
* static
* parameter

## 2.5 局部和全局作用域
在所有函数外部定义的变量，拥有全局作用域。除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用 global 关键字。

在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问： 

```
 <?php
$x=5; // 全局变量

function myTest()
{
    $y=10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
} 

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
?> 
```

## 2.6 PHP global 关键字
global 关键字用于函数内访问全局变量。

在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：

```
<?php
$x=5;
$y=10;
 
function myTest()
{
    global $x,$y;
    $y=$x+$y;
}
 
myTest();
echo $y; // 输出 15
?>

```

## 2.7 Static 作用域
当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。

要做到这一点，请在您第一次声明变量时使用 static 关键字：

```
<?php
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
}
 
myTest();
myTest();
myTest();
?>
```

## 2.8 参数作用域
参数是通过调用代码将值传递给函数的局部变量。

参数是在参数列表中声明的，作为函数声明的一部分：

```
<?php
function myTest($x)
{
    echo $x;
}
myTest(5);
?>
```

# 3、echo 和 print 语句
echo 和 print 区别:

    echo - 可以输出一个或多个字符串
    print - 只允许输出一个字符串，返回值总为 1

提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。

# 4、PHP 5 数据类型
* String（字符串）, 
* Integer（整型）, 
* Float（浮点型）, 
* Boolean（布尔型）, 
* Array（数组）, 
* Object（对象）,
* NULL（空值）。

## 4.1 字符串

```
<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
?>
```
## 4.2 PHP 整型

* 整数必须至少有一个数字 (0-9)
* 整数不能包含逗号或空格
* 整数是没有小数点的
* 整数可以是正数或负数
* 整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）

```
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>
```
## 4.3 浮点型
浮点数是带小数部分的数字，或是指数形式。

```
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>
```

## 4.4 布尔型 
布尔型可以是 TRUE 或 FALSE。

```
$x=true;
$y=false;
```
## 4.5 数组 
数组可以在一个变量中存储多个值。

```
<?php 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>
```

## 4.6 对象
对象数据类型也可以用于存储数据。

在 PHP 中，对象必须声明。

首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。

然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：

```
<?php
class Car
{
  var $color;
  function __construct($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}

// 实例一个对象
$herbie = new Car("white");

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($herbie);

?>
```

## 4.7 PHP NULL 值
NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。

NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。

可以通过设置变量值为 NULL 来清空变量数据：

```
<?php
$x="Hello world!";
$x=null;
var_dump($x);
?>
```

# 5、PHP常量
## 5.1 PHP 常量
* 常量是一个简单值的标识符。该值在脚本中不能改变。

* 一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。

* 注意： 常量在整个脚本中都可以使用。

## 5.2 设置 PHP 常量
设置常量，使用 define() 函数，函数语法如下：

```
bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
```
该函数有三个参数: 

* name：必选参数，常量名称，即标志符。
* value：必选参数，常量的值。
* case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。

以下实例我们创建一个 区分大小写的常量, 常量值为 "欢迎访问 Runoob.com"：

```
<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo greeting;   // 输出 "greeting"
?>
```

以下实例我们创建一个 不区分大小写的常量, 常量值为 "欢迎访问 Runoob.com"：

```
<?php
// 不区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com", true);
echo greeting;  // 输出 "欢迎访问 Runoob.com"
?>
```

## 5.3 常量是全局的
常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。

以下实例演示了在函数内使用常量，即便常量定义在函数外也可以正常使用常量。

```
<?php
define("GREETING", "欢迎访问 Runoob.com");
 
function myTest() {
    echo GREETING;
}
 
myTest();    // 输出 "欢迎访问 Runoob.com"
?>
```

# 6、运算符
## 6.1 算术运算符
```
<?php 
$x=10; 
$y=6;
echo ($x + $y); // 输出16
echo '<br>';  // 换行
 
echo ($x - $y); // 输出4
echo '<br>';  // 换行
 
echo ($x * $y); // 输出60
echo '<br>';  // 换行
 
echo ($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行
 
echo ($x % $y); // 输出4
echo '<br>';  // 换行
 
echo -$x;
?>
```
## 6.2赋值运算符
以下实例演示了使用不同赋值运算符得到的不同结果：

```
<?php 
$x=10; 
echo $x; // 输出10
 
$y=20; 
$y += 100;
echo $y; // 输出120
 
$z=50;
$z -= 25;
echo $z; // 输出25
 
$i=5;
$i *= 6;
echo $i; // 输出30
 
$j=10;
$j /= 5;
echo $j; // 输出2
 
$k=15;
$k %= 4;
echo $k; // 输出3
?>
```

以下实例演示了使用不同字符串运算符得到的相同结果：

```
<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world! 
 
$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world! 
?>
```

## 6.3 递增/递减运算符
```
<?php
$x=10; 
echo ++$x; // 输出11
 
$y=10; 
echo $y++; // 输出10
 
$z=5;
echo --$z; // 输出4
 
$i=5;
echo $i--; // 输出5
?>
```
## 6.4 比较运算符
```
<?php
$x=100; 
$y="100";
 
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
 
$a=50;
$b=90;
 
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
```

## 6.5 逻辑运算符
运算符 | 名称 | 描述 |
---|---|---|
x and y | 与 | 如果 x 和 y 都为 true |
x or y | 或 |	如果 x 和 y 至少有一个为 true，则返回 true |
x xor y | 异或 | 如果 x 和 y 有且仅有一个为 true，则返回 true | 
x && y | 与 | 如果 x 和 y 都为 true，则返回 true | 
x \|\| y | 或 | 如果 x 和 y 至少有一个为 true，则返回 true | 
! x | 非 | 如果 x 不为 true，则返回 true

## 6.6 数组运算符
```
<?php
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>
```

## 6.7 三元运算符
```
<?php
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;
 
// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;
?>
```

## 6.8 组合比较符(PHP7+)
```
<?php
// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
 
// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
?>
```
## 6.9 运算符优先级
```
<?php
// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or
 
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true 
?>
```

# 7、If...Else 语句
## 7.1 if 语句
```
if (条件)
{
    条件成立时要执行的代码;
}
```
## 7.2 if...else 语句
```
if (条件)
{
	条件成立时执行的代码;
}
else
{
	条件不成立时执行的代码;
} 
```
## 7.3 if...elseif....else 语句
```
if (条件)
{
    if 条件成立时执行的代码;
}
elseif (条件)
{
    elseif 条件成立时执行的代码;
}
else
{
    条件不成立时执行的代码;
}
```