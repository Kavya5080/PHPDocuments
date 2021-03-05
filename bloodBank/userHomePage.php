<?php
session_start();
$_SESSION['user']=1;
?>

<html lang="en">
<head>
  <title>User Home Page</title>
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
  $userId =1;
  //$userId = $_SESSION['userId'];

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
                        <img class="img-fluid" src="images/request.jpg" alt="" />
                        <br><br><br><br>
                        <br><br><br><br>
                        <br><br><br><br><br><br>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Search/Request Blood
                           </button>

                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <img class="img-fluid" src="images/status.jpg" alt="" />       <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                            View Status
                            </button>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">

                            <img class="img-fluid" src="images/profile.jpg" alt="" style="height=40%;"/>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
                        View Profile
                        </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- display blood Detail -->
<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" style="width:180%">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request Blood</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
          <table class="table table-striped" id="utableId">
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
  INNER JOIN hospitalDetail ON bloodDetail.hospitalId = hospitalDetail.hospitalId) WHERE bloodDetail.unit >0";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {

    ?>
  <tbody>
      <tr>
  <td ><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td> <button id="brequest" class="brequest" value="<?php echo $row[0] ?>">Request Blood</button>
    <input type="hidden" class="availabelUnit" id="availabelUnit" value="<?php echo $row[2]; ?>">

</td>
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


<!-- modal to view status -->
<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content" style="width:180%">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <table class="table table-striped" id="ustatus">
    <thead>
    <tr>
    <th>Bloog Group</th>
    <th>Available Unit</th>
    <th>Hospital Name</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  </thead>
  <?php
include "connect.php";
$query = "SELECT bloodMaster.bloodGroup,hospitalDetail.hospitalName,userBloodRequest.unit,userBloodRequest.Status,userBloodRequest.requestId
  FROM ((userBloodRequest
  INNER JOIN bloodMaster ON userBloodRequest.bloodID = bloodMaster.bloodId)
  INNER JOIN hospitalDetail ON userBloodRequest.hospitalId = hospitalDetail.hospitalId)
 WHERE userBloodRequest.userId=$userId";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {

    ?>
  <tbody>
      <tr>
  <td ><?php echo $row[0] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[1] ?></td>
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
<td> <button id="ucancel" class="ucancel" value="<?php echo $row[4] ?>">Delete Request</button>
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
  <div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content" style="width:100%">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">User Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
      <?php
include "connect.php";
$sql = "select * from userDetail where userId=$userId";
$result = mysqli_query($conn, $sql);?>
<table width='100%'>
<?php
while ($row = mysqli_fetch_array($result)) {
    $id = $row['userId'];
    $name = $row['firstName'] . $row['lastName'];
    $email = $row['email'];
    $phoneNumber = $row['phoneNumber'];
    $city = $row['city'];

    ?>
      <tr>
      <td>Name : </td><td><?php echo $name ?></td>
      </tr>

      <tr>
      <td>Email : </td><td><?php echo $email ?></td>
      </tr>

      <tr>
      <td>Phone Number : </td><td><?php echo $phoneNumber ?></td>
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



  <script type="text/javascript" src="validScript.js"></script>
</body>
<html>