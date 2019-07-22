<<<<<<< HEAD
<?php
// PDO

$dbhost = '140.114.87.219';
$dbuser = 's106062109';
$dbpasswd = 'joyce880122';
$dbname = 's106062109';
$dsn = "mysql:host=".$dbhost.";dbname=".$dbname;
try
{
    //注意，使用PDO方式連結，需要指定一個資料庫，否則將拋出異常
    $Link_PDO = new PDO($dsn,$dbuser,$dbpasswd);
    $Link_PDO->exec("SET CHARACTER SET utf8");
    $Link_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}

//$Link_PDO = new PDO("mysql:host=140.114.87.219;dbname=s106062109", 's106062109', 'joyce880122');
 
// mysqli, procedural way
//$mysqli = mysqli_connect('localhost','username','password','database');


//$Link = mysqli_connect('140.114.87.219', 's106062109', 'joyce880122','s106062109' );
//mysqli_set_charset($Link,'utf8');
//if (!$Link) {
//　die(' Connect failed, error message: ' . mysql_error());
//}

?>

=======
<?php
// PDO

$dbhost = '140.114.87.219';
$dbuser = 's106062109';
$dbpasswd = 'joyce880122';
$dbname = 's106062109';
$dsn = "mysql:host=".$dbhost.";dbname=".$dbname;
try
{
    //注意，使用PDO方式連結，需要指定一個資料庫，否則將拋出異常
    $Link_PDO = new PDO($dsn,$dbuser,$dbpasswd);
    $Link_PDO->exec("SET CHARACTER SET utf8");
    $Link_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}

//$Link_PDO = new PDO("mysql:host=140.114.87.219;dbname=s106062109", 's106062109', 'joyce880122');
 
// mysqli, procedural way
//$mysqli = mysqli_connect('localhost','username','password','database');


//$Link = mysqli_connect('140.114.87.219', 's106062109', 'joyce880122','s106062109' );
//mysqli_set_charset($Link,'utf8');
//if (!$Link) {
//　die(' Connect failed, error message: ' . mysql_error());
//}

?>

>>>>>>> 1dde613bf686767a29918e8f0591f67b1e8d44ab
