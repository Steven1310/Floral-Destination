<?php
	include('connection.php');
	
	$sql = "SELECT * FROM buy ORDER BY orderno";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
	    while ($row=mysqli_fetch_array($result)) {?>

	    	<tr>
			 <td><?php echo $row['name']?></td>
			 <td><?php echo $row['quantity']?></td>
			 <td><?php  echo $row['dod']?></td>
			 <td><?php  echo $row['contact']?></td>
			 <td><?php  echo $row['address']?></td>
			 <td><?php  echo $row['flower']?></td>
			 <td><?php  echo $row['orderno']?></td>
			 <td><?php  echo $row['status']?></td>
			 <td ><button data-empid ="<?php echo $row['empid']?>" class="btn btn-danger btn-delete" >Delivered</button></td>
			</tr>


	   <?php }
	}
	
?>