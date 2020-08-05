<?php
require_once("functions/db_connection.php");
require_once("functions/function.auth.php");
require_once("functions/function.database.php");
require_once("functions/function.url.php");
include("layout/header.php");
include("layout/session.php");
if (isset($_POST['submit'])) {
    if ($_POST['pass1'] === $_POST['pass2']) {
        create_user();
    } else {
        echo "Error in Registration";
    }
}
?>
<div class="container mt-3 mb-3">
    <h1>Register</h1>
</div>
<?php message(); ?>
<?php error(); ?>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="name" class="col-sm-2 control-label">Name:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="name" class="form-control" id="name" placeholder="Allen W Peters">
        </div>
    </div>
    <div class="form-group"> 
        <label for="username" class="col-sm-2 control-label">Username:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="username" class="form-control" id="username" placeholder="Allen45">
        </div>
    </div> 
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="email" class="form-control" id="email" placeholder="allen@mail.com">
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Phone:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="phone" class="form-control" id="phone" placeholder="012-345-6789">
        </div>
    </div>
    <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Profile image</label>
        <div class="col-sm-5"> 
            <input type="file" name="image" id="image" placeholder="image">
        </div>
    </div>
    <div class="form-group"> 
        <label for="pass1" class="col-sm-2 control-label">Password:</label> 
        <div class="col-sm-5"> 
            <input type="password" name="pass1" class="form-control" id="pass1" placeholder="********">
        </div>
    </div>
    <div class="form-group"> 
        <label for="pass2" class="col-sm-2 control-label">Password(Retype):</label> 
        <div class="col-sm-5"> 
            <input type="password" name="pass2" class="form-control" id="pass2" placeholder="********">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5"> 
            <button type="submit" name="submit" class="btn btn-default">Register</button> 
        </div> 
   </div>
</form>
<?php include("layout/footer.php"); ?>