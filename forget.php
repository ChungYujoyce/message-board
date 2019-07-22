<<<<<<< HEAD
<?php
session_start(); //啟動session

if(empty($_SESSION['step'])){
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入您的E-mail" type="text" name="email"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
}
elseif($_SESSION['step']==2){
	echo $_SESSION['id'];
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入5位數驗證碼" type="text" name="randid"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
	echo'<a href="./re.php">點此重新輸入Email</a>'; //避免輸錯E-mail而無法恢復原來的頁面 (C)
}
elseif($_SESSION['step']==3){
    include("./mysql_connect.inc.php");
	echo'<span>成功</span>';
	unset($_SESSION['step']); //清空SESSION，下次使用才會變回原來的樣子
	$id = $_SESSION['id'];
	$pw = $_SESSION['pw'];
	$sql = "update member set password='$pw' where username='$id'";
	if($Link_PDO->query($sql)){
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
	else{
			echo "<script>alert('Wrong!');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
}
elseif($_SESSION['step']==4){
	echo'<span>失敗</span>';
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入5位數驗證碼" type="text" name="randid"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
	echo'<a href="./re.php">點此重新輸入Email</a>';
}
=======
<?php
session_start(); //啟動session

if(empty($_SESSION['step'])){
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入您的E-mail" type="text" name="email"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
}
elseif($_SESSION['step']==2){
	echo $_SESSION['id'];
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入5位數驗證碼" type="text" name="randid"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
	echo'<a href="./re.php">點此重新輸入Email</a>'; //避免輸錯E-mail而無法恢復原來的頁面 (C)
}
elseif($_SESSION['step']==3){
    include("./mysql_connect.inc.php");
	echo'<span>成功</span>';
	unset($_SESSION['step']); //清空SESSION，下次使用才會變回原來的樣子
	$id = $_SESSION['id'];
	$pw = $_SESSION['pw'];
	$sql = "update member set password='$pw' where username='$id'";
	if($Link_PDO->query($sql)){
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
	else{
			echo "<script>alert('Wrong!');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
	}
}
elseif($_SESSION['step']==4){
	echo'<span>失敗</span>';
	echo'<form action="./send.php" method="post">';
	echo'<input placeholder="輸入5位數驗證碼" type="text" name="randid"/>';
	echo'<input type="submit" value="送出"/>';
	echo'</form>';
	echo'<a href="./re.php">點此重新輸入Email</a>';
}
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
?>