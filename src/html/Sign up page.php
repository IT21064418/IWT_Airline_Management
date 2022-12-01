<?php
include 'config.php';

if (isset($_POST ['submit']))
{
#set feilds name 
      $username = $_POST["fname"];
      $password = $_POST["psw"];
      $confirm_password = $_POST["repsw"];
	  $address = $_POST["address"];
      $phone = $_POST["mnumber"];
      $email = $_POST["email"];
	  $country = $_POST["country"];
	  
$sql = "INSERT INTO register(user_id,username,country,address,password,confirm_password,phone,email) 
        VALUES ('','$username','$country','$address','$password','$confirm_password','$phone','$email')";
#check connection 
if(mysqli_query($connection,$sql))
{
   
   echo"<script>alert('connection succesfull')</script>";
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
   <link rel="stylesheet" href="../styles/sign up page.css"> 
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
	 <h1>Create a new account</h1>
   </section>
   <img src="../images/airline.png" alt="airline" height="650" width="750">
	
	

  <div class="abc">
  <h3 class="header">Fill your details here<h3>


  <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">

 
      <div class="imgcontainer">
          
		  <input type="text" placeholder="Enter Your Name" name="fname" required><br>
		  <input type="email" placeholder="Enter Your Email" name="email" required><br><br>
		  <select name="country" placeholder="Select a country" id="country"><br><br>
		     <option value="select a country">Select a country</option>
			 <option value="sri lanka">Sri Lanka</option>
			 <option value="india">India</option>
			 <option value="america">America</option>
			 <option value="united kingdom">United Kingdom</option>
			 <option value="france">France</option>
			 <option value="germany">Germany</option>
			 <option value="australia">Australia</option>
			 <option value="new zealand">New Zealand</option>
		  </select><br><br>
		  <input type="tel" placeholder="Enter Your Mobile number" name="mnumber" required><br>
		  <input type="text" placeholder="Enter Your Address" name="address" required><br>

         
          <input type="password" placeholder="Enter Password" name="psw" required>
		  <input type="password" placeholder="Re-Enter Password" name="repsw" required>
        </div>
	  
       <center> <button type="submit" name="submit" class="submit">Sign In</button> </center>
	
	   <br>
	
	
   </div>
   </form>
   </div>

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