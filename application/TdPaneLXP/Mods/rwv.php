<?php

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");





$did = $database->FilterIntValue($_GET['did']);
$name =  $database->FilterStringValue($_GET['name']);



$sql = "UPDATE vdata SET name = '$name' WHERE wref = '$did' and owner= ".$session->uid." ";
$database->queryFetch($sql);

header("Location: ../../../dorf1.php");
?>