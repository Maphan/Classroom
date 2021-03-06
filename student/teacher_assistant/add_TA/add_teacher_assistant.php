<?php 
	include("../../../Level_page.php");
	lavel_Page_L4();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();
	include_once($level."classroom/func_getMyClassroom.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$domain_sub;?></title>
	
	<link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../../../css/style-main.css" rel="stylesheet">
	<link href="../../../css/navbar.css" rel="stylesheet">
	<link href="../../../css/product-list.css" rel="stylesheet">
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
		#form_addTA input{
			height: 35px;
			margin-bottom: 20px;
			font-size: 15px;
			margin-left: auto;
			margin-right: auto;
		}
		#form_addTA textarea{
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
	</style>	
</head>
<body class="font bg_color-W2">

	<?php
		include($level."student/navbar_teacher.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
		
			<?php include($level."menu/ta_menu.php");?> <!-- include menu.php -->
			
			<div class="col-md-9 bg_color-W3 pb-4" style="min-height: 100vh">
				<div class="row">
					<div class="col-3" ></div>
					<div class="col-6 bg-dark text_color-main1 text-center py-2 mt-0" style="border-radius: 0px 0px 7px 7px">
						<h5><i class="ion-ionic"></i> <?=getClassroom($_GET['class_id'])->subject_name ?></h5>
					</div>
					<div class="col-3"></div>
				</div>
				<div class="container">
					<hr>
					<div class="row pt-5 pb-3 text-center">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<form id="form_addTA" action="server_add_ta.php" method="post" enctype="multipart/form-data">
								<div class="col-md-12">
									<input type="text" id="class_name" name="class_name" class="form-control" value="<?=getClassroom($_GET['class_id'])->subject_name ?>" readonly>
								</div>
								<div class="col-md-12">
									<input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="col-sm-12">
									<p id="flag" style="color: #D30003;"><?php if(isset($_GET['flag'])){echo $_GET['flag'];} ?></p>
								</div>
								<div class="col-md-12">
									<button name="addTA_submit" class="btn btn-main1" type="submit"><i class="ion-plus"></i> Add Teacher Assistant </button>
								</div>
								<input type="hidden" name="class_id" id="class_id" value="<?=$_GET['class_id']?>" >
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
	
	<script>var level='<?php echo $level?>';</script>
	<script src="<?=$level?>js/count_cart.js"></script>
	<script src="<?=$level?>js/delete_cart.js"></script>
	
</body>
</html>