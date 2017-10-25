# PHP 基础

# 一、注释

```
语法：
    //：单行注释
    /*	：多行注释*/
```

```
<?php
    echo 1;
    //echo 2;
    /*echo 3;
    echo 4;*/
?>
```


# 二、流程控制

## (1) 顺序结构

    代码一行接着一行执行
    
## (2) 分支结构

    If、elseif、else、switch

    
```
例1：

$weekday=3;
if($weekday==1){
	echo '星期一：看书';
}elseif ($weekday==2){
	echo '星期二：踢球';
}else{
	echo '学习';
}
```

```
例2：

$weekday=3;
switch ($weekday) {
	case 1:
		echo '星期一';
		break;
	case 2:
		echo '星期二';
		break;
	default:
		echo '星期三';
}
```

```
例3：

$weekday=3;
//如果执行语句只有一条，可以省略大括号“{}”
if($weekday==3)
    echo 'aaa';
```

```
例4：

$weekday=3;
if($weekday==3){
    ?>
    <font color="red">hello</font>
    <?php
}
?>
```
 

## (3) 循环结构

    for、while、do….while、foreach（专门用于遍历数组元素）
    

```
例1：for循环

for($i=0;$i<10;$i++){
    echo $i.'<br>';
}
```

```
例2：while循环

while($i>0){
    echo $i.'<br>';
    $i--;
}
```

```
例3：do….while循环

do{
    echo $i.'<br>';
    $i++;
}while ($i<10);
```

 **总结：**

- 已知循环次数时，使用for循环
- 未知循环次数时，使用while循环
- while循环是先判断，再执行
- do….while循环是执行，再判断
- while循环次数是未知的
- do…..while循环最少执行一次



## (4) 关于跳出循环

- break：终止循环  （跳出整个循环）
- continue：跳出本次循环


```
for($i=0;$i<10;$i++){
    if($i==5)
        break;		//跳出整个循环
    //continue;	   //跳出本次循环
    echo $i.'<br>';
}
```

九九乘法表代码见 demo05.php

# 三、了解系统预定义常量

- __FILE__ ：取得当前文件名称
- __LINE__	：取得当前行号
- __FUNCTION__ ：取得当前函数名
- __CLASS__	：取得类名
- __METHOD__	：取得方法名
- PHP_OS	：操作
- PHP_VERSION	：版本
- PHP_INT_SIZE	：取得整型长度
- PHP_INT_MAX	：取得最大整数

# 四 、函数

1、函数的作用：
- 代码重复性使用
- 模块化编程
 
2、定义语法:

```
function 函数名称(参数1,参数2,参数N)		形参
{
		//函数内容
        Return 
} 

```
调用语法：<br>
函数(参数1,参数2，参数N)	实参<br>
形参值的改变不会影响实参

3、例题:


```
例1：
封装一个函数，可以向别人打招呼
    function display(){
        echo '<font color=red>你好</font>';
        echo '<br>'
    }
    display();
    display();
```

```
例2：
完善函数，可以向不同的人打不同的招呼
    function display($name){
        echo '<font color=red>你好'.$name.'</font>';
        echo '<br>'
    }
    display('老王');
    display('老张');
```

```
例3：
函数强调的是内聚性强，耦合性弱
    function display($name){
        return '<font color=red>你好'.$name.'</font>';
    }
    $str1 = display('老王');
    echo $str1.'<br>';
    
    $str2 = display('老张');
    echo "<script>alert('".$str2".')</script>";

```

```
例4：
多个参数
    function display($first,$second){
        //first和second接收的是i和j 的值
        $num=$first+$second;
        return $num;
    }

    $i=100;
    $j=200;
    echo display($i,$j);
```

形参定义了多少个，实参就必须传递多少个
参数传递时，会顺序赋值，也就是说，i的值传给了first参数，j的值传给了second参数

4、关于函数传参

*1）	按值传递*

```
    function display($n){
        //$n接收的是$i的值
        //$n和$i各自存放的是10
        $n=100;	//将$n所在内存空间的数据改为100，但不影响i的值
    }
    //形参值的改变不会影响实参
    $i=10;
    display($i);
    echo $i;
```

*2）	按引用传递 (地址)*

```
    function display(&$n){
        //在形参之前加上一个“&”，表示取地址符，那么
        //变量n接收到的是实参的地址
         $n=100;
    }

    $i=10;
    display($i);
    echo $i;
```

关于传地址的实际应用：

求两个数的四则运算

