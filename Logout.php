<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			Logout Confirmation Page
		</title>
	</head>
	<body>
		<?php		
session_start();
// Remove all session variables before logging out
session_unset();
// Destroy the current session
session_destroy();
echo "<h3 style='text-align: right'>Logged in as:</h3>
<table align='right' border='5' style='font-family: arial'><tr><th>Username</th>
<th>Email</th></tr><tr><td>" . $_SESSION['appUsername'] . "</td><td>"
	. $_SESSION['appEmail'] . "</td></tr></table><br><br><br><br>";
		?>
		<style>
			input[type=submit] {
				width: 30%;
				background-color: #ffcc66;
				color: shadow;
				padding: 6px 10px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			input[type=submit]:hover {
				background-color: #ffaa00;
			}
			div {
				margin: auto;
				width: 35%;
				border-radius: 5px;
				background-color: #f2f2f2;
				padding: 20px;
			}
		</style>
		<div>
			<h3 style="text-align: center">
				You have successfully logged out your account!
			</h3>
			<!-- Provide a button to sign in again -->
			<form name='signIn' method='post' action='signInAuth.html' style='text-align: center'>
				<input type='submit' name='submitButton' value='Sign in again'>
			</form>
		</div>
	</body>
</html>