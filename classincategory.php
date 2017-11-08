<?php

include("db.php");
//接收数据
    class input{
		function post($key){

        if(isset($_POST[$key]) === FALSE){

            return FALSE;
		}
			$val = $_POST[ $key ];
			return $val;
		}
        function get($key){
            if(isset($_GET[$key]) === FALSE){
				return FALSE;
			}
			$val = $_GET[$key];
			return $val;
		}
	}
$input=new input();
$class_category=$input->get('class_category');
$table="class_category";
echo($class_category);

//设定查询语句
$myquery1="SELECT * FROM `class_category` WHERE `class_category` LIKE '$class_category'";
$result1=$link->query($myquery1);

if($result1){
	echo"成功";
}
else echo"失败";

$row1=$result1->fetch_array();
var_dump($row1);
echo $row1['class_name'];


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
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
      <div class="am-header-left am-header-nav am-dropdown"  data-am-dropdown>
        <a href="javascript:;" class="am-dropdown-toggle"  data-am-dropdown-toggle>
          <i class="am-header-icon am-icon-th-large"></i>
        </a>
        <div style="display:none">

        </div>
        <ul class="am-dropdown-content">
           <li><a href="#">我的历史</a></li>
            <li><a href="#">个人信息</a></li>
            <li><a href="#">我的简历</a></li>
            <li><a href="#">商城</a></li>
            <li><a href="#">订单成交</a></li>
            <li><a href="#">相册</a></li>
            <li><a href="#">视频</a></li>
          </ul>
      </div>
      <h1 class="am-header-title">
        <a href="#title-link" class="">教你呀</a>
      </h1>
      <div class="am-header-right am-header-nav">
        <a href="#right-link" class="">
          <i class="am-header-icon  am-icon-share-alt"></i>
        </a>
      </div>
    </header>
    <!-- banner -->
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
      <ul class="am-slides">
        <li>
          <img src="default/ggb.jpg">
        </li>
        <li>
          <img src="default/ggb.jpg">
        </li>
        <li>
          <img src="default/ggb.jpg">
        </li>
        <li>
          <img src="default/ggb.jpg">
        </li>
      </ul>
    </div>
    <div class="am-cf am-g my-shop-nav">
    	<div class="my-shop-nav-panellf">
        	<div class=" my-shop-nav-img am-circle ">
        	<img src="default/img1.jpg" class="am-circle m-img-thumbnail" />
            </div>
        </div>
        <div class="my-shop-nav-panelrt am-fr">
        	<ul class="am-nav am-nav-pills my-shop-nav-ul">
            	<li><a href="#">信息平台</a></li>
                <li><a href="category.html">课程分类</a></li>
                <li><a href="#">我的收藏</a></li>

            </ul>
        </div>
    </div>
    <div class="am-cf am-g">
    	<ul class="am-avg-sm-2 my-shop-product-list">
        	<li>
            	<div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                    	<img class="am-img-responsive" src="default/timg.jpg" />
                                        <h3><a href="#"><?php echo $row1['class_name']?></a></h3>
        <div>
                            <span class="list-product-price-span"><?php echo $row['class_price']?></span>
                            <span class="list-product-sorce-span">积分<br/>4</span>
                           
                        </div>
                        <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>
                        <ol class="am-avg-sm-3 product-list-share">
                        	<li><a href="#"><img src="default/icon1.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon2.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon3.png" class="am-img-responsive" /></a></li>
                        </ol>
                    </div>
                </div>
            </li>
            <li>
            	<div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                    	<img class="am-img-responsive" src="default/pq.jpg" />
                        <h3><a href="#">排球期末考试辅导</a></h3>
                        <div>
                            <span class="list-product-price-span">￥30.00</span>
                            <span class="list-product-sorce-span">积分<br/>4</span>
                        </div>
                        <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>
                        <ol class="am-avg-sm-3 product-list-share">
                        	<li><a href="#"><img src="default/icon1.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon2.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon3.png" class="am-img-responsive" /></a></li>
                        </ol>
                    </div>
                </div>
            </li>
            <li>
            	<div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                    	<img class="am-img-responsive" src="default/hz.jpg" />
                        <h3><a href="#">学生裸妆教学</a></h3>
                        <div>
                            <span class="list-product-price-span">￥40.00</span>
                            <span class="list-product-commission-span">佣金<br/>2.84</span>
                            <span class="list-product-sorce-span">积分<br/>4</span>
                        </div>
                        <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>
                        <ol class="am-avg-sm-3 product-list-share">
                        	<li><a href="#"><img src="default/icon1.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon2.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon3.png" class="am-img-responsive" /></a></li>
                        </ol>
                    </div>
                </div>
            </li>
            <li>
            	<div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                    	<img class="am-img-responsive" src="default/cyy.jpg" />
                        <h3><a href="#">C语言辅导</a></h3>
                        <div>
                            <span class="list-product-price-span">￥89.00</span>
                            <span class="list-product-commission-span">佣金<br/>2.84</span>
                            <span class="list-product-sorce-span">积分<br/>4</span>
                        </div>
                        <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>
                        <ol class="am-avg-sm-3 product-list-share">
                        	<li><a href="#"><img src="default/icon1.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon2.png" class="am-img-responsive" /></a></li>
                            <li><a href="#"><img src="default/icon3.png" class="am-img-responsive" /></a></li>
                        </ol>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    
    <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    </footer>
    <!--底部-->
    <div data-am-widget="navbar" class="am-navbar am-cf my-nav-footer " id="">
      <ul class="am-navbar-nav am-cf am-avg-sm-4 my-footer-ul">
        <li>
          <a href="/wap/" class="">
            <span class="am-icon-home"></span>
            <span class="am-navbar-label">首页</span>
          </a>
        </li>
        <li>
          <a href="###" class="">
            <span class=" am-icon-comments"></span>
            <span class="am-navbar-label">信息发布</span>
          </a>
        </li>
        <li>
          <a href="#" class="">
            <span class=" am-icon-map-marker"></span>
            <span class="am-navbar-label">地图</span>
          </a>
        </li>
        <li style="position:relative">
          <a href="javascript:;" onClick="showFooterNav();" class="">
            <span class="am-icon-user"></span>
            <span class="am-navbar-label">个人</span>
          </a>
          <div class="footer-nav" id="footNav">
          	<span class=" am-icon-bank"><a href="#">教授中心</a></span>
            <span class="am-icon-suitcase"><a href="#">学习中心</a></span>
            <span class="am-icon-usd"><a href="#">我的钱包</a></span>
            <span class="am-icon-user"><a href="#">个人资料</a></span>
            <span class="am-icon-th-list"><a href="#">帮助中心</a></span>
            <span class="am-icon-comments"><a href="#">消息中心</a></span>
            <span class="am-icon-power-off"><a href="#">安全退出</a></span>
          </div>
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
