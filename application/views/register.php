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
                <form action="article">
                    <label>�û���</label>
                    <input type="text" class="span12" required>
                    <label>��������</label>
                    <input type="password" class="span12" required>
                    <label>�ٴ���������</label>
                    <input type="password" class="span12" required>
                    <label>�����ַ</label>
                    <input type="text" class="span12">
                    <button href="#" type="submit" class="btn btn-primary pull-right">ע��</button>
                    <label class="remember-me"><input type="checkbox"> ��ͬ�� <a href="#">��ͬ����</a></label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>