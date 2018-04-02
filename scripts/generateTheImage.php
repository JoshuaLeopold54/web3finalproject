<?php
		$conn = new mysqli("localhost", "root", "", "item_db");

		if ($conn->connect_error) {
			die("Could not connect!" . $conn->connect_error);
		} else {
			
		}
		
		$theImageTwo = "BLAH";
		
		$randomImageQuery = "SELECT * FROM items ORDER BY RAND() LIMIT 1";
		$randomImageResults = $conn->query($randomImageQuery);
		$followingData = $randomImageResults->fetch_assoc();
		$theImageTwo = $followingData['item_pic'];
		
		
		echo $theImageTwo;
?>