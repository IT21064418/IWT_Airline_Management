<?php
include 'config.php';

if(isset($_POST["submit"]))
	{
		$deptlocation = $_POST['deptlocation'];
		$depDate = $_POST['depDate'];
		$depTime = $_POST['depTime'];
		$arrlocation = $_POST['arrlocation'];
		$arrDate = $_POST['arrDate'];
		$arrTime = $_POST['arrTime'];
		$staffID = $_POST['staffID'];
		
		$sql = "INSERT INTO flight(fid,d_loc,d_date,d_time,a_loc,a_date,a_time,s_id)
                VALUES ('','$deptlocation','$depDate','$depTime','$arrlocation','$arrDate','$arrTime','$staffID')";
		
       if(mysqli_query($connection,$sql))
       {   
            echo"<script>alert('Flight added succesfully')</script>";
       }
       else{
            echo"<script>alert('Error in your connection')</script>";
       }
		
	}
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Galaxy Airways | Admin section - Flights</title>
   <link rel="stylesheet" href="../styles/Admin.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="../images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links" >
		    <ul>
			    <li><a href="Admin manage feedback.php">MANAGE FEEDBACK</a></li>
				<li><a href="Admin manage users.php">MANAGE USERS</a></li>
				<li><a href="Admin manage payments.php">MANAGE PAYMENTS</a></li>
				<li><a href="Admin manage flights.php">FLIGHTS</a></li>
			</ul>	
		</div>		
	 </nav>
	 <h1>Add Flights</h1>
   </section>

<!--- Add flight page content --->    
    
   <section class="admin-content">
   
     <!--- Admin buttons --->
     <div class="flight-btn">
	    <a href="Admin add flights.php" class="admin-btn"> Add flights </a>
		<a href="Admin manage flights.php" class="admin-btn"> Manage flights </a>
     </div>
     	 
     <div class="content">
	 
	     <!--- add flight form --->
	    <form method="POST" class="new-flight" action="" >
		
		    <!--- <label class="input-label">Enter flght ID: </label>
		    <input type="text" name="flightID" placeholder="Enter flight ID" class="txt-input" required>-->
			
			<label class="input-label">Enter departing Location: </label>
		    <input type="text" name="deptlocation" placeholder="Enter Departing location" class="txt-input" required>
		
		    <label class="input-label">Enter departure date: </label>
		    <input type="date" name="depDate" placeholder="Enter Departure date" class="txt-input" required>
		
		    <label class="input-label">Enter departure Time: </label>
		    <input type="text" name="depTime" placeholder="Enter Departure time" class="txt-input" required>
		
			<label class="input-label">Enter arriving Location: </label>
		    <input type="text" name="arrlocation" placeholder="Enter arriving location" class="txt-input" required>
		
		    <label class="input-label">Enter arrive date: </label>
            <input type="date" name="arrDate" placeholder="Enter arrive date" class="txt-input" required>
		
		    <label class="input-label">Enter arriving time: </label>
		    <input type="text" name="arrTime" placeholder="Enter arriving time" class="txt-input" required>
		
		    <label class="input-label">Enter Your staff ID: </label>
		    <input type="text" name="staffID" placeholder="Enter your staff ID" class="txt-input" required>
		
		    <button type="reset" class="admin-btn"> Clear </button>
		    <button type="submit" name="submit" class="admin-btn"> Add Flight </button>
		</form>
     </div>	
	 
   </section>
   
</body>
</html>
   
