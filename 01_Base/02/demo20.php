<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:53
 */

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