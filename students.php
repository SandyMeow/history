<!DOCTYPE html>
<html>
<head>
    <title>数据库显示</title>
</head>
<body>
//以表格的形式进行显示
<table style='text-align:left;' border='1'>
         <tr><th>id</th><th>名字</th>
    <?php
    //引用conn.php文件
        require 'connect2.php';
        //查询数据表中的数据
         $sql = mysql_query("select * from login");
         $datarow = mysql_num_rows($sql); //长度
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $id = $sql_arr['user_ID'];
                $name = $sql_arr['user_name'];
                echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr>";
            }
    ?>
</table>
</body>
</html>