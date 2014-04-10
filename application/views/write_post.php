<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
$this->load->view('header');
?>
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">写文章</h1>
        </div>
            <div class="block-body">
                <form method='post' >
                            <label>标题</label>
        <input type="text" name="art_titlle" class="input-xlarge">
                                    
        <label>内容</label>
	<textarea id="editor" name="body" placeholder="请输入新闻正文" rows="10"><s:property value="news.body"/></textarea>
	<br>
  	<div class="btn-group">
    		<button  type="submit" class="btn btn-primary"><i class="icon-save"></i> 保存</button>
  	</div>
                </form>
            </div>
			
    </div>
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace("editor");
            CKEDITOR.editorConfig = function (config) {
                config.font_names = '宋体/宋体;黑体/黑体;仿宋/仿宋_GB2312;楷体/楷体_GB2312;隶书/隶书;幼圆/幼圆;微软雅黑/微软雅黑;' + config.font_names;
                config.defaultLanguage = 'zh-cn'
                //默认的字体名 plugins/font/plugin.js
                config.font_defaultLabel = '宋体';
            };
        });
    </script>
	<!--
 <script type="text/javascript">
        function test()
        {

　　　　//TextArea1是ckeditor的id或者名字
      //获取TextArea1的内容
            var val = CKEDITOR.instances.editor.getData(); 
			 if (val.length == 0)
            {
                alert("空白");
            }
            else
            {
                alert(val);
            }
        }  
</script>
-->
	
        <script src="<?php echo base_url();?>/assets/js/bootstrap-fileupload.js" type="text/javascript"></script>