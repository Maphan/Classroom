<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_update_class_owner_status.php");

if( isset($_GET['class_id']) && isset($_GET['t_id']) ) {
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$class_id = $_GET['class_id'];
        $t_id = $_GET['t_id'];
        if(update_class_owner_status($class_id,$t_id,1)){
            header("Location: ../success.php?class_id=".$class_id);
        }else{
			echo "0";
		}
	}else{
		echo "1";
	}
}else{
	echo "2";
}
?>