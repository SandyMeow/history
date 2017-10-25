 <?php
    include("connect3.php");
    
    $table="LearningHistory";
    //设定查询语句
    $myquery="select * from $table";
    $result=$link->query($myquery);

    //获取总记录数量
    $row_cnt=$result->num_rows;
    echo "<br>$table 表总记录数：$row_cnt <br>";
    //获取字段数量
    $fields=$result->field_count;
    echo "$table 表的字段数量为：$fields <br><br>";

    //输出表格，用于显示字段名称和记录
    echo "<table border=1><tr>";
    //循环获取字段名称
    while ($finfo=$result->fetch_field()) {
        echo "<td> $finfo->name </td>";
    }
    echo "</tr>";

    //创建记录集
    $row=$result->fetch_array();

   //循环输出记录
    while ($row)
    {
        echo "<tr><td> $row[0]</td>";
        echo "<td> $row[1]</td>";
        echo "<td> $row[2] </td></tr> ";
        $row=$result->fetch_array();
    }

    $link->close(); //关闭连接

    ?>

