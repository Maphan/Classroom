<?php
include("../../../connection/Connection.php");
include("ExcelRead.php");
//include("deleteFile.php");
include("../../../classroom/func_add_class_member.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(!isset($_POST['class_id'])){
	echo "Sorry, not found class id.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "xls" && $imageFileType != "xlsx") {
    echo "Sorry, only xls and xlsx files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $data_array=ReadExcel($_FILES["fileToUpload"]["tmp_name"]); // ExcelReading
	$flag=true;
	$count_insert_success=0;
	foreach($data_array as $std){
		$std_id="";
		for($i=0;$i<11;$i++){
			if($std['std_id'][$i]!='-'){
				$std_id=$std_id.$std['std_id'][$i];
			}
		}
		if(add_class_member($_POST['class_id'], $std_id)){
			$count_insert_success++;
		}else{
			$flag=false;
		}
	}
	if($flag==true){
		header("Location: ../add_student/success.php?class_id=".$_POST['class_id']);
	}else{
		header("Location: ../add_student/fail.php?class_id=".$_POST['class_id']);
	}
}
?>