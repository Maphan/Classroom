<?php 
	include("../../Level_page.php");
	lavel_Page_L3();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	include($level."phpObject/ArrayList.php");
	session_start();
?>
<?php
//check logined
if(isset($_SESSION['Username']) && $_SESSION['permission']!=NULL){
	if($_SESSION['permission']=="3"){
		header("Location: ".$level."teacher/home.php");
	}else{
		header("Location: ".$level."student/home.php");
	}	
}
	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$domain_sub;?></title>
	
	<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../../css/style-main.css" rel="stylesheet">
	<link href="../../css/navbar.css" rel="stylesheet">
	<link href="../../css/view-product.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	
	<style>
		html,body{
			width: 100%;
			height: 100%;
			padding: 0;
			margin: 0;
		  }
		#form_login input{
			height: 35px;
			margin-bottom: 20px;
			font-size: 15px;
			margin-left: auto;
			margin-right: auto;
		}
		#form_login textarea{
			margin-bottom: 10px;
			font-size: 15px;
			border: 0px;
		}
		.CenterScreen {
		  position: fixed;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}
	</style>	
</head>
<body class="font bg_color-W2">

	<?php
		// include($level."navbar/navbar.php"); 
	?>
	
	<!-- box body -->
	<div id="box-body" class="col-md-5 CenterScreen bg-white p-0 pb-4">
		<div class="box-full-w bg-dark text_color-W1 text-center p0 mb-5 py-2" style="border-bottom: solid #CCC 2px;">
			<div class="col">
				<h5><i class="ion-android-person"></i> เข้าสู่ระบบ</h5>
			</div>
		</div>
		<div class="container text-center px-5">
			<form id="form_login" action="server-login.php" method="post" enctype="multipart/form-data">
				<div class="col-md-12">
					<input type="text" id="username" name="username" class="form-control" placeholder="อีเมล | student id">
				</div>
				<div class="col-md-12 text-right mb-2">
					<div class="form-check form-check-inline ">
					  <input class="form-check-input" type="radio" name="login_type" id="inlineRadio1" value="0">
					  <label class="form-check-label" for="inlineRadio1">@kku.ac.th</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="login_type" id="inlineRadio2" value="1">
					  <label class="form-check-label" for="inlineRadio2">@kkumail.com</label>
					</div>
				</div>
				<div class="col-md-12">
					<input type="password" id="pass" name="pass" class="form-control" placeholder="รหัสผ่าน">
				</div>
				<div class="col-sm-12">
					<p id="flag" style="color: red;"><?php if(isset($_GET['flag'])){echo $_GET['flag'];} ?></p>
				</div>
				<div class="col-md-12">
					<button name="login_submit" class="btn btn-main1" type="submit"><i class="ion-log-in"></i> เข้าสู่ระบบ</button>
				</div>
			</form>
		</div>
	</div><!-- END box body -->
	
	
	<script src="<?=$level;?>bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="<?=$level;?>bootstrap/popper.min.js"></script>	
	<script src="<?=$level;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$level;?>js/jquery.min.js"></script>
	
	
</body>
</html>