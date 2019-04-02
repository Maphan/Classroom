<?php
function edit_class($class_id,$subject_name,$year,$term,$section,$des){
	$stmt=$GLOBALS['sql']->prepare("UPDATE classroom SET subject_name = ?,year = ?,term = ?,des = ? WHERE class_id=? AND section=?");
	$stmt->bindParam(1, $subject_name);
    $stmt->bindParam(2, $year);
	$stmt->bindParam(3, $term);
    $stmt->bindParam(4, $des);
    $stmt->bindParam(5, $class_id);
    $stmt->bindParam(6, $section);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>