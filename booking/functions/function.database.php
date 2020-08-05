<?php
require_once("function.auth.php");

    function select_user($sessid) {
        global $conn;
        $sql = "SELECT * FROM users WHERE id={$sessid}";
        $query = mysqli_query( $conn, $sql);
        if($query ) {
            while ($query) {
                $arr = mysqli_fetch_assoc($query); 
                $id = $arr['id'];
                $name = $arr['name'];
                $user = $arr['username'];
                $email = $arr['email'];
                $phone = $arr['phone'];
                $image = $arr['image'];
                $pass = $arr['password'];
                mysqli_free_result($query);
                break;
            }
        } else {
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
        return array($id, $name, $user, $email, $phone, $image, $pass);
    }

    function create_user() {
        global $conn;
        $name = $_POST['name'];
        $user = $_POST['username'];
        $email = str_replace("@", "&#64", $_POST['email']);
        $phone = $_POST['phone'];
        $ext = strchr($_FILES['image']['type'], "/");
        $image = "profile" . $user . str_replace("/", ".", $ext);
        image_upload($image, "images/");
        $created_at  = time();
        $pass = password_encrypt($_POST['pass2']);
            $sql = " INSERT INTO users ( ";
            $sql .= " name, email, username, phone, password, image, role, created_at ";
            $sql .= " ) VALUES ( ";
            $sql .= " '{$name}' , '{$email}' , '{$user}', '{$phone}', '{$pass}' , '{$image}', '', null ";
            $sql .= " )";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['message'] = "User created successfully";
                mysqli_free_result($conn, $query);
                header("Location:login.php");
            }else{
                $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
            }
    }

    function update_user() {
        global $conn;
        $id = $_GET['id'];
        $name = $_POST['name'];
        $user = $_POST['username'];
        $email = str_replace("@", "&#64", $_POST['email']);
        $phone = $_POST['phone'];
        $ext = strchr($_FILES['image']['type'], "/");
        $image = "profile" . $user . str_replace("/", ".", $ext);
        image_upload($image, "../images/");
        $bio = $_POST['bio'];
        $pass = $_POST['pass2'];
            $sql = "UPDATE users SET ";
            $sql .= "name = '{$name}', ";
            $sql .= "email = '{$email}', ";
            $sql .= "username = '{$user}', ";
            $sql .= "phone = '{$phone}', ";
            $sql .= "password = '{$pass}', ";
            $sql .= "image = '{$image}', ";
            $sql .= "bio = '{$bio}', ";
            $sql .= "WHERE id = '{$id}' ";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['message'] = "User updated successfully";
                mysqli_free_result($query);
                header("Location:{$_SERVER['REQUEST_URI']}");
            }else{
                $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
            }
        }

    function post_review() {
        global $conn;
        $name = $_POST['name'];
        $head = $_POST['opinion'];
        $content = $_POST['textarea'];
        $time = time();
        $email = str_replace("@", "&#64", $_POST['email']);
        $sql = "INSERT INTO review ( ";
        $sql .= " name, email, head, content, timestamp ";
        $sql .= " ) VALUES ( ";
        $sql .= " '{$name}' , '{$email}' , '{$head}', '{$content}', '{$time}' ";
        $sql .= " )";
        $query = mysqli_query($conn, $sql);
        if ($query && mysqli_affected_rows($conn)) {
            $_SESSION['message'] = "Post sent successfully";
            header("Location:help.php");
            mysqli_free_result($query);
        }else{
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function load_review() {
        global $conn;
        $result = "";
        $sql = "SELECT * FROM review ";
        $query = mysqli_query( $conn, $sql);
        if($query ) {
            while ($arr = mysqli_fetch_assoc($query)) {
                $result .= "<div class=\"container\"><h3> ";
                $result .= $arr['head']; 
                $result .= "</h3><p>";
                $result .= ucfirst($arr['content']);
                $result .= " </p>By: ";
                $result .= ucwords($arr['name']) . " ( ";
                $result .= strtolower($arr['email']); 
                $result .= " ) On " ;
                $result .= date("d/m/Y H:i:s", (int)$arr['timestamp']);
                $result .= "</div><hr>";
            }
            echo $result; 
        } else {
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function select_booking() {
        global $conn;
        $result = "";
        $sql = "SELECT * FROM book";
        $query = mysqli_query( $conn, $sql);
        if($query ) {
            while ($arr = mysqli_fetch_assoc($query)) {
                $result .= "<tr>";
                $result .= "<td> {$arr['name']}</td>";
                $result .= "<td> {$arr['route']} </td>";
                $result .= "<td> {$arr['bus']} </td>";
                $result .= "<td> {$arr['class']} </td>";
                $result .= "<td> {$arr['luggage']} </td>";
                $result .= "<td> {$arr['seat']} </td>";
                $result .= "<td> {$arr['date']} </td>";
                $result .= "<td> {$arr['time']} </td>";
                $result .= "<td> {$arr['address']} </td>";
                $result .= "<td> {$arr['email']} </td>";
                $result .= "<td> {$arr['phone']} </td>";
                $result .= "</tr>";
            }
            echo $result;
        } else {
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function add_booking() {
        global $conn;
        $name = "" . $_POST['fName'] . " " . $_POST['mName'] . " " . $_POST['lName'];
        $route = $_POST['route'];
        $bus = $_POST['bus'];
        $luggage = $_POST['luggage'];
        $seat = $_POST['seat'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $class = $_POST['class'];
        $email = str_replace("@", "&#64", $_POST['email']);
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

            $sql = " INSERT INTO book ( ";
            $sql .= " id, name, route, bus, luggage, seat, phone, time, class, gender, email, date, address ";
            $sql .= " ) VALUES ( ";
            $sql .= " NULL, '{$name}', '{$route}', '{$bus}', '{$luggage}', '{$seat}', '{$phone}', ";
            $sql .= " '{$time}', '{$class}', '{$gender}', '{$email}', '{$date}', '{$address}' ";
            $sql .= " )";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['message'] = "Booking created successfully";
                mysqli_free_result($query);
                header("Location:index.php");
            }else{
                $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
            }
    }

    function select_bus() {
        global $conn;
        $result = "";
        $sql = "SELECT * FROM buses";
        $query = mysqli_query( $conn, $sql);
        if($query ) {
            while ($arr = mysqli_fetch_assoc($query)) {
                $result .= "<tr>";
                $result .= "<td> {$arr['name']} </td>";
                $result .= "<td> {$arr['number']} </td>";
                $result .= "<td> {$arr['driver']} </td>";
                $result .= "<td> {$arr['route']} </td>";
                $result .= "<td> {$arr['dept']} </td>";
                $result .= "<td> {$arr['arrival']} </td>";
                $result .= "<td> {$arr['class']} </td>";
                $result .= "</tr>";
            }
            echo $result;
        } else {
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function add_bus($id) {
        global $conn;
        $name = $_POST['name'];
        $number = $_POST['number'];
        $driver = $_POST['driver'];
        $class = $_POST['class'];
        $route = $_POST['route'];
        $dept = $_POST['dept'];
        $arrival = $_POST['arrival'];
        $fare = $_POST['fare'];

        $sql = " INSERT INTO buses ( ";
        $sql .= " id, name, number, driver, class, route, dept, arrival, fare ";
        $sql .= " ) VALUES ( ";
        $sql .= " NULL, '{$name}', '{$number}', '{$driver}', '{$class}', '{$route}', '{$dept}', '{$arrival}', '{$fare}' ";
        $sql .= " )" ;
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $_SESSION['message'] = "Bus added successfully";
            mysqli_free_result($query);
            header("Location:buses.php?id={$id}");
        }else{
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function select_route() {
        global $conn;
        $result = "";
        $sql = "SELECT * FROM routes";
        $query = mysqli_query( $conn, $sql);
        if($query ) {
            while ($arr = mysqli_fetch_assoc($query)) {
                $result .= "<tr>";
                $result .= "<td> {$arr['name']} </td>";
                $result .= "<td> {$arr['dept']} </td>";
                $result .= "<td> {$arr['arrival']} </td>";
                $result .= "<td> {$arr['fare']} </td>";
                $result .= "</tr>";
            }
            echo $result;
        } else {
            $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
        }
    }

    function add_route($id) {
        global $conn;
        $name = "" . $_POST['start'] . "-" . $_POST['end'];
        $dept = "" . $_POST['early'] . "-" . $_POST['late'];
        $arrival = "" . $_POST['begin'] . "-" . $_POST['finish'];
        $fare = "" . $_POST['low'] . "-" . $_POST['high'];

            $sql = " INSERT INTO routes ( ";
            $sql .= " id, name, dept, arrival, fare";
            $sql .= " ) VALUES ( ";
            $sql .= " NULL, '{$name}', '{$dept}', '{$arrival}', '{$fare}' ";
            $sql .= " )";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['message'] = "Booking created successfully";
                mysqli_free_result($query);
                header("Location:routes.php?id={$id}");
            }else{
                $_SESSION['error'] = "Could not get data:" . mysqli_error($conn);
            }
    }