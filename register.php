<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sheet.css">
<title>Register Page</title>
</head>

<body id="body">


<center>
<div id="loginpart">


<img src="images (5).jpg" class="img"></img>

<form  align="right" action="register.php" method="POST"><br>


<h1 >
Alumni Registration Form</h1>
<b><label>Name</label>
<input name="name" type="text" id="form" placeholder="Enter your name" required>
</input><br>
<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input><br>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input><br>
<b><label>Retype</label>
<input name="cpass" type="password" id="form" placeholder="Confirm your Password" required>
</input><br>
<b><label>Country</label>
<input name="cname" type="text" id="form" placeholder="Enter your country name" >
</input><br>
<b><label>Batch no.</label>
<input name="batch" type="text" id="form" placeholder="Enter your batch no." required>
</input><br>

</form>

<!button work><br>

<input name="signup" type="submit" id="button" value="Sign Up">
</input>       <br>
<a href="login.php"><input name="back" type="button" id="button" value="Back to Sign-In">
</input>



</div>

</center>





<?php
//coding 

if(isset($_POST['signup'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$cname= $_POST['cname'];
	$batch= $_POST['batch'];
	



	if($pass==$cpass){
		
		$query= "select*from module_list where email='$email'";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			
			if(mysqli_num_rows($query_run) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
			}else{
				

	$insertion= "insert into module_list values('$name','$pass','$email','$batch','$cname','','','')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='login.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='register.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='register.php';
		</script>
		";
			
		}
		
		
	}
	else{
		echo "
		<script>
		alert('Password & Confirm Password didn't match');
		window.location.href='register.php';
		</script>
		";
	}
	
	
}
else{
	
	
}

?>

</div>
</body>

</html>
