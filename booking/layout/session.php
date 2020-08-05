<?php 

function message() {
    if (isset($_SESSION['message'])) {
        echo "<div class=\"alert alert-success\" role=\"alert\">";
        echo $_SESSION['message'];
        echo "</div>";
        $_SESSION['message'] = null;
    } 
}

function error() {
    if (isset($_SESSION['error'])) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
        echo $_SESSION['error'];
        echo "</div>";
        $_SESSION['error'] = null;
    }
}