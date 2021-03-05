<?php
include "connect.php";
$userid = 1;
$sql = "select * from userDetail where userId=$userid";
$result = mysqli_query($con,$sql);
$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
    $id = $row['userId'];
    $name = $row['firstName']. $row['lastName'];
    $email = $row['email'];
    $phoneNumber = $row['phoneNumber'];
    $city = $row['city'];
    
    
    $response .= "<tr>";
    $response .= "<td>Name : </td><td>".$name."</td>";
    $response .= "</tr>";
   
    $response .= "<tr>";
    $response .= "<td>Salary : </td><td>".$email."</td>";
    $response .= "</tr>";
   
    $response .= "<tr>";
    $response .= "<td>Gender : </td><td>".$phoneNumber."</td>";
    $response .= "</tr>";
   
    $response .= "<tr>";
    $response .= "<td>City : </td><td>".$city."</td>";
    $response .= "</tr>";
   
    
   
   }
   $response .= "</table>";
   
   echo $response;
   exit;