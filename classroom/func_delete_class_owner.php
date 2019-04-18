<?php
function delete_class_owner($class_id,$t_id){
	$stmt_delete_class_owner=$GLOBALS['sql']->prepare("DELETE FROM classroom WHERE class_id=?;");
    $stmt_delete_class_owner->bindParam(1, $class_id);
    $stmt_delete_class_owner->bindParam(2, $t_id);
    
	if($stmt_delete_class_owner->execute()){
		return("true");
	}else{
		return("false");
	}
}
?>