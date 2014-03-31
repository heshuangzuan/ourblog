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
    <form id="tab">
        <label>用户名</label>
        <input type="text" value="jsmith" class="input-xlarge">
        <label>邮箱</label>
        <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
<br><br>
  <div class="btn-group">
    <button  class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  </div>
</form>
</div>
    </div>