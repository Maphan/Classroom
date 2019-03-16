<?php 
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_add_classroom.php");
include("../../classroom/func_add_classroom_owner.php");
include("../../accout/getAccount.php");
	
if(isset($_POST['class_name']) && isset($_POST['subject_code']) && isset($_POST['year']) && isset($_POST['term']) && isset($_POST['des'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$id_owner = getAccount()->id;
		$class_id = substr(uniqid(),3);
		// inser classroom
		if(add_classroom($class_id, $_POST['subject_code'], $_POST['class_name'], $_POST['year'], $_POST['term'], $_POST['des'])){
			//insert class owner
			if(add_classroom_owner($class_id,$id_owner)){
				header("Location: ../success.php");
			}else{
				header("Location: create_class.php?flag=add class owner is fail! #0");
			}		
		}else{
			header("Location: create_class.php?flag=add class is fail! #1");
		}
	}else{
		header("Location: create_class.php?flag=add class is fail! #2");
	}
}else{
	header("Location: create_class.php?flag=add class is fail! #3");
}

?>