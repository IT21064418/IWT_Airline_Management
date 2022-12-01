<?php
session_start();
include 'config.php';

if (isset($_POST ['submit']))
{
#set feilds name 
      $dept_date = $_POST["dept-date"];
	  $_SESSION['d_date'] = $_POST["dept-date"];
      $from = $_POST["from"];
	  $_SESSION['d_loc'] = $_POST["from"];
      $To = $_POST["To"];
	  $_SESSION['a_loc'] = $_POST["To"];
	  $t_class = $_POST["t_class"];
	  $_SESSION['class'] = $_POST["t_class"];
      $passengers = $_POST["passengers"];
	  $_SESSION['tickets'] = $_POST["passengers"];
	  $vehicle = $_POST["vehicle"];
	  $_SESSION['vehicle'] = $_POST["vehicle"];
	  
$sql = "INSERT INTO booking(bID,dDate,dLoc,aLoc,class,noOfTickets,noOfRooms,vType) 
        VALUES ('','$dept_date','$from','$To','$t_class','$passengers','0','$vehicle')";
#check connection 
if(mysqli_query($connection,$sql))
{   
   echo"<script>alert('connection succesfull')</script>";
   header("location:Available-flights.php");
}
else{
   echo"<script>alert('Error in your connection')</script>";
}
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways</title>
   <link rel="stylesheet" href="../styles/header and footer.css">
   <link rel="stylesheet" href="../styles/booking.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="../images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links" >
		    <ul>
			    <li><a href="Home page.html">HOME</a></li>
				<li><a href="booking1.php">BOOKINGS</a></li>
				<li><a href="about us.html">ABOUT US</a></li>
				<li><a href="Contact us.php">CONTACT US</a></li>
				<li><a href="my help page.php">HELP</a></li>
				<li><a href="feedback.php">GIVE FEEDBACK</a></li>
				<li><a href="user profile.php">USER PROFILE</a></li>
				<li><a href="Sign up page.php">SIGN UP</a></li>
				<li><a href="">LOGIN</a></li>
			</ul>	
		</div>		
	 </nav>
	 <h1>Book Your ticket and a vehicle</h1>
   </section>
   
   <!-- normal booking page -->
   
   <section class="admin-content">
   
     <!--- booking buttons --->
	 
     <div class="booking-btn">
	    <a href="booking1.php" class="pg-btn"> Flight </a>
		<a href="booking2.php" class="pg-btn"> Flight + Hotels </a>
		<a href="booking3.php" class="pg-btn"> Flight + Vehicle </a>
     </div>
     	 
     <div class="content">
	 
	     <!--- booking form --->
	    <form class="booking-frm" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="POST">
		
		    <label class="input-label">Departure date: </label>
		    <input type="date" name="dept-date" class="txt-input" required>
			
		    <label class="input-label">From: </label>
		    <select name="from" class="txt-input" required>
			    <option value="">Select a location...</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="India">India</option>
				<option value="Japan">Japan</option>
				<option value="Korea">Korea</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="USA">USA</option>
				<option value="France">France</option>
				<option value="Germany">Germany</option>
				<option value="Australia">Australia</option>
			</select>
			
			<label class="input-label">To: </label>
		    <select name="To" class="txt-input" required>
			    <option value="">Select a location...</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="India">India</option>
				<option value="Japan">Japan</option>
				<option value="Korea">Korea</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="USA">USA</option>
				<option value="France">France</option>
				<option value="Germany">Germany</option>
				<option value="Australia">Australia</option>
			</select>
			
			<label class="input-label">Select the number seats for the vehicle: </label>
		    <select name="vehicle" class="txt-input" required>
			    <option value="">Select number of seats...</option>
				<option value="car">4</option>
				<option value="van">7</option>
				<option value="vehicle">20</option>
			</select>
		
		    <label class="input-label">Class: </label>
		    <select name='t_class' class="txt-input" required>
				<option value="">Select a class...</option>
				<option value="Economy">Economy</option>
				<option value="Business">Business</option>
				<option value="First class">First Class</option>
			</select>
		
		    <label class="input-label">Number of passengers: </label>
		    <input type="number" name="passengers" class="txt-input" min="1" required>
				
		    <button type="reset" class="bkng-btn"> Clear </button>
		    <button type="submit" class="bkng-btn" name="submit"> Next </button>
		</form>
     </div>	
	 
   </section>

<!-- footer -->
   
   <section class="footer">
     <h4><a href="privacy policy.html"> Privacy policy </a> | <a href="services.html">Our Services</a><h4>
	 <p> +446475887 | +4420718389 | +612123457869 | +9474055342 | <a href="map.html">Where We fly</a> | <a href="">Terms and Conditions</a> | <a href="galaxy gallery.html">Gallery</a></p>
	 <div class="icons">
        <img src="../images/facebook.png">
		<img src="../images/twitter.png">
		<img src="../images/instagram.png">
	 </div>
	 <p>copyright all rights reserved</p>
   </section>   
</body>
</html>