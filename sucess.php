<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
 <script src="myscripts.js"></script>
</head>
<body>

  <?php include 'menu.php';?>
  <?php include 'header.php';?>
  <?php include 'connect.php';?>
<?php $_SESSION['$fname'] = $_POST['fname'];
$_SESSION['$lname'] = $_POST['lname'];
$_SESSION['$uname'] = $_POST['uname'];
$_SESSION['$email'] = $_POST['email'];
$_SESSION['$phone'] = $_POST['phone'];
$_SESSION['$password'] = $_POST['Pass'];

$sql = "INSERT INTO User(firstname,lastname,username,email,phonenumber,password)VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['uname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['Pass']."')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Success Page</h2><br>



        <div class="login">

        <form id="login" method="post" action="">
            <label><b>Successfully Registered  with Detail <br><br>
            <?php
echo ("First Name"." ".$_SESSION['$fname']);
echo  "<br>";
echo ("Last Name"." ".$_SESSION['$lname']) . PHP_EOL;
echo  "<br>";
echo("User Name"." ".$_SESSION['$uname']).PHP_EOL;
echo  "<br>";
echo("Email"." ".$_SESSION['$email']).PHP_EOL;
echo  "<br>";
echo("Phone Number"." ".$_SESSION['$phone']).PHP_EOL;
echo  "<br>";

?>
            </b>
            </label>
<br><br>
            <a style="color:white;text-align:center;" href="logout.php">Log Out</a>
        </form>
    </div>
</div>
<?php include 'footer.php';?>     
</body>
</html>

