<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Member Section</title>
	<link href="./css/register.css" rel="stylesheet">  
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
</head>

<body>
	<div id="All">
		<div id="Header"><img src="loga.png"></div>

		<div id="Contents">
<?php
	include("./mysql_connect.inc.php");
	if($_SESSION['id'] != null)
	{
			//將$_SESSION['username']丟給$id
			//這樣在下SQL語法時才可以給搜尋的值
			$id = $_SESSION['id'];
			//若以下$id直接用$_SESSION['username']將無法使用
		   // $sql = "SELECT * FROM member_table where username='$id'";
			$sql = "SELECT * FROM member where username='$id'";
			$result = $Link_PDO->query($sql);
			$row=$result->fetch();
			echo "<form name='form' method='post' action='./update_finish.php'>";
			echo"
					<div class='form-group'>
						<label>*Change Password：</label> <input class='form-control input-lg' data-toggle='tooltip' id='required' name='pw' placeholder='Password' type='password' value='$row[3]'>
					</div>
					<div class='form-group'>
						<label>*Confirm Changed Password：</label> <input class='form-control input-lg' data-toggle='tooltip' id='required' name='pw2' placeholder='Confirm Password' type='password' value='$row[3]'>
					</div>
					";
					echo "<button class='btn btn-primary' type='submit'>Confirm modification</button></form>";
	}
	else
	{
			echo 'No rights!!';
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
	?>

		</div>
	</div>
<script src="js/register.js" type="text/javascript">
	</script>
</body>
=======
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Member Section</title>
	<link href="./css/register.css" rel="stylesheet">  
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
</head>

<body>
	<div id="All">
		<div id="Header"><img src="loga.png"></div>

		<div id="Contents">
<?php
	include("./mysql_connect.inc.php");
	if($_SESSION['id'] != null)
	{
			//將$_SESSION['username']丟給$id
			//這樣在下SQL語法時才可以給搜尋的值
			$id = $_SESSION['id'];
			//若以下$id直接用$_SESSION['username']將無法使用
		   // $sql = "SELECT * FROM member_table where username='$id'";
			$sql = "SELECT * FROM member where username='$id'";
			$result = $Link_PDO->query($sql);
			$row=$result->fetch();
			echo "<form name='form' method='post' action='./update_finish.php'>";
			echo"
					<div class='form-group'>
						<label>*Change Password：</label> <input class='form-control input-lg' data-toggle='tooltip' id='required' name='pw' placeholder='Password' type='password' value='$row[3]'>
					</div>
					<div class='form-group'>
						<label>*Confirm Changed Password：</label> <input class='form-control input-lg' data-toggle='tooltip' id='required' name='pw2' placeholder='Confirm Password' type='password' value='$row[3]'>
					</div>
					";
					echo "<button class='btn btn-primary' type='submit'>Confirm modification</button></form>";
	}
	else
	{
			echo 'No rights!!';
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
	?>

		</div>
	</div>
<script src="js/register.js" type="text/javascript">
	</script>
</body>
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
</html>