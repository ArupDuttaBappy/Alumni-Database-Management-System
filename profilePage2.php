
<?php
session_start();
?>

<?php
  include 'config.php';
 $emailhere=$_SESSION['myemail'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alumni Profile Card</title>
	<link rel="stylesheet" href="profileStyle.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="Man.png" 
        alt="user" width="200">
        <h4>

 <?php 

$result=mysqli_query($con,"SELECT `name` FROM `module_list` WHERE email='$emailhere'    ");
$res=mysqli_fetch_array($result);
echo $res ['name'];


$result=mysqli_query($con,"SELECT `current_status` FROM `module_list` WHERE email='$emailhere'    ");
$res=mysqli_fetch_array($result);
echo $res ['current_status'];
?>

        </h4>
        
    </div>
    <div class="right">
        <div class="info">
            <h3>Profile Card</h3>
            <div class="info_data">
                 <div class="data">
                  
                    <h4>Email</h4>
                    
<?php

echo   $emailhere;

?>
                 </div>
                 <div class="data">
                   <h4 >Batch</h4>
                    <p style="font-weight: 600;color: #000;font-size: 20px"><?php 

$result=mysqli_query($con,"SELECT `batch` FROM `module_list` WHERE email='$emailhere'    ");
$res=mysqli_fetch_array($result);
echo $res ['batch'];
?></p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Details</h3>
            <div class="projects_data">
                 <div >
                    
                    <div style="font-size: 16px;font-weight: 500;width: 70%" class="data">Lorem sum dolor sit amet.</div><br>
                 </div>
                 
            </div>
        </div>
      

        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </div>
</div>

</body>
</html>

