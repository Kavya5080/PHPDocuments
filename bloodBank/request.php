<?php
session_start();
include "connect.php";
$user=$_SESSION['user'];
if ($user==1) {
    $_SESSION['user']=0;
    $userId=$_SESSION['userId'];
    $bloodDetailId = $_POST['data1'];
    $unit = $_POST['data2'];
    $sql = "SELECT * FROM bloodDetail where bloodDetailId= $bloodDetailId ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hospId = $row[1];
    $bloodId = $row[2];
    $query = "INSERT INTO userBloodRequest(hospitalId,userId,bloodID,unit) VALUES($hospId,$userId,$bloodId,$unit)";
    $execute = mysqli_query($conn, $query);
    if ($execute == true) {
        echo '<script>alert("Requested successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
} else if ($_SESSION["user"] == 2) {
    $_SESSION['user']=0;
    $bloodDetailId = $_POST['data1'];
    $unit = $_POST['data2'];
    $sql = "SELECT * FROM bloodDetail where bloodDetailId= $bloodDetailId ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hospId = $row[1];
    $bloodId = $row[3];
    $recvId = 1;
    $query = "INSERT INTO hospitalBloodRequest(donarHid,reciverHid,bloodID,unit) VALUES($hospId,$recvId,$bloodId,$unit)";
    $execute = mysqli_query($conn, $query);
    if ($execute == true) {
        echo '<script>alert("Requested successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

} 