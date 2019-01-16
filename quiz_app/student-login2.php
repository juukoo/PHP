<?php
include_once( './studentvalidation.php' );
?>
<?php
mysql_connect("127.0.0.1:50508", "azure", "6#vWHD_$"); 
mysql_select_db('quizmdb'); 
$user = $_SESSION['valid_user'];

$testi = mysql_query("
SELECT *
FROM student
WHERE email = '$user'
");

while($r=mysql_fetch_array($testi))
	{
	$nimi=$r["first_name"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Quiz Master</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: ;
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
</head>
<body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
<div class="w3-display-topleft w3-padding-large w3-xlarge">
    QM
  </div>
<div class="w3-display-topright w3-padding w3-small">
	<p class="w3-button w3-medium"><a href="example_logout2.php">Sign out</a></p>
</div>
	<div class="w3-display-topmiddle w3-padding">
		<h1 class="w3-xxlarge w3-animate-top">Choose a quiz: </h1>
		<hr class="w3-border-grey" style="margin:auto;width:40%">
		
	</div>

	<div class="w3-display-topmiddle w3-padding">
	<br><br><br><br><br><br><br>
		<table class="w3-table w3-xlarge">
			<tr><td><strong><a href="test_one.php?n=1">Quiz 1</a></td></tr>
			<tr><td><strong><a href="test_two.php?n=11">Quiz 2</a></td></tr>
			<tr><td><strong><a href="#">Quiz 3</a></td></tr>
			<tr><td><strong><a href="#">Quiz 4</a></td></tr>
			<tr><td><strong><a href="#">Quiz 5</a></td></tr>
		</table>
	</div>
	</td>
</div>
</body>
</html>
