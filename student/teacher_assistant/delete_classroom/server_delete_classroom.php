<?php
session_start();
include("../../../connection/Connection.php");
include("../../../classroom/func_delete_classroom.php");

if(isset($_GET['class_id'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="1"){
		$class_id = $_GET['class_id'];
		
		$stmt_class_check=$sql->prepare("SELECT * FROM classroom WHERE class_id=?");
        $stmt_class_check->bindParam(1, $class_id);
        $stmt_class_check->execute();
        if($stmt_class_check->rowCount()>0){//Check student in classroom
            if(delete_classroom($class_id)){
                header("Location: ../success.php");
            } 
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