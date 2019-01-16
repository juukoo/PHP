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
				$dbname = "myDB"; 
				
				//connection
				$conn = new MySQLi($servername, $username, $password);
				
				//check
				if($conn->connect_error){
					die("Connection failed: .$conn->connect_error");
				}
				echo"Connected successfully";
			
				
				//insert
				$sql ="INSERT INTO MyGuests (firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com)";
			
				if($conn->query($sql) === TRUE){
					echo"New record created successfully";
				}else{
					echo "Error." .sql. "<br>" .$conn->error;
				}
				$conn->close();
?>		

<body>
</body>
</html>