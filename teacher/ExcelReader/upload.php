<?php
include("ExcelRead.php");
include("deleteFile.php");
include("../../classroom/func_add_class_member.php");


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
$file_name="123.".$imageFileType;
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/".$file_name)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        $data_array=ReadExcel("uploads/".$file_name); // ExcelReading
        deleteFile("uploads/".$file_name);
        
		$flag=true;
		$count_insert_success=0;
		foreach($data_array as $std){
			if(add_class_member($_POST['class_id'], $std['std_id'])){
				$count_insert_success++;
			}else{
				$flag=false;
			}
		}
		if($flag==true){
			echo "upload success fully.";
		}
		
//        echo '<pre>';
//        var_dump($data_array);
//        echo '</pre><hr />';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>