<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:45
 */

    function display($money,$i=1){
        //调用display时，可以对i传递实参，也可以不传递
        //如果传递了，则使用传递的值
        //如果没有传递，就使用1
        return $money*$i;
    }
    echo display(10000);
    echo '<br>';
    echo display(5000,1.2);
    echo '<br>';
    echo display(8000,0.8);