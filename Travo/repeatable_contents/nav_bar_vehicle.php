
    <?php
    echo
    '<div class="nav_bar-div">
      <br>
      <table class="nav_bar-table">
        <tr>
          <td> <img class="nav_bar-logo" src="../../images/Logo/Travo.png" alt="LOGO"> </td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="../../pages/vehicle/vehicle_home.php">HOME</a></td>
          <td><a href="../../pages/vehicle/vehicle_faq.php">FAQ</a></td>
          <td><a href="../../pages/vehicle/vehicle_home.php#about_us-section">ABOUT</a></td>
          <td><a href=#contact_us-section>CONTACT</a></td>
          <td>
          <div class="dropdown">
              <img class="nav_bar-img" src="../../images/icons/user.png">
              <div class="dropdown-content">
                  <div class="drop-title">USERNAME</div>
                  <div class="drop-box"><button class="deleteAccount_btn" id="deleteAccount_btn" >DELETE ACCOUNT</button></div>
                  <div class="drop-box"><a class="drop-nav" href=../../pages/vehicle/vehicle_update.php>UPDATE</a></div>
                  <div class="drop-box"><a class="drop-nav" href=../../php/unregistered/end-log_out.php>LOG OUT</a></div>
              </div>
          </div>
          </td>
        </tr>
      </table>
      <div class="delete_modal">
        <div class="deleteAccount_confirm_box">
              <h3>Delete Account</h3>
              <hr>
              <p>There is no recovery option. Are you sure you want to delete this account ?</p>
              <hr>
              <button type="button" name="delete_confirm_btn" class="delete_confirm_btn" id="delete_confirm_btn">DELETE ACCOUNT</button>
              <button type="button" name="delete_cancel_btn" class="delete_cancel_btn" id="delete_cancel_btn">CANCEL</button>
        </div>
        </div>
      <script type="text/javascript" src="nav_bar_vehicle.js"></script>
    </div> '; ?>
