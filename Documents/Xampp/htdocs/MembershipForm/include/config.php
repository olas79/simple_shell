<?php
//DATABASE CONNECTION 
$host = "localhost";
$username = "root";
$password = "";
$database = "tbl_personalinfo"

$sql = mysqli_connect($host, $firstname, $lastname, $email, $phonenumber, $address) or die('Could not connect');

?>