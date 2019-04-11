<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_add_class_owner.php");

if(isset($_POST['class_id']) && isset($_POST['email'])){
	if(isset($_SESSION['permission'])){
		$class_id = $_POST['class_id'];
		$email_std = $_POST['email'];
		
		$stmt_std=$sql->prepare("SELECT * FROM teacher WHERE email=?");
		$stmt_std->bindParam(1, $email_std);
		$stmt_std->execute();
		if($stmt_std->rowCount()>0){
			$row_std= $stmt_std->fetch();
			$std_id=$row_std['t_id'];
			
			if(add_class_owner($t_id,$class_id)){
				header("Location: success.php?class_id=".$class_id);
			}else{
				header("Location: add_class_owner.php?class_id=".$class_id."&flag=Add teacher fail! #1");
			}
		}else{
			header("Location: add_class_owner.php?class_id=".$class_id."&flag=Email not found!");
		}
	}else{
		header("Location: add_class_owner.php?class_id=".$class_id."&flag=Email not found! #2");
	}
}else{
	header("Location: add_class_owner.php?class_id=".$class_id."&flag=Email not found! #3");
}
?>