<?php
session_start();
include("../../../connection/Connection.php");
include("../../../classroom/func_add_ta.php");
include("../../../classroom/func_update_permission_std.php");

if(isset($_POST['class_id']) && isset($_POST['email'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="1"){
		$class_id = $_POST['class_id'];
		$email_std = $_POST['email'];
		
		$stmt_std=$sql->prepare("SELECT * FROM student WHERE email=?");
		$stmt_std->bindParam(1, $email_std);
		$stmt_std->execute();
		if($stmt_std->rowCount()>0){
			$row_std= $stmt_std->fetch();
			$std_id=$row_std['std_id'];
			
			if($row_std['permission']==0){//if not TA
				update_permission($email_std,1);//set permission as TA
			}
			
			if(add_TA($std_id,$class_id)){
				header("Location: success.php?class_id=".$class_id);
			}else{
				header("Location: add_teacher_assistant.php?class_id=".$class_id."&flag=Email not found! #1");
			}
		}else{
			header("Location: add_teacher_assistant.php?class_id=".$class_id."&flag=Email not found!");
		}
	}else{
		header("Location: add_teacher_assistant.php?class_id=".$class_id."&flag=Email not found! #2");
	}
}else{
	header("Location: add_teacher_assistant.php?class_id=".$class_id."&flag=Email not found! #3");
}
?>