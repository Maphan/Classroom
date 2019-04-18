<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_add_class_owner.php");

if(isset($_POST['class_id']) && isset($_POST['email'])){
	if(isset($_SESSION['permission'])){
		$class_id = $_POST['class_id'];
		$email_std = $_POST['email'];
		
		$stmt_t=$sql->prepare("SELECT * FROM teacher WHERE email=?");
		$stmt_t->bindParam(1, $email_std);
		$stmt_t->execute();
		if($stmt_t->rowCount()>0){
			$row_t= $stmt_t->fetch();
			$t_id=$row_t['t_id'];
			
			if(add_class_owner($class_id,$t_id,0)){
				header("Location: success.php?class_id=".$class_id);
			}else{
				header("Location: add_class_owner.php?class_id=".$class_id."&flag=Add teacher fail! #1".$std_id);
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