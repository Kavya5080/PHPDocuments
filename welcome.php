<?php

if(!empty($_POST["check"])) {
	setcookie ("Uname",$_POST["Uname"],time()+ 3600);
	setcookie ("Pass",$_POST["Pass"],time()+ 3600);
	//echo "Cookies Set Successfuly".$_POST["Pass"];
} else {
	setcookie("Uname","");
	setcookie("Pass","");
	//echo "Cookies Not Set";
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <script src="myscripts.js"></script> 
</head>
<body>
<?php include 'menu.php';?>   
<?php include 'header.php';?> 

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Login Page</h2><br>  


 
        <div class="login"> 
   
        <form id="login" method="post" action="">    
            <label><b>Welcome to Datamatics
            </b>    
            </label>    
           

<p><a href="loginpage.php"> Go to Login Page </a> </p>
        </form>     
    </div>    
</div>
<?php include 'footer.php';?>     
</body>
</html>

