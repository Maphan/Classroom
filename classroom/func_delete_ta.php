<?php
function delete_ta($class_id,$std_id){
	$stmt_delete_ta=$GLOBALS['sql']->prepare("DELETE FROM teacher_assistant WHERE class_id=? AND std_id=?");
    $stmt_delete_ta->bindParam(1, $class_id);
    $stmt_delete_ta->bindParam(2, $std_id);
    
	if($stmt_delete_ta->execute()){
		return("true");
	}else{
		return("false");
	}
}
?>