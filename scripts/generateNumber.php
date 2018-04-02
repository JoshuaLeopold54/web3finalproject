<!-- Basically generate a random number based on the DB length -->

<?php
	include('connection.php');
	
	$theItemsDB = mysqli_select_db($conn, "item_db");
	$query = mysqli_query($conn, "SELECT * from items");
	$totalItems = mysqli_num_rows($query);
	
	
?>