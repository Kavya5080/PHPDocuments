<?php

if(!empty($_POST["check"])) {
	setcookie ("Uname",$_POST["Uname"],time()+ 3600);
	setcookie ("Pass",$_POST["Pass"],time()+ 3600);
	//echo "Cookies Set Successfuly".$_POST["Pass"];
}

?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="myscripts.js"></script> 
</head>
<body>
<?php include 'menu.php';?>   
<?php include 'header.php';?> 
<?php include 'connect.php';?> 
<?php
session_start();
if(isset($_POST['log']))
{
    extract($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM User where username='$Uname' and password=$Pass");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
     // header("Location:welcome.php"); 
        
    }
    else
    {
      $Message="Invalid User Name or password"; 
      header("Location:loginpage.php?Message=" . urlencode($Message));
    }
}
?>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Dashboard</h2><br>  


 
        <div class="login"> 
   
        <form id="login" method="post" action="">    
            <label><b>Welcome to Datamatics
            </b>    
            </label>    
            <p>
            <a href="viewUser.php" class="w3-btn w3-blue">View user</a>
  <a href="loginpage.php" class="w3-btn w3-blue">Logout</a>
</p>
        </form>     
    </div>    
</div>
<?php include 'footer.php';?>     
</body>
</html>

