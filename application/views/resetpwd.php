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
            <p class="block-heading">重置你的密码</p>
            <div class="block-body">
                <form>
                    <label>邮箱地址</label>
                    <input type="text" class="span12" ></input>
                    <button href="#" class="btn btn-primary pull-right">确定</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <i class="icon-chevron-left"></i><a href="login">返回登陆</a>
    </div>
</div>