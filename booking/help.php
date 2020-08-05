<?php
require("functions/function.database.php");
require("functions/db_connection.php"); 
include("layout/header.php");
include("layout/session.php");
if (isset($_POST['submit'])) { 
        post_review();    
}
?>
<div class="container mt-3 mb-3">
    <h1>Help</h1>
<form action="help.php" method="post" class="form-horizontal" role="form">
<p>Please tell us what we can do to increase user experience on our site</p>
<?php message(); ?>
<?php error(); ?>
    <div class="form-group"> 
        <label for="name" class="col-sm-2 control-label">Name:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="name" class="form-control" id="name" placeholder="Allen W Peters">
        </div>
    </div> 
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="email" class="form-control" id="email" placeholder="allen@mail.com">
        </div>
    </div>
    <div class="form-group"> 
        <label for="opinion" class="col-sm-2 control-label">Opinion/Question:</label> 
        <div class="col-sm-5"> 
            <input type="text" name="opinion" class="form-control" id="opinion" placeholder="Head topic">
        </div>
    </div>
    <div class="form-group"> 
        <label for="content" class="col-sm-2 control-label">Content:</label>
        <div class="col-sm-5">  
            <textarea name="textarea" id="content" placeholder="Topic content" class="form-control" rows="8"></textarea> 
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5"> 
            <button type="submit" name="submit" class="btn btn-default">Post</button> 
        </div> 
   </div> 
</form>   
<?php include("layout/footer.php"); ?>