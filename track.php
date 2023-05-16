<?php
	include('connection.php');
	
	$order=$_POST["ordernum"];
	$result=mysqli_query($conn,"SELECT * FROM details where orderno = '$order' ");
	while($row=mysqli_fetch_array($result))
	{
		$flower = $row["flower"];
		$status = $row["status"];
		$order  = $row["orderno"];	
	}
	if(!$result)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
		else
		{
			//echo "<script>alert('The Status of your order no' .$order.'is'.$status.'')</script>";
			echo "</br>";
		}
	
?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Track Order</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Hello<br></strong>The Status of your Order Number <?php echo "$order"?>
  is <?php echo "$status"?><br><br>
  <a href="index.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
</div>
</body>
</head>
</html>
