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
			
				//database
				$sql = "CREATE DATABASE myDB";
				if($conn->query($sql) === TRUE){
					echo "Database created successfully";
				}else{
					echo "Error creating database: ".$conn->error;
				}
?>

<body>
</body>
</html>