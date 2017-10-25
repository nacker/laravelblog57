<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:51
 */

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