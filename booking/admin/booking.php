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
<table class="table table-borderless">
    <thead scope="row">
        <th>Name</th>
        <th>Route</th>
        <th>Bus</th>
        <th>Class</th>
        <th>Luggage</th>
        <th>Seat</th>
        <th>Date</th>
        <th>Time</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
	</thead>
	<tbody>
        <?php $arr = select_booking();?>
	</tbody>
</table>
</div>
<?php include("../layout/footer.php"); ?>