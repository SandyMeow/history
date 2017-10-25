<?php
$user = 'root';
$password = '123';
$db = 'History';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if ($mysqli->connect_errno>0){
	echo"连接错误";
}
else {
	echo"连接成功";
}

?>