<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            <h1 class="page-title">个人信息</h1>
        </div>
   <div class="btn-toolbar">

  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab" method='post'>
        <label>用户名（这个是不准改的，室长修改下）</label>
        <input type="text" value="<?php echo $username; ?>" class="input-xlarge">
        <label>邮箱</label>
        <input name='email' type="text" value="<?php echo $email; ?>" class="input-xlarge">
<br><br>
<p><?php echo validation_errors(); ?></p>
  <div class="btn-group">
    <button  class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  </div>
</form>
</div>
    </div>