<!DOCTYPE html>
<html>
	<head>
		<script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
		<!-- Create a script that grabs information from a database and then
				translates it into JSON information where we grab and replace
				the <picture-item> to the picture ID associated with DB
				then if they upvote, slide in information about the product like price
				if they downvote, slide in a new item picture!
		-->
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="import" href="DOMS/upvoteButton.html">
		<link rel="import" href="DOMS/downvoteButton.html">
		<link rel="import" href="bower_components/iron-icons/iron-icons.html">
		<link rel="import" href="DOMS/imageGenTest.php">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<style>
			#upvote {
				background-color: #4dff4d;
				border-radius: 3px 3px 3px 3px;
			}
			#downvote {
				background-color: #ff4d4d;
				border-radius: 3px 3px 3px 3px;
			}	
		</style>
	</head>
	<body>
	<?php
		include("scripts/connection.php");
	?>
	<div id="main">
		<!-- Basically where the picture will be of the item. -->
		<div id="picture">
			<div id="results"></div>
		<image-gent></image-gent>
		</div>
		<div id="buttons">
				<button class="buttons"><upvote-button id="upvote" on-Click="upvoteClick"></upvote-button></button>&nbsp;
				<button class="buttons"><downvote-button id="downvote"></downvote-button></button>
				<paper-icon-button icon="icons:check"></paper-icon-button>
		</div>
	</div>
	</body>
</html>