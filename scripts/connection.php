<!-- Connection file -->
<?php
	$conn = new mysqli("localhost", "root", "", "item_db");

	if ($conn->connect_error) {
		die("Could not connect!" . $conn->connect_error);
	} else {
		
	}

?>
