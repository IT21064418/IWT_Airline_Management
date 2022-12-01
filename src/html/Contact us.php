<?php
  
  //Linking the conifguration file
  include 'config.php';
    
	if(isset($_POST['submit'])){
 
	$c_name = $_POST["c_name"];
	$c_email = $_POST["c_email"];
	$c_subject = $_POST["c_subject"];
	$c_message = $_POST["c_message"];
	
	
		       
	    $INSERT = "Insert Into contact_us (c_id,c_name,c_email,c_subject,c_message) 
			   VALUES ('','$c_name','$c_email','$c_subject','$c_message')";
			   
		if(mysqli_query($connection,$INSERT)){
			echo "<script> alert('Successfull') </script>";
		}
		
        else{
			echo "<script> alert('Un-Successfull') </script>";
		}
			
    }
	mysqli_close($connection);
 ?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Contact Us</title>
   <link rel="stylesheet" href="../styles/Contact us.css">
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
	 <h1>Contact Us</h1>
   </section>

<!--Contact us form--> 
   <section class="contact-us" method="post">
        <div class="row">
		    <div class="contact-col">
		        <form method="POST" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" id="contact-frm" >
			        <input id="name" type="text" name="c_name" placeholder="Enter your name" required>
				    <input id="email" type="email" name="c_email" placeholder="Enter your email address" required>
				    <input id="subject" type="text" name="c_subject" placeholder="Enter your subject" required>
				    <textarea id="message" rows="8" name="c_message" placeholder="Message" required></textarea>
					<button type="reset" class="contact-us-btn">Clear Message</button>
                    <button type="submit" name="submit" class="contact-us-btn">Send Message</button>					
			    </form>
		    </div>
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