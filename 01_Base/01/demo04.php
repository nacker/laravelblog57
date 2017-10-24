<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/24
 * Time: 21:00
 */

    // 定义一个常量，叫“N”，它的值是1.2
    define('N',1.2);

    //可以对N再次进行定义，但它的值永远不变
    //define('N',1.5);
    $person1 = 10000;
    $person2 = 5000;
    $person3 = 2000;
    echo $person1 * N;
    echo '<br>';
    echo $person2 * N;
    echo '<br>';
    echo $person3 * N;