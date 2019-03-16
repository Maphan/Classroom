<?php 
//include_once("accout/Account_object.php");
include_once("connection/Connection.php");
include_once("accout/getAccount.php");
session_start();

print_r(getAccount());
?>