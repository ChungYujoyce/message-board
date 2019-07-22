<<<<<<< HEAD
<?php session_start();
	include("./mysql_connect.inc.php");
	$id=$_SESSION['id'];
	$sql = " select * from member WHERE username = '$id'";
	$result = $Link_PDO->query($sql);
	$row=$result->fetch();
	
	if(isset($_POST['post_btn'])){
		if($_POST['post_content']!=""){
			$nickname = $row[4];
			$gender = $row[5];
			$_SESSION['post_by'] = $nickname;
			$sqll = "INSERT INTO posts (post_content,post_by,post_gen,post_date,post_time) VALUES ('".$_POST['post_content']."','$gender','$nickname','".date("Y/m/d")."','".date("H:i:s")."')";//".date("Y-m-d H:i:s")."
			
		}
		if($Link_PDO->query($sqll))
		{
			
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./forum.php>';
			//echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
		}
		else
		{
			//echo '<script>confirm("Register Error,Please do it again!");</script>';
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
		}

	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Hompage</title>
	<link href="./css/homepage.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="All">
		<div id="Header">
			<img src="loga.png">
			
		</div>
		<div id="Left">
			
				<form id="form1" name="form1" method="post"  class="form-horizontal" >

				<div class="form-group">
					
				<label for="guestContent" class="col-sm-4 control-label" id="message_type">Contents：</label><br>
				<div class="col-sm-6">
					<textarea name="post_content" class="form-control" id="guestContent" rows="8" type="text" form="form1"></textarea>
				</div>
					<input id="message" type="submit" value="SEND" name="post_btn"class="submitButton">
					
					
				</div>		
				</form>
			<div >
				<input id="NewAccount" onclick="location.href='./logout.php'" type="button" value="Logout">
				<input id="NewAccount" onclick="location.href='./forum.php'" type="button" value="Forum">
				<input id="NewAccount" onclick="location.href='./member.php'" type="button" value="Member Section">
			</div>
		
    
				
		</div>
	</div>

</body>
=======
<?php session_start();
	include("./mysql_connect.inc.php");
	$id=$_SESSION['id'];
	$sql = " select * from member WHERE username = '$id'";
	$result = $Link_PDO->query($sql);
	$row=$result->fetch();
	
	if(isset($_POST['post_btn'])){
		if($_POST['post_content']!=""){
			$nickname = $row[4];
			$gender = $row[5];
			$_SESSION['post_by'] = $nickname;
			$sqll = "INSERT INTO posts (post_content,post_by,post_gen,post_date,post_time) VALUES ('".$_POST['post_content']."','$gender','$nickname','".date("Y/m/d")."','".date("H:i:s")."')";//".date("Y-m-d H:i:s")."
			
		}
		if($Link_PDO->query($sqll))
		{
			
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./forum.php>';
			//echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
		}
		else
		{
			//echo '<script>confirm("Register Error,Please do it again!");</script>';
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
		}

	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Hompage</title>
	<link href="./css/homepage.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="All">
		<div id="Header">
			<img src="loga.png">
			
		</div>
		<div id="Left">
			
				<form id="form1" name="form1" method="post"  class="form-horizontal" >

				<div class="form-group">
					
				<label for="guestContent" class="col-sm-4 control-label" id="message_type">Contents：</label><br>
				<div class="col-sm-6">
					<textarea name="post_content" class="form-control" id="guestContent" rows="8" type="text" form="form1"></textarea>
				</div>
					<input id="message" type="submit" value="SEND" name="post_btn"class="submitButton">
					
					
				</div>		
				</form>
			<div >
				<input id="NewAccount" onclick="location.href='./logout.php'" type="button" value="Logout">
				<input id="NewAccount" onclick="location.href='./forum.php'" type="button" value="Forum">
				<input id="NewAccount" onclick="location.href='./member.php'" type="button" value="Member Section">
			</div>
		
    
				
		</div>
	</div>

</body>
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
</html>