<?php 
include "dblecture_conn.php";
$msg="";
if (isset($_POST['submit'])) {
	
	$Pname=$_POST['Pname'];
	$Pprice=$_POST['Pprice'];

	$insert=mysqli_query($conn, "INSERT INTO products`(item_name`, item_price) VALUES ('$Pname', '$Pprice')");
	if ($insert) {
		$msg="Data inserted succesfull";
		 header("location: index.php? new_record=added");
		exit();
	}
	else{
		$msg="something error!";
	}
}



 ?>