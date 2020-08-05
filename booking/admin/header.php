<?php 
session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Booking MS</title>

    	<!-- Bootstrap -->
    	<link href="../scripts/css/bootstrap-4.0.0.css" rel="stylesheet">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    	<script src="../scripts/js/jquery-3.2.1.min.js"></script>

    	<!-- Include all compiled plugins (below), or include individual files as needed --> 
    	<script src="../scripts/js/popper.min.js"></script>
    	<script src="../scripts/js/bootstrap-4.0.0.js"></script>


  	</head>
  	<body style="background-color: ghostwhite;">
  		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	  		<div class="container mt-2 mb-2">
		  		<a class="navbar-brand" href="../index.php">Booking MS</a>
		  		<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
				aria-expanded="false" aria-label="Toggle navigation"> 
			  		<span class="navbar-toggler-icon"></span>
		  		</button>
		  		<div class="collapse navbar-collapse" id="navbarSupportedContent1">
			  	<ul class="navbar-nav mr-auto">
				  	<li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                  	<li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                  	<li class="nav-item"> <a class="nav-link" href="#"></a> </li>
			  	</ul>
				<ul class="nav navbar-nav navbar-right"> 
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?id=<?php echo $id; ?>">Dashboard</a> </li>
                    <li class="nav-item"><a class="nav-link" href="booking.php?id=<?php echo $id; ?>">Bookings</a> </li>
					<li class="nav-item"><a class="nav-link" href="buses.php?id=<?php echo $id; ?>">Buses</a> </li>
                    <li class="nav-item"><a class="nav-link" href="routes.php?id=<?php echo $id; ?>">Routes</a></li>
                    <li class="nav-item"><a class="nav-link" href="review.php?id=<?php echo $id; ?>">Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?id=<?php echo $id; ?>">Settings</a> </li>
                    <li class="nav-item"><a class="nav-link" href="logout.php?id=<?php echo $id; ?>">Logout</a> </li>
                </ul>
		  		</div>
	 		</div>
  		</nav>
		  <div class="container">