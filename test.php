<?php 
session_start();
include("connection/Connection.php");
include("accout/getAccount.php");

$acc = getAccount();

echo $acc->firstname;

?>