<?php
function delete_classroom($class_id){
	$stmt_delete_classroom=$GLOBALS['sql']->prepare("DELETE FROM classroom WHERE class_id=?;");
	$stmt_delete_classroom->bindParam(1, $class_id);
    
    $stmt_delete_class_member=$GLOBALS['sql']->prepare("DELETE FROM class_member WHERE class_id=?;");
    $stmt_delete_class_member->bindParam(1, $class_id);
    
    $stmt_delete_class_owner=$GLOBALS['sql']->prepare("DELETE FROM owner_class WHERE class_id=?;");
    $stmt_delete_class_owner->bindParam(1, $class_id);
    
    $stmt_delete_class_assistant=$GLOBALS['sql']->prepare("DELETE FROM teacher_assistant WHERE class_id=?;");
	$stmt_delete_class_assistant->bindParam(1, $class_id);
    
	if($stmt_delete_classroom->execute() && $stmt_delete_class_member->execute() && $stmt_delete_class_owner->execute()  && $stmt_delete_class_assistant->execute()){
		return("true");
	}else{
		return("false");
	}
}
?>