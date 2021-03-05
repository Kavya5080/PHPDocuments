<?php
session_start();
include "connect.php";
    $status = $_POST['data1'];
    $requestId = $_POST['bid'];
    $userType = $_POST['userType'];
    $runit = $_POST['runit'];
    $bloodId = $_POST['bloodId'];
    $hospitalId=1;
    if ($userType == 1) {
        $query = "UPDATE userBloodRequest  SET status=$status WHERE requestId=$requestId";
        $execute = mysqli_query($conn, $query);
        if ($execute == true) {
            echo '<script>alert("Requested successfully")</script>';
            
            $query1 = "UPDATE bloodDetail  SET unit=unit-$runit WHERE bloodId=$bloodId AND hospitalId= $hospitalId";
        $execute = mysqli_query($conn, $query1);

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION["status"] == "no";
        }
    } else if ($userType == 2) {
        $query = "UPDATE hospitalBloodRequest  SET status=$status WHERE requestId=$requestId";
        $execute = mysqli_query($conn, $query);
        if ($execute == true) {
            echo '<script>alert("Requested successfully")</script>';
            
            $query1 = "UPDATE bloodDetail  SET unit=unit-$runit WHERE bloodId=$bloodId AND hospitalId= $hospitalId";
        $execute = mysqli_query($conn, $query1);
            echo '<script>alert("Requested successfully")</script>';
        } else { 
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION["status"] == "no";
        }
    }

?>