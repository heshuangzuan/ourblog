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
            <p class="block-heading">注册</p>
            <div class="block-body">
                <form action="article">
                    <label>用户名</label>
                    <input type="text" class="span12" required>
                    <label>输入密码</label>
                    <input type="password" class="span12" required>
                    <label>再次输入密码</label>
                    <input type="password" class="span12" required>
                    <label>邮箱地址</label>
                    <input type="text" class="span12">
                    <button href="#" type="submit" class="btn btn-primary pull-right">注册</button>
                    <label class="remember-me"><input type="checkbox"> 我同意 <a href="#">合同条款</a></label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>