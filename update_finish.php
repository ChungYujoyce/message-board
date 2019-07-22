<<<<<<< HEAD
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modify Done</title>
	<link href="./css/register.css" rel="stylesheet">     
</head>

<body>
	<div id="All">
		<div id="Header"><img src="loga"></div>

		<div id="Contents">
<?php
	include("./mysql_connect.inc.php");
	$pw = $_POST['pw'];
	$pw2 = $_POST['pw2'];
	//紅色字體為判斷密碼是否填寫正確
	if($_SESSION['id'] != null && $pw != null && $pw2 != null && $pw == $pw2){
			$id = $_SESSION['id'];
		
			//更新資料庫資料語法
			$sql = "update member set password='$pw' where username='$id'";
			if($Link_PDO->query($sql)){
					echo '<meta http-equiv=REFRESH CONTENT=0;url=./member.php>';
			}
			else{
					echo "<script>alert('Modify Failed!');</script>";
					echo '<meta http-equiv=REFRESH CONTENT=0;url=./member.php>';
			}
	}
	else{
			echo "<script>alert('No rights to view this page');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
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
	<title>Modify Done</title>
	<link href="./css/register.css" rel="stylesheet">     
</head>

<body>
	<div id="All">
		<div id="Header"><img src="loga"></div>

		<div id="Contents">
<?php
	include("./mysql_connect.inc.php");
	$pw = $_POST['pw'];
	$pw2 = $_POST['pw2'];
	//紅色字體為判斷密碼是否填寫正確
	if($_SESSION['id'] != null && $pw != null && $pw2 != null && $pw == $pw2){
			$id = $_SESSION['id'];
		
			//更新資料庫資料語法
			$sql = "update member set password='$pw' where username='$id'";
			if($Link_PDO->query($sql)){
					echo '<meta http-equiv=REFRESH CONTENT=0;url=./member.php>';
			}
			else{
					echo "<script>alert('Modify Failed!');</script>";
					echo '<meta http-equiv=REFRESH CONTENT=0;url=./member.php>';
			}
	}
	else{
			echo "<script>alert('No rights to view this page');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
?>
		</div>
	</div>

</body>
</html>


>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
