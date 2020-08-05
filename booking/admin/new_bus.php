<?php
require_once("../functions/function.auth.php"); 
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php");
pass_auth($id);
if(isset($_POST['submit'])){
    add_bus($id);
}
?>
<?php message(); ?>
<?php error(); ?>
<div class="row mt-3">
        <div class="col-md-10">
            <?php if(isset($success)): ?>
            <div class="alert-success fade-out-5"><?= $success; ?></div>
            <?php endif; ?>
            <?php if(isset($message)): ?>
            <div class="alert-danger fade-out-5"><?= $message; ?></div>
            <?php endif; ?>
            
            <form method="post" class="form-horizontal" role="form" action="">
                <div class="panel panel-default" >
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-sm-4">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" placeholder="Bus Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Number</label>
                            <div class="col-sm-8">
                                <input type="text" name="number" placeholder="Bus Number" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Driver</label>
                            <div class="col-sm-8">
                                <input type="text" name="driver" placeholder="Driver Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Class</label>
                            <div class="col-sm-8">
                                <input type="text" name="class" placeholder="Bus Class" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Route:</label>
                            <div class="col-sm-8">
                                <select name="route" class="form-control">
                                    <option value="">Route</option>
                                    <option value="Dar-Arusha">Dar-Arusha</option>
                                    <option value="arusha-Dar">Arusha-Dar</option>
                                    <option value="Dar-Moro">Dar-Moro</option>
                                    <option value="Moro-Dar">Moro-Dar</option>
                                    <option value="Dar-Dodoma">Dar-Dodoma</option>
                                    <option value="Dodoma-Dar">Dodoma-Dar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Depature:</label>
                            <div class="col-sm-8">
                                <select name="dept" class="form-control">
                                    <option value="">Departure</option>
                                    <option value="0500">0500</option>
                                    <option value="0600">0600</option>
                                    <option value="0700">0700</option>
                                    <option value="0800">0800</option>
                                    <option value="0900">0900</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Arrival:</label>
                            <div class="col-sm-8">
                                <select name="arrival" class="form-control">
                                    <option value="">Arrival</option>
                                    <option value="1700">1700</option>
                                    <option value="1800">1800</option>
                                    <option value="1900">1900</option>
                                    <option value="2000">2000</option>
                                    <option value="2100">2100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Fare:</label>
                            <div class="col-sm-8">
                                <select name="fare" class="form-control">
                                    <option value="">Fare</option>
                                    <option value="30,000">30,000</option>
                                    <option value="33,000">33,000</option>
                                    <option value="37,000">37,000</option>
                                    <option value="40,000">40,000</option>
                                    <option value="45,000">45,000</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-8">
                                <button class="btn btn-success" type="submit" name="submit" >Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require("../layout/footer.php"); ?>
