<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Admin section - Feedback</title>
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
	 <h1>Manage Feedback</h1>
   </section>

<!--- Manage feedback page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons --->	 
     <div class="flight-btn">
	    <a href="" class="admin-btn"> Contact us threads </a>
		<a href="Admin manage feedback.php" class="admin-btn"> Manage Feedback </a>
     </div>

     <div class="content">
	 
	    <!--- feedback table --->
		
<?php      
        $sql = "SELECT * 
                FROM  feedback";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			            <th> Comment ID </th>
				        <th> Comment </th>
				        <th> Action </th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $fid = $row['f_id'];
              $feedback = $row['feedback'];
              
              echo '<tr>
                        <td>'.$fid.'</td>
                        <td>'.$feedback.'</td>
                        <td><a href="Delete flight.html" class="delete">Delete</a></td>
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