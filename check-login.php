<?php 
session_start();
if(empty($_SESSION['Username']) || empty($_SESSION['Pass']) || $_SESSION['permission']==NULL){
	header("Location: ".$level."admin/");
	//no login success fully
}
?>