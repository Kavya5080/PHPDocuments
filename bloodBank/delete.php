<?php
session_start();
include "connect.php";
$user=$_SESSION['user'];
if ($user==1) {
    $_SESSION['user']=0;
    $requestId = $_POST['data1'];
   
    $sql = "DELETE  FROM userBloodRequest where  requestId = $requestId";
   
    $execute = mysqli_query($conn, $sql);
    if ($execute == true) {
        echo '<script>alert("Requested successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
}
else if ($_SESSION["user"] == 2) {
    $_SESSION['user']=0;
    $requestId = $_POST['data1'];
   
    $sql = "DELETE  FROM hospitalBloodRequest where  requestId = $requestId";
   
    $execute = mysqli_query($conn, $sql);
    if ($execute == true) {
        echo '<script>alert("Requested successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}