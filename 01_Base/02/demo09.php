<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:43
 */

    function display(&$n){
        //在形参之前加上一个“&”，表示取地址符，那么
        //变量n接收到的是实参的地址
         $n=100;
    }

    $i=10;
    display($i);
    echo $i;