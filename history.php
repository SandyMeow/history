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
    //$row=$result->fetch_array();
$rows=array();
while($row=$result->fetch_array( MYSQLI_ASSOC)){//assoc只取关联数组
    $rows[]=$row;
}

   //循环输出记录
   /* while ($row)
    {
        echo "<tr><td> $row[0]</td>";
        echo "<td> $row[1]</td>";
        echo "<td> $row[2] </td></tr> ";
        $row=$result->fetch_array();
    }
*/
    ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的历史</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="amazeui/css/amazeui.min.css"/>
<link rel="stylesheet" href="default/style.css"/>
<script src="amazeui/js/jquery.min.js"></script>
<script src="amazeui/js/amazeui.min.js"></script>
</head>

<body>
<div class="container">
	<header data-am-widget="header" class="am-header am-header-default my-header">
      <div class="am-header-left am-header-nav">
        <a href="resume.html" class="">
          <i class="am-header-icon am-icon-chevron-left"></i>
        </a>
      </div>
      <h1 class="am-header-title">
        <a href="resume.html" class="">我的</a>
      </h1>
<!--      <div class="am-header-right am-header-nav">
        <a href="#right-link" class="">
          <i class="am-header-icon  am-icon-home"></i>
        </a>
      </div>
-->
    </header>
	<div class="uchome-info">
    	<div align="center" class="uchome-info-uimg">
        	<img align src="default/photo.jpg" / >
        </div>
       
    </div>
    <!--头部导航-->
    <div class="am-cf uchome-nav">
        <ul class="am-avg-sm-3">
            <li><a href="resume.html">我的简历</a></li>
            <li><a href="binding.html">绑定学号</a></li>
            <li><a href="history.html">我的历史</a></li>
           
        </ul>
    </div>
    <div class="my-nav-bar">
    	<ol class="am-breadcrumb">
          <li><a href="history.html">历史</a></li>
        </ol>
    </div>
    
	<div class="cart-panel">
    	<h3>授课记录</h3>
        <div class="withdrawals-panel">
        	<table class="am-table am-table-striped am-table-hover comm-table">
            	<thead>
                    <tr>
                        <th>姓名</th>
                        <th>ID</th>
                        <th>时间</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
					foreach ($rows as $row ){
					?>
						<tr>
                        <td> <?php echo $row['user_name'];?></td>
                        <td> <?php echo $row['user_ID'];?></td>
                        <td> <?php echo $row['class_time'];?></td>
                    </tr>
                    <?php
								}
					    $link->close();//关闭连接
                	?>
                </tbody>
            </table>
        </div>
        <h3>学习记录</h3>
        <div class="withdrawals-panel">
        	<table class="am-table am-table-striped am-table-hover comm-table">
            	<thead>
                    <tr>
                        <th>技能</th>
                        <th>日期</th>
                        <th>状态</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                         <td>足球</td>
                        <td>2015-06-07</td>
                        <td>已结束</td>
                    </tr>
                    <tr>
                        <td>PS</td>
                        <td>2015-06-07</td>
                        <td>已结束</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
      <div class="am-footer-miscs ">
        <p>&nbsp;</p>
      </div>
    </footer>
    <!--底部-->
    <div data-am-widget="navbar" class="am-navbar am-cf my-nav-footer " id="">
      <ul class="am-navbar-nav am-cf am-avg-sm-4 my-footer-ul">
        <li>
          <a href="index.html" class="">
            <span class="am-icon-home"></span>
            <span class="am-navbar-label">首页</span>
          </a>
        </li>
        <li>
          <a href="publish.html" class="">
            <span class=" am-icon-comments"></span>
            <span class="am-navbar-label">信息发布</span>
          </a>
        </li>
        <li>
          <a href="favorite.html" class="">
            <span class="am-icon-user"></span>
            <span class="am-navbar-label">收藏夹</span>
          </a>
        </li>
        <li>
          <a href="resume.html" class="">
            <span class="am-icon-user"></span>
            <span class="am-navbar-label">我的</span>
          </a>
        </li>
      </ul>
      <script>
	  	function showFooterNav(){
			$("#footNav").toggle();
		}
	  </script>
    </div>
</div>
</body>
</html>

