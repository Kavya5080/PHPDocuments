<?php
	include "connect.php";
	$bloodGroup=$_POST['bloodGroup'];
	$unit=$_POST['unit'];
    $hospitalId=4;
    $sql1 = mysqli_query($conn,"SELECT * FROM bloodDetail where hospitalId=$hospitalId and bloodId=$bloodGroup");
	$row = mysqli_fetch_array($sql1);
console.log("LL");
if (is_array($row)) {
    
    $sql3 = "UPDATE bloodDetail set unit=unit+$unit where  hospitalId=$hospitalId and bloodId=$bloodGroup";
    if (mysqli_query($conn, $sql3)) {
      
    } else {
		echo  "Error: " . $sql3 . "<br>" . mysqli_error($conn);
	}
	
} else {
	$sql = "INSERT INTO bloodDetail(hospitalId,bloodId,unit) VALUES($hospitalId,$bloodGroup,$unit)";

	if (mysqli_query($conn, $sql)) {
		//echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	else {
		echo  "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	

mysqli_close($conn);
?>
 