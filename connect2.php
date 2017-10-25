<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname="History";

// 创建连接
$link = new mysqli($servername, $username, $password);
// 检测连接
if(mysqli_connect_errno()) {
    die();
}
else {
	echo "连接成功";
}

//设定当前的连接数据库为soft_skill_sharing
if(!$link->select_db($dbname)) {
    die();
}

?>