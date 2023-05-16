<?php

	include ('connection.php');
    		$orderno=$_POST["element1"];
			$status=$_POST["element2"];
			$test1=mysqli_query($conn,"UPDATE details SET status= '$status' WHERE orderno= '$orderno'");
			if( !$test1)
			{
				die('Could not update data: ' . mysql_error());
			}
			else
			{
				header('location: update.php') ;
			}
?>