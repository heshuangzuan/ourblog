<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            <h1 class="page-title">修改管理员密码</h1>
        </div>
   <div class="btn-toolbar">
<div class="well">
        <label>旧密码</label>
        <input type="password" class="input-xlarge">
        <label>新密码</label>
        <input type="password" class="input-xlarge">
        <label>再次输入新密码</label>
        <input type="password" class="input-xlarge">
<br><br>
  <div class="btn-group">
    <button  class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  </div>
</form>
</div>

    </div>