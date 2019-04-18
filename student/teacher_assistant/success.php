<?php 
	include("../../Level_page.php");
	lavel_Page_L3();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$domain_sub;?> Admin</title>
	
	<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../../css/style-main.css" rel="stylesheet">
	<link href="../../css/navbar.css" rel="stylesheet">
	<link href="../../css/product-list.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	
	<style>
		html,body{
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
		  }
		.carousel-item img{
			min-width: 100%;
		}
		#form_order input{
			height: 35px;
			margin-bottom: 10px;
			font-size: 15px;
			border: 0px;
		}
		#form_order textarea{
			margin-bottom: 10px;
			font-size: 15px;
			border: 0px;
		}
		.border_step{
			border-right: 1px solid #CCC;
		}
	</style>	
</head>
<body class="font bg_color-W3">

	<?php
		include($level."student/navbar_teacher.php"); 
	?>
	
	<div class="container">
		<div class="row">
					
			<div class="col-md-12  pb-4" style="height: 95vh">
				<div class="alert alert-success text-center mt-5">
					<h4><i class="ion-android-checkmark-circle"></i> สำเร็จ</h4>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?=$level;?>bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="<?=$level;?>bootstrap/popper.min.js"></script>	
	<script src="<?=$level;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$level;?>js/jquery.min.js"></script>
	
	<script>var level='<?php echo $level?>';</script>
	<script src="<?=$level?>js/count_cart.js"></script>
	<script src="<?=$level?>js/delete_cart.js"></script>
	
</body>
</html>