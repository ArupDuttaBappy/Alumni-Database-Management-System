
<?php  

include 'config.php';

?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="indexcss.css">
	<title>Search for informations!</title>

</head>
<body>



<form  action="search_result.php" method="POST">
	<center><h1 id="h1">Alumni Archive System</h1></center><br>
	<input id="input" type="text" name="search" placeholder="write something to search!">
	<button  id="button" type="submit" name="submit-search" >Go
	</button>
	



</form>


<center><p style="font-size: 22px;font-weight: 600;color: #fff" id="message">
	         If you are an alumni of CSE CU ,<br>
then please help us to grow this interface between Alumni and current students.<br>
 You can enrich this system by  entering your valuable information...<a style="color: white;font-family: Arial" href="register.php">Register</a> or 
 <a style="color: white;font-family: Arial" href="login.php">Login</a>
</p></center>




</body>
</html>