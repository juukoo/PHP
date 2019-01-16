<html>
<body> 

<?php
	if ($_POST) {
		
		$year=$_POST["year"];
		
		if ((($year%4)==0) && (($year%100)!=0)) {
			
			echo "Given year: $year is a leap year";
		
		}else if ((($year%100)==0) && (($year%400)!=0)) {
			
			echo "Given year: $year is not a leap year";
		
		}else if (($year%400)==0) {
			
			echo "Given year: $year is a leap year";	
		
		}else
			echo "given year: $year is not leap year";
	
}
	
	?>

</body>
</html>

