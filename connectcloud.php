<?php
$mysqli = new mysqli('w.rdc.sae.sina.com.cn', '03noylzjmz', '14502wilx33w5jhwi4ww30w3zzz24mwh5yilx4jl', 'app_rjnjlpt');
if($mysqli->connect_errno>0){
  echo "连接错误";
  echo $mysqli->connect_errno;
  exit;
}
 
/*else {
    echo "yes";
}*/
//定义字符格式
$mysqli->query("SET NAMES UTF8");


?>

</*?php

// 连主库
$db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

// 连从库
// $db = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

if ($db) {
    mysql_select_db(SAE_MYSQL_DB, $db);

    // ...
}

?>