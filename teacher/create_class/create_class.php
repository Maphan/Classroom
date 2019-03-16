<?php 
	include("../../Level_page.php");
	lavel_Page_L3();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();

	include_once("../check_login.php");
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
		.box_dash{
			width: 250px;
			height: 250px;
			border: solid 15px;
			padding-top: 20%;
			transition: 0.2s;
		}
		.box_dash:hover{
			border: solid 2px;
		}
		.card:hover{
			-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
			box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75); 
		}
		.card-body a{
			color: dimgray;
		}
	</style>	
</head>
<body class="font bg_color-W2">

	<?php
		include($level."teacher/navbar_teacher.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 bg_color-W2 pb-4" style="min-height: 100vh">
				<div class="row">
					<div class="col-3" ></div>
					<div class="col-6 bg-dark text_color-main1 text-center py-2 mt-0" style="border-radius: 0px 0px 7px 7px">
						<h5><i class="ion-ionic"></i> My Classroom</h5>
					</div>
					<div class="col-3"></div>
				</div>
				<div class="container">
					<hr>
					<div class="row pt-3 pb-3">
						<div class="col-md-3"></div>
						<div class="col-md-6 text-center">
							<form id="form_login" action="server_create_class.php" method="post" enctype="multipart/form-data">
								<div class="col-md-12">
									<input type="text" id="class_name" name="class_name" class="form-control" placeholder="Class name or Subject name" required>
								</div>
								<div class="col-md-12">
									<input type="text" id="subject_code" name="subject_code" class="form-control" placeholder="subject code" required>
								</div>
								<div class="row col-md-12 ">
									<div class="col-md-6">
										<input type="number" id="year" name="year" class="form-control" placeholder="Year (YYYY)" min="2018" required>
									</div>
									<div class="col-md-6">
										<input type="number" id="term" name="term" class="form-control" placeholder="Term" min="1" max="3" required>
									</div>
								</div>
								<div class="col-md-12">
									<textarea id="des" name="des" class="form-control" rows="5" cols="100" placeholder="Class description"></textarea>
								</div>
								<div class="col-sm-12">
									<p id="flag" style="color: red;"><?php if(isset($_GET['flag'])){echo $_GET['flag'];} ?></p>
								</div>
								<div class="col-md-12">
									<button class="btn btn-main1" type="submit"><i class="ion-plus"></i> Create Class</button>
								</div>
							</form>
						</div>
						<div class="col-md-3"></div>			
					</div>					
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?=$level;?>bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="<?=$level;?>bootstrap/popper.min.js"></script>	
	<script src="<?=$level;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$level;?>js/jquery.min.js"></script>
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	
</body>
</html>