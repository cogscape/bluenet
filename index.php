<!-- 
	Index page
	Version 0.0.4-alpha (05:00 08.06.2018)
-->

<?php
	// Cookies for async status reporting
		// Experimental (v0.0.3a, v0.0.4a)
	$cookie_value_default = "OFF";

	$cookie_name1 = "status-1-1";
	setcookie($cookie_name1, $cookie_value_default, time() + (86400 * 7), "/"); // 86400 = 1 day

	$cookie_name2 = "status-1-2";
	setcookie($cookie_name2, $cookie_value_default, time() + (86400 * 7), "/"); // 86400 = 1 day

	$cookie_name3 = "status-1-3";
	setcookie($cookie_name3, $cookie_value_default, time() + (86400 * 7), "/"); // 86400 = 1 day
?>

<!DOCTYPE HTML>
<html lang="en">
	<meta charset="utf-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<script src="Scripts/cookies.js" type="text/javascript" defer="true"></script>
	<script src="Scripts/buttons.js" type="text/javascript" defer="true"></script>

	<link rel="stylesheet" href="Style/style.css" />

	<title>Bluenet Mainpage</title>

	<!-- end of meta -->

	<head>
		<h1 id="logo">Bluenet Access</h1>
	</head>
	<body>
		<div class="row-3" id="first-row">
			<div class="column-3 my-button" 
			id="column-1-3" onclick="action(this)">
				<p class="action" id="action-1">
				Blue LED</p>
			</div>
			<div class="column-3 my-button" 
			id="column-2-3" onclick="action(this)";>
				<p class="action" id="action-2">
				Green LED</p>
			</div>
			<div class="column-3 my-button" 
			id="column-3-3" onclick="action(this)">
				<p class="action" id="action-3">
				Red LED</p>
			</div>
		</div>

		<div class="row-3" id="second-row">
			<div class="column-3 row-status" id="column-1-3">
				<p class="static-status" id="action-1">Status:</p>
				<p class="status" id="status-1-1">
					<?php 
						echo($_COOKIE["status-1-1"]);
					?>
				</p>
			</div>
			<div class="column-3 row-status" id="column-2-3">
				<p class="static-status" id="action-1-2">Status:</p>
				<p class="status" id="status-1-2">
					<?php
						echo($_COOKIE["status-1-2"]);
					?>
				</p>
			</div>
			<div class="column-3 row-status" id="column-3-3">
				<p class="static-status" id="action-1-3">Status:</p>
				<p class="status" id="status-1-3">
					<?php
						echo($_COOKIE["status-1-3"]);
					?>
				</p>
			</div>
		</div>
	</body>

	<footer>Version 0.0.4-alpha<br>
	Last updated: 05:00 08.06.2018</footer>

 </html>