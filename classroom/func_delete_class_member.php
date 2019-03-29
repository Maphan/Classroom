<?php
function delete_class_member($class_id, $std_id){
	$stmt_delete_class_member=$GLOBALS['sql']->prepare("DELETE FROM class_member WHERE class_id=? AND std_id=? ;");
	$stmt_delete_class_member->bindParam(1, $class_id);
	$stmt_delete_class_member->bindParam(2, $std_id);
	
	if($stmt_delete_class_member->execute()){
		return(true);
	}else{
		return(false);
	}
}
?>