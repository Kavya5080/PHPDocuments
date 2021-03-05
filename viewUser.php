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
  <h2> User</h2>
  <div class="disp">
  <table>
  <tr>
    <th>Name </th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Action</th>
  </tr>
<?php
$result = mysqli_query($conn,"SELECT * FROM User");
    while ($row = mysqli_fetch_array($result)) {
    
?>
  <tr>
    <td><?php echo $row['firstname']." ". $row['lastname'] ?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['phoneNumber'] ?></td>
 <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
  
<?php
}

/*freeresultset*/
$result->free();

?>
</table>
</div>
  </body>
  </html>
