<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:54
 */

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