<?php 
    session_start();
    include 'config.php';

	$dloc = $_SESSION['d_loc'];
	$aloc = $_SESSION['a_loc'];
	$dDate =  $_SESSION['d_date'];
	$class =  $_SESSION['class'];
	$tickets = $_SESSION['tickets'];
	
    #selecting fligth id using the session
	$sql = "SELECT fid FROM flight WHERE d_loc = '$dloc' AND a_loc = '$aloc' 
	        AND d_date >= '$dDate'";
			
	$result = $connection ->query($sql);		
	
    #selecting the booking id fro the update querry	
	$sql2 = "SELECT bID FROM booking WHERE dDate = '$dDate' AND dLoc='$dloc' 
	         AND aLoc = '$aloc' AND class='$class' AND noOfTickets='$tickets'";		
	
    $result2 = $connection ->query($sql2); 
	$row2 = mysqli_fetch_assoc($result2);
    $bid = $row2["bID"];
    $_SESSION['bid'] = $bid;	
	
	#update query
	if(isset($_POST["submit"]))
	{
		$bid2 = $_POST['bid'];
		$fid = $_POST['flight'];
		
		$query = "UPDATE booking SET fid = '$fid' WHERE bID = '$bid2' ";
		$result3 = $connection ->query($query);
		
		if ($result3) {
			echo "<script>alert('Flight Selected')</script>";
			header("location:payment.php");
			}
		else{
			echo "<script>alert('flight selection Failed')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Available Flights</title>
   <link rel="stylesheet" href="../styles/header and footer.css">
   <link rel="stylesheet" href="../styles/available flights.css">
   <script defer src="/js/contact us form validation.js"></script> 
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
	 <h1> Available Flights</h1>
   </section>

<!--Available us form--> 

   <section class="availbale-flights" method="post">
     <?php
        echo '<form class="flights-frm" method="POST" action="">
		    <label class="output-label">Booking ID: </label>
		    <input type="text" name="bid" value='.$bid.' readonly class="txt-output">
			
		    <label class="output-label">From: </label>
		    <input type="text" name="from" value='.$_SESSION['d_loc'].' readonly class="txt-output">
			
			<label class="output-label">To: </label>
		    <input type="text" name="to" value='.$_SESSION['a_loc'].' readonly class="txt-output">
		
		    <label class="output-label">No of tickets: </label>
		    <input type="text" name="noTickets"  value='.$_SESSION['tickets'].' readonly class="txt-output">
		
		    <label class="output-label">Departure date: </label>
		    <input type="text" name="depdate"  value='.$_SESSION['d_date'].' readonly class="txt-output">
		
		    <label class="output-label">Travel class: </label>
            <input type="text" name="Tclass" value='.$_SESSION['class'].' readonly class="txt-output">';
	 ?>		
			<label class="output-label">Choose a Flight:</label>
            <select name="flight" id="flight">
			<?php
			while($row = mysqli_fetch_array($result))
			{
            ?>				
                <option value="<?php echo $row['fid'] ?>"><?php echo $row['fid'] ?></option>;
			<?php	
			}	
			?>	
            </select>
		
		    <button type="button" class="frm-btn"> <a href="booking1.html"> Previous </a> </button>
			<button type="submit" name="submit" class="frm-btn"> Next </button>
		</form>	
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