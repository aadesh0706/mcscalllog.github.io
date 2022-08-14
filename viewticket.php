<?php
include_once("DBConfig.php");
if(isset($_GET['viewticket']))
{
//getting id from url
if(isset($_GET['ticketid']))
{
$id = $_GET['ticketid'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tblgenerateticket WHERE ticketid=$id");
while($res = mysqli_fetch_array($result))
{
	$ticketid = $res['ticketid'];	
	$productname = $res['productname'];
	$customername = $res['customername'];
    $customermobno = $res['customermobno'];
	$problemdetails = $res['problemdetails'];
	$problemsolution = $res['solutiondetails'];
}
}
else
{
echo "Invalid Data.";
}
}
else
{
echo "Invalid Data.";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Microcare Call Log System</title>
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
            <h1>Microcare Call Log System</h1>
            <p>Listening to you, and answering with software.</p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">Microcare Computer Systems</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Call Log
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="generateticket.php">Generate Ticket</a>
                            <a class="dropdown-item" href="viewticket.php">View Ticket</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Office Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-sm-8 order-sm-2">
                <h2>View Ticket</h2>
                <div style="border:groove; padding:10px; margin-bottom:10px;">
                <form method="get" action="viewticket.php">                    
                    <input type="text" name="ticketid" class="form-group form-control" placeholder="Enter your ticket id" required=""/>
                    <input type="submit" class="btn btn-primary" name="viewticket"/>
                </form>
                    </div>					
					<div>
					<?php
					if(isset($_GET['viewticket']))
					{
						if(empty($ticketid))
						{
							echo "No Record Found";
						}
						else
						{
						echo "<fieldset><legend>Ticket Details</legend>";
					    echo "<b>Ticket ID:</b> $ticketid<br>";
					    echo "<b>Product Name:</b> $productname<br>";
					    echo "<b>Customer Name:</b> $customername<br>";
					    echo "<b>Customer Mobile No:</b> $customermobno<br>";
					    echo "<b>Problem Details:</b> $problemdetails<br>";
					    echo "<b>Solution Given:</b> $problemsolution<br>";
					    echo "<b>Ticket Genration Date:</b> $ticketdate<br>";
						echo "</fieldset>";
						}
						
					}
					?>
					</div>					
            </div>
            <div class="col-sm-4">
                <h2>About System</h2>
                <h5>24X7 Support</h5>
                <img src="images/about-system.png" class="img-fluid" />
                <p>This System is designed and developed for Computer Service Centers. This Software is Integrated, Multi-user, Online and Modular in structure. Ii will run on a web environment.</p>
                <h3>Navigation</h3>
                <p>Important Links</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Office Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="generateticket.php">Generate Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewticket.php">View Ticket</a>
                    </li>
                </ul>
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
