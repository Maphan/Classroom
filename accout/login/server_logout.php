<?php 
include("../../Level_page.php");
lavel_Page_L3();
session_start();

unset($_SESSION['Username']);
unset($_SESSION['permission']);

header("Location: ".$level."index.php");
?>