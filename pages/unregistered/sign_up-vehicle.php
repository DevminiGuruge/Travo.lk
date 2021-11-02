<?php 
  session_start();

  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-vehicle.css'; ?> </style>
    <style> <?php include '../../css/unregistered/repeating_css.css'; ?> </style>
    <link rel="icon" href="../../images/icons/favicon.ico">
    <?php include '../../repeatable_contents/font.php'; ?>
  </head>
  <body>
 <?php 
    if (isset($_SESSION['value'])) {
      if($_SESSION['value']==="username_exist"){
        echo '<div class="username_exist_modal">
        <div class="username_exist_confirm_box">
              <h3>Username Exist.!</h3>
              <hr>
              <p>Someone already has that username. Try another..!</p>
              <hr>
              <button type="button" name="okay_btn" class="username_exist_okay_btn" id="username_exist_okay_btn">Okay...!</button>
        </div>
        </div>';
      }
    }
  ?>



    <section class="sign_up-traveler">

      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>

    <!--Start form-->
    <div class="box-sign_up-traveler">
      <form class="form-sign_up-traveler" id="signup_form_vehicle" action="../../php/unregistered/Signup_vehicle.php" method="POST">
        <br><br>
      <div class="form-control">
        <label for="name">Owner Name</label>
        <input class="text-form-sign_up-traveler" type="text" name="owner_name" id="owner_name" placeholder=""><br><br>
        <span id="error1" class="error-msg"></span>
        <small>Error Message</small>
      </div>

      <div class="form-control">
        <label for="email">Email Address</label>
        <input class="text-form-sign_up-traveler" type="text" name="email" id="email" placeholder=""><br><br>
        <span id="error2" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="contact">Contact Number</label>
        <input class="text-small-form-sign_up-traveler" type="text" name="contact2" id="contact2" placeholder=" Contact Number 2">
        <input class="text-small-form-sign_up-traveler" type="text" name="contact1" id="contact1" placeholder=" Contact Number 1"><br><br>
        <span id="error3" class="error-msg"></span>
        <small>Error Message</small>
      </div>

      <div class="form-control">
        <label for="password">Password</label>
        <input class="text-small-form-sign_up-traveler" type="password" name="password2" id="password2" placeholder=" Confirm password">
        <div class="tooltip">
        <span class="tooltiptext">*Please enter a password between 8 to 15 characters which contains at least one uppercase letter and one special character</span>
        <input class="text-small-form-sign_up-traveler" type="password" name="password1" id="password1" placeholder=""><br><br>
        </div>
        <span id="error4" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="city">Location</label>
        <select class="select-form-sign_up-traveler" name="city">
        <option value="All Sri Lanka">Sri Lanka</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select><br><br>
        <span id="error5" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="vehicle-no">Vehicle Number</label>
        <input class="text-form-sign_up-traveler" type="text" name="vehicle_no" id="vehicle_no" placeholder=""><br><br>
        <span id="error6" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="vehicle">Vehicle</label>
        <input class="text-small-form-sign_up-traveler" type="text" name="no_of_passengers" id="no_of_passengers" placeholder=" No of passengers">
        <span id="error7" class="error-msg"></span>
        <input class="text-small-form-sign_up-traveler" type="text" name="type" id="type" placeholder=" Vehicle Category"><br><br>
        <span id="error8" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="price">Price</label>
        <input class="text-small-form-sign_up-traveler" type="text" name="price_for_day" id="price_for_day" placeholder=" Price for day">
        <span id="error9" class="error-msg"></span>
        <input class="text-small-form-sign_up-traveler" type="text" name="price_for_1km" id="price_for_1km" placeholder=" Price for 1km"><br><br>
        <span id="error10" class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="driver">Driver</label> <input class="text-small-form-sign_up-traveler" type="text" name="driver_charge" id="driver_charge" placeholder=" Driver charges for a day">
        <select class="drop-down-form-sign_up-traveler" type="driver-type" name="driver_type" id="driver_type">
            <option value="with driver">With Driver</option>
            <option value="without driver">Without Driver</option>
            <option value="with or without driver">With or Without Driver</option>
        </select><br><br>
      </div>

      <div class="form-control">
        <label for="images">Input Image</label> 
        <input type="file" class="text-small-form-sign_up-traveler" name="images" id="image-small-form-sign_up-traveler" ></br><br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
        <label for="ac">A/C</label>
        <input type="hidden" name="ac" value="no" />
        <input class="ac-checkbox-form-sign_up-traveler" type="checkbox" name="ac" id="ac" value="yes"> <span></span> <br>
        <div class="tc_div_form_signup_traveler">
          <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value="yes" required><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="../../pages/unregistered/tc.php">Terms & Conditions</a> of travo.lk</label>
        </div>
      </div>



      </form>
    </div>
    <?php 
      $_SESSION['value'] = "good";
    ?>
    <div class="buttons-sign_up-traveler">
          <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
          <input type="submit" form="signup_form_vehicle" class="submitbtn" name="submitbtn" id="submitbtn" value="SUBMIT">
    </div>

    </section>
    <!--Footer-->
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    <!--JS file for validation-->
    <script src="../../script/unregistered/sign_up-vehicle.js"></script>
  </body>
</html>
