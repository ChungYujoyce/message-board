<<<<<<< HEAD
<?php session_start();
$email=$_POST['email']; //取得傳入值
$randid=$_POST['randid']; //取得待會驗證碼傳入值
//設「偵測階段的session」為 $_SESSION['step']
if(empty($_SESSION['step'])){
    $rand=rand(10000,99999); //設定五位數亂數值
    $_SESSION['rand']=$rand; //儲存五位數亂數值
	$_SESSION['id']=$email;
    //以下為傳送郵件方法
    $to ="$email";
    $subject ="驗證信";
    $msg =" We change your password to this number
    Please login again using it and don't forget to change your passward afterwards! 驗證碼為：".$rand;
    if(mail("$to", "$subject", "$msg")){
		$_SESSION['step']=2; //送出成功則設定為階段 2
    }
	else{
		$_SESSION['step']=4; //送出失敗則設定為階段 4
		echo 'send failed';
    }
}
elseif($_SESSION['step']==2 || $_SESSION['step']==4){ //階段 4 可重新驗證
    if($randid==$_SESSION['rand']){
		$_SESSION['pw']=$randid;
		$_SESSION['step']=3; //如果正確則設定為階段 3
    }
	else{
		$_SESSION['step']=4; //如果錯誤則設定為階段 4;
    }
}
header("Location: ./forget.php"); //執行完後跳回(A)
exit;
=======
<?php session_start();
$email=$_POST['email']; //取得傳入值
$randid=$_POST['randid']; //取得待會驗證碼傳入值
//設「偵測階段的session」為 $_SESSION['step']
if(empty($_SESSION['step'])){
    $rand=rand(10000,99999); //設定五位數亂數值
    $_SESSION['rand']=$rand; //儲存五位數亂數值
	$_SESSION['id']=$email;
    //以下為傳送郵件方法
    $to ="$email";
    $subject ="驗證信";
    $msg =" We change your password to this number
    Please login again using it and don't forget to change your passward afterwards! 驗證碼為：".$rand;
    if(mail("$to", "$subject", "$msg")){
		$_SESSION['step']=2; //送出成功則設定為階段 2
    }
	else{
		$_SESSION['step']=4; //送出失敗則設定為階段 4
		echo 'send failed';
    }
}
elseif($_SESSION['step']==2 || $_SESSION['step']==4){ //階段 4 可重新驗證
    if($randid==$_SESSION['rand']){
		$_SESSION['pw']=$randid;
		$_SESSION['step']=3; //如果正確則設定為階段 3
    }
	else{
		$_SESSION['step']=4; //如果錯誤則設定為階段 4;
    }
}
header("Location: ./forget.php"); //執行完後跳回(A)
exit;
>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
?>