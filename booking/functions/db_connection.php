<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","booking");
global $conn;
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
	die("could not connect: " .
	   mysqli_connect_error() .
	   "(" . mysqli_connect_errno() . ")" 
	   );
}


