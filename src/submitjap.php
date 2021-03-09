<?php
	include_once 'confjs.php';
?>	

<?php
	//Escape user inputs for security
	$nic = $_POST["id"];
	$fname = $_POST["ftname"];
	$lname = $_POST["ltname"];
	$gender = $_POST["status"];
	$dob = $_POST["bdate"];
	$empstatus = $_POST["ess"];
	$email = $_POST["el"];
	$phone = $_POST["ph"];
	
	
	//Attemp insert quary execution
	$sql = "INSERT INTO jsapl (nic,fname,lname,gender,dob,empstatus,email,phone) VALUES ('$nic','$fname','$lname','$gender','$dob','$empstatus','$email','$phone')";
	if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		header("Location:joblist.php");
	}
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
	//close connection
		mysqli_close($conn)
?>		