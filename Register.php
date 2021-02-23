<?php session_start(); ?>
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
   <h2>Registration Page</h2><br>
        <div class="login">
        <form id="login" method="post" action="sucess.php">
            <label><b>First Name
            </b>
            </label>
            <input type="text" name="fname" id="Uname" placeholder="Firstname" onchange="myFunction(this.value)" required>
 	    <br><br>
		<label><b>Last Name
            </b>
            </label>
	    <input type="text" name="lname" id="Uname" placeholder="Lastname" required>
            <br><br>
<label><b>User Name
            </b>
            </label>
	   <input type="text" name="uname" id="Uname" placeholder="Username" required>
            <br><br>
<label><b>Recovery Email
            </b>
            </label>
	    <input type="email" name="email" id="Uname" placeholder="Recovery Email" required>
            <br><br>
<label><b>Phone Number
            </b>
            </label>
 	   <input type="text" name="phone" id="phone" placeholder="Phone number" onkeypress="return isNumberKey(event)" required>
            <br><br>
            <label><b>Password
            </b>
            </label>
            <input type="Password" name="Pass" id="Pass" placeholder="Password" onchange="verifyPassword()" required="required"   />
            <br><br>
<label><b>Confirm Password</b>
            </label>
<br><br>
 <input type="Password" name="Pass1" id="Pass1" placeholder="Confirm Password" required="required" onchange="Validate()" />
            <br><br>

<input type="checkbox" id="check">
        <span>Agree Terms Condition</span>
        <br><br>
            <input type="submit" name="log" id="log" value="Register">
            <br><br>

        </form>

 </div>
    </div>


<?php include 'footer.php';?> 
</body>
</html>

