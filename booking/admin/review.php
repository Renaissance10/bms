<?php
require_once("../functions/function.auth.php");
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php"); 
pass_auth($id);       
?>
<div class="container mt-3 mb-3">
    <h1>Reviews</h1>
</div>
    <?php message(); ?>
    <?php error(); ?>
    <?php load_review(); ?>       
<?php include("../layout/footer.php"); ?>