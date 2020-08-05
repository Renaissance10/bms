<?php
function login ($username, $password) {
    global $conn;
    $query = "SELECT * ";
    $query .= " FROM users ";
    $query .= " WHERE ";
    $query .= " username = '{$username}' ";
    $result = mysqli_query($conn,$query);
    if ($result) {
        while ($db_data = mysqli_fetch_array($result)) {
            $db_id = $db_data['id'];
            $db_name = $db_data['username'];
            $db_pass = $db_data['password'];
            $db_role = $db_data['role'];
            if ($username == "{$db_name}" && password_check($password, $db_pass)) {
                $_SESSION['id'] = $db_id; 
                $sess_id = $_SESSION['id'];
                $_SESSION['code'] = $db_name; 
                $sess_name= $_SESSION['code'];
                    $_SESSION['message'] = "Welcome {$sess_name}";
                    header("Location:admin/dashboard.php?id={$sess_name}");
            } else {
                $_SESSION['error'] = "Username/Password don't match";
            }
        }
    } else {
        $_SESSION['message'] = "Try again in a short while";
    }
}
    
function pass_auth($id) {
    $sessid = $_SESSION['id'];
    $checkid = $_SESSION['code'];
    if ($sessid !== null || $sessid !== "" && $checkid !== null || $checkid !== "") {
        if ($id !== $checkid) {
            $_SESSION['message'] = "Please Log in";
            header("Location:../login.php");
        }
    } else {
        $_SESSION['message'] = "Please Login";
        header("Location:../login.php");
    }
}

function password_encrypt($password) {
	$hash_format = "$2y$10$";
	$salt_length = 22;
	$salt = generate_salt($salt_length);
	$format_and_salt = $hash_format . $salt;
	$hash = crypt($password ,$format_and_salt);
	return $hash;
}

function generate_salt($length) {
	$unique_random_string = md5(uniqid(mt_rand(), true));
	$base64_string = base64_encode($unique_random_string);
	$modified_base64_string = str_replace('+','.',$base64_string);
	$salt = substr($modified_base64_string, 0, $length);
	return $salt;
}
		
function password_check($password, $checked_hash) {
	$hash = crypt($password, $checked_hash);
		if ($hash === $checked_hash) {
			return true;
		} else {
			return false;
		}
}