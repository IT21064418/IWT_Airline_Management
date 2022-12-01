<?php
include 'config.php';


if(isset($_POST["submit"]))
	{
		##set feilds name
		$sName = $_POST['sName'];
		$sEmail = $_POST['staffemail'];
		$sPassword = $_POST['staffpassword'];
		$sCpassword = $_POST['staffpassword2'];
		
		$sql = "INSERT INTO staff(staff_ID,sName,sEmail,password,cPassword)
                VALUES ('','$sName','$sEmail','$sPassword','$sCpassword')";

#checking connection		
       if(mysqli_query($connection,$sql))
       {   
            echo"<script>alert('user added succesfull')</script>";
       }
       else{
            echo"<script>alert('Error in your connection')</script>";
       }
		
	}
?>


<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Admin section - Users</title>
   <link rel="stylesheet" href="../styles/Admin.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="../images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links" >
		    <ul>
			    <li><a href="Admin manage feedback.php">MANAGE FEEDBACK</a></li>
				<li><a href="Admin manage users.php">MANAGE USERS</a></li>
				<li><a href="Admin manage payments.php">MANAGE PAYMENTS</a></li>
				<li><a href="Admin manage flights.php">FLIGHTS</a></li>
			</ul>	
		</div>		
	 </nav>
	 <h1>Add Staff Accounts</h1>
   </section>

<!--- Add staff account page content --->    
    
   <section class="admin-content">
   
     <!--- Admin buttons --->
     <div class="flight-btn">
	    <a href="Admin add staff accounts.php" class="admin-btn"> Add Staff Accounts </a>
		<a href="Admin manage users.php" class="admin-btn"> Customer Accounts </a>
		<a href="Admin user accounts-staff.php" class="admin-btn"> Manage Staff Accounts </a>
     </div>
     	 
     <div class="content">
	 
	     <!--- add staff account form --->
	    <form class="add-account" method="POST">
		    <label class="input-label">Enter Staff member Name: </label>
		    <input type="text" name="sName" placeholder="ex:- Santhusha Senanayake" class="txt-input" required>
			
			<label class="input-label">Enter email: </label>
		    <input type="email" name="staffemail" placeholder="Enter email" class="txt-input" required>
								
		    <label class="input-label">Enter password: </label>
		    <input type="password" name="staffpassword" placeholder="Enter password" class="txt-input" required>
			
			<label class="input-label">Re Enter the password: </label>
		    <input type="password" name="staffpassword2" placeholder="Re enter the password" class="txt-input" required>
		
		    <button type="reset" class="admin-btn"> Clear </button>
		    <button type="submit" name = "submit" class="admin-btn"> Add User </button>
     </div>	
	 
   </section>
   
</body>
</html>