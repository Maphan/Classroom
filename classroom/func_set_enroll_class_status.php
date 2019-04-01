<?php
function set_enroll_class_status($class_id,$std_id,$status){
	$stmt=$GLOBALS['sql']->prepare("UPDATE class_member SET status = ? WHERE class_id=? AND std_id=?");
	$stmt->bindParam(1, $status);
	$stmt->bindParam(2, $class_id);
	$stmt->bindParam(3, $std_id);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>