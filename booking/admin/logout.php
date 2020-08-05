<?php
session_start();
$_SESSION['id']=="";
$_SESSION['code']=="";
session_unset();
echo "You have successfully logout";
header("Location:../index.php")
?>
