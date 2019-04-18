<?php 
	include("../../Level_page.php");
	lavel_Page_L3();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();
	include_once($level."classroom/func_getMyClassroom.php");
	include_once($level."classroom/func_get_enroll_status.php");
	include_once($level."accout/Account_object.php");
	include_once($level."accout/getStudent.php");
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
	<link href="../../css/Snackbar.css" rel="stylesheet">
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
	</style>	
</head>
<body class="font bg_color-W2">

	<?php
		include($level."student/navbar_teacher.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
		
			<?php include($level."menu/student_menu.php");?> <!-- include menu.php -->
			
			<table class="table table-striped">
						<thead>
							<tr class="">
							<th scope="col">รหัสนักศึกษา</th>
							<th scope="col">ชื่อ</th>
							<th scope="col">นามสกุล</th>
							<th scope="col">มาเรียน (ครั้ง)</th>
							<th scope="col">สถานะ</th>
							<th scope="col">Action</th>
							</tr>
						</thead>
						
						<tbody>
						<?php 
							while($row=$stmt_student_count->fetch()){
								$std = getStudent($row['std_id']); ?>
							<tr>
							<td><?php echo $std->id;?></td>
							<td><?php echo $std->firstname;?></td>
							<td><?php echo $std->lastname;?></td>
							<td>#</td>
							<td> 
							<?php 
							$status=getAll_Classroom_status($std->id,$class_id);
							if($status=="0"){?>
								<span class="text-success"><b>ลงเรียน</b></span>	
							<?php }else if($status=="1"){	?>
								<span class="text-danger"><b>ดรอป</b></span>
							<?php } ?>  
							
							</td>
							<td>
							<!-- Example single danger button -->
							<div class="btn-group">
							<button type="button" class="btn btn-danger dropdown-toggle btn_link_cursor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item btn_link_cursor" onclick="dropMember('<?php echo $std->id;?>','<?php echo $class_id ?>','1')" >ดรอป</a>
								<a class="dropdown-item btn_link_cursor" onclick="dropMember('<?php echo $std->id;?>','<?php echo $class_id ?>','2')" >ถอน</a>
								<a class="dropdown-item btn_link_cursor" onclick="deleteMember('<?php echo $std->id;?>','<?php echo $class_id ?>')" >ลบ</a>
							</div>
							</div>
							</td>
							</tr>
							<?php } ?>
						</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
	<div id="snackbar">
	</div>
	<script src="<?=$level;?>bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="<?=$level;?>bootstrap/popper.min.js"></script>	
	<script src="<?=$level;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$level;?>js/jquery.min.js"></script>

	
	
	
	
</body>
</html>