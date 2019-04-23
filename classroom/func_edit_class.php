<?php
function edit_class($class_id,$subject_name,$subject_code,$year,$term,$section,$des){
	$stmt=$GLOBALS['sql']->prepare("UPDATE classroom SET subject_name = ?,subject_code=?,year = ?,term = ?,section=?,des = ? WHERE class_id=?");
	$stmt->bindParam(1, $subject_name);
	$stmt->bindParam(2, $subject_code);
    $stmt->bindParam(3, $year);
	$stmt->bindParam(4, $term);	
    $stmt->bindParam(5, $section);
    $stmt->bindParam(6, $des);
    $stmt->bindParam(7, $class_id);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>