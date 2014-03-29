<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta charset="gbk">
     <title><?php echo $page_title?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css" />   
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
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
    </style>
     <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico">
    <script type="text/javascript">

    </script>
</head>
<body>
<html>
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    <!--<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">我的账户</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="#">退出</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="brand" href="index.html"><span class="first"></span> <span class="second">博客后台管理</span></a>
        </div>
    </div>
<div class="sidebar-nav">
        <!--
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>
        -->

        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>后台管理</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="#"><i class="icon-user"></i>主页</a></li>
            <li class="<?php echo $article_active?>"><a href="<?php echo base_url();?>index.php/admin/article">文章管理</a></li>
            <li class="<?php echo $article_write_active?>"><a href="<?php echo base_url();?>index.php/admin/article/write">写文章</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>账户管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="#">用户管理</a></li>
            <li ><a href="#">个人信息</a></li>
            <li ><a href="#">修改密码</a></li>
        </ul>
        
        <a href="<?php echo base_url();?>index.php/admin/help" class="nav-header" ><i class="icon-briefcase"></i>帮助</a>
        <a href="#" class="nav-header" ><i class="icon-comment"></i>关于我们</a>
    </div>
</html>
</body>
