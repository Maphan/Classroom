<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_delete_class_owner.php");

if(isset($_GET['class_id']) && isset($_GET['t_id']) ){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$class_id = $_GET['class_id'];
		$t_id=$_GET['t_id'];
		
		if(delete_class_owner($class_id,$t_id)){
        	header("Location: ../success.php");
        }else{
			echo "1";
		}
	}else{
		echo "2";
	}
}else{
	echo "3";
}
?>