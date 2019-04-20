<?php
session_start();
include("../../connection/Connection.php");
include("../../classroom/func_edit_class.php");

if(isset($_POST['class_id']) && isset($_POST['subject_name']) && isset($_POST['subject_code']) && isset($_POST['year']) && isset($_POST['term']) && isset($_POST['section'])){
	if(isset($_SESSION['permission']) && $_SESSION['permission']=="3"){
		$class_id = $_POST['class_id'];
        $subject_name = $_POST['subject_name'];
		$subject_code=$_POST['subject_code'];
        $year=$_POST['year'];
        $term=$_POST['term'];
        $section=$_POST['section'];
        $des=$_POST['des'];
        if(edit_class($class_id,$subject_name,$subject_code,$year,$term,$section,$des)){
            header("Location: ../add_ta/success.php?class_id=".$class_id);
        }
	}else{
		echo "3";
	}
}else{
    echo $_POST['class_id'];
    echo $_POST['subject_name'];
    echo $_POST['year'];
    echo $_POST['term'];
    echo $_POST['section'];
    echo $_POST['des'];
	echo "4";
}
?>