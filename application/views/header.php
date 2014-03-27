<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $page_title?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesheets/theme.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesheets/font-awesome.css" />   
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
    </style>
</head>
<body>
<html>
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">

                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
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
            <li><a href="index.html">主页</a></li>
            <li><a href="index.html">文章管理</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>账户管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="users.html">用户管理</a></li>
            <li ><a href="user.html">个人信息</a></li>
            <li ><a href="reset-password.html">修改密码</a></li>
        </ul>
        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>关于我们</a>
    </div>
    <div class="content">
    -----------------------------------------
    </div>
</html>
</body>
