<?php
	date_default_timezone_set('Asia/Kolkata');
	$username=$_POST["uname"];
	$email=$_POST["email"];
    $password=$_POST["passwd"];
	$mobile=$_POST["mobile"];
	include ('connection.php');
    
    $test2=mysqli_query($conn,"INSERT INTO `login` VALUES ('$username','$password','$email','$mobile')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysqli_error($conn));
			
		}
    echo "<br />";
	$result=mysqli_query($conn,"select * from login");
				while($row=mysqli_fetch_assoc($result))
				{
					$name=$row["uname"];
					$passwd=$row["passwd"];
				}	
	?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Congratulations!
  <br></strong> Your details are <br><?php
  echo "Username: "; echo "$name"; 
  echo "<br>";
  echo "Password: "; echo "$passwd";echo "<br>";
  ?></br><br><br>
  <a href="login.html" class="btn btn-success page-scroll">Click here to login</a></center>
</div>
</body>
</head>
</html>
	