<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
				$servername = "127.0.0.1:50508";
				$username = "azure";
				$password =	"6#vWHD_$";
				
				//connection
				$conn = new MySQLi($servername, $username, $password);
				
				//check
				if($conn->connect_error){
					die("Connection failed: .$conn->connect_error");
				}
				echo"Connected successfully";
			
				
					
				//inser multiple
				$sql = "INSERT INTO MyGuests (firstname, lastname, email)
				VALUES ('John1', 'Doe1', 'john@example1.com');";
				$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
				VALUES ('Mary', 'Moe', 'mary@example.com');";
				$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
				VALUES ('Julie', 'Dooley', 'julie@example.com')";
 
				if ($conn->multi_query($sql) === TRUE) {
				echo "New records created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
 
				$conn->close(); 
	?>

<body>
</body>
</html>