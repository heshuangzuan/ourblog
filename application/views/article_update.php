<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">写文章</h1>
        </div>
            <div class="block-body" >
                <form method="post"  action="<?php echo base_url();?>index.php/article/add_update_article/<?php echo $art_array['pid']?>">
                            <label>标题</label>
        <input name="titlle" type="text" class="input-xlarge" value="<?php echo $art_array['title'];?>">
                                    
        <label>内容</label>
	<textarea id="editor" name="body" placeholder="请输入新闻正文" rows="10"><s:property value="news.body"/></textarea>
	<br>
  	<div class="btn-group">
    		<button  type="submit" onclick="urlcode" class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  	</div>
                </form>
            </div>
    </div>

<script type="text/javascript">CKEDITOR.replace('editor');</script>;
<script src="<?php echo base_url();?>assets/js/bootstrap-fileupload.js" type="text/javascript"></script> 
<script>
  var artBody = "<?php echo $art_array['title']?>";

  CKEDITOR.instances.editor.setData(artBody); //加载内容到CKeditor
  
</script>
