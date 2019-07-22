<<<<<<< HEAD
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['id'] == 'root')
{
	echo "<form name=\"form\" method=\"post\" action=\"./delete_finish.php\">";
	echo "<h2>要刪除的帳號：</h2><input type=\"text\" name=\"id\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"刪除\" /><br>";
	echo "<h2>要刪除的留言：</h2><input type=\"text\" name=\"post_content\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"刪除\" /><br>";
	echo "<h2>要編輯的留言：</h2><input type=\"text\" name=\"post_content_modify\" /> <br>";
	echo "<h2>編輯成：</h2><input type=\"text\" name=\"post_after_modify\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
	echo "</form>";

	echo "<h3>~~請擇一填寫~~</h3>";
}
else
{
	echo '<h1>您無權限觀看此頁面!</h1>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
}
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
=======
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['id'] == 'root')
{
	echo "<form name=\"form\" method=\"post\" action=\"./delete_finish.php\">";
	echo "<h2>要刪除的帳號：</h2><input type=\"text\" name=\"id\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"刪除\" /><br>";
	echo "<h2>要刪除的留言：</h2><input type=\"text\" name=\"post_content\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"刪除\" /><br>";
	echo "<h2>要編輯的留言：</h2><input type=\"text\" name=\"post_content_modify\" /> <br>";
	echo "<h2>編輯成：</h2><input type=\"text\" name=\"post_after_modify\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
	echo "</form>";

	echo "<h3>~~請擇一填寫~~</h3>";
}
else
{
	echo '<h1>您無權限觀看此頁面!</h1>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=./index.php>';
}
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
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
</html>