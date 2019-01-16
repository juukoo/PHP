<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
				$servername = "127.0.0.1:50508";
				$username = "azure";
				$password = "6#vWHD_$";
				$dbname = "myDB";
 
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
 
				// Check connection
				if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully<br>";
 
				$sql = "SELECT id, firstname, lastname FROM MyGuests";
				$result = $conn->query($sql);
 
				if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  				echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				}
				} else {
  				echo "0 results";
				}
 
				$conn->close(); 
				?>

<body>
</body>
</html>