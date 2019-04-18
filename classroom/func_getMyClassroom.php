<?php
include_once("Classroom_object.php");

function getClassroom($class_id){
	$class_id = $class_id;
	$stmt_classroom=$GLOBALS['sql']->prepare("SELECT * FROM classroom WHERE class_id = ?");
	$stmt_classroom->bindParam(1, $class_id);
	$stmt_classroom->execute();
	$row_classroom=$stmt_classroom->fetch();

	$class_temp=new Classroom_object;
		$class_temp->class_id=$row_classroom['class_id'];
		$class_temp->subject_code=$row_classroom['subject_code'];
		$class_temp->subject_name=$row_classroom['subject_name'];
		$class_temp->year=$row_classroom['year'];
		$class_temp->term=$row_classroom['term'];
		$class_temp->section=$row_classroom['section'];		
		$class_temp->des=$row_classroom['des'];
	return($class_temp);
}

function getAll_Classroom_owner($account_id){
	$classroom_list=array();
	
	$stmt=$GLOBALS['sql']->prepare("SELECT * FROM owner_class WHERE t_id = ? AND status=1");
	$stmt->bindParam(1, $account_id);
//	$stmt->bindParam(2, 1);
	$stmt->execute();
	
	while($row_myClass=$stmt->fetch()){		
		$classroom_list[]=getClassroom($row_myClass['class_id']);		
	}//end ehile
	return($classroom_list);
}//end func

function getAll_Classroom_student($account_id){
	$classroom_list=array();
	
	$stmt=$GLOBALS['sql']->prepare("SELECT * FROM class_member WHERE std_id = ?");
	$stmt->bindParam(1, $account_id);
	$stmt->execute();
	
	while($row_myClass=$stmt->fetch()){		
		$classroom_list[]=getClassroom($row_myClass['class_id']);		
	}//end ehile
	return($classroom_list);
}//end func

function getAll_Classroom_ta($account_id){
	$classroom_list=array();
	
	$stmt=$GLOBALS['sql']->prepare("SELECT * FROM teacher_assistant WHERE std_id = ?");
	$stmt->bindParam(1, $account_id);
	$stmt->execute();
	
	while($row_myClass=$stmt->fetch()){		
		$classroom_list[]=getClassroom($row_myClass['class_id']);		
	}//end ehile
	return($classroom_list);
}//end func


?>