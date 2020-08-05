<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Booking MS</title>

    	<!-- Bootstrap -->
    	<link href="scripts/css/bootstrap-4.0.0.css" rel="stylesheet">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    	<script src="scripts/js/jquery-3.2.1.min.js"></script>

    	<!-- Include all compiled plugins (below), or include individual files as needed --> 
    	<script src="scripts/js/popper.min.js"></script>
    	<script src="scripts/js/bootstrap-4.0.0.js"></script>

  	</head>
  	<body style="background-color: ghostwhite;">
  		<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
	  		<div class="container mt-2 mb-2">
		  		<a class="navbar-brand" href="index.php">Booking MS</a>
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
                    <li class="nav-item"><a class="nav-link" href="help.php">Help</a> </li>
					<?php if (isset($_SESSION['id'])) { ?>
					<li class="nav-item dropdown"> 
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
						 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <?php echo $_SESSION['code']; ?></a>
          				<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
							<a class="dropdown-item" href="admin/dashboard.php?id=<?php echo $_SESSION['code'];?>">Profile</a>
            			<div class="dropdown-divider"></div>
            			<a class="dropdown-item" href="accounts/logout.php?id=<?php echo $_SESSION['code'];?>">Logout</a> </div>
        			</li>
                    <?php } else { ?>
						<li class="nav-item"><a class="nav-link" href="login.php">Login</a> </li>
                    <?php } ?>
                </ul>
		  		</div>
	 		</div>
  		</nav>