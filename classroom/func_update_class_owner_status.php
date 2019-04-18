<?php
function update_class_owner_status($class_id,$t_id,$status){
    $stmt=$GLOBALS['sql']->prepare("UPDATE owner_class SET status = ? WHERE class_id= ? AND t_id = ?");
    $stmt->bindParam(1,$status);
	$stmt->bindParam(2, $class_id);
	$stmt->bindParam(3, $t_id);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}
?>