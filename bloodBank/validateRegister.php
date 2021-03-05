<?php
session_start();
include "connect.php";
$typOfUser = $_POST['loginType'];
if (!empty($_POST["check"])) {
    setcookie("email", $_POST["email"], time() + 3600);
    setcookie("Pass", $_POST["Pass"], time() + 3600);
    //echo "Cookies Set Successfuly".$_POST["Pass"];
}
if ($typOfUser == "2") {
    extract($_POST);
    $sql = mysqli_query($conn, "SELECT * FROM userDetail where email='$email' and password='$Pass'");
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION['userId'] = $row['userId'];
        $_SESSION['userName'] = $row['firstName'];
        header("Location:userHomePage.php");
    } else {
        $_SESSION['errorMessage'] = 1;
        header("Location:login.php");
        exit();
    }
} else if ($typOfUser == "1") {
    extract($_POST);
    $sql = mysqli_query($conn, "SELECT * FROM hospitalDetail where email='$email' and password='$Pass'");
    $_SESSION['hospitalId'] = $row['hospitalId'];
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION['hospitalId'] = $row['hospitalId'];
        $_SESSION['hospitalName'] = $row['hospitalName'];
        header("Location:hospitalHomePage.php");
    } else {
        $_SESSION['errorMessage'] = 1;
        header("Location: login.php");
        exit();
    }
}
