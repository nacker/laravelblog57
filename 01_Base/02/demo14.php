<html>
	<head>
		<title></title>
		<style>
			#div1{width:800px;background:red;height:100px}
			#div2{width:800px;height:300px;background:green}
			#div3{width:800px;background:blue;height:120px;}
		</style>
	</head>
<body>
<?php
	require_once('public/header.html');
?>
<div id="div2">主体内容</div>
<?php include('public/footer.html');?>

</body>
</html>