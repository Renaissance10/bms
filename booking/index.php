<?php
require("functions/function.database.php");
require("functions/db_connection.php");
require("layout/header.php");     
include("layout/session.php");
if(isset($_POST['submit'])){
    add_booking();
}
?>
<?php message(); ?>
<?php error(); ?>
<div id="home" class="intro route bg-image" style="background-image: url(images/5.jpg)">
    <div class="overlay-itro"></div>
    <div class="p-5">
        <div class="container p-5">
          <div class="row p-5">
            <div class="col-12 p-5">
              <h1 class="text-center">Lorem ipsum dolor sit amet</h1>
              <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, dicta, cupiditate consequatur necessitatibus quos libero eius ipsum qui sit molestiae.</p>
              <p>&nbsp;</p>
              <p class="text-center"><a class="btn btn-outline-primary btn-lg" href="#form" role="button">Learn more</a> </p>
            </div>
          </div>
      </div>
    </div>
  </div>
<div class="container">
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
                            <label class="col-sm-3">Name</label>
                            <div class="col-sm-3">
                                <input type="text" name="fName" placeholder="First Name" class="form-control" required="true">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="mName" placeholder="Middle Name" class="form-control" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lName" placeholder="Last Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Gender</label>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="gender" checked>Male                         
                            </div>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="female" name="gender">Female                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Route:</label>
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
                                <select name="bus" class="form-control">
                                    <option value="">Bus</option>
                                    <option value="Dar Express">Dar Express</option>
                                    <option value="Happy Nation">Happy Nation</option>
                                    <option value="Dar Lux">Dar Lux</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="time" class="form-control">
                                    <option value="">Time</option>
                                    <option value="0500">0500</option>
                                    <option value="0600">0600</option>
                                    <option value="0700">0700</option>
                                    <option value="0800">0800</option>
                                    <option value="0900">0900</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Details:</label>
                            <div class="col-sm-3">
                                <select name="class" class="form-control">
                                    <option value="">Class</option>
                                    <option value="Luxury">Luxury</option>
                                    <option value="Business">Business</option>
                                    <option value="Economy">Economy</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="seat" class="form-control">
                                    <option value="">Seat</option>
                                    <option value="Windowed">Windowed</option>
                                    <option value="Normal">Normal</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="luggage" class="form-control">
                                    <option value="">Luggage</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Travel Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="date" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Pickup Address</label>
                            <div class="col-sm-9">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Contact</label>
                            <div class="col-sm-4">
                                <input type="number" min="0" max="10000000000"  placeholder="071-234-5678" name="phone" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="email" placeholder="Email" class="form-control" required="true">
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
<?php require("layout/footer.php"); ?>
