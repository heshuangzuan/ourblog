<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
<div class="content">
    <div class="header">
         <h1 class="page-title">�޸Ĺ���Ա����</h1>
    </div>
    <div class="btn-toolbar">
        <div class="well">
        <form method='post'>
                <label>������</label>
                <input name='oldPassword' type="password" class="input-xlarge">
                <label>������</label>
                <input name='newPassword' type="password" class="input-xlarge">
                <label>�ٴ�����������</label>
                <input name='confirmPassword' type="password" class="input-xlarge">
                <br><br>
                <p><?php echo validation_errors(); ?></p>
                <div class="btn-group">
                    <button  class="btn btn-primary"><i class="icon-save"></i> ����</button>
                </div>
        </form>
    </div>
</div>