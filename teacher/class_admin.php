<?php 
	include("../Level_page.php");
	lavel_Page_L2();
	include_once($level."connection/Connection.php");
	include($level."include/main.php");
	date_default_timezone_set('Asia/Bangkok');
	session_start();
	include_once($level."classroom/func_getMyClassroom.php");
    include_once($level."classroom/func_get_enroll_status.php");
	include_once($level."accout/Account_object.php");
    include_once($level."accout/getStudent.php");
    include_once($level."accout/getTeacher.php");
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
					<div class="row pt-5 pb-3">
                        <?php 
                            $class_id=$_GET['class_id'];							
                            
                            $stmt_ta=$sql->prepare("SELECT * FROM teacher_assistant WHERE class_id=?");
                            $stmt_ta->bindParam(1, $class_id);
                            $stmt_ta->execute();

                            $stmt_teacher=$sql->prepare("SELECT * FROM owner_class WHERE class_id=? AND status=1");
                            $stmt_teacher->bindParam(1,$class_id);
                            $stmt_teacher->execute();
                            

                        ?>
                        <div class="col-12 text-center bg-dark pb-2 py-2 mt-0 text-size-18 text_color-W1 "><b>รายชื่ออาจารย์</b></div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="">

                                <th scope="col">ชื่อ</th>
                                <th scope="col">นามสกุล</th>	
                                <th scope="col">อีเมลล์</th>
                                

                                </tr>
                            </thead>						
                            <tbody>
                            <?php 
                                while($row=$stmt_teacher->fetch()){
                                    $teacher = getTeacher($row['t_id']); ?>
                                <tr>
                                    <td><?php echo $teacher->firstname;?></td>
                                    <td><?php echo $teacher->lastname;?></td>
                                    <td><?php echo $teacher->email;?></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                        <hr>
                    <div class="row pt-3 pb-3">
                        <div class="col-12 text-center bg-dark pb-2 py-2 mt-0 text-size-18 text_color-W1 "><b>รายชื่อผู้ช่วยสอน</b></div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="">
                                <th scope="col">ชื่อ</th>
                                <th scope="col">นามสกุล</th>	
                                <th scope="col">อีเมลล์</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php 
                                while($row=$stmt_ta->fetch()){
                                    $std = getStudent($row['std_id']); ?>
                                <tr>
                                <td><?php echo $std->firstname;?></td>
                                <td><?php echo $std->lastname;?></td>
                                <td><?php echo $std->email;?></td>
                                
                                
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>       
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