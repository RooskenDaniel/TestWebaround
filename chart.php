<html>
<body>
	<form action="checkout.php" method="post">
		<table>
			<tr>
			    <th>Number</th>
			    <th>Title</th>
			    <th>Quantity</th>
			    <th>Price</th>
			    <th>Remove</th>
			</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webaround";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	


	$counter = 1;
	foreach ($_POST as $key => $value)
	{
		if ($value > 0)
		{
			$sqlGetPrice = "SELECT price FROM products WHERE title = '$key'";
			$result = $conn->query($sqlGetPrice);

			if ($result)
			{
				$row = mysqli_fetch_array($result);
				echo "<tr><th>" . $counter . "</th><th>" . $key . "</th><th>" . $value . "</th><th>" . $row[0] * $value . "</th><th><input type='checkbox' name='" . $key . "' value='" . $value . "'checked></th></tr>";

				$counter++;			 
			}
			else
			{
				echo "Error: " . $sqlGetPrice . "<br>" . $conn->error;
			}	
		}
	}
	$conn->close();

?>

		</table>
		<input type="submit" value="checkout">
	<form>
</body>
</html> 