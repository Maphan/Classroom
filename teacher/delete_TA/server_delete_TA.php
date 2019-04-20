<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_delete_ta.php");

if(isset($_GET['class_id']) && isset($_GET['std_id'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$class_id = $_GET['class_id'];
		$std_id = $_GET['std_id'];
		
        if(delete_ta($class_id,$std_id)){//Check student in classroom
            header("Location: ../add_TA/success.php?class_id=".$class_id);
        }else{
            echo "1";
        }
	}else{
		echo "3";
	}
}else{
	echo "4";
}
?>