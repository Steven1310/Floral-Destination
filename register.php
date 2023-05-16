<?php
	include ('connection.php');
	
	$username=$_POST["uname"];
	$email=$_POST["email"];
    $password=$_POST["passwd"];
	$mobile=$_POST["mobile"];
	
	$count = 0;
	$result = mysqli_query($conn,"select count(*) as count from login where uname = '$username' and email = '$email' ");
	if( $count == 0 )
	{
		$text=mysqli_query($conn,"insert into `login` values ('$username','$password','$email','$mobile','')");	
		if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
		
	
	}
	else
	{
		echo "<script>alert('You are already a member')</script>";	
	}
	
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Floral Destination</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Thank You!<?php
  echo "$username"?><br></strong> for Registering with us</br>
  <a href="index.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
  
</div>
</body>
</head>
</html>