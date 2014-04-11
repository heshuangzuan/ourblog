<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
<script>
  var conf = confirm("恭喜！注册成功！页面将马上跳到登陆界面！您确定要去吗？");
  if(conf == true) {
   location.href="login";
  }
</script>