<?php
	include_once 'confjs.php';
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
            <li><a href="jsindex.html" >JOB SEEKER</a></li>
            <li><a href="" class="active">JOB PROVIDER</a></li>
            <li><a href="">ABOUT US</a></li>
        </ul>
    </div>
</header>
<div class="middle-content">
    <div class="side-menu">
        <ul>
           <li > <a href="profile.html"  >Profile</a></li>
		   <li><a href="#"class="active">Applied Seeker List</a></li>
		   <li><a href="jsmessage.html">Message</a></li>
            <li><a href="jscpw.html">Change Password</a></li>
            <li><a href="#">Applied Job List</a></li>          
            <li><a href="#">Print a CV</a></li>
            <li><a href="#">Log Out</a></li>
        </ul>
    </div>

    <div class="side-content">
   <tbody>
  <tr>
    <td colspan="2">
    <div class="scrollit">
			
		<table class="seekerData" border="1">
			<tr>
				<th>nic</th>
				<th>fname</th>
				<th>lname</th>
				<th>gender</th>
				<th>dob</th>
				<th>empstatus</th>
				<th>email</th>
				<th>phone</th>
			</tr>
		<?php
		
		 $sql = "SELECT * FROM jsapl";
		 $result = $conn->query($sql);
		 if($result->num_rows > 0){
		 
			//output data of each row
			while($row = $result->fetch_assoc()){
				echo"<tr><td>".$row["nic"]."</td>";
				echo"<td>".$row["fname"]."</td>";
				echo"<td>".$row["lname"]."</td>";
				echo"<td>".$row["gender"]."</td>";
				echo"<td>".$row["dob"]."</td>";
				echo"<td>".$row["empstatus"]."</td>";
				echo"<td>".$row["email"]."</td>";
				echo"<td>".$row["phone"]."</td></tr>";
				
				}
		} else {
				echo "0 result";
		}
		echo "</table>";
			$conn->close();
		?>	
			
			
	</div>
		</td>
		<tr>
		</tbody>
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
        <p>Copyright 2019 ?? Infinity.All Rights Reserved</p>
        <div class="social_media">
            <a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="Facebook" id="facebook"></a>
            <a href="http://www.twitter.com"><img src="images/twitter.jpg" alt="Twitter" id="twitter"></a>
            <a href="https://www.google.com"><img src="images/gplus.png" alt="Gplus" id="gplus"></a>
        </div>
    </div>
</div>



</body>
</html>
		
	