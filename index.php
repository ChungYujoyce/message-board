<<<<<<< HEAD
<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
	<title>Signin Page</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/signin.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
</head>

<body>
	<div id="custom-alert">
	</div>


	<div class="form-signin">
		<div id="Content">
			<form action="./connect.php" id="form" method="post" name="form">
				<div id="wrap">
					<!-- Just to center ver and hor -->


					<div class="wrap-label">
						<label class="h3 mb-3 labelid" for="id" id="go">Account</label>

						<p class="iconicfill-pen-alt2">
						</p>
						<input class="form-control" id="id" name="id" type="text">
					</div>


					<div class="wrap-label">
						<label class="h3 mb-3 labelpw" for="pw" id="go">Password</label>

						<p class="iconicfill-pen-alt2">
						</p>
						<input class="form-control" id="pw" name="pw" type="password">
					</div>


					<div id="login">
						<input class="btn btn-lg btn-primary btn-block" id="id2" name="login" type="submit" value="Login">
					</div>


					<div id="new-account">
						<input class="btn btn-lg btn-info btn-block" id="id3" onclick="location.href='./register.php'" type="button" value="New Account">
					</div>


					<div id="forget">
						<input class="btn btn-lg btn-secondary btn-block" id="id4" onclick="location.href='./forget.php'" type="button" value="Forget password">
					</div>
				</div>
			</form>
		</div>
		<?php   
			include("./mysql_connect.inc.php");
			$_SESSION['id']=$_POST['id'];
			$sql = " select * from member WHERE username = '$id'";
			$result = $Link_PDO->query($sql);
			if(isset($_POST["login"])){
				while($row=$result->fetch()){
					if($_POST['id']==$row[2] && $_POST['pw']==$row[3]){
						$_SESSION['id']=$_POST['id'];
						$_SESSION['pw']=$_POST['pw'];
					}
				}   
			}
		?>

		<h5>Monitor acount : root<br>
		password : 19990920</h5>


		<p class="mt-5 mb-3 text-muted">by CHUNG YU 2019</p>
	</div>
	<script src="index.js" type="text/javascript">
	</script>
</body>
=======
<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
	<title>Signin Page</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/signin.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
</head>

<body>
	<div id="custom-alert">
	</div>


	<div class="form-signin">
		<div id="Content">
			<form action="./connect.php" id="form" method="post" name="form">
				<div id="wrap">
					<!-- Just to center ver and hor -->


					<div class="wrap-label">
						<label class="h3 mb-3 labelid" for="id" id="go">Account</label>

						<p class="iconicfill-pen-alt2">
						</p>
						<input class="form-control" id="id" name="id" type="text">
					</div>


					<div class="wrap-label">
						<label class="h3 mb-3 labelpw" for="pw" id="go">Password</label>

						<p class="iconicfill-pen-alt2">
						</p>
						<input class="form-control" id="pw" name="pw" type="password">
					</div>


					<div id="login">
						<input class="btn btn-lg btn-primary btn-block" id="id2" name="login" type="submit" value="Login">
					</div>


					<div id="new-account">
						<input class="btn btn-lg btn-info btn-block" id="id3" onclick="location.href='./register.php'" type="button" value="New Account">
					</div>


					<div id="forget">
						<input class="btn btn-lg btn-secondary btn-block" id="id4" onclick="location.href='./forget.php'" type="button" value="Forget password">
					</div>
				</div>
			</form>
		</div>
		<?php   
			include("./mysql_connect.inc.php");
			$_SESSION['id']=$_POST['id'];
			$sql = " select * from member WHERE username = '$id'";
			$result = $Link_PDO->query($sql);
			if(isset($_POST["login"])){
				while($row=$result->fetch()){
					if($_POST['id']==$row[2] && $_POST['pw']==$row[3]){
						$_SESSION['id']=$_POST['id'];
						$_SESSION['pw']=$_POST['pw'];
					}
				}   
			}
		?>

		<h5>Monitor acount : root<br>
		password : 19990920</h5>


		<p class="mt-5 mb-3 text-muted">by CHUNG YU 2019</p>
	</div>
	<script src="index.js" type="text/javascript">
	</script>
</body>
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
</html>