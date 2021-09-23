<?php
session_start();
if(isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $result = require '../../db/db_admin_hotels.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-HOTELS</title>
    <link rel="stylesheet" href="../../css/admin/admin_hotels.css">

</head>
<body>
<section class="admin-hotels">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

<div class="middle">
    <!--Start "New Hotels" table-->
    <h1 class="heading-one">NEW HOTELS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="hname">HOTEL NAME</option>
                <option value="hcity">CITY</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="hotel_table" >
            <thead>
                <tr>
                    <th>NO</th>
                    <th>HOTEL NAME</th>
                    <th>CITY</th>
                    <th>LOCATION</th>
                    <th>HOTEL DETAILS</th>
                    <th>REPRESENTATIVE DETAILS</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($rows = mysqli_fetch_array($result)){
                echo "<tr>
                    <td>".$rows['row_no']."</td>
                    <td>".$rows['name']."</td>
                    <td>".$rows['city']."</td>
                    <td><a href>".$rows['location']."</a></td>
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='morebtn' value='MORE'>
                    </form>
                    </td>
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='morebtn' value='MORE'>
                    </form>
                    </td> 
                    <td>
                    <form method='post' action=' '>
                    <input type='hidden' value='$rows[0]' name=con_id>
                    <input type='button' id='morebtn' value='ACCEPT'>
                    </form>
                    </td>
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='removebtn' value='DECLINE'>
                    </form>
                    </td>
                    
                </tr>";
            }
            ?>
          <!--      <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <!--End "New Hotels" table-->

    <!--Start "Exsisting Hotels" table-->
    <h1 class="heading-one"><br />EXSISTING HOTELS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">HOTEL NAME</option>
                <option value="vnumber">ADDRESS</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
            <tr>
                    <th>NO</th>
                    <th>HOTEL NAME</th>
                    <th>CITY</th>
                    <th>LOCATION</th>
                    <th>HOTEL DETAILS</th>
                    <th>REPRESENTATIVE DETAILS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>NO</td>
                <td>Hotel Name</td>
                <td>CITY</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <!--<td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>-->
            </tbody>
        </table>
    </div>
    <!--End "Exsisting Hotels" table-->


</div>

<!--<script src="../../JS/filter.js"></script>-->
</section>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
 <!--JS file for search & filter-->
    <script src="../../script/admin/admin_filter_hotels.js"></script>
</body>
</html>
