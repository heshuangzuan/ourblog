<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
  
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?php echo base_url();?>index.php/login"><span class="first">我们的</span> <span class="second">博客系统</span></a>
        </div>
    </div>
    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">登陆</p>
            <div class="block-body">
                <form action="article">
                    <label>用户名</label>
                    <input id="username" placeholder="输入用户名" type="text" class="span12" required>
                    <label>密码</label>
                    <input type="password" placeholder="输入密码" class="span12" required>
                    <p  style="">
                    <a href="register" >注册</a>
                    <a href="resetpwd">忘记密码？</a>
                    <button href="#" type="submit" class="btn btn-primary pull-right">登陆</button></p>
                    
                    <!--<label class="remember-me"><input type="checkbox"> Remember me</label>-->
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
  </body>
</html>