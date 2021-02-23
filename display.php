<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
 <script src="myscripts.js"></script>

</head>
<body>

<?php include 'menu.php';?>
<h3>Encoded String</h3>
<br><br>
<center>
    <?php
$url = $_SERVER['REQUEST_URI'];
echo urlencode($url);
?>
</center>

</body>
</body>
</html>