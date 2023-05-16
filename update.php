<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Status</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<style>
h2 {
    text-align: center;
    margin: 30px 0;
}
.demo-card {
  width: 100%;
  max-width: 500px;
  margin: 0 auto 100px;
}
h4.title {
  text-align: center;
}
.demo-card {
    opacity: 0.9;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
</style>
</head>

<body style="background-image:url(10.jpg); background-size:cover;">
	<!--Navigation Bar-->
	<nav class="navbar navbar-dark bg-primary">
	  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-toggleable-md" id="navbarResponsive">
		<a class="navbar-brand" href="#">Floral Destination</a>
		<ul class="nav navbar-nav float-lg-right">
		  <li class="nav-item active">
			<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
		  </li>
		</ul>
		</div>
	</nav>
	<!--End of Navigation Bar-->
	<br><br><br>
	<div class="demo-card">
		<div class="card ">
			<div class="card-header card-inverse card-success text-center">
				Admin Login
			</div>
			
			<div class="card-block">
				<form method="POST" action="updated.php">
				  
				  
				  <div class="form-group">
					<label for="exampleSelect1">Select order you want to update</label>
					<select class="form-control" id="exampleSelect1" name="element1">
					 <?php
							include('connection.php');
							$result=mysqli_query($conn,"SELECT * FROM details where status='ordered'");
							while($row=mysqli_fetch_array($result))
								{
								?>
								<option value=<?php echo $row['orderno'];?>><?php echo $row['orderno'];?></option>
								<?php
								}
								?>
					 
					</select><br>
					<select class="form-control" id="select2" name="element2">
						<option value="Delivered">Select Option</option>
						<option value="Delivered">Delivered</option>
					</select>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			
		</div>
	</div>
	

</body>
</html>