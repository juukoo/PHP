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
 
				// sql to delete a record
				$sql = "DELETE FROM MyGuests WHERE id=2";
 
				if ($conn->query($sql) === TRUE) {
  				echo "Record deleted successfully";
				} else {
  				echo "Error deleting record: " . $conn->error;
				}
 
				$conn->close(); 
				?>


<body>
</body>
</html>