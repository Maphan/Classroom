<?php 

function add_classroom($class_id, $subject_code, $subject_name, $year, $term, $des){
	$stmt_insert_classroom=$GLOBALS['sql']->prepare("INSERT INTO classroom (class_id, subject_code, subject_name, year, term, des) VALUES (?,?,?,?,?,?)");
	$stmt_insert_classroom->bindParam(1, $class_id);
	$stmt_insert_classroom->bindParam(2, $subject_code);
	$stmt_insert_classroom->bindParam(3, $subject_name);
	$stmt_insert_classroom->bindParam(4, $year);
	$stmt_insert_classroom->bindParam(5, $term);
	$stmt_insert_classroom->bindParam(6, $des);
	
	if($stmt_insert_classroom->execute()){
		return(true);
	}else{
		return(false);
	}
}
?>