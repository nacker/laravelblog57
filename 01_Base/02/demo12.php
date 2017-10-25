<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:46
 */

    echo date('Y年m月d日 H点i分s秒');
    echo '<br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo time();	//输出时间戳
    echo '<br>';
    echo date('Y-m-d H:i:s',1384841654);
    echo '<br>';
    $i=true;
    echo is_bool($i);
    echo '<br>';
    //打印参数的数据类型以及值
    var_dump($i);
    $name='zhangsan';
    var_dump($name);
    echo '<br>';
    $row=array('name'=>'zhangsan','age'=>30,'sex'=>'男');
    echo '<pre>';
    var_dump($row);
    echo '</pre>';