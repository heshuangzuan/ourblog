<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">д����</h1>
        </div>
            <div class="block-body">
                <form method='post' >
                            <label>����</label>
        <input type="text" name="art_titlle" class="input-xlarge">
                                    
        <label>����</label>
	<textarea id="editor" name="body" placeholder="��������������" rows="10"><s:property value="news.body"/></textarea>
	<br>
  	<div class="btn-group">
    		<button  type="submit" class="btn btn-primary"><i class="icon-save"></i> ����</button>
  	</div>
                </form>
            </div>
			
    </div>
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace("editor");
            CKEDITOR.editorConfig = function (config) {
                config.font_names = '����/����;����/����;����/����_GB2312;����/����_GB2312;����/����;��Բ/��Բ;΢���ź�/΢���ź�;' + config.font_names;
                config.defaultLanguage = 'zh-cn'
                //Ĭ�ϵ������� plugins/font/plugin.js
                config.font_defaultLabel = '����';
            };
        });
    </script>
	<!--
 <script type="text/javascript">
        function test()
        {

��������//TextArea1��ckeditor��id��������
      //��ȡTextArea1������
            var val = CKEDITOR.instances.editor.getData(); 
			 if (val.length == 0)
            {
                alert("�հ�");
            }
            else
            {
                alert(val);
            }
        }  
</script>
-->
	
        <script src="<?php echo base_url();?>/assets/js/bootstrap-fileupload.js" type="text/javascript"></script>