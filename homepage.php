<!-- HTML Product Order Page
Date: Nov. 19, 2016
Author: ZhiJian Yu
Title: homepage.php
Description: Homepage which presents a simple order form for the
user to add and checkout merchandise to proceed to payment -->
<!DOCTYPE html>  
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			Best Shoes Homepage
		</title>
	</head>
	<?php
// Retrieve Post Data
$username = $_POST["username"];
$email = $_POST["email"];
// Set the session information
session_start();
$_SESSION['appUsername'] = $username;
$_SESSION['appEmail'] = $email;
$_SESSION['appProducts'] = array();
$_SESSION['appPrices'] = array();
$prices = array(59.99, 49.99, 69.99);
$products = array("Men's Genuine Leather Boat Shoes (Dark Brown)",
				  "Women's Genuine Leather Boat Shoes (Light Gray)",
				  "Men's Genuine Leather Dress Shoes (Black)");
if (isset($_POST['submitButton'])) {// To run PHP script on submit
	if (!empty($_POST['checkboxList'])) {
		// Loop to store and display values of individual checked checkbox.
		foreach ($_POST['checkboxList'] as $selected) {
			array_push($_SESSION['appProducts'], $selected);
		}
	}
}
if (!empty($_SESSION['appProducts'])) {
	foreach ($_SESSION['appProducts'] as $value) {
		if ((strpos($value, "Men's")) && (strpos($value, "Boat"))
			&& (strpos($value, "Brown"))) {
			array_push($_SESSION['appPrices'], $prices[0]);
		}
		if ((strpos($value, "Women's")) && (strpos($value, "Boat"))
			&& (strpos($value, "Gray"))) {
			array_push($_SESSION['appPrices'], $prices[1]);
		}
		if ((strpos($value, "Men's")) && (strpos($value, "Dress"))
			&& (strpos($value, "Black"))) {
			array_push($_SESSION['appPrices'], $prices[2]);
		}
	}
}
echo "<h3 style='text-align: right'>Logged in as:</h3>
<table align='right' border='5' style='font-family: arial'><tr><th>Username</th>
<th>Email</th></tr><tr><td>" . $_SESSION['appUsername'] . "</td><td>"
	. $_SESSION['appEmail'] . "</td></tr></table><br><br><br><br>";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1)) {
	// The last numeric variable denotes the number of minutes.
	// Set an if condition to check if last request was over 1 minute
	session_unset(); // Use the function to unset $_SESSION variable for the run-time 
	session_destroy(); // Call the integrated function to destroy the session data in memory
}
$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time stamp
	?>
	<style>
		input[type=submit] {
			width: 25%;
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
		input[type=reset] {
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
			font-family: arial;
			text-align: left;
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
	<body>
		<div>
			<form name="main" method="post" action="payment.php">
				<table align="center" style="margin: 0px auto">
					<tr>
						<td colspan="3" style="text-align: center;
font-family: palace script mt; font-size: 500%">
	Welcome to BestShoes.com
						</td>
					</tr>
					<tr>
						<td colspan="3">
							Please check the box to choose the item:
						</td>
					</tr>
					<tr>
						<td>
							<img src="Images/Men Boat Shoes (Dark Brown).jpg" width="300"
							height="150">
						</td>
						<td>
							<?php
echo "<p style='color: blue'>$products[0]</p>";
echo "$$prices[0]"; ?>
						</td>
						<td style="text-align: center; font-family: palace script mt;
font-size: 250%">
	<input type="checkbox" name="checkboxList[]" value="
<?php echo $products[0] ?>">
	Select
						</td>
					</tr>
					<tr>
						<td>
							<img src="images/Women Boat Shoes (Light Gray).jpg" width="300"
							height="150">
						</td>
						<td>
							<?php
	echo "<p style='color: blue'>$products[1]</p>";
echo "$$prices[1]"; ?>
						</td>
						<td style="text-align: center; font-family: palace script mt;
font-size: 250%">
	<input type="checkbox" name="checkboxList[]" value="
<?php echo $products[1] ?>">
	Select
						</td>
					</tr>
					<tr>
						<td>
							<img src="images/Men Dress Shoes (Black).jpg" width="300"
							height="150">
						</td>
						<td>
							<?php
	echo "<p style='color: blue'>$products[2]</p>";
echo "$$prices[2]"; ?>
						</td>
						<td style="text-align: center; font-family: palace script mt;
font-size: 250%">
	<input type="checkbox" name="checkboxList[]" 
	value="
<?php echo $products[2]; ?>">
	Select
						</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: right">
							<input type="reset" name="resetButton" value="Deselect All">
						</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: right">
							<input type="submit" name="submitButton"
							value="Proceed to Payment">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>