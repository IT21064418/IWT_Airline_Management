<?php
session_start();
include 'config.php';

$sql = "SELECT * FROM register WHERE user_id = '3'";
$result = $connection ->query($sql);
$row = mysqli_fetch_assoc($result);
    $id = $row["user_id"];
	$_SESSION['uid'] = $row["user_id"];
	$name = $row["username"];
	$_SESSION['uname'] = $row["username"];
	$country = $row["country"];
	$_SESSION['ucountry'] = $row["country"];
	$phone = $row["phone"];
	$_SESSION['phone'] = $row["phone"];
	$email = $row["email"];
	$_SESSION['email'] = $row["email"];
	$address = $row["address"];
	$_SESSION['address'] = $row["address"];
	
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | User Profile</title>
   <link rel="stylesheet" href="../styles/header and footer.css">
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
	 <h1>USER PROFILE</h1>
   </section>
	 
	 
	 <!-- Body -->
	 
<link rel="stylesheet" href="..\styles\user profile.css">

  
  <div class="main">
   
		<div class="user-profile">
			<img class="avatar" src="../images/avatar.png" alt="Ash" />
		
		<?php echo'<div class="username">'.$name.'</div>';?>
		
		<?php echo'<div class="id">'.$id.'</div>';?>
    
		<?php echo'<div class="contact">Contact No: '.$phone.'</div>';?>
		
		<?php echo'<div class="dob">Country: '.$country.'</div>';?>
		
		<?php echo'<div class="address">Address: '.$address.'</div>';?>
		
		<?php echo'<div class="mail">E-mail: '.$email.'</div>';?>
<br>
	
	<br>
				<a href="../html/update user profile.php"><input type="submit" value="EDIT DETAILS" class="Btn"></a>
</div>
		
		
	<br>
	<br>
	<br>
	
	




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