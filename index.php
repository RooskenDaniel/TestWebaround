
<!DOCTYPE html>
<html>
<body>

	<form action="chart.php" method="post">

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

$sql = "SELECT title, price, description FROM products";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["title"]. " - Name: " . $row["price"]. " " . $row["description"]. "<input type='text' name=" . $row["title"] . "><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
		<input type="submit">
	</form>
</body>
</html>