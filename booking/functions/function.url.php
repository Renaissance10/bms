<?php
    function redirect($url) {
        header( "Location:{$url}" );
        exit;
    }
    
    function image_upload($image, $location) {
        $name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        if (isset($name) && !empty($name)) {
            if (move_uploaded_file($tmp_name, $location.$image)) {
                $_SESSION['message'] = "Uploaded";
            }
        } else {
            $_SESSION['error'] = "Could not upload image: " . $error;
        }
    }
