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

```

```
print 'hello world'
```

```
print 'hello world'
```





