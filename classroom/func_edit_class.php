<?php
function edit_class($class_id,$subject_name,$subject_code,$year,$term,$section,$des){
	$stmt=$GLOBALS['sql']->prepare("UPDATE classroom SET subject_name = ?,subject_code=?,year = ?,term = ?,des = ? WHERE class_id=? AND section=?");
	$stmt->bindParam(1, $subject_name);
	$stmt->bindParam(2, $subject_code);
    $stmt->bindParam(3, $year);
	$stmt->bindParam(4, $term);
    $stmt->bindParam(5, $des);
    $stmt->bindParam(6, $class_id);
    $stmt->bindParam(7, $section);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>