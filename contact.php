<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
 <script src="myscripts.js"></script>

</head>
<body>

<?php include 'menu.php';?>
<?php include 'header.php';?> 
<h3>Contact Form</h3>

<div class="login">
  <form action="display.php" method="get">
    <label for="fname">First Name</label>
    <input type="text" id="Uname" name="firstname" placeholder="Your name..">
    <br><br>
    <label for="lname">Last Name</label>
    <input type="text" id="Uname" name="lastname" placeholder="Your last name..">
    <br><br>
   
   
    <textarea id="Uname" name="subject" placeholder="Write something.." style="height:100px;"></textarea>
    <br><br>
    <input type="submit" id=log" value="Submit">
  </form>
</div>

<?php include 'footer.php';?> 
</body>
</html>