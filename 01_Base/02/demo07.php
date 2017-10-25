<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:42
 */

    function display($first,$second){
        //first和second接收的是i和j 的值
        $num=$first+$second;
        return $num;
    }

    $i=100;
    $j=200;
    echo display($i,$j);