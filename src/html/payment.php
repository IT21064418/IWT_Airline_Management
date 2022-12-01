<?php
session_start();
include_once 'config.php';


if (isset($_POST ['submit']))
{
#set feilds name 
      $card_name = $_POST["cardname"];
	  $_SESSION['cname'] = $_POST["cardname"];
      $card_num = $_POST["cardnumber"];
      $card_exp_mon = $_POST["expmonth"];
      $card_exp_year = $_POST["expyear"];
      $card_cvv = $_POST["cvv"];
      
      $sql = "INSERT INTO payment(pid,cardname,cardnumber,expmonth,expyear,cvv) 
      VALUES ('','$card_name','$card_num','$card_exp_mon','$card_exp_year','$card_cvv')";
#check connection 
if(mysqli_query($connection,$sql))
{
   echo"<script>alert('Details Are Correct')</script>";
   header("location:payment conf new.php");
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
    <title>Galaxy AirWays</title>
    <!-- custom css file link  -->
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
    <h1>PAYMENT PORTAL</h1>
    </section>
    </section>

<body>

    <link rel="stylesheet" href="../styles/payment.css">    

<div class="cont">
</br>
    <div class="card">
<!----card front---->
        <div class="frnt">
            <div class="image1">
                <img src="../images/chip.png" alt="chip">
            </div>
                <div class="image2">
                <img src="../images/visa.png" alt="visa">
                <img src="../images/master.png" alt="master">
                <img src="../images/amex.png" alt="amex">
            </div> 
            </br> </br> </br>
            
            <div class="crdNo">################</div>
            <div class="flex">
                <div class="Box">
                    <span>card holder</span>
                    <div class="name">full name</div>
                </div>
                <div class="Box">
                    <span>expires</span>
                    <div class="expir">
                        <span class="expM">mm</span>
                        <span class="expYr">yy</span>
                    </div>
                </div>
            </div>
        </div>
<!----card back---->
        <div class="Back">
            <div class="Strip"></div>
            <div class="Box">
                <span>cvv</span>
                <div class="CVV"></div>
                <img src="../images/visa.png" alt="visa">
                <img src="../images/master.png" alt="master">
                <img src="../images/amex.png" alt="amexx">
            </div>
        </div>

    </div>
<!----form---->
    <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="POST">

        <div class="input">
            <span>card number</span>
            <input name="cardnumber" type="text" maxlength="16" class="number-in" required>
        </div>
        <div class="input">
            <span>card holder</span>
            <input type="text" name="cardname" class="name-in" required>
        </div>
        <div class="flex">
            <div class="input">
                <span>expiry momth</span>
                <select name="expmonth" class="month" required>
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="input">
                <span>expiry year</span>
                <select name="expyear" class="year" required>
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="input">
                <span>cvv</span>
                <input name="cvv" type="text" maxlength="4" class="CVV-in" required>
            </div>
        </div> </br>
        <button type="submit" name="submit" class="Btn"> NEXT </button>
        <button type="button" class="Btn"> <a  href="Available-flights.html"> BACK </a></button>
        <input type="reset" value="CLEAR" class="Btn">
    </form>

</div>    

<!----java script---->
<script src="../js/payment.js"></script>


</body>
</html>

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