<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            <h1 class="page-title">修改用户信息</h1>
        </div>
   <div class="btn-toolbar">
<a style="margin-left:25px;" href="<?php echo base_url();?>index.php/listuser" class="btn">
<i class="icon-chevron-left"></i> 返回用户列表</a>

</div>
<div class="well">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab">
        <label>用户名</label>
        <input type="text" value="jsmith" class="input-xlarge">
        <label>邮箱</label>
        <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
        <label>新密码</label>
        <input type="password" class="input-xlarge">
<br><br>
  <div class="btn-group">
    <button  class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  </div>
</form>
</div>
    </div>