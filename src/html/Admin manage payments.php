<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Admin section - Payments</title>
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
	 <h1>Payments</h1>
   </section>

<!--- Manage Payment page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons 	 
     <div class="flight-btn">
	    <a href="Admin add flights.html" class="admin-btn"> Add flights </a>
		<a href="Admin manage flights.html" class="admin-btn"> Manage flights </a>
     </div>
	 --->

     <div class="content">
	 
	    <!--- Payment table --->
<?php      
        $sql = "SELECT * 
                FROM  payment";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			            <th> Payment ID </th>
				        <th> Card Name </th>
				       <th> Card Number </th>
				       <th> Card expire month </th>
				       <th> Card expire year </th>
				       <th> cvv </th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['pid'];
              $name = $row['cardname'];
              $number = $row['cardnumber'];
              $month = $row['expmonth'];
			  $year = $row['expyear'];
			  $cvv = $row['cvv'];
              
              echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$number.'</td>
                        <td>'.$month.'</td>
						<td>'.$year.'</td>
						<td>'.$cvv.'</td>
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