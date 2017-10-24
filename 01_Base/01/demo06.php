<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/24
 * Time: 21:12
 */

    $i = 10;
    //$k=++$i;		// 先自加，再赋值给k
    $k = $i++;      // 先赋值k,再自加
    echo $k;
    echo '<br>';
    echo $i;


    $p = 20;
    $s = $i > $p ? '大于' : '小于';
    echo $s;