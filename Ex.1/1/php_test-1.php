<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_test</title>
<link rel="stylesheet" type="text/css" href="final.css">
<style>
.error {color: #FF0000;}
</style>	
</head>

<body>
<div id="container">
	<div id="header">
		<h1>Web App!</h1>
	</div> <!-- end header -->
	<div id="menu">
		<ul>
		<!--	<li><a href="#">Home</a></li>
			<li><A href="#">Services</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Contact Me</a></li> -->
		</ul> 
	</div> <!-- end menu -->
	<div id="mainContainer">
		<div id="content">
		<!--<h2>Here's some content</h2> -->
			
			<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

				<h2>PHP Form Validation Example</h2>
				<p><span class="error">* required field.</span></p>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
				  Name: <input type="text" name="name" value="<?php echo $name;?>">
				  <span class="error">* <?php echo $nameErr;?></span>
				  <br><br>
				  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				  <span class="error">* <?php echo $emailErr;?></span>
				  <br><br>
				  Website: <input type="text" name="website" value="<?php echo $website;?>">
				  <span class="error"><?php echo $websiteErr;?></span>
				  <br><br>
				  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
				  <br><br>
				  Gender:
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				  <span class="error">* <?php echo $genderErr;?></span>
				  <br><br>
				  <input type="submit" name="submit" value="Submit">  
				</form>

				<?php
				echo "<h2>Your Input:</h2>";
				echo $name;
				echo "<br>";
				echo $email;
				echo "<br>";
				echo $website;
				echo "<br>";
				echo $comment;
				echo "<br>";
				echo $gender;
				?>
			
		<!--	<h2>Here's more content</h2>
			<p>This is another story</p> -->
		</div> <!-- end content -->
	<!--	<div id="sidebar">
			<h3>Menu</h3>
				<ul>
					<li>Menu item 1</li>
						<li>Menu item 2</li>
						<li>Menu item 3</li>
						</ul> -->
		</div> <!-- end sidebar -->
		<div id="footer">
			<p>Copyright (c) 2018 WEB</p>
		</div> <!-- end footer -->
	</div> <!-- end mainContainer -->
</div> <!-- end container -->
</body>
</html>