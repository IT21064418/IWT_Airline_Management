<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Galaxy Airways | Admin section - Flights</title>
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
	 <h1>Manage Flights</h1>
   </section>

<!--- Manage flight page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons --->	 
     <div class="flight-btn">
	    <a href="Admin add flights.php" class="admin-btn"> Add flights </a>
		<a href="Admin manage flights.php" class="admin-btn"> Manage flights </a>
     </div>

     <div class="content">
	 
	    <!--- Flight table --->
		
		<?php      
        $sql = "SELECT * 
                FROM  flight";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			           <th> Flight ID </th>
				       <th> Dep location </th>
				       <th> Dep Date </th>
				       <th> Dep time </th>
				       <th> Arriving location </th>
				       <th> Arrival date </th>
				       <th> Arrival time </th>
				       <th colspan = "2">Action</th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $fid = $row['fid'];
              $dloc = $row['d_loc'];
              $d_date = $row['d_date'];
              $dtime = $row['d_time'];
			  $aloc = $row['a_loc'];
			  $adate = $row['a_date'];
			  $atime = $row['a_time'];
              
              echo '<tr>
                        <td>'.$fid.'</td>
                        <td>'.$dloc.'</td>
                        <td>'.$d_date.'</td>
                        <td>'.$dtime.'</td>
						<td>'.$aloc.'</td>
						<td>'.$adate.'</td>
						<td>'.$atime.'</td>
						<td><a href="edit flight.html" class="update">update</a></td>
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