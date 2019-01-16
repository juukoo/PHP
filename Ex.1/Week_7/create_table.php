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
			
				//sql table
				$sql = "CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP)";
				
				if($conn->query(sql) === TRUE){
					echo "Table MyGuest created successfully";
				}else{
					echo "Error creating table: ".$conn->error;
				}
				$conn->close();

<body>
</body>
</html>