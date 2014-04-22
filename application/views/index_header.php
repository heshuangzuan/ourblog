<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta charset="RGB2312">
     <title><?php echo $page_title?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" /> 
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>

     <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico"> 
    <div id="in-nav">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="pull-right">
            	<li><i class="icon-user"></i><a href="#">用户名</a></li>
              <li><a href="<?php echo base_url();?>index.php/login">退出</a></li>
            </ul><a id="logo" href="<?php echo base_url();?>index.php">
              <h4>我的<strong>博客</strong></h4></a>
          </div>
        </div>
      </div>
    </div>
    <div id="in-sub-nav">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><a href="<?php echo base_url();?>index.php"  class="<?php echo $page_active_index ?>"><i class="batch home"></i><br>主页</a></li>
              <li><a href="<?php echo base_url();?>index.php/article/show_allarticle" class="<?php echo $page_active_article ?>"><i class="batch forms"></i><br>博客文章</a></li>
            </ul>
          </div>
        </div>
      </div>
</div>