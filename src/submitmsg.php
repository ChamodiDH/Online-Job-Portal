<?php
	include_once 'conmsg.php';
?>	

<?php
	//Escape user inputs for security
	
	$name = $_POST["namemsg"];
	$email = $_POST["emailmsg"];
	$subject = $_POST["subjectmsg"];
	$senddate = $_POST["datemsg"];
	$message = $_POST["messagemsg"];
	
	
	
	
	//Attemp insert quary execution
	$sql = "INSERT INTO messages (id,namemsg,emailmsg,subjectmsg,datemsg,mmsg) VALUES ('','$name','$email','$subject','$senddate','$message')";
	if(mysqli_query($conn, $sql)){
		//echo"<script> alert('Record added successfully')"
		
	}
	else{
			echo "<script> alert('ERROR: Could not able to execute')</script>";
		}	
		
	//close connection
		mysqli_close($conn)
?>		