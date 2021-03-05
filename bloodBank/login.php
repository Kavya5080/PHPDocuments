<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<?php
if ($_SESSION['errorMessage'] === 1) {
    $_SESSION['errorMessage'] = 2;
    echo '<script language="javascript">';
    echo 'alert("Invalid User name or password")';
    echo '</script>';
}
?>

<video autoplay muted loop id="myVideo">
  <source src="home.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<div class="content">

<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
            <p id="msg1"></p>
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <form method="post" id="loginForm" action="validateRegister.php">
                        <div class="login">
                        <div class="group"> <label for="user" class="label">Select Credential</label> <select name="loginType"   style="background-color: transparent;color:white;" id="logiType" class="input select option" required="required">
                        <option value="" disabled selected>Select Credential</option>
                        <option value="1" id="1">Hospital</option>
                        <option value="2" id="2">User</option>
                        </select></div>
                            <div class="group"> <label for="user" class="label">Email</label> <input id="user" name="email" type="text" class="input" placeholder="Enter your Email" value="<?php if (isset($_COOKIE["email"])) {echo $_COOKIE["email"];}?>"" required="required"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name ="Pass" type="password" class="input" data-type="password" placeholder="Enter your password" value="<?php if (isset($_COOKIE["Pass"])) {echo $_COOKIE["Pass"];}?>"" required="required"> </div>
                            <div class="group"> <input id="check" name="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" class="button" name="form1" id="form1" value="Sign In"> </div>
                    </form>
                    <div class="hr"></div>
                            <div class="foot"> <a href="#">Forgot Password?</a> </div>
                        </div>
                        <div class="sign-up-form">
                        <p id="msg"></p>
                        <form method="post" id="userForm">
                        <div class="group"> <label for="user" class="label">Select Register Type</label> <select name="typeOfUser" style="color: black;" onchange="showhidediv()" id="userType" class="input select option" required="required">
                        <option value="" disabled selected>Select Credential</option>
                        <option value="1" id="1">Hospital</option>
                        <option value="2" id="2">User</option>
                        </select></div>
                        <div id="hospitalDiv" style="display:none;">
                        <div class="group"> <label for="user" class="label">Hospital Name</label> <input id="hospitalName" name="hospitalName" type="text" class="input" placeholder="Hospital Name" required="required"> </div>
                        <div class="group"> <label for="user" class="label">Hospital Type</label> <select name="hospType" id="hospType" class="input select option" required="required">
                        <option value="" disabled selected>Select Type</option>
                        <option value="1" id="1">Private Hosptal</option>
                        <option value="2" id="2">Government Hospital</option>
                        </select></div>
                        </div>
                        <div id="userDiv" style="display:none;">
                            <div class="group"> <label for="user" class="label">Firstname</label> <input id="firstName" name="firstName" type="text" class="input" placeholder="First Name" required="required"> </div>
                            <div class="group"> <label for="user" class="label">Lastname</label> <input id="lastName" name="lastName" type="text" class="input" placeholder="Last Name" required="required"> </div>
                            <div class="group"> <label for="user" class="label">Gender</label><input type="radio" id="male" name="gender" value=1 required="required"><label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value=2><label for="female">Female</label></div>
                            <div class="group"> <label for="user" class="label">Blood Group</label> <select name="bloodGroup" id="bloodGroup" class="input select option" required="required">
                        <option value="" disabled selected>Select Blood Group</option>
                        <option value=1>O+</option>
                        <option value=2>A+</option>
                        <option value=3>B+</option>
                        <option value=4>AB+</option>
                        <option value=5>O-</option>
                        <option value=6>A-</option>
                        <option value=7>B-</option>
                        <option value=8>AB-</option>
                        </select></div>
                        <div class="group"> <label for="user" class="label">Date Of Birth</label> <input  type="text" id="datepicker" name="dob" class="input" required="required"> </div>
                        </div>
                        <div class="group"> <label for="pass" class="label">Email Address</label> <input id="email" type="email" required="required" name='email' onblur="validateEmail(this);" class="input" placeholder="Enter your email address"> </div>
                            <div class="group"> <label for="user" class="label">Password</label> <input id="Pass" name="Pass" type="password" required="required" class="input" data-type="password" onchange="verifyPassword()" placeholder="Create your password"> </div>
                            <div class="group"> <label for="user" class="label">Repeat Password</label> <input id="Pass1" name="Pass1" type="password" required="required" class="input" data-type="password" onchange="Validate()" placeholder="Repeat your password"> </div>
                            <div class="group"> <label for="user" class="label">Phone Number</label> <input id="phoneNumber" name="phoneNumber" type="text" required="required" maxlength="10" class="input" onkeypress="return isNumberKey(event)" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Phone Number"> </div>
                            <div class="group"> <label for="user" class="label">Adress</label> <input id="address" name="address" type="text" class="input" required="required"  placeholder="Address"> </div>
                            <div class="group"> <label for="user" class="label">City</label> <input id="city" name="city" type="text" class="input" required="required" placeholder="City"> </div>
                            <div class="group"> <label for="user" class="label">District</label> <input id="district" name="district" type="text" required="required" class="input" placeholder="District"> </div>
                            <div class="group"> <label for="user" class="label">State</label> <input id="state" name="state" type="text" class="input" required="required" placeholder="State"> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign Up" name="form2" id="form2"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="validScript.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
