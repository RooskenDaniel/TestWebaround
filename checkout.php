<html>
<body>
		<form action="order.php" method="post">
		<table>
			<tr>
			    <th>Quantity</th>
			    <th>Title</th>
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
		echo "<tr><th><input type='text'value='" . $value . "'name='" . $key . "'readonly='readonly'></th><th>" . $key . "</th></tr>";
	}
	$conn->close();

?>		
			<input type="text" name="name", placeholder="name">
			<input type="text" name="email", placeholder="email">
			<input type="text" name="phone" placeholder="phonenumber">
			<input type="text" name="adress" placeholder="adress">
			<input type="text" name="notes" placeholder="optional notes">
			<input type="submit">
</table>

		</form>

	<form>
</body>
</html> 