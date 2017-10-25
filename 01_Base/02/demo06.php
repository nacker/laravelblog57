<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:40
 */

    function display($name){
        return '<font color=red>你好'.$name.'</font>';
    }

    $str1=display('老张');
    echo $str1.'<br>';
    $str2=display('小强');
    echo "<script>alert('".$str2."')</script>";