<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			Order Confirmation and Logout Page
		</title>
	</head>
	<body>
		<?php
session_start();
echo "<h3 style='text-align: right'>Logged in as:</h3>
<table align='right' border='5' style='font-family: arial'><tr><th>Username</th>
<th>Email</th></tr><tr><td>" . $_SESSION['appUsername'] . "</td><td>"
	. $_SESSION['appEmail'] . "</td></tr></table><br><br><br><br>"; ?>
		<style>
			input[type=submit] {
				width: 25%;
				background-color: #ff6666;
				color: white;
				padding: 6px 10px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			input[type=reset]:hover {
				background-color: #cc0000;
			}
			div {
				margin: auto;
				width: 50%;
				border-radius: 5px;
				background-color: #f2f2f2;
				padding: 20px;
			}
		</style>
		<div>
			<p style="font-size: 150%">
				Your order has been successfully placed.
			</p>
			<p style="text-align: center; font-family: palace script mt; font-size: 500%">
				Thank you for your purchase!
			</p>
			<!-- Provide a button to logout -->
			<form name='logout' method='post' action='Logout.php'style='text-align: center'>
				<input type='submit' name='submitButton' value='Logout'>
			</form>
		</div>
	</body>
</html>