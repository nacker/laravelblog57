<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:52
 */

$arr=array('zhangsan','lisi','wangwu','xiaoqiang','wangcai');
echo '共有'.count($arr).'个元素！';
echo '<br>';
$count=count($arr);	//取得数组长度
//数组元素有几个，for循环执行几次
for($i=0;$i<$count;$i++){
    echo $arr[$i].'<br>';
}