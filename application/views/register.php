<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?php echo base_url();?>index.php/login"><span class="first">���ǵ�</span> <span class="second">����ϵͳ</span></a>
        </div>
    </div>
    


    

    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">ע��</p>
            <div class="block-body">
                <form method='post'>
                    <label>�û���</label>
                    <input name='username' type="text" class="span12" required value='<?php echo set_value('username'); ?>'>
                    <label>��������</label>
                    <input name='password' type="password" class="span12" required>
                    <label>�ٴ���������</label>
                    <input name='confirm_password' type="password" class="span12" required>
                    <label>�����ַ</label>
                    <input name='email' type="email" class="span12" value='<?php echo set_value('email'); ?>'>
                    <button href="#" type="submit" class="btn btn-primary pull-right">ע��</button>
                    <label class="remember-me"><input name='agree' type="checkbox" required> ��ͬ�� <a href="#">��ͬ����</a></label>
			
                    <div class="clearfix"></div>
                    
                </form>
                <p><?php echo validation_errors(); ?></p>
            </div>
        </div><i class="icon-chevron-left"></i><a href="login">���ص�½</a>
    </div>
</div>