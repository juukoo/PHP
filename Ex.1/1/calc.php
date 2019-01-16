<html>
<body>
	<?php
		if($_POST["group1"] == add)
		{
			echo $_POST["number1"] + $_POST["number2"];
		}
		
		elseif($_POST["group1"] == "subtract") 
		{
			echo $_POST["number1"] - $_POST["number2"];
		}
		
		elseif($_POST["group1"] == "multiply") 
		{
			echo $_POST["number1"] * $_POST["number2"];
		}
		
		elseif($_POST["group1"] == "divide") 
		{
			echo $_POST["number1"] / $_POST["number2"];
		}

		?>
</body>
</html>