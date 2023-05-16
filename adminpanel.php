<?php
include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
</head>
<body>
	<!--Navigation Bar-->
	<nav class="navbar navbar-dark bg-primary">
	  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-toggleable-md" id="navbarResponsive">
		<a class="navbar-brand" href="#">Floral Destination</a>
		<ul class="nav navbar-nav float-lg-right">
		  <li class="nav-item">
			<a class="nav-link" href="update.php">Update Status </a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.html">Logout </a>
		  </li>
		</ul>
		</div>
	</nav>
	<!--End of Navigation Bar-->
	<!--Records In database-->
	<table class="table">
	  <thead class="thead-inverse thead-success">
		<tr>
		  
		  <th>Name</th>
		  <th>Quantity</th>
		  <th>DOD</th>
		  <th>Contact</th>
		  <th>Address</th>
		  <th>Flower Type</th>
		  <th>Cost</th>
		  <th>OrNo</th>
		  <th>Status</th>
		
		</tr>
	  </thead>
	  
	  <tbody>
	  <?php 
	  $tlresult2=mysqli_query($conn,"SELECT * from details ");
				
				
				while($row=mysqli_fetch_array($tlresult2))
				{
					$name=$row["name"];
				 	$quantity=$row["quantity"];
				 	$dod=$row["dod"];
					$contact=$row["contact"];
					$address=$row["address"];
					$flower=$row["flower"];
					$cost=$row["cost"];
					$orno=$row["orderno"];
					$status=$row["status"];
				 	//$code=$row['code'];

					echo "<tr><td>".$name."</td><td>".$quantity."</td><td>".$dod."</td>
							<td>".$contact."</td><td>".$address."</td><td>".$flower."</td>
							<td>".$cost."</td><td>".$orno."</td><td>".$status."</td>";
				}
				echo "</table><br>";?>
	  </tbody>
	
	</table>  
	<!--End of Records In database-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery.min.js"></script>
    <script src="js/custom1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fadethis.js"></script>
</body>
</html>