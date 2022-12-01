<?php
include 'config.php';

if (isset($_POST ['submit']))
{
#set feilds name 
      $feedback = $_POST["feedback"];
	  
$sql = "INSERT INTO feedback(f_id,feedback) 
        VALUES ('','$feedback')";
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galaxy Airways</title>
  <link rel="stylesheet" href="../styles/header and footer.css">
  <link rel="stylesheet" href="../styles/rating.css">
  <title>feedback</title>
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
  <h1>Feedback</h1>
  </section>
<div class="star">
 <form  action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="POST">
    <h2>Your feedback matters to us &#128522</h2><br>
         <div class="input group">
            <textarea name="feedback" rows="8" placeholder="Give us your feedback" required></textarea>
         </div>
             <button type="submit" name="submit"> submit</button>
              
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
