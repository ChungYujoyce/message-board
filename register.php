<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php
	include('./src/autoload.php');
	$siteKey = '6Le3kD4UAAAAAAT-MEzT48qXEBXkAYu1THFwrxh8';
	$secret = '6Le3kD4UAAAAANapIaGuH-jG88f3gjZ5rtAJ4sul';
	$lang = 'zh-TW';
	// 初始化變數為空值
	$resp = '';
	?>
	
	<meta charset="utf-8">
	<title>Member Register</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/register.css" rel="stylesheet">              
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script async defer src="https://www.google.com/recaptcha/api.js?hl=%3C?php%20echo%20$lang;%20?%3E" type="text/javascript">
	</script>
	
</head>

<body>
	<div id="All">
		<div id="Header"><img src="./loga.png"></div>
		<div id="Contents">
			<form action="./register.php" id="form" method="post" name="form">
				<font color="orange" size="6">About You</font><br>
				<font color="gray" size="2">*need</font>
				<p></p>
				<div class="form-group">
					<label>*Name：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="name" >
				</div>
				<div class="form-group">
					<label>*Nickname：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="nickname" >
				</div>
				<div class="form-group">
					<label>Gender：</label> <input class="form-control input-lg" data-toggle="tooltip" name="gender" >
				</div><font color="orange" size="6">Create your acount</font>
				<p></p>
				<div class="form-group">
					<label>*E-mail：</label> <input aria-describedby="emailHelp" class="form-control input-lg" data-toggle="tooltip" id="required" name="id" placeholder="Enter email" type="email"> <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label>*Password：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="pw" placeholder="Password"  type="password">
				</div>
				<div class="form-group">
					<label>*Confirm Password：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="pw2" placeholder="Confirm Password" type="password">
				</div>
				<div class="form-group">
					<label>Leave a Message：</label> 
					<textarea class="form-control input-lg" data-toggle="tooltip" name="other" title="請填寫留言"></textarea>
				</div>
				<?php
			// 判斷提交過來的 g-recaptcha-response 參數，是否存在
			if(isset($_POST['g-recaptcha-response']))
			{
			// 建立一個命名空間
			$recaptcha = new \ReCaptcha\ReCaptcha($secret);
			// 將 recaptcha->verify 的值給 resp 變數
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			     // 判斷 resp->isSuccess 是 true 或 false
			     if($resp->isSuccess() == true)
			     {
			        include("./mysql_connect.inc.php");
			     	$name = $_POST['name'];
					$id = $_POST['id'];
			        $pw = $_POST['pw'];
			        $pw2 = $_POST['pw2'];
			        $nickname = $_POST['nickname']; // telephone
			        $gender = $_POST['gender']; //address
			        $other = $_POST['other'];
				
			        //判斷帳號密碼是否為空值
			        //確認密碼輸入的正確性
			      
			        //新增資料進資料庫語法
			        //$sql = "insert into member_table (name, username, password, telephone, address, other) values ('$name', '$id', '$pw', '$telephone', '$address', '$other')";
					$sql = "insert into member (name, username, password, nickname, gender, other) values ('$name', '$id', '$pw', '$nickname', '$gender', '$other')";
					if($Link_PDO->query($sql))
			        {
			                //echo '<p><strong><font color="black">註冊成功!即將跳轉至登入頁面</font></strong></p>';
			                echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
			        }
			        else
			        {
							echo '<script>confirm("Register Error,Please do it again!");</script>';
			                echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
			        }
			     }
			     
			}

			?>
			<div class="g-recaptcha" data-sitekey="6Le3kD4UAAAAAAT-MEzT48qXEBXkAYu1THFwrxh8"></div>
				<p></p>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Create Acount</button> <a class="btn btn-primary" href="./index.php" role="button">Login</a>
				</div>
			</form>
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
	<?php
	include('./src/autoload.php');
	$siteKey = '6Le3kD4UAAAAAAT-MEzT48qXEBXkAYu1THFwrxh8';
	$secret = '6Le3kD4UAAAAANapIaGuH-jG88f3gjZ5rtAJ4sul';
	$lang = 'zh-TW';
	// 初始化變數為空值
	$resp = '';
	?>
	
	<meta charset="utf-8">
	<title>Member Register</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/register.css" rel="stylesheet">              
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script async defer src="https://www.google.com/recaptcha/api.js?hl=%3C?php%20echo%20$lang;%20?%3E" type="text/javascript">
	</script>
	
</head>

<body>
	<div id="All">
		<div id="Header"><img src="./loga.png"></div>
		<div id="Contents">
			<form action="./register.php" id="form" method="post" name="form">
				<font color="orange" size="6">About You</font><br>
				<font color="gray" size="2">*need</font>
				<p></p>
				<div class="form-group">
					<label>*Name：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="name" >
				</div>
				<div class="form-group">
					<label>*Nickname：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="nickname" >
				</div>
				<div class="form-group">
					<label>Gender：</label> <input class="form-control input-lg" data-toggle="tooltip" name="gender" >
				</div><font color="orange" size="6">Create your acount</font>
				<p></p>
				<div class="form-group">
					<label>*E-mail：</label> <input aria-describedby="emailHelp" class="form-control input-lg" data-toggle="tooltip" id="required" name="id" placeholder="Enter email" type="email"> <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label>*Password：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="pw" placeholder="Password"  type="password">
				</div>
				<div class="form-group">
					<label>*Confirm Password：</label> <input class="form-control input-lg" data-toggle="tooltip" id="required" name="pw2" placeholder="Confirm Password" type="password">
				</div>
				<div class="form-group">
					<label>Leave a Message：</label> 
					<textarea class="form-control input-lg" data-toggle="tooltip" name="other" title="請填寫留言"></textarea>
				</div>
				<?php
			// 判斷提交過來的 g-recaptcha-response 參數，是否存在
			if(isset($_POST['g-recaptcha-response']))
			{
			// 建立一個命名空間
			$recaptcha = new \ReCaptcha\ReCaptcha($secret);
			// 將 recaptcha->verify 的值給 resp 變數
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			     // 判斷 resp->isSuccess 是 true 或 false
			     if($resp->isSuccess() == true)
			     {
			        include("./mysql_connect.inc.php");
			     	$name = $_POST['name'];
					$id = $_POST['id'];
			        $pw = $_POST['pw'];
			        $pw2 = $_POST['pw2'];
			        $nickname = $_POST['nickname']; // telephone
			        $gender = $_POST['gender']; //address
			        $other = $_POST['other'];
				
			        //判斷帳號密碼是否為空值
			        //確認密碼輸入的正確性
			      
			        //新增資料進資料庫語法
			        //$sql = "insert into member_table (name, username, password, telephone, address, other) values ('$name', '$id', '$pw', '$telephone', '$address', '$other')";
					$sql = "insert into member (name, username, password, nickname, gender, other) values ('$name', '$id', '$pw', '$nickname', '$gender', '$other')";
					if($Link_PDO->query($sql))
			        {
			                //echo '<p><strong><font color="black">註冊成功!即將跳轉至登入頁面</font></strong></p>';
			                echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
			        }
			        else
			        {
							echo '<script>confirm("Register Error,Please do it again!");</script>';
			                echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
			        }
			     }
			     
			}

			?>
			<div class="g-recaptcha" data-sitekey="6Le3kD4UAAAAAAT-MEzT48qXEBXkAYu1THFwrxh8"></div>
				<p></p>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Create Acount</button> <a class="btn btn-primary" href="./index.php" role="button">Login</a>
				</div>
			</form>
		</div>
	</div>
	<script src="js/register.js" type="text/javascript">
	</script>
</body>
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
</html>