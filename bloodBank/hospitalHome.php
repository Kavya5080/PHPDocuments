<?php
session_start();
$_SESSION['user']=2;
?>
<html lang="en">
<head>
  <title>Hospital Home Page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="style.css">

  <!-- ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
      
  </head>
<?php
//$hospitalId = $_SESSION['hospitalId'];
$hospitalId=1;
$_SESSION["status"] = "update";
?>
<body id="page-top">
        <!-- Navigation-->
       <?php include("header.php");?>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">

                            <img class="img-fluid" src="images/add.jpg" alt="" />
                            <br>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Add blood detail
                            </button>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">

                            <img class="img-fluid" src="images/request.jpg" alt="" />
                            <br>
                            <br><br>
                            <br><br><br> <br> <br><br><br><br> <br> <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                               Request Blood
                             </button>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">

                            <img class="img-fluid" src="images/status.jpg" alt="" />
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
                                 View Status
                             </button>

                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">

                            <img class="img-fluid" src="images/approve.jpg" alt="" />
                            <br><br> <br> <br><br>
                            <br>
                            <br><br>
                            <br>
                            <br><br>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                              View Request
                           </button>

                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">

                            <img class="img-fluid" src="images/profile.jpg" alt="" />
                            <br>
                            <br>
                            <br>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
                            View Profile
                        </button>
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">

                            <img class="img-fluid" src="images/blood.jpg" alt="" />
                            <br><br><br> <br> <br><br><br><br> <br> <br><br>
                            <br>
                            <br>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">
                            Blood Detail
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- adding blood unit modal -->
<div class="container">
  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <form id="bloodForm" name="bloodForm" method="post">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Blood Unit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <div class="group"> <label for="user" class="label">Blood Group</label> <select name="bloodGroup" id="bloodGroup" class="browser-default">
                        <option value="" disabled selected>Select Blood Group</option>
                        <option value="1"> O+</option>
                        <option value="2">A+</option>
                        <option value="3">B+</option>
                        <option value="4">AB+</option>
                        <option value="5">O-</option>
                        <option value="6">A-</option>
                        <option value="7">B-</option>
                        <option value="8">AB-</option>
                        </select>
                        <br>
                        <br>

                        <div class="group"> <label for="user" class="label">Unit</label><br> <input id="addUnit" name="addUnit" type="number" class="input" placeholder="Unit" class="browser-default custom-number"> </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"  id="save" name="save">Add</button>
        </div>

      </div>
      </form>
    </div>
  </div>

</div>

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content" style="width:180%">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request For Blood</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <div class="modal-body">
    <table class="table table-striped" id="htableId">
    <thead>
    <tr>
    <th>Blood Group</th>
    <th>Available Unit</th>
    <th>Hospital Name</th>
    <th>Action</th>
  </tr>
  </thead>
  <?php
include "connect.php";
$query = "SELECT bloodDetail.bloodDetailId,bloodMaster.bloodGroup,bloodDetail.unit,hospitalDetail.hospitalName
    FROM ((bloodDetail
    INNER JOIN bloodMaster ON bloodDetail.bloodId = bloodMaster.bloodId)
    INNER JOIN hospitalDetail ON bloodDetail.hospitalId = hospitalDetail.hospitalId)
    WHERE bloodDetail.hospitalId != $hospitalId";
$result = mysqli_query($conn, $query);
if ($result == null) {

    ?> <p> No data to show </p>
<?php
} else {
  
    while ($row = mysqli_fetch_array($result)) {

        ?>
  <tbody>
      <tr>
        <td ><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td> <button id="request" class="request" value="<?php echo $row[0] ?>">Request Blood</button>
        <input type="hidden" name="requestUnit" id="requestUnit">
        </td>
      </tr>
  </tbody>
<?php
}
}
/*freeresultset*/
$result->free();
?>
  </table>
  </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- modal to view request -->

<div class="container" >
  <!-- The Modal -->
  <div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content" style="width:180%"  >
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View Request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="width:100%" >
          <table class="table table-striped" >
    <thead>
    <tr>
    <th>Request Name</th>
    <th>Phone Number</th>
    <th>Blood Group</th>
    <th>Unit</th>
    <th>Action</th>
  </tr>
  </thead>
  <?php
include "connect.php";
$hospId = 1;
$query = "SELECT userDetail.firstName,userDetail.phoneNumber,bloodMaster.bloodGroup,userBloodRequest.unit,userBloodRequest.requestId,userBloodRequest.bloodId
  FROM ((userBloodRequest
  INNER JOIN userDetail ON userDetail.userId = userBloodRequest.userId)
  INNER JOIN bloodMaster ON userBloodRequest.bloodID = bloodMaster.bloodId) ";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {

    ?>
  <tbody>
      <tr>
  <td ><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td> <button class="status" id="aproove"  value="1">Aproove</button>
    <td> <button class="status" id="reject"  value="2">Reject</button>
    <input type="hidden" name="bid" id="bid" class="bid" value="<?php echo $row[4]; ?>">
    <input type="hidden" name="user" id="user" class="user" value="1">
    <input type="hidden" name="runit" id="runit" class="runit" value="<?php echo $row[3] ?>">
    <input type="hidden" name="bloodId" id="bloodId" class="bloodId" value="<?php echo $row[5] ?>">

