
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
<p style="font-size: 20px;">
 <?php 

$result=mysqli_query($con,"SELECT `name` FROM `module_list` WHERE email='$emailhere'    ");
$res=mysqli_fetch_array($result);
echo $res ['name'];



?></p>
<br>
<p  style="font-size: 16px;"><?php


$result2=mysqli_query($con,"SELECT `current_status` FROM `module_list` WHERE email='$emailhere'    ");
$res2=mysqli_fetch_array($result2);
echo $res2 ['current_status'];

?>
</p>

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
            <h3>Details</h3><p>(please fill-up these two fields)</p><br>
            <div class="projects_data">
                 <div >
                    

<form  action="profilePage.php" method="POST">
<b><label>Current Status:</label>
<input  style="width: 460px;height: 50px;" name="current" type="text" id="form" >
</input><br><br>
<b><label>Worked At:</label>
<input style="width: 460px;height: 50px" name="work" type="text" id="form" >
</input><br>
</form>

<!button work><br>

<input name="save" type="submit" style="width: 80px;height: 30px;background-color: #aaa;border:none;" value="save">
</input>      





                 </div>
                 
            </div>
        </div>
      

        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </li><a href="login.php"><input style="height: 40px;background-color: #919aa3" name="back" type="button" id="button" value="Log-Out">
</input></li>

          </ul>
      </div>
    </div>
</div>

<?php 

if(isset($_POST['save'])){
  
  $current = $_POST['current'];
  $work = $_POST['work'];


$sql= "UPDATE module_list SET current_status='$current',other_details='$work' WHERE email='$emailhere';";
mysqli_query($con,$sql);



 

      }
        ?>

</body>
</html>


