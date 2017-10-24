<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/24
 * Time: 21:07
 */

    $str1 = 'xiaoqiang';
    $str2 = '很帅';
    $str1 .= $str2;
    echo $str1;


    $a = 5; // 整型
    $b = "5"; // 字符串

    if ($a == $b){
        echo '等于';
    }

    if ($a === $b){
        echo '全等于';
    }

    @mysqli_connect('localhost','root','root');
