<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
 <script src="myscripts.js"></script> 

</head>
<body>
<?php include 'menu.php';?>   
<?php include 'header.php';?> 
  
 
<section>  
<div style="margin-left:25%;padding:1px 16px;height:600px;">
  
<h2>Login Page</h2>

        <div class="login"> 
        <form id="login" method="post" action="welcome.php">    
            <label><b>User Name     
            </b>    
            </label>    
            <input type="text" name="Uname" id="Uname" placeholder="Username" value="<?php if(isset($_COOKIE["Uname"])) { echo $_COOKIE["Uname"];}?>" required>    
            <br><br>    
            <label><b>Password     
            </b>    
            </label>    
            <input type="Password" name="Pass"  id="Pass" value="<?php if(isset($_COOKIE["Uname"])) { echo $_COOKIE["Pass"];}?>" placeholder="Password" required >    
            <br><br>    
            <input type="checkbox" id="check" name="check">
        <span>Remember Me</span>
        <br><br>
            <input type="submit" name="log" id="log" value="Log In Here">       
            <br><br>    
        </form>   
    </div>    
</div>
<?php include 'footer.php';?>     
</section>
</body>
</html>

