 <?php
include_once("DBConfig.php");

$result = mysqli_query($mysqli, "SELECT * FROM tblgenerateticket"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Admin Panel - Microcare Call Log System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="jumbotron text-center" style="margin-bottom: 0">
            <h1>ADMIN PANEL - Microcare Call Log System</h1>
            <p>Listening to you, and answering with software.</p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
					<li class="nav-item">
                        <a class="nav-link" href="adminmanageticket.php">Manage Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <h2>View Ticket</h2>
                
                <table class="table table-hover table-responsive"> 
	<tr>
		<th>Ticket ID</th>		
		<th>Product Name</th>
		<th>Customer Name</th>
		<th>Customer Mobile</th>
		<th>Problem Details</th>
		<th>Solution</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['ticketid']."</td>";		
		echo "<td>".$res['productname']."</td>";
        echo "<td>".$res['customername']."</td>";		
		echo "<td>".$res['customermobno']."</td>";
		echo "<td>".$res['problemdetails']."</td>";
		echo "<td>".$res['solutiondetails']."</td>";
		echo "<td><a href=\"admineditticket.php?id=$res[ticketid]\">Edit</a></td>";
		echo "<td><a href=\"admindeleteticket.php?id=$res[ticketid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		echo "</tr>";		
	}
	?>
	</table>
               
            </div>                    
                <hr class="d-sm-none">
            </div>            
        </div>
    </div>

    <footer>
        <div class="jumbotron text-center" style="margin-bottom: 0">
            <p>&copy; 2021 All rights reserved. Microcare Computer Systems</p>
        </div>
    </footer>

</body>
</html>