</td>
  </tr>
  </tbody>
<?php
}

/*freeresultset*/
$result->free();
$query1 = "SELECT hospitalDetail.hospitalName,hospitalDetail.phoneNumber,bloodMaster.bloodGroup,hospitalBloodRequest.unit,hospitalBloodRequest.reciverHid
  FROM ((hospitalBloodRequest
  INNER JOIN hospitalDetail ON hospitalDetail.hospitalId = hospitalBloodRequest.reciverHid)
  INNER JOIN bloodMaster ON hospitalBloodRequest.bloodID = bloodMaster.bloodId)";
$result1 = mysqli_query($conn, $query1);
while ($row1 = mysqli_fetch_array($result1)) {

    ?>
  <tbody>
      <tr>
  <td ><?php echo $row1[0] ?></td>
    <td><?php echo $row1[1] ?></td>
    <td><?php echo $row1[2] ?></td>
    <td><?php echo $row1[3] ?></td>
    <td> <button class="status" id="aproove"  value="1">Aproove</button>
    <td> <button class="status" id="reject"  value="2">Reject</button>
    <input type="hidden" name="bid" id="bid" class="bid" value="<?php echo $row1[4] ?>">
    <input type="hidden" name="user" id="user" class="user" value="2">
    <input type="hidden" name="runit" id="runit" class="runit" value="<?php echo $row[3] ?>">
    <input type="hidden" name="bloodId" id="bloodId" class="bloodId" value="<?php echo $row[5] ?>">

</td>
  </tr>
  </tbody>
<?php
}
/*freeresultset*/
$result1->free();
?>
</table>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal to display status -->
<div class="container" >
  <!-- The Modal -->
  <div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content" style="width:180%"  >
      <!-- Modal Header -->
      <div class="modal-header">

        <h4 class="modal-title">View Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body" style="width=180%">
      <table class="table table-striped" id="hviewtable">
    <thead>
    <tr>
    <th>Bloog Group</th>
    <th>Available Unit</th>
    <th>Hospital Name</th>
    <th>Status</th>
  </tr>
  </thead>
  <?php
include "connect.php";
$query = "SELECT bloodMaster.bloodGroup,hospitalDetail.hospitalName,hospitalBloodRequest.unit,hospitalBloodRequest.Status
  FROM ((hospitalBloodRequest
  INNER JOIN bloodMaster ON hospitalBloodRequest.bloodID = bloodMaster.bloodId)
  INNER JOIN hospitalDetail ON hospitalBloodRequest.donarHId = hospitalDetail.hospitalId)
 WHERE hospitalBloodRequest.reciverHid=$hospitalId";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {

    ?>
  <tbody>
      <tr>
  <td ><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php $statusId = $row[3];
    if ($statusId == 0) {
        echo "Pending";
       
    } else if ($statusId == 1) {
        echo "Approved";
    } else if ($statusId == 2) {
        echo "Rejected";
    }

    ?></td>
 <?php if ($statusId == 0) { ?>
         <td> <button id="hcancel" class="hcancel" value="<?php echo $row[4] ?>">Delete Request</button>
    

</td>
<?php } ?>
  </tr>
  </tbody>
<?php
 
}

/*freeresultset*/
$result->free();

?>
</table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</div>





<!-- modal to display the user information -->
<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content" style="width:100%">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Profile Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >

      <?php
include "connect.php";
$sql = "select * from hospitalDetail where hospitalId=$hospitalId";
$result = mysqli_query($conn, $sql);?>
<table width='100%'>
<?php
while ($row = mysqli_fetch_array($result)) {
    //$id = $row['userId'];
    $name = $row['hospitalName'];
    $email = $row['email'];
    $phoneNumber = $row['phoneNumber'];
    $city = $row['city'];

    ?>
      <tr>
      <td>Name : </td><td><?php echo $name ?></td>
      </tr>

      <tr>
      <td>Salary : </td><td><?php echo $email ?></td>
      </tr>

      <tr>
      <td>Gender : </td><td><?php echo $phoneNumber ?></td>
      </tr>

      <tr>
      <td>City : </td><td><?php echo $city ?></td>
      </tr>

    <?php

}
?>
     </table>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</div>



<!-- modal to display the blood information -->
<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal7">
  <div class="modal-dialog">
    <div class="modal-content" style="width:100%">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Blood Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
      <table class="table table-striped" id="htableId">
    <thead>
    <tr>
    <th>Bloog Group</th>
    <th>Available Unit</th>

  </tr>
  </thead>
      <?php
include "connect.php";
$sql = "SELECT bloodMaster.bloodGroup,bloodDetail.unit
FROM (bloodDetail
INNER JOIN bloodMaster ON bloodDetail.bloodId = bloodMaster.bloodId)
WHERE bloodDetail.hospitalId=$hospitalId";
$result = mysqli_query($conn, $sql);?>
<table width='100%'>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
  <tbody>
      <tr>
  <td ><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>



  </tr>
  </tbody>
<?php
}

?>
     </table>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</div>
<script type="text/javascript" src="validScript.js"></script>
</body>
</html>