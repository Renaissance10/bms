<?php
require_once("../functions/function.auth.php"); 
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php");
pass_auth($id);
$arr = select_user($_SESSION['id']);?>
<?php message(); ?>
<?php error(); ?>
<br>
        <div class="form-group row">
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
            <a class="btn btn-outline-success" href="new_route.php?id=<?php echo $id; ?>" role="button">New Route</a>
            </div>
        </div>
<table class="table table-borderless">
    <thead scope="row">
        <th>Name</th>
        <th>Depatures</th>
        <th>Arrivals</th>
        <th>Fare</th>
	</thead>
	<tbody>
        <?php select_route(); ?>
	</tbody>
</table>
</div>
<?php include("../layout/footer.php"); ?>