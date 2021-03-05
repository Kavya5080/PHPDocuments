<?php
include "connect.php";
$typOfUser = $_POST['typeOfUser'];
if ($typOfUser == "1") {
    $hospitalName = $_POST['hospitalName'];
    $hospitalType = $_POST['hospType'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $city = $_POST['city'];
    $district = $_POST['district '];
    $password = $_POST['Pass'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $query = "INSERT INTO hospitalDetail(hospitalName,typeofHospital,email,phoneNumber,address,city,district,state,password) VALUES('$hospitalName','$hospitalType','$email','$phoneNumber','$address','$city','$district','$state','$password')";
    $execute=mysqli_query($conn,$query);
if($execute==true)
 {
    echo '<script>alert(" Registered successfully")</script>';
}
else{
 echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
}

} else if ($typOfUser == "2") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $bloodId = $_POST['bloodGroup'];
    $dob = $_POST['dob'];  
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district '];
    $password = $_POST['Pass'];
    $state = $_POST['state'];  
    $query = "INSERT INTO userDetail(firstName,lastName,gender,bloodId,birthDate,email,phoneNumber,address,city,district,state,password) VALUES('$firstName','$lastName',$gender,$bloodId,'$dob','$email','$phoneNumber','$address','$city','$district','$state','$password')";
    $execute=mysqli_query($conn,$query);
if($execute==true)
 {
    echo '<script>alert(" Registered successfully")</script>';
}
else{
 echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}