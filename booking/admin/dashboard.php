<?php
require_once("../functions/function.auth.php"); 
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php");
pass_auth($id);
$arr = select_user($_SESSION['id']);
?>
<?php message(); ?>
<?php error(); ?>
<table class="table table-borderless">
	<thead scope="row">
		<td></td>
		<td colspan="2">
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
			<img class="rounded-circle" alt="140x140" style="width: 200px; height: 200px;" 
			src="../images/<?php echo $arr[5]; ?>" data-holder-rendered="true"></div>
		</td>
	</thead>
    <tbody>
		<tr>
			<td>Name:</td>
			<td><?php echo $arr[1]; ?></td>
		</tr>
		<tr>
			<td>Username:</td>
			<td><?php echo $arr[2]; ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $arr[3]; ?></td>
		</tr>
		<tr>
			<td>Phone:</td>
		    <td><?php echo $arr[4]; ?></td>
		</tr>
    </tbody>
</table>
</div>
<?php include("../layout/footer.php"); ?>