<?php
require("functions/db_connection.php");
include("functions/function.auth.php");
include("functions/function.url.php");
include("layout/header.php");
include("layout/session.php");
$username = "";
$password = "";
if (isset($_POST["submit"])) {
	if (isset($username) && isset($password)) {
		$username = trim($_POST["name"]);
		$password = trim($_POST["password"]);	
		login ($username,$password);
        }
    }
?>
<div class="row justify-content-center text-center">
<form class="form-signin" action="login.php" method="post" role="form">
    <img class="mb-4 mt-5" src="scripts/icons/avatar.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <?php message(); ?>
    <?php error(); ?>
    <label for="firstname" class="sr-only">Username</label>
    <input input type="text" name="name" class="form-control" id="firstname"  
    placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
    <a href="register.php" class="btn btn-default">Register</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
</div>
<?php include("layout/footer.php"); ?>