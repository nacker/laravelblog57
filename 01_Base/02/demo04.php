<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:38
 */

for($i=0;$i<10;$i++){
    if($i==5)
        break;		//跳出整个循环
    //continue;	//跳出本次循环
    echo $i.'<br>';
}

$i=1;
while(1){
    if($i%3==2 && $i%5==3 && $i%7==2){
        echo '这个数是：'.$i;
        break;
    }
    $i++;
}