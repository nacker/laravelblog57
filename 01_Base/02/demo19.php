<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:52
 */

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