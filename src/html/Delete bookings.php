<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Cancel bookings</title>
   <link rel="stylesheet" href="../styles/header and footer.css">
   <link rel="stylesheet" href="../styles/delete booking.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="../images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links">
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
	 <h1> Cancel Bookings </h1>
   </section>
   
   <!-- delete booking page content -->
   <section class="booking-delete">
   <?php
     #search booking form
        echo '<form class="delete-booking" action="" method="POST">
		    <div class="search-booking">
                <input type="text" name="b_id" class="txt-input" placeholder="Insert booking ID">
			    <button type="submit" name="search" class="frm-btn"> Search </button>
			</div>
		</form>';
	
     # data retriveing
	 
		if (isset($_POST["search"]))
		{
		    $id = $_POST['b_id'];
			
			$sql = "SELECT bID,noOfTickets,class,fid FROM booking WHERE bID = '$id'";
			$result = $connection ->query($sql);
			
			if ($result) {
				
			  $row =mysqli_fetch_assoc($result);
			
              $bid = $row["bID"];  			
			  $fid = $row['fid'];
              $tickets = $row['noOfTickets'];
              $type = $row['class'];
			
		    echo '<form class="delete-booking" action="" method="POST">	
			<div class="booking-details">
			    <label class="input-label" > Booking ID: </label>
			    <input class="txt-output" type="text" name="bid" value='.$bid.' readonly>
				<label class="input-label" > Flight ID: </label>
			    <input class="txt-output" type="text" name="f_ID" value = '.$fid.' readonly>
				<label class="input-label" > Number of tickets: </label>
			    <input class="txt-output" type="text" name="t_no" value = '.$tickets.' readonly>
				<label class="input-label" > Ticket type: </label>
			    <input class="txt-output" type="text" name="t_type" value = '.$type.' readonly>
				<button class="dlt-btn" type="submit" name="delete"> Delete </button>
			</div>
		    </form>';
			}
			else{
				echo "<script>alert('Cannot find booking details')</script>";
			}
			

 		}
		
		if (isset($_POST["delete"]))
		{
			$bid = $_POST['bid'];
				
			$sql = "DELETE FROM booking WHERE bID = '$bid' LIMIT 1";
			$result = $connection ->query($sql);
				
			if ($result) {
				echo "<script>alert('booking cancelled')</script>";
			}
			else{
				echo "<script>alert('booking cancellalation Failed')</script>";
			}
				
		}
    ?>		
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