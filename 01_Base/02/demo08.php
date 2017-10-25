<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:42
 */

    function display($n){
        //$n接收的是$i的值
        //$n和$i各自存放的是10
        $n=100;	//将$n所在内存空间的数据改为100，但不影响i的值
    }
    //形参值的改变不会影响实参
    $i=10;
    display($i);
    echo $i;