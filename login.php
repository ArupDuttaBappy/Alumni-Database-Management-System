<?php
// Start the session
session_start();
?>

<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sheet.css">
<title>Login Page</title>
</head>

<body id="body">


<center>
<div id="loginpartLI">


<img src="images (5).jpg" class="img"></img>

<form  align="right" action="login.php" method="POST"><br>


<h1 >
Login Here..or <a style="color: grey;text-decoration-style: none;"  href="index.php">index</a></h1>

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input><br>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input><br>


</form>

<!button work><br>

<input name="login" type="submit" id="button" value="Sign In">
</input> <br>
<a href="register.php"><input name="back" type="button" id="button" value="Create an account">
</input>



</div>

</center>



<?php
                

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from module_list where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				


				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='profilePage.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>




<?php
// Set session variables
$_SESSION['myemail'] =isset($_POST['email']) ? $_POST['email'] : '';


?>





</div>
</body>

</html>
