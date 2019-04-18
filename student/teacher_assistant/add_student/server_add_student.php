<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_add_class_member.php");

if(isset($_POST['class_id']) && isset($_POST['std_id'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$class_id = $_POST['class_id'];
		$std_id = $_POST['std_id'];
		
		$stmt_std=$sql->prepare("SELECT * FROM student WHERE std_id=?");
		$stmt_std->bindParam(1, $std_id);
		$stmt_std->execute();
		if($stmt_std->rowCount()>0){//Check student in system
            $stmt_std_check=$sql->prepare("SELECT * FROM class_member WHERE std_id=? AND class_id=?");
			$stmt_std_check->bindParam(1, $std_id);
			$stmt_std_check->bindParam(2,$class_id);
            $stmt_std_check->execute();
            if($stmt_std_check->rowCount()>0){//Check student in classroom
                header("Location: add_student.php?class_id=".$class_id."&flag=Student already in classroom!");
            }else if(add_class_member($class_id,$std_id)){
				header("Location: success.php?class_id=".$class_id);
            }else{
				header("Location: add_student.php?class_id=".$class_id."&flag=Add student failed! #1");
            }
            
		}else{
			header("Location: add_student.php?class_id=".$class_id."&flag=Student ID not found!");
		}
	}else{
		header("Location: add_student.php?class_id=".$class_id."&flag=Student ID not found! #2");
	}
}else{
	header("Location: add_student.php?class_id=".$class_id."&flag=Student ID not found! #3");
}
?>