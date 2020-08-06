<?php 
 include 'config.php';

 $name=$_POST['name'];
  $email=$_POST['email'];
 $password=$_POST['password'];
 $country=$_POST['country'];

$sql="INSERT INTO `user`(`name`, `email`, `password`, `Country_Name`) VALUES ('aaa$name','$email','$password','$country');";
mysqli_query($con,$sql);

header("Location: StudentsDashboard.php?signup=success");

 ?>