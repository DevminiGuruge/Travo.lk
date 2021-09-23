<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/unregistered/sign_up-traveler.css'; ?> </style>
    <!-- defer indicate that script is executed after the document has been parsed -->
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar.css'; ?>  </style>
      <br>
    <div class="box-sign_up-traveler">
      <br>
      <form class="form-sign_up-traveler" id="form-sign_up-traveler" action="../../php/unregistered/traveler_sign_up.php" method="post">
      <br>

      <div class="form-control">
      <label for="name">Name</label>
        <input class="text-form-sign_up-traveler" type="text" name="name" id="name" value=""><br>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="email">Email Address</label>
        <input class="text-form-sign_up-traveler" type="email" name="email" id="email" value=""  ><br>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="contact">Contact Number</label>
        <input class="text-small-form-sign_up-traveler" type="number" name="contact2" id="contact2" value="" placeholder=" Contact Number 2">
        <input class="text-small-form-sign_up-traveler" type="number" name="contact1" id="contact1" value="" placeholder=" Contact Number 1"><br>
        <br>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="password">Password</label>
        <input class="text-small-form-sign_up-traveler" type="password" name="retype-password" id="retype-password" value="" placeholder=" Confirm password" >
        <div class="tooltip">
        <span class="tooltiptext">*Please enter a password between 8 to 15 characters which contains at least one uppercase letter and one special character</span>
        <input class="text-small-form-sign_up-traveler" type="password" name="password" id="password" value=""><br><br>
        </div>
        <span class="error-msg"></span>
      </div>

      <div class="form-control">
      <label for="adress">Address</label>
      <input class="text-form-sign_up-traveler" type="text" name="address-line1" id="address-line1" placeholder=" Address Line 1" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="address-line2" id="address-line2" placeholder=" Adress Line 2" value=""  ><br>
      <br>
      <input class="text-form-sign_up-traveler" type="text" name="city" id="city" placeholder=" City" value=""  ><br>
      <br>
        <span class="error-msg"></span>
      </div>
      <input class="tc-checkbox-form-sign_up-traveler" type="checkbox" name="tc" id="tc" value="" required><label id="tc-label-form-sign_up-traveler" for="tc">I agree to all the <a href="#">Terms & Conditions</a> of travo.lk</label>
      <br><br><br>

    </form>
    </div>

    <br>
    <div class="buttons-sign_up-traveler">
          <input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
          <input type="submit" form="form-sign_up-traveler" class="submitbtn" name="submitbtn" id="submitbtn" value="SUBMIT">
    </div>

    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    <script src="../../script/unregistered/sign_up-traveler.js"></script>
  </body>
</html>
