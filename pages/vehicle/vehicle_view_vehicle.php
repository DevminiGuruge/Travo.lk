<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT owner_id FROM vehicle_owners WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<html>
    <head>
      <title>VIEW</title>
      <link rel="icon" href="../../images/icons/favicon.ico">
        <style> <?php include '../../css/vehicle/vehicle_view_vehicle.css'; ?> </style>
        <style> <?php include '../../css/hotel/hotel_repeating_css.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_vehicle.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_vehicle.css'; ?>  </style>
            <script type="text/javascript" src="../../repeatable_contents/nav_bar_vehicle.js"></script>
            <br>
            <!-- <div class="content">
            <div class="vehicledetails_div">
              <table class="vehicledetails">
                <tr>
                      <th colspan="5" class="vehicleType">Toyota Prius 4th Generation</th>
                  </tr>
                  <tr class="detail">
                      <td class="trow">Type<br/>A/C<br/>Seating capacity<br/>Driver<br/>Price per day</td>
                      <td class="trow">Car<br/><input type="checkbox"><br/>5<br/>with<input type="checkbox"> without<input type="checkbox"><br/>LKR.</td>
                      <td class="trow"><img class="vimg" src="../../images/Sample_images/toyota-2010-prius-wallpaper-01.jpg"></td>
                      <td class="trow">Name<br/>E-mail<br/>Contact<br/>Location<br/>Driver charges</td>
                      <td class="trow">Mr.Kamal Ranasinghe<br/>kamal@gmail.com<br/>0710000000/0332200000<br/>Gampaha<br/>LKR.1000.00</td>
                  </tr>
              </table>
              <br/> 
              </div>
            </div> -->

            <div class="vehicle_and_owner_details">
                <form action="../vehicle/vehicle_update_vehicle.php">
                <table class="vehicledetails">
                    <!-- vehicle 1 -->
                    <tr>
                        <th colspan="2" class="vehicleType">Toyota Prius 4th Generation</th>
                    </tr>
                    <tr class="detail">
                        <td>Car</td>
                        <td rowspan = "6"><img class="vimg" src="../../images/Sample_images/toyota-2010-prius-wallpaper-01.jpg"></td>
                    </tr>
                    <tr>
                    <td>With A/C</td>
                    </tr>
                    <tr>
                    <td>5 Seats</td>
                    </tr>
                    <tr>
                    <td>With Driver</td>
                    </tr>
                    <tr>
                    <td>50 per km</td>
                    </tr>
                    <tr>
                    <td>1000 per day</td>
                    </tr>
                </table>
                <table class="driver_details">
                    <tr>
                        <th class="vehicleType">Mr.kamal</th>
                    </tr>
                    <tr>
                        <td>Kamal Sumudu Nagodaarachchi</td>
                    </tr>
                    <tr>
                        <td>kamal@gmail.com </td>
                    </tr>
                    <tr>
                        <td>0332255654 0716663769</td>
                    </tr>
                    <tr>
                        <td>Gampaha</td>
                    </tr>
                    <tr>
                        <td>LKR.1200.00 per day</td>
                    </tr>
                </table>

                <div class="buttons-sign_up-traveler">
                <input type="submit" class="updatebtn" name="submitbtn" id="submitbtn"  value="UPDATE DETAILS">
                <input type="submit" class="deletebtn" name="submitbtn" id="submitbtn"  value="DELETE VEHICLE">
                 
                </div>
                </form>
                
            </div>
        </section>

    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    </body>
</html>
<?php
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
