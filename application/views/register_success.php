<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
<script>
  var conf = confirm("��ϲ��ע��ɹ���ҳ�潫����������½���棡��ȷ��Ҫȥ��");
  if(conf == true) {
   location.href="login";
  }
</script>