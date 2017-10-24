# PHP 基础

1.变量

  变量就是可变的量，是临时存储数据的容器

2.变量命名规范

    PHP中一个美元符号后面跟上一个变量名称，即表示一个变量
    
	例：$a、$name、$age
	
    变量的名称是对大小写敏感的
    
	变量$a和变量$A是两个变量
一个有效的变量名由字母或者下划线开头，后面跟上任意数量的字母，数字，或者下划线
	
	正确：$abc、$_abc、$_1、$a1、
	
	错误：$1、$1abc、$a#$%^&*( 

3.数据类型
    
boolean   | 布尔型 | true、false
---|---
integer  | 整型 | 10、101、8、9
float | 浮点型 | 10.01、100.8 
string | 字符串型 | “zhangsan”、’lisi’

双引号可以解析php变量

单引号不能对变量进行解析

所以，单引号运算速度要快于双引号

Php中的布尔型一般情况不直接进行输出，true输出时为1，false输出时为空


```
$name = "zhangsan";
$age  = 30;
$height = 1.78;
$marry = false;

echo '<ul>';
echo '<li>姓名: '.$name.'</li>';
echo '<li>年龄: '.$age.'</li>';
echo '<li>生高: '.$height.'</li>';
echo '<li>婚否: '.$marry.'</li>';
echo '</ul>';
```

- array		：数组类型
- object 	：对象类型

以上两种又称为：复合数据类型


```
    // 数组类型
    $person = array('name'=>'list', 'age' => 20, 'height' => 1.8);
    echo $person['name'].'<br>';
    echo $person['height'].'<br>';


    class Persion {
        public $name;
        public $age;
    }

    // 对象类型
    $p1 = new Persion();
    $p1->name = 'wangwu';
    $p1->age = 18;
    echo $p1->name;
    echo $p1->age;
```


resource		：资源数据类型
NULL		：空

以上两种又称为：特殊数据类型


4.常量

- 在PHP之中，不能改变的量称之为常量
- 常量只能用 define() 函数定义
- 常量默认为大小写敏感
- 常量a和常量A是两个常量
- 合法的常量名以字母或下划线开始，后面跟着任何字母，数字或下划线 
- 常量前面没有美元符号（$）
- 常量一旦定义就不能被重新定义或者取消定义
- 常量的值是不可更改的
- 常量的值只能是标量

	
```
    // 定义一个常量，叫“N”，它的值是1.2
    define('N',1.2);

    //可以对N再次进行定义，但它的值永远不变
    //define('N',1.5);
    $person1 = 10000;
    $person2 = 5000;
    $person3 = 2000;
    echo $person1 * N;
    echo '<br>';
    echo $person2 * N;
    echo '<br>';
    echo $person3 * N;
```


5.运算符
	
- 算术运算符

```
+、-、*、/、%
```

- 赋值运算符

```
=、
+=、-=、*=、/=、%=、.=
将符号左边的与右边的进行运算，再赋值给左边的

```


```
$str1 = 'xiaoqiang';
$str2 = '很帅';
$str1 .= $str2;
echo $str1;
```


- 比较运算符

```
>、<、>=、<=、!=、= = =、= =、!= =
值相等类型也相同是全等于
值相等但类型不同是等于

```

- 错误控制运算符 
    
```
@
@mysqli_connect('localhost','root','root');
```

- 自加自减运算符

```
++、--
i++	：先运算再自加
++i	：先再加再运算

```

```
    $i = 10;
    //$k=++$i;		// 先自加，再赋值给k
    $k = $i++;      // 先赋值k,再自加
    echo $k;
    echo '<br>';
    echo $i;
```

- 字符串运算符
    
```
. 
.=

```

- 三目运算符

```
表达式?值1:值2

如果表达式成立，返回值1，不成立，返回值2

```


```
$i = 10;
$p = 20;
$s = $i > $p ? '大于' : '小于';
echo $s;
```











