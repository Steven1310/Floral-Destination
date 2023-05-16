<?php
	date_default_timezone_set('Asia/Kolkata');
	$name=$_POST["name"];
    $quantity=$_POST["quantity"];
	$dod=$_POST["dod"];
	$mobile=$_POST["contact"];
	$address=$_POST["address"];
	$flower=$_POST["flower"];
	include ('connection.php');
    
	$test3=mysqli_query($conn,"SELECT * FROM product where flowername='$flower'");
	while($row=mysqli_fetch_assoc($test3))
	{
		$cst = $row["price"];
		
	}	
		
	$totcost= $cst * $quantity;
	$random=mt_rand(0,10000);
	$ordered='Ordered';
    $test2=mysqli_query($conn,"INSERT INTO `details`(`name`, `quantity`, `dod`, `contact`,`address`, `flower`,`cost`,`orderno`,`status`) VALUES ('$name','$quantity','$dod','$mobile','$address','$flower','$totcost','$random','$ordered')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysqli_error($conn));
			
		}
   // echo "<script>alert('Thank you for shopping with us. You will get your delivery on'.$dod.'')</script>";
    echo "</br>";
?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Floral Decoration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Thank You!<?php
  echo "$name"?><br></strong> for Shopping with us</br>You will get your order on <?php echo "$dod"?><br>
  on Specified Address <br><?php echo "$address"?><br>
  Your order no is <?php echo "$random"?><br><br>
  Your cost for <?php echo "$totcost"?><br>
  <a href="index.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
</div>
</body>
</head>
</html>
