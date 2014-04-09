<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta charset="RGB2312">
     <title><?php echo $page_title?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css" />   
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
		.ahover:hover{
			background-color:#444;
			color:#FFF;
			}
.news_ts_tit{  line-height:40px; font-size:24px; color:#000;}
.ccontent{ font-size:14px;  color:#000; line-height:25px; letter-spacing:1px; overflow:hidden;font-family:"微软雅黑";}
    </style>
     <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico">
    <script type="text/javascript">

    </script>
</head>
    <div class="navbar">
        <div class="navbar-inner">
        
                <ul class="nav pull-right">
                <li>
 <!-- 搜索讨论下，做还是不做
                            <form class="search form-inline" style="margin: 5px 20px 0px 0px;">
            <input type="text" placeholder="请出入搜索内容">
        				</form>
        </li>
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">搜索</a></li>
-->
                    <li id="fat-menu" class="dropdown">
                    <!-- 如果登陆显示用户名，没登陆显示游客，游客ul用下面那个 -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> UserName <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">我的账户</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/login">退出</a></li>
                        </ul>
                        <ul class="dropdown-menu" style="display:none">
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/login">登陆</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="second">我的博客</span></a>
        </div>
    </div>