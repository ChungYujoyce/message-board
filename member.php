<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Member Section</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="./css/signin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>
<body>
	<div id="All">
		<div id="Header"><img src="loga.png"></div>
		<div id="Contents">
		<?php
			include("./mysql_connect.inc.php");
			// determine user have right or not to view this page
			// maybe someone unrelated , must denied
			if($_SESSION['id'] != null){
				//show member info on page
					$idd = $_SESSION['id'];
					$sql = "SELECT * FROM member WHERE username = '$idd'";   
					$result = $Link_PDO->query($sql);
					$row=$result->fetch();
					echo "<table>";
					echo "<tr><td>Name：</td><td>$row[1]</td></tr>
					<tr><td>Acount：</td><td>$row[2]</td></tr>
					<tr><td>Nickname：</td><td>$row[4]</td></tr>
					<tr><td>Gender：</td><td>$row[5]</td></tr>
					<tr><td>Other：</td><td>$row[6]</td></tr>";
					echo "</table>";
			}
			else{
					echo 'You have no rights to view this page.!';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
			}
					echo '<a href="./homepage.php">Back to homepage</a><br>';
					echo '<a href="./update.php">Edit</a><br>';
					echo '<a href="./delete.php">Delete</a><br>';
					echo '<a href="./logout.php">Logout</a><br>';
?>

		</div>
	</div>
</body>
</html>




=======
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Member Section</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="./css/signin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>
<body>
	<div id="All">
		<div id="Header"><img src="loga.png"></div>
		<div id="Contents">
		<?php
			include("./mysql_connect.inc.php");
			// determine user have right or not to view this page
			// maybe someone unrelated , must denied
			if($_SESSION['id'] != null){
				//show member info on page
					$idd = $_SESSION['id'];
					$sql = "SELECT * FROM member WHERE username = '$idd'";   
					$result = $Link_PDO->query($sql);
					$row=$result->fetch();
					echo "<table>";
					echo "<tr><td>Name：</td><td>$row[1]</td></tr>
					<tr><td>Acount：</td><td>$row[2]</td></tr>
					<tr><td>Nickname：</td><td>$row[4]</td></tr>
					<tr><td>Gender：</td><td>$row[5]</td></tr>
					<tr><td>Other：</td><td>$row[6]</td></tr>";
					echo "</table>";
			}
			else{
					echo 'You have no rights to view this page.!';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
			}
					echo '<a href="./homepage.php">Back to homepage</a><br>';
					echo '<a href="./update.php">Edit</a><br>';
					echo '<a href="./delete.php">Delete</a><br>';
					echo '<a href="./logout.php">Logout</a><br>';
?>

		</div>
	</div>
</body>
</html>




>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
