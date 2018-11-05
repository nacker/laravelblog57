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
## 3.1 PHP echo 和 print 语句
echo 和 print 区别:

    echo - 可以输出一个或多个字符串
    print - 只允许输出一个字符串，返回值总为 1

提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。