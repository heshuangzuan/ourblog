<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">д����</h1>
        </div>
            <div class="block-body" >
                <form method="post"  action="insert_art" accept-charset="ISO-8859-1">
                            <label>����</label>
        <input name="titlle" type="text" class="input-xlarge">
                                    
        <label>����</label>
	<textarea id="editor" name="body" placeholder="��������������" rows="10"><s:property value="news.body"/></textarea>
	<br>
  	<div class="btn-group">
    		<button  type="submit" onclick="urlcode" class="btn btn-primary" ><i class="icon-save"></i> ����</button>
  	</div>
                </form>
            </div>
    </div>
<script type="text/javascript">CKEDITOR.replace('editor');</script>;
<script src="<?php echo base_url();?>assets/js/bootstrap-fileupload.js" type="text/javascript"></script>

