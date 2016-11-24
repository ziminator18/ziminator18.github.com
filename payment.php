<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			Payment Page
		</title>
	</head>
	<body>
		<?php
$products = $_POST["checkboxList"];
session_start();
echo "<h3 style='text-align: right'>Logged in as:</h3>
<table align='right' border='5' style='font-family: arial'><tr><th>Username</th>
<th>Email</th></tr><tr><td>" . $_SESSION['appUsername'] . "</td><td>"
	. $_SESSION['appEmail'] . "</td></tr></table><br><br><br><br>";
$_SESSION['appProducts'] = $products;
$totalPrice = 0.0;
if (!empty($_SESSION['appProducts'])) {
	foreach ($_SESSION['appProducts'] as $value) {
		if ((strpos($value, "Men's")) && (strpos($value, "Boat"))
			&& (strpos($value, "Brown"))) {
			$totalPrice += 59.99;
		}
		if ((strpos($value, "Women's")) && (strpos($value, "Boat"))
			&& (strpos($value, "Gray"))) {
			$totalPrice += 49.99;
		}
		if ((strpos($value, "Men's")) && (strpos($value, "Dress"))
			&& (strpos($value, "Black"))) {
			$totalPrice += 69.99;
		}
	}
} ?>
		<style>
			input[type=submit] {
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
				border-radius: 5px;
				background-color: #f2f2f2;
				padding: 20px;
			}
			table, th, td {
				font-family: "arial";
				vertical-align: top;
			}
		</style>
		<div>
			<form name="main" method="post" action="orderConfirm.php">
				<?php
// Display the Session information
echo "<table align='center' style='margin: 0px auto'><tr>
<th style='text-align: left; font-size: 150%'>Order Details</th></tr>
<tr><td><b>Username</b>: </td><td>" . $_SESSION['appUsername']
	. "</td><td></tr><tr><td><b>Email</b>: </td><td>" . $_SESSION['appEmail']
	. "</td><td></tr><tr><td><b>Purchased Product(s)</b>:</td></tr>";
foreach($_SESSION['appProducts'] as $value)
{
	echo "<tr><td>" . $value . "</td></tr>";
}
echo "<tr><td><b>Total Price</b>: </td><td>" . $totalPrice
	. "</td></tr><tr><td colspan='2' style='text-align: center'>
<input type='submit' name='submitButton' value='Confirm Purchase'>
</td></tr></table>"; ?>
			</form>
		</div>
	</body>
</html>