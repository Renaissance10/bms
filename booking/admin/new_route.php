<?php
require_once("../functions/function.auth.php"); 
require_once("../functions/function.database.php");
require_once("../functions/db_connection.php");
include("../layout/session.php");
include("header.php");
pass_auth($id);
if(isset($_POST['submit'])){
    add_route($id);
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
                            <label class="col-sm-4">Route:</label>
                            <div class="col-sm-4">
                                <select name="start" class="form-control">
                                    <option value="">Start</option>
                                    <option value="Dar">Dar</option>
                                    <option value="Arusha">Arusha</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Dodoma">Dodoma</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="end" class="form-control">
                                    <option value="">End</option>
                                    <option value="Dar">Dar</option>
                                    <option value="Arusha">Arusha</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Dodoma">Dodoma</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Depature:</label>
                            <div class="col-sm-4">
                                <select name="early" class="form-control">
                                    <option value="">Start</option>
                                    <option value="0500">0500</option>
                                    <option value="0600">0600</option>
                                    <option value="0700">0700</option>
                                    <option value="0800">0800</option>
                                    <option value="0900">0900</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="late" class="form-control">
                                    <option value="">End</option>
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
                            <div class="col-sm-4">
                                <select name="begin" class="form-control">
                                    <option value="">Start</option>
                                    <option value="1700">1700</option>
                                    <option value="1800">1800</option>
                                    <option value="1900">1900</option>
                                    <option value="2000">2000</option>
                                    <option value="2100">2100</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="finish" class="form-control">
                                    <option value="">End</option>
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
                            <div class="col-sm-4">
                                <select name="low" class="form-control">
                                    <option value="">Low</option>
                                    <option value="30,000">30,000</option>
                                    <option value="33,000">33,000</option>
                                    <option value="37,000">37,000</option>
                                    <option value="40,000">40,000</option>
                                    <option value="45,000">45,000</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="high" class="form-control">
                                    <option value="">High</option>
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