```
    function display($first,$second,&$n1,&$n2,&$n3,&$n4){
        $n1 = $first + $second;
        $n2 = $first - $second;
        $n3 = $first * $second;
        $n4 = $first / $second;
    }

    $i=10;
    $j=20;

    $s1=0;
    $s2=0;
    $s3=0;
    $s4=0;
    display($i,$j,$s1,$s2,$s3,$s4);
    echo $s1.' '.$s2.' '.$s3.' '.$s4;
```

*3）	默认参数*

默认参数在定义的时候可以指定一个值，那么，这个参数在使用时可以传递实参，也可以不传递实参


```
    function display($money,$i=1){
        //调用display时，可以对i传递实参，也可以不传递
        //如果传递了，则使用传递的值
        //如果没有传递，就使用1
        return $money*$i;
    }
    echo display(10000);
    echo '<br>';
    echo display(5000,1.2);
    echo '<br>';
    echo display(8000,0.8);
```

**普通形参放前面，默认参数放在后面。**


# 五 、常用的php系统函数
- 自定义函数
- 系统函数

1、date(string format [, int timestamp])

string format ：时间格式 <br>
[, int timestamp] ：时间戳，如果不指定，表示取得系统当前时间

**format**
- Y	：年		
- m	：月			
- d	：日
- H	：小时		
- i	：分钟
- s	：秒数

time() ：取得当前时间的时间戳


```
    echo date('Y年m月d日 H点i分s秒');
    echo '<br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo time();	//输出时间戳
    echo '<br>';
    echo date('Y-m-d H:i:s',1384841654);
```

2、	测试数据类型函数
- is_bool()	：是否是布尔型
- is_float()	：浮点型
- is_integer()	：整型
- is_string()	：字符串
- is_object()	：对象
- is_array()		：数组
- is_resource()	：资源
- is_null		：空
- is_scalar() 	：是否标量

以上函数返回值类型为布尔型   true：是    false：否

```
    $i=true;
    echo is_bool($i);
    echo '<br>';
    //打印参数的数据类型以及值
    var_dump($i);
    $name='zhangsan';
    var_dump($name);
    echo '<br>';
    $row=array('name'=>'zhangsan','age'=>30,'sex'=>'男');
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
```

3、	文件包含
- require()	：包含文件
- include()	：包含文件
- require_once()	：包含文件，只包含一次
- include_once()	：包含文件，只包含一次

```
例1:
在主程序中，想调用外部文件中的函数或类
include('s1.php');
include('s2.php');
//include('class/DB.class.php');
//include('class/Student.class.php');
echo jiafa(10,20);
echo '<br>';
echo jianfa(100,200);
```

```
例2:
在网页布局时
<?php include('public/header.html');?>
<div id="div2">主体内容</div>
<?php include('public/footer.html');?>
```

```
例3:
require和include的区别
<?php include('public/header1.html');?>
<div id="div2">主体内容</div>
```
    Include如果尝试包含一个不存在的文件，不会影响后面代码的执行
    require如果尝试包含一个不存在的文件，后面代码不执行

```
例4：
require和require_once、include和include_once的区别
include_once('s1.php');
include_once('s2.php');
include_once('s1.php');
include_once('s2.php');

如上题所示，s1和s2文件中定义了一些公共函数，但如果文件被多次包含，这时会出现“函数重定义“错误，为了防止这种情况，可以考虑使用
Include_once
或
Require_once
这两个函数在包含文件时，会先判断被包含文件之前是否包含过，如果没有包含过，则包含，如果包含过，则跳过。

```
    Require_once和include_once的区别和 require与include的区别是相同的！

4、	字符串常用函数
- int strlen(string str)
        取得字符串长度

- string substr(string string,int start[,int len])
        截取字符串
        string string：字符串
        int start ：从哪开始截取		从0开始排列
        [,int len] ：可选参数，表示截取多少，如果不指定，表示截取到最后

- string strtolower(string str)
        将字符串转换为小写


- string strtoupper(string str)
        将字符串转换为大写

- string strrev(string str)
        倒转字符串

- int strpos(string str, string needle)
        查找某字符在字符串中最先出现的位置

- int strrpos(string str, string needle)
        查找某字符在字符串中最后出现的位置

- string strchr(string str, string needle)
        返回某字符最先出现的及以后的字符串

- string strrchr(string str, string needle)
        返回某字符最后出现的及以后的字符串

- string trim(string str) 
        去掉左右空格

```
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
```


# 六 、数组 
1、	什么是数组

        数组就是一组数据的集合，其表现形式就是在内存中一块连续的内存地址

- 一维数组
- 多维数组

2、	定义数组

语法：
-	array() 定义

    array([‘键名’=>]’键值’,[‘键名’=>]键值,……)

-	直接赋值

    $数组[‘键名’]=值;


