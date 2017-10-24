<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/24
 * Time: 20:55
 */

    // 数组类型
    $person = array('name'=>'list', 'age' => 20, 'height' => 1.8);
    echo $person['name'].'<br>';
    echo $person['height'].'<br>';


    class Persion {
        public $name;
        public $age;
    }

    // 对象类型
    $p1 = new Persion();
    $p1->name = 'wangwu';
    $p1->age = 18;
    echo $p1->name;
    echo $p1->age;
