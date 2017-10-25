<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:44
 */

    function display($first,$second,&$n1,&$n2,&$n3,&$n4){
        $n1 = $first + $second;
        $n2 = $first - $second;
        $n3 = $first * $second;
        $n4 = $first / $second;
    }

    $i=10;
    $j=20;

    $s1=0;
    $s2=0;
    $s3=0;
    $s4=0;
    display($i,$j,$s1,$s2,$s3,$s4);
    echo $s1.' '.$s2.' '.$s3.' '.$s4;