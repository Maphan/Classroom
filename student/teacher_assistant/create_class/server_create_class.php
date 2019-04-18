<?php 
session_start();
include("../../../connection/Connection.php");
include("../../../classroom/func_add_classroom.php");
include("../../../classroom/func_add_ta.php");
include("../../../accout/getAccount.php");
	
if(isset($_POST['class_name']) && isset($_POST['subject_code']) && isset($_POST['year']) && isset($_POST['term']) && isset($_POST['des']) && isset($_POST['section'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="1"){
		$id_ta = getAccount()->id;
		$class_id = substr(uniqid(),3);
		// inser classroom
		if(add_classroom($class_id, $_POST['subject_code'], $_POST['class_name'], $_POST['year'], $_POST['term'], $_POST['des'], $_POST['section'])){
			//insert class owner
			if(add_ta($id_ta,$class_id)){
				header("Location: ../../success.php");
			}else{
				header("Location: create_class.php?flag=add class owner is fail!1 #0");
			}		
		}else{
			header("Location: create_class.php?flag=add class is fail!2 #1");
		}
	}else{
		header("Location: create_class.php?flag=add class is fail!3 #2");
	}
}else{
	header("Location: create_class.php?flag=add class is fail!4 #3");
}

?>