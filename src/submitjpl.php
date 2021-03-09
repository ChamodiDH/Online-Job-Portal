<?php
	include_once 'confjs.php';
?>	

<?php
	//Escape user inputs for security
	
	$employer = $_POST["ename"];
	$catogery= $_POST["cat"];
	$title = $_POST["ttl"];
	$location = $_POST["ltn"];
	
	
	//Attemp insert quary execution
	$sql = "INSERT INTO jplst (num,employer,catogery,title,location) VALUES ('','$employer','$catogery','$title','$location')";
	if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		header("Location:jpdetail.php");
	}
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
	//close connection
		mysqli_close($conn)
?>		