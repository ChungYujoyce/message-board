<<<<<<< HEAD
<?php session_start(); ?>

<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$sql = "SELECT * FROM member where username = '$id'";
$sth = $Link_PDO->prepare($sql);
$sth->execute();
$row = $sth->fetch(PDO::FETCH_NUM);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['id'] = $id;
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
}
else
{		
        echo "<script>alert('Wrong!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
}
=======
<?php session_start(); ?>

<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("./mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$sql = "SELECT * FROM member where username = '$id'";
$sth = $Link_PDO->prepare($sql);
$sth->execute();
$row = $sth->fetch(PDO::FETCH_NUM);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['id'] = $id;
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./homepage.php>';
}
else
{		
        echo "<script>alert('Wrong!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=./index.php>';
}
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
?>