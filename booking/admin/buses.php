<?php
require_once("../functions/function.auth.php"); 
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php");
pass_auth($id);?>
<?php message(); ?>
<?php error(); ?>
<br>
    <div class="form-group row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3">
        <a class="btn btn-outline-success" href="new_bus.php?id=<?php echo $id; ?>" role="button">New Bus</a>
        </div>
    </div>
<table class="table table-borderless">
    <thead scope="row">
        <th>Name</th>
        <th>Number</th>
        <th>Driver</th>
        <th>Route</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Class</th>
	</thead>
	<tbody>
        <?php select_bus();?>
	</tbody>
</table>
</div>
<?php include("../layout/footer.php"); ?>