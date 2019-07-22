<<<<<<< HEAD
<?php session_start(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//將session清空
	unset($_SESSION['username']);
	echo '<script>confirm("Are you sure?");</script>';
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
=======
<?php session_start(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//將session清空
	unset($_SESSION['username']);
	echo '<script>confirm("Are you sure?");</script>';
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
?>