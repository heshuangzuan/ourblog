<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">д����</h1>
        </div>
            <div class="block-body">
                <form method='post'>
                            <label>����</label>
        <input type="text" class="input-xlarge">
<label>ͼƬ</label>
                                    <div class="controls fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-preview thumbnail" style="width: 210px; height: 150px;">
                                        </div><br>
                                        <span class="btn btn-file">
                                        <span class="fileupload-new">ѡ��ͼƬ</span>
                                        <span class="fileupload-exists">��ѡ</span>
                                        <input type="file" name="image"/>
                                        </span>
                                        
                                        <label style="margin-left: -130px;margin-top: -20px" class="control-label" for="inputEmail">�޸�ͼƬ��</label>
                                    </div>
        <label>����</label>
	<textarea id="editor" name="body" placeholder="��������������" rows="10"><s:property value="news.body"/></textarea>
	<br>
  	<div class="btn-group">
    		<button  class="btn btn-primary"><i class="icon-save"></i> ����</button>
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
        <script src="<?php echo base_url();?>/assets/js/bootstrap-fileupload.js" type="text/javascript"></script>