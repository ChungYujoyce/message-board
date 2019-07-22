<<<<<<< HEAD
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("./mysql_connect.inc.php");
	$id = $_POST['id'];
	$post = $_POST['post_content'];
	$del_post = $_POST['post_content_modify'];
	$post_to = $_POST['post_after_modify'];
	if($_SESSION['id'] == 'root')
	{		
		//刪除資料庫資料語法
		if($id){
			$sql = "delete from member where username='$id'";
			if($pass=$Link_PDO->exec($sql)) echo '<h2>刪除帳號成功!</h2>';
		}elseif($post){
			$sql_con = "delete from posts where post_content='$post'";  
			if($pass=$Link_PDO->exec($sql_con))echo '<h2>刪除留言成功!</h2>';
		}elseif($del_post AND $post_to){
			$sql_con_m = "update posts set post_content='$post_to' where post_content='$del_post'"; 
			if($pass=$Link_PDO->exec($sql_con_m))echo '<h2>編輯留言成功!</h2>';
		}
		if(!$pass) echo "<h2>刪除失敗! 無此資料</h2>";
		/*

		if($Link_PDO->query($sql))
		{
				echo '<h2>刪除帳號成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}elseif($Link_PDO->query($sql_con))
		{			echo $_POST['post_content'];
				echo '<h2>刪除留言成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}elseif($Link_PDO->query($sql_con_m))
		{
				echo '<h2>編輯留言成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}
		else
		{
				echo "<h2>刪除失敗! 無此資料</h2>";
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}
*/
	}
	else
	{
			echo '<h2>您無權限觀看此頁面!</h2>';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
	}
	echo '<meta http-equiv=REFRESH CONTENT=2;url=./delete.php>';
?>

<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
		<style>
		body,
		html {
			width: 100%;
			height: 100%;
			margin: 0px;
			padding: 0px;
			background-image: url("https://images.unsplash.com/photo-1552378267-6e4c5112b7d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80");
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}
		h1{
				color: white;
				font-family: 'Merienda',
				cursive;
		}
		h2{
				color: white;
				font-family: 'Merienda',
				cursive;
		}
		h3{
				color: yellow;
				font-family: 'Merienda',
				cursive;
		}
		input{
				color: red;
				font-size: 15px;
			 font-family: 'Merienda',
				cursive;
		}
		</style>
	</head>
	<body>

	</body>
</html>

=======
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("./mysql_connect.inc.php");
	$id = $_POST['id'];
	$post = $_POST['post_content'];
	$del_post = $_POST['post_content_modify'];
	$post_to = $_POST['post_after_modify'];
	if($_SESSION['id'] == 'root')
	{		
		//刪除資料庫資料語法
		if($id){
			$sql = "delete from member where username='$id'";
			if($pass=$Link_PDO->exec($sql)) echo '<h2>刪除帳號成功!</h2>';
		}elseif($post){
			$sql_con = "delete from posts where post_content='$post'";  
			if($pass=$Link_PDO->exec($sql_con))echo '<h2>刪除留言成功!</h2>';
		}elseif($del_post AND $post_to){
			$sql_con_m = "update posts set post_content='$post_to' where post_content='$del_post'"; 
			if($pass=$Link_PDO->exec($sql_con_m))echo '<h2>編輯留言成功!</h2>';
		}
		if(!$pass) echo "<h2>刪除失敗! 無此資料</h2>";
		/*

		if($Link_PDO->query($sql))
		{
				echo '<h2>刪除帳號成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}elseif($Link_PDO->query($sql_con))
		{			echo $_POST['post_content'];
				echo '<h2>刪除留言成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}elseif($Link_PDO->query($sql_con_m))
		{
				echo '<h2>編輯留言成功!</h2>';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}
		else
		{
				echo "<h2>刪除失敗! 無此資料</h2>";
				echo '<meta http-equiv=REFRESH CONTENT=2;url=./member.php>';
		}
*/
	}
	else
	{
			echo '<h2>您無權限觀看此頁面!</h2>';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
	}
	echo '<meta http-equiv=REFRESH CONTENT=2;url=./delete.php>';
?>

<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
		<style>
		body,
		html {
			width: 100%;
			height: 100%;
			margin: 0px;
			padding: 0px;
			background-image: url("https://images.unsplash.com/photo-1552378267-6e4c5112b7d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80");
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}
		h1{
				color: white;
				font-family: 'Merienda',
				cursive;
		}
		h2{
				color: white;
				font-family: 'Merienda',
				cursive;
		}
		h3{
				color: yellow;
				font-family: 'Merienda',
				cursive;
		}
		input{
				color: red;
				font-size: 15px;
			 font-family: 'Merienda',
				cursive;
		}
		</style>
	</head>
	<body>

	</body>
</html>

>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
