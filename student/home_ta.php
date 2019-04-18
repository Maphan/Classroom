<?php 
	include("../Level_page.php");
	lavel_Page_L2();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();

	include_once("check_login.php");
	include_once($level."accout/getAccount.php");
	include_once($level."classroom/func_getMyClassroom.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$domain_sub;?></title>
	
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../css/style-main.css" rel="stylesheet">
	<link href="../css/navbar.css" rel="stylesheet">
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
		include($level."student/navbar_teacher.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 bg_color-W2 pb-4" style="min-height: 100vh">
				<div class="row">
					<div class="col-3" ></div>
					<div class="col-6 bg-dark text_color-main1 text-center py-2 mt-0" style="border-radius: 0px 0px 7px 7px">
						<h5><i class="ion-ionic"></i> Teacher Assistant</h5>
					</div>
					<div class="col-3"></div>
				</div>
				<div class="container">
					<hr>
					<div class="row pt-3 pb-3">
						<?php 
						if(sizeof(getAll_Classroom_student(getAccount()->id))==0){?>
						<div class="alert alert-danger text-center col-12 text-size-20" role="alert">
							<i class="ion ion-sad text-size-50"></i><br> No Classroom ! ! !<br><br>
						</div>
						<?php }else{foreach (getAll_Classroom_ta(getAccount()->id) as $classroom_temp) {?>
						<!-- Card  -->
						<div class="col-lg-4">
							<a href="teacher_assistant/ClassRoom.php?class_id=<?=$classroom_temp->class_id;?>">
							<div class="card bg-secondary mb-3 btn_link_cursor" >
								<div class="card-header ">
									<h5 class="text-white"><b>#<?=$classroom_temp->subject_code;?></b></h5>
									<h6 class="text-white"><b><?=$classroom_temp->subject_name?></h6></b>
									<span class="text-size-14"><?="[".$classroom_temp->year."/".$classroom_temp->term."]"?></span>
								</div>
								<div class="card-body pb-0">
									<span class="card-text">Teacher  # คน</span><br>
									<span class="card-text">Teacher assistant  # คน</span><br>
									<span class="card-text">Student  # คน</span>
									<div class="mt-3 text-right text-size-28">										
										<a href="ClassRoom.php?class_id=<?=$classroom_temp->class_id;?>" class="link_main1 mr-2"><i class="icon ion-ios-folder"></i></a>
									</div>
								</div>
							</div>
							</a>
						</div>
						<?php 
							}//endforeach
						}//end if
						?>
						
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