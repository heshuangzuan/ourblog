<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            <h1 class="page-title">�޸��û���Ϣ</h1>
        </div>
   <div class="btn-toolbar">
<a style="margin-left:25px;" href="<?php echo base_url();?>index.php/listuser" class="btn">
<i class="icon-chevron-left"></i> �����û��б�</a>

</div>
<div class="well">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab">
        <label>�û���</label>
        <input type="text" value="jsmith" class="input-xlarge">
        <label>����</label>
        <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
        <label>������</label>
        <input type="password" class="input-xlarge">
<br><br>
  <div class="btn-group">
    <button  class="btn btn-primary"><i class="icon-save"></i> ����</button>
  </div>
</form>
</div>
    </div>