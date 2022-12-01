<?php
include 'config.php';
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
	 <h1>Customer Accounts</h1>
   </section>

<!--- Customer user account page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons --->	 
     <div class="flight-btn">
	    <a href="Admin add staff accounts.php" class="admin-btn"> Add Staff Accounts </a>
		<a href="Admin manage users.php" class="admin-btn"> Customer Accounts </a>
		<a href="Admin user accounts-staff.php" class="admin-btn"> Manage Staff Accounts </a>
     </div>

     <div class="content">
	 
	    <!--- customer table --->
		
<?php      
        $sql = "SELECT * 
                FROM  register";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			            <th> Customer ID </th>
				        <th> Name </th>
				        <th> Country </th>
				        <th> Address </th>
				        <th> Email </th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $cid = $row['user_id'];
              $name = $row['username'];
			  $country = $row['country'];
              $address = $row['address'];
			  $email = $row['email'];
              
              echo '<tr>
                        <td>'.$cid.'</td>
                        <td>'.$name.'</td>
                        <td>'.$country.'</td>
						<td>'.$address.'</td>
						<td>'.$email.'</td>
                    </tr>';                       
            }
			echo '</tbody>
			      </table>';
        }
    ?>		
     </div>	 
   </section>
   
</body>
</html>