<?php
session_start();
include("../../../connection/Connection.php");
include("../../../classroom/func_delete_class_member.php");

if(isset($_POST['class_id']) && isset($_POST['std_id'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="1"){
		$class_id = $_POST['class_id'];
		$std_id = $_POST['std_id'];
		
		$stmt_std_check=$sql->prepare("SELECT * FROM class_member WHERE std_id=?");
        $stmt_std_check->bindParam(1, $std_id);
        $stmt_std_check->execute();
        if($stmt_std_check->rowCount()>0){//Check student in classroom
            echo delete_class_member($class_id,$std_id);
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