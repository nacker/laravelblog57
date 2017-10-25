<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:54
 */

$data=array('zhangsan','first'=>'xiaoqiang','lisi','second'=>'wangcai','wangwu');

foreach ($data as $key => $value){
    echo $key.':'.$value.'<br>';
}

foreach ($data as $value){
    echo $value.'<br>';
}