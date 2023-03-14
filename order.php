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

	$sqlInsert = "INSERT INTO orders (name, email, phone, adress, notes) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['adress'] . "', '" . $_POST['notes'] . "')";

	$conn->query($sqlInsert);
	$idoforder = $conn->insert_id;


	foreach ($_POST as $key => $value)
	{
		switch ($key)
		{
			case 'name':
				break;
			case 'email':
				break;
			case 'phone':
				break;
			case 'adress':
				break;
			case 'notes':
				break;
			default:
				$sqlOrder_producs = "INSERT INTO product_order (orderid, productid, amount) VALUES ('" . $idoforder . "', '" . $key . "', '" . $value . "');";
				if ($conn->query($sqlOrder_producs) === TRUE) {
					  echo "New record created successfully";
					} else {
					  echo "Error: " . $sqlOrder_producs . "<br>" . $conn->error;
					}
		}
	}
	$conn->close();
?>	