```
例1：
使用array定义
//定义一个一维数组
//有三个数组元素
//下标为0,1,2
$row=array('zhangsan','lisi','wangwu');
echo $row[0].$row[1].$row[2].'<br>';

//定义一个一维数组
//有两个数组元素
//下标为first,second
$arr=array('first'=>'xiaoqiang','second'=>'wangcai');
echo $arr['first'].$arr['second'].'<br>';

//定义一个一维数组
//有四个元素
//下标为：0,first,1,second
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai');
echo '<pre>';
var_dump($data);
```

```
例2：
直接赋值
//创建一个一维数组row
//有三个数组元素
//键名：first、second、2
$row['first']='zhangsan';
$row['second']='lisi';
$row[2]='xiaoqiang';
echo '<pre>';
var_dump($row);

//创建一个一维数组，没有指定它们的键名
//系统会自动按顺序指定数组元素的键名
$arr[]='zhangsan';
$arr[]='lisi';
$arr[]='wangwu';
var_dump($arr);
```

3、	取得数组长度
-	count()
        语法：int count ( mixed var)


```
例1：取得数组长度
$arr=array('zhangsan','lisi','wangwu','xiaoqiang','wangcai');
echo '共有'.count($arr).'个元素！';
```

```
例2：数组的遍历
$arr=array('zhangsan','lisi','wangwu','xiaoqiang','wangcai');
echo '共有'.count($arr).'个元素！';
echo '<br>';
$count=count($arr);	//取得数组长度
//数组元素有几个，for循环执行几次
for($i=0;$i<$count;$i++){
    echo $arr[$i].'<br>';
}
```

4、	数组当前元素

-	key()		：取得当前元素的名

	格式：	mixed key ( array array )

-	current()		：取得当前元素的值

	格式：	mixed current ( array array )

```
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');
//创建数组后，默认数组内部的指针指向数组的第一个数组元素  zhangsan
echo key($data).'<br>';
echo current($data).'<br>';
```

5、	关于数组指针的移动
-	next()	：向后移动

	mixed next ( array array )
-	prev()	：向前移动

	mixed prev ( array array )
-	end()		：移动最后一个元素

	mixed end ( array array )
-	reset()	：重新指向第一个元素

	mixed reset ( array array )


```
例1：
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');

//创建数组后，默认数组内部的指针指向数组的第一个数组元素  zhangsan
next($data);
echo key($data).'<br>';
echo current($data).'<br>';

prev($data);
($data);
echo key($data).'<br>';
echo current($data).'<br>';

end($data);
echo key($data).'<br>';
echo current($data).'<br>';

reset($data);
echo key($data).'<br>';
echo current($data).'<br>';
```

```
例2：利用指针移动遍历数组所有元素
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');
//do{
//	echo key($data).':';
//	echo current($data);
//	echo '<br>';
//}while (next($data));

$count=count($data);
for($i=0;$i<$count;$i++){
    echo key($data).':';
    echo current($data);
    echo '<br>';
    next($data);
}
```

6、	foreach

用于遍历数组

        语法：

        foreach($data as[$key =>] $value ){

        }
        

数组有多少个元素,foreach语句就循环执行多少次<br>
每次循环时foreach会遍历当前数组元素<br>
将遍历到的元素的名放在变量$key中<br>
将遍历到的元素的值放在变量$value中<br>
下次循环会自动遍历下一个数组元素<br>

```
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');

foreach ($data as $key => $value){
    echo $key.':'.$value.'<br>';
}

foreach ($data as $value){
    echo $value.'<br>';
}
```
7、	数组相关函数

-	array array_keys ( array input)
            将数组中所有元素的键名保存到另一个数组中
-	array array_values ( array input) 
            将数组中所有元素的键值保存到另一个数组中
-	mixed array_shift (array array)
            将数组第1个元素移除
-	int array_unshift (array array, mixed var [, mixed ...])
            在数组开头插入一个或多个数组元素
-	mixed array_pop (array array)
            将数组最后一个元素移除
-	int array_push (array array, mixed var [, mixed ...])  
            在数组末尾插入一个或多个数组元素
-	mixed array explode ( string separator,string string[, int limit] )
            将一个字符串按照指定规则分割成一个数组
-	string implode ( string glue, array pieces )
            将一个数组使用指定规则连接成一个字符串


```
$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');
echo '<pre>';
$values=array_values($data);	//取得所有元素的值并保存在values数组中
var_dump($values);

$keys=array_keys($data);		//取得所有元素的键名并保存在keys数组中
var_dump($keys);
$str='123|456|789';
$row=explode('|',$str);
var_dump($row);

$str2=implode(',',$row);
echo $str2;
```
