<?php
 session_start();
 include 'config.php';
  $id = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $ucountry = $_SESSION['ucountry'];
  $uphone = $_SESSION['phone'];
  $uemail = $_SESSION['email'];
  $address = $_SESSION['address'];
  #update query
	if(isset($_POST["submit"]))
	{
		$uid = $_POST['userid'];
		$uname = $_POST['username'];
		$uscountry = $_POST['country'];
		$usphone = $_POST['userNumber'];
		$usemail = $_POST['userEmail'];
		$uaddress = $_POST['address'];
		
		$sql = "UPDATE register SET username = '$uname',country = '$uscountry',address = '$uaddress',phone = '$usphone',email = '$usemail' 
		WHERE user_id = '$uid' ";
		$result = $connection ->query($sql);
		
		if ($result) {
			echo "<script>alert('User account updated')</script>";
			header("location:user profile.php");
			}
		else{
			echo "<script>alert('User account update failed')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Galaxy Airways | Update User Profile</title>
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
	 
	 
	 <h1>EDIT USER PROFILE</h1>
	</section>
	 
	 
	 <!-- Body -->
	 
  
<link rel="stylesheet" href="..\styles\update user profile.css">  
  <div class="main">   
		<div class="user-profile">
		
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="fileToUpload">
				<div class="profile-pic" style="background-image: url('../images/avatar.png')">
					<span class="glyphicon glyphicon-camera"></span>
					<span>Change Image</span>
				</div>
		
			</label>
			
			<input type="File" name="fileToUpload" id="fileToUpload">
		</form>			
				
		<?php echo'<div class="id">'.$id.'</div>'; ?>
		
	    <?php
		echo '<form method="POST" action="">
            
            User ID: <br><input type="text" name="userid" value="'.$id.'" readonly>
			<br><br>            
			
			Full Name: <br><input type="text" name="username" value="'.$uname.'" required/>
			<br><br>
		
			Country:<br><input type="text" name="country" value="'.$ucountry.'" required/>
			<br><br>
		
			Email: <br><input type="email" name="userEmail" value="'.$uemail.'"/>
			<br><br>
		
			Mobile Number: <br><input name="userNumber" value="'.$uphone.'" required/>
			<br><br>
		
			Address: <br><input type="text" name="address" value="'.$address.'" required/>
			<br><br>
		
			<!--DOB: <br><input type="date" name="userDateofBirthDay" placeholder="Enter Your DOB" required/>
			<br><br>-->
			
			<input type="submit" value="UPDATE" name="submit" class="Btn">
		    <input type="reset" value="Clear" class="Btn">
		    <a href="../html/user profile.html"><input type="button" value="CANCEL" class="Btn"></a>
		</form>';
		?>
		
	<br>
	<br>
	<br>
 
		
		
</div>
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