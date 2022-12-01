<?php
include 'config.php';

if(isset($_POST["submit"]))
{
	$question = $_POST['question'];
	
   $sql = "INSERT INTO helpDesk(hpID,question) 
           VALUES ('','$question')";
   #check connection 
   if(mysqli_query($connection,$sql))
   {   
        echo"<script>alert('question submitted')</script>";
   }
   else
   {
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
	<meta charset="UTF-8">
	<title>Our supporting Team </title>
	<link rel="stylesheet" href="../styles/help page.css">
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
  <h1>HELP Page</h1>
  </section>
<style>
  body{
    background-image:url(../images/light\ aurora.jpg);
    background-attachment: scroll;
    background-size: cover;
    background-repeat: no-repeat;
    
  }
</style>
<div class="wrapper">
  <h1>how can we help you?</h1>
  <div class="team">
    <div class="team_member">
      <div class="faq_img">
        <img src="../images/FAQ.jpg">
      </div>
      <h2>FAQ</h2>
      <p>dont have a question in your mind at the moment <br>
        but still wanna gurantee your safety with us? <br>.
    then go for our most asked questions  <br></p>
	
	<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
    <label for="questions">most asked questions<p>&#128515</p>:</label>
    <select id="questions" name="faqQ">
    <option value="1"> refund policy?</option>
    <option value="2">quarantine?</option>
    <option value="3">Comfortability?</option>
    <option value="4"> protocols?</option>
    <option value="5">performance?</option>
    <option value="6">reputation?</option>
    <option value="7">safety measures?</option>
    </select>
	<input type="submit" class="btn" name="select" value="Select">
    </form>
	

     <form>
     <textarea id="FAQ"name="FAQ" rows="5" cols="24"></textarea>
     </form>;
	 
    </div>
	
    <div class="team_member">
      <div class="24hour_img">
        <img src="../images/24 hour.jpg">
      </div>
      <h2>24/7 online service</h2>
     
      <p>our supporting team is always there and they've got your back.<br>
    our team members are highly expreienced and they are always available anytime to assist you<br>
and give all the support you need &#128522</p></div>
    <div class="team_member">
      <div class="supportdesk_img">
        <img src="../images/support desk.jpg">
      </div>
      <h2>support desk </h2>
      <p>Got a question of your own <br>
     , send us your questions and we will answer you <br>
in the best possible way we can &#128516</p>
<form method="POST" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
  <label for="support desk"> your question?:</label>
  <textarea id="support_desk" name="question" rows="4" cols="20"></textarea>
  <input type="submit" name="submit" value="submit" class="Btn">
</form >

    </div>
  </div>
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