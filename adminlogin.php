<?php
	include('connection.php');
	
	$uname=$_POST["uname"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"SELECT * FROM admin" );
	while($row=mysqli_fetch_array($result))
	{
		$passwd = $row["passwd"];
		
	}
	if( $password == $passwd )
	{
		session_start();
		$_SESSION['sid']=session_id();
		//echo "<script> alert('Successfully Login')</script>";
		header('location: adminpanel.php?uname='.$uname.'') ;
	}
	else{
		echo "<script> alert('You dont have Permission')</script>";
	}
?>