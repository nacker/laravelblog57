<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:51
 */

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