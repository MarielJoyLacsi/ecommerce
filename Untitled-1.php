<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$item_name=$_POST['item_name'];
	$item_price=$_POST['item_price'];
	
	mysqli_query($conn,"update products set item_name='$item_name', item_price='$item_price' where item_id='$id'");
	header('location:index.php');
?>