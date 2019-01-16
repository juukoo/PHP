<html>
<body>
<?php
	if (empty($_POST["number"])) 
	{
		echo "Please enter your number first";
	} 
	else 
	{
		echo "Number entered by you is:"." ".$_POST["number"];
		echo "<br>";	
		$number = $_POST["number"];
		if ($number % 2 == 0) 
		{
			echo "It's even";
		}
		else
		{	
			echo "It's odd";	
		}
	}
?>
</body>
</html>