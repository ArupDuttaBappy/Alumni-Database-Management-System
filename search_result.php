<?php
  include 'config.php';

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="search_result_css.css">
</head>
<body>

</body>
</html>



<?php 

if (isset($_POST['submit-search'])) {
	# code...
	$search=mysqli_real_escape_string($con,$_POST['search']);
	$sql="SELECT * from module_list where name LIKE '%$search%' or 
	email LIKE '%$search%' or batch LIKE '%$search%' or current_state LIKE '%$search%' or current_status LIKE '%$search%' or other_details LIKE '%$search%' or social_links LIKE '%$search%'";

	$result=mysqli_query($con,$sql);
	$queryResult=mysqli_num_rows($result);
	

	

	if($queryResult>0)
	{

      while($row=mysqli_fetch_assoc($result))
      {
      	echo "
           <div >
           <h3>".$row['name']."</h3>
          <p> email address: ".$row['email']."</p>
         
          
           <p>".$row['batch']." batch</p>
           <p>Living Place : ".$row['current_state']."</p>
           <p>Current Status : ".$row['current_status']."</p>
           <p>Details : ".$row['other_details']."</p>

           </div>"
           ;
  	?>
  	<!DOCTYPE html>
  	<html>
  	<a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><p>Contact</p></a>
  	</html>
  	<?php
      }
	}
	else
	{
		echo"
				<script>
				alert('No search result found!');
				window.location.href='index.php';
				</script>
				";
	}

}

 ?>