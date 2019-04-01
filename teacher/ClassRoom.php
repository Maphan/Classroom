<?php 
	include("../Level_page.php");
	lavel_Page_L2();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();
	include_once($level."classroom/func_getMyClassroom.php");
	include_once($level."accout/Account_object.php");
	include_once($level."accout/getStudent.php");
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
	<link href="../css/product-list.css" rel="stylesheet">
	<link href="../css/Snackbar.css" rel="stylesheet">
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
		include($level."teacher/navbar_teacher.php"); 
	?>
	
	<div class="container-fluid">
		<div class="row">
		
			<?php include($level."menu/menu.php");?> <!-- include menu.php -->
			
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
					<div class="row pt-5 pb-3">
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-person-stalker"> </i>จำนวนนักเรียน</p></center>
									<center><b><p class="text-size-34 text_color-main1">
									<?php 
									$class_id=$_GET['class_id'];
									$stmt_student_count=$sql->prepare("SELECT * FROM class_member WHERE class_id=?");
									$stmt_student_count->bindParam(1, $class_id);
									$stmt_student_count->execute();
									echo $stmt_student_count->rowCount();
									?>
										<!-- ************* -->
										 คน
									</p></b></center>
								</div>
							</center>
						</div>
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-android-contact"> </i>จำนวน TA</p></center>
									<center><b><p class="text-size-34 text_color-main1">
										<!-- ************* -->
										 
										<?php
										
										$stmt_ta=$sql->prepare("SELECT * FROM teacher_assistant WHERE class_id=?");
										$stmt_ta->bindParam(1, $class_id);
										$stmt_ta->execute();
										echo $stmt_ta->rowCount();
										?>
										คน
									</p></b></center>
								</div>
							</center>
						</div>
						<div class="col-4">
							<center>
								<div class="rounded-circle box_dash bg-dark" style="border-color: #808080 ">
									<center><p class="text-size-26 text_color-W3"><i class="ion-arrow-graph-up-right"> </i>การเข้าเรียน</p></center>
									<center><b><p class="text-size-34 text_color-main1">
										<!-- ************* -->
										## %
									</p></b></center>
								</div>
							<center>
						</div>
					</div>
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
							<td>   </td>
							<td>
							<!-- Example single danger button -->
							<div class="btn-group">
							<button type="button" class="btn btn-danger dropdown-toggle btn_link_cursor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item btn_link_cursor" href="#">ดรอปนักเรียน</a>
								<a class="dropdown-item btn_link_cursor" onclick="deleteMember('<?php echo $std->id;?>','<?php echo $class_id ?>')" >ลบนักเรียน</a>
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
	<script src="<?=$level;?>js/Snackbar.js"></script>
	
	
	<script>var level='<?php echo $level?>';</script>
	<script>
	function test(){
		alert("yes");
	}	
	function deleteMember(std_id_p,class_id_p){
		var r = confirm("Are you sure?");
		if(r==true){
			$.ajax({
				type: "POST",
				url: "../teacher/delete_student/server_delete_student.php",
				data: {std_id:std_id_p,class_id:class_id_p},
				success: function(res){
					if(res=="true"){
						Snackbar("ลบนักเรียนสำเร็จ");
						setTimeout(function(){location.reload();},1500);
					}else{
						Snackbar("ลบนักเรียนไม่สำเร็จ");
					}
				}
			})
		}

	}	</script>
	
</body>
</html>