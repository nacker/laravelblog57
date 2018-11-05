<?php
//定义下面的数组
$arr = array("nav"=>"首页");
$a = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>网页标题</title>
</head>
<body>
	<ul>
		<li><?php echo "PHP和HTML";?></li>
		<li><?php echo $arr['nav'];?></li>
		<li>PHP和HTML1</li>
		<?php if($a == 1):?>
			<li>PHP和HTML</li>
		<?php endif;?>
		<li>上面不知道现不现实</li>
		<li>PHP和HTML</li>
	</ul>
</body>
</html>

