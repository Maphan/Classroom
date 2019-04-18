<?php
session_start();
include("../../../connection/Connection.php");
include("../../../classroom/func_set_enroll_class_status.php");

if(isset($_POST['class_id']) && isset($_POST['std_id']) && isset($_POST['status'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="1"){
		$class_id = $_POST['class_id'];
        $std_id = $_POST['std_id'];
        $status=$_POST['status'];
        if(set_enroll_class_status($class_id,$std_id,$status)){
            echo "1";
        }
	}else{
		echo "3";
	}
}else{
	echo "4";
}
?>