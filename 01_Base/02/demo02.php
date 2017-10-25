<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2017/10/25
 * Time: 10:36
 */

$weekday=3;
if($weekday==3){
    ?>
    <font color="red">hello</font>
    <?php
}
?>

<?php



//如果执行语句只有一条，可以省略大括号“{}”
if($weekday==3)
    echo 'aaa';


//switch ($weekday) {
//	case 1:
//		echo '星期一';
//		break;
//	case 2:
//		echo '星期二';
//		break;
//	default:
//		echo '星期三';
//}

//if($weekday==1){
//	echo '星期一：看书';
//}elseif ($weekday==2){
//	echo '星期二：踢球';
//}else{
//	echo '学习';
//}