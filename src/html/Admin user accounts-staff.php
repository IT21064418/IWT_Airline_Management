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
	 <h1>Manage Staff Accounts</h1>
   </section>

<!--- Manage staff user account page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons --->	 
     <div class="flight-btn">
	    <a href="Admin add staff accounts.php" class="admin-btn"> Add Staff Accounts </a>
		<a href="Admin manage users.php" class="admin-btn"> Customer Accounts </a>
		<a href="Admin user accounts-staff.php" class="admin-btn"> Manage Staff Accounts </a>
     </div>

     <div class="content">
	 
	<!--- staff user accounts table --->
		
	<?php      
        $sql = "SELECT * 
                FROM  staff";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			            <th> Staff ID </th>
				        <th> Name </th>
				        <th> Email </th>
				        <th> Action </th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $sid = $row['staff_ID'];
              $name = $row['sName'];
              $email = $row['sEmail'];
              
              echo '<tr>
                        <td>'.$sid.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
					    <td><a href="" class="delete">Delete</a></td>
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