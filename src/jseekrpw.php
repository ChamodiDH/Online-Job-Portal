<!DOCTYPE html>
<?php
	session_start();
	$dbSevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "job_portal";

	$conn = mysqli_connect($dbSevername, $dbUsername, $dbPassword ,$dbName);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
if(!empty($_POST)){
		$oldPassword = $_POST['txtOldpass'];
		$newPassword = $_POST['txtNewpass'];
		$rePassword = $_POST['txtconPass'];
		$sql ="SELECT * FROM users WHERE id = '1'";
		$change_pass = mysqli_query($conn,$sql);
				$change_pass1 = mysqli_fetch_array($change_pass);
				$dataPass = $change_pass1['password'];
				if($dataPass == $oldPassword ){
						if($newPassword == $rePassword){
				$updatePass = mysqli_query($conn,"UPDATE users SET password = '$newPassword' WHERE id ='1'");
							
						}
						}
					}		
	

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/main3.css" type="text/css" rel="stylesheet">
    <title>Online Job Portal</title>
</head>
<body>
<header>
    <div class="menuBar">
        <ul>
            <li><a href="" >HOME</a></li>
            <li><a href="jsindex.html"class="active" >JOB SEEKER</a></li>
            <li><a href="" >JOB PROVIDER</a></li>
            <li><a href="">ABOUT US</a></li>
        </ul>
    </div>
</header>
<div class="middle-content">
    <div class="side-menu">
        <ul>
           <li > <a href="profile.html"  >Profile</a></li>
		   <li><a href="joblist.php">job List</a></li>
		   <li><a href="jsmessage.html">Message</a></li>
            <li><a href="#"class="active">Change Password</a></li>
                   
            
            <li><a href="#">Log Out</a></li>
        </ul>
    </div>

        <div class="co_edit_details">

            <form class="frm_proMessage" action="jseekrpw.php"  method="post" enctype="multipart/form-data">
            <label>Old Password : </label></br></br>
			<input type="password" id="txtOldpass" name="txtOldpass" required>
            <br><br>
             <label>New Password</label></br></br>
			 <input type="password" name="txtNewpass" id="txtNewpass" required ><br/><br/>
             <label>Confirm Password</label></br></br> 
			 <input type="password" name="txtconPass" id="txtconPass" required ><br/><br/>
                <input type="submit" value="Change" id="btnChange" name="btnChange" >
				 <input type="button" value="Cancel" id="btnCancel" name="btnCancel" onclick="btnClose()">
            </form>
    
			
		
        </div>
    </div>
</div>

<div class="footer">
    <div class="topFooter">
     <div class="column">
            <h3>Navigation</h3>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
      </div>
      <div class="column">
            <h3>About The Platform</h3>
            <a href="#">Pricing</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
        <div class="column">
           <address>
                    1020,Galle Road,
                    Colombo 04.
            </address>
            <p>   Phone:0112786543<br>
                Email:infinity@gmail.com<br>
                Web:www.infinity.lk</p>
        </div>
    </div>
        <div class="bottomFooter">
        <hr/>
        <p>Copyright 2019 © Infinity.All Rights Reserved</p>
        <div class="social_media">
            <a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="Facebook" id="facebook"></a>
            <a href="http://www.twitter.com"><img src="images/twitter.jpg" alt="Twitter" id="twitter"></a>
            <a href="https://www.google.com"><img src="images/gplus.png" alt="Gplus" id="gplus"></a>
        </div>
    </div>
</div>



</body>
</html>