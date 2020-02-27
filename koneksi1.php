<?php
$user="root";
$server="localhost";
$password="";
$database="db_uas";

$conn=mysqli_connect($server,$user,$password);
$db=mysqli_select_db($conn,$database);
?>