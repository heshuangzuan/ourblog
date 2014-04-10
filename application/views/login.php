<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>
  <body>
    <div class="navbar">
	<div class="navbar-inner">
                <a class="brand" href="<?php echo base_url();?>index.php/login"><span class="first">我们的</span> <span class="second">博客系统</span></a>
        </div>
    </div>
    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">登陆</p>
            <div class="block-body">
                <form method='post'>
                    <label>用户名</label>
                    <input name="username" id="username" placeholder="输入用户名" type="text" class="span12" required>
                    <label>密码</label>
                    <input name="password" type="password" placeholder="输入密码" class="span12" required>
                    <p  style="">
                    <a href="register" >没有账号？</a>
                    <button href="#" type="submit" class="btn btn-primary pull-right">登陆</button></p>
                    
                    <!--<label class="remember-me"><input type="checkbox"> Remember me</label>-->
                    <div class="clearfix"></div>
                </form>
                <p><?php echo validation_errors(); ?></p>
            </div>
        </div>
    </div>
</div>
  </body>
</html>