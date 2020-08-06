<?php
$host ="localhost";
$name="root";
$pass="";
$dbname="profile_manager";
$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
mysqli_select_db($con,$dbname);




?>
