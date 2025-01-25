<?php
session_start();
//var_dump($_SESSION['access']<9);die();
if($_SESSION['access'] < 9) die("<h1><font color=\"red\">Access Denied: You are not Admin!</font></h1>");
include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$id = $_POST['id'];



$database->queryFetch("UPDATE users SET
	email = '".$_POST['email']."',
	tribe = ".$_POST['tribe'].",
	location = '".$_POST['location']."',
	desc1 = '".$_POST['desc1']."',
	desc2 = '".$_POST['desc2']."'
	WHERE id = '$id' ");
	
header("Location: ../../../TdPaneLXP/?p=player&uid=".$id."");
?>