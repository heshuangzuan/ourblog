<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>

<div>
<div class="news_ts_l">
<!--����,ʱ�䣬���ߣ�����Ϣ-->
    <div class="news_ts_tit"><?php echo $art_array['title'];?></div>
    <div class="news_ts_ly">2014-04-09 19:31:32 &nbsp; <span>|</span> &nbsp; ��Դ��<a href="http://mil.cnr.cn/zgjd/jwzb/201404/t20140409_515259305.html" target="_blank">�й��㲥��</a> &nbsp; <span>|</span> &nbsp; �༭��<?php echo $user_array['name'];?> &nbsp; <span>|</span> &nbsp;&nbsp; <script language="JavaScript" src="/world/js/bbsenter.js" type="text/JavaScript"></script><script language="javascript" src="/include/comment_count.js"></script>
    </div>
    
    <!--����-->
            <div id="ccontent" class="ccontent"><?php echo $art_array['text'];?>��</div>
<div id="comment">
	<div class="widget-box">
    	<div class="widget-title"> 
        	<span class="icon"> <i class="icon-list"></i> </span>
            <h5>�û�����</h5>
        </div>
        <div class="widget-content nopadding"> 
<ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                <div class="article-post">
                  
                  <span class="user-info"> username: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p>This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment. </p>
                </div>
              </li>

              <div id="lidiv"> </div>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
 </ul>
        </div>
    </div>
</div>
    <div class="col-md-7">
		<div class="form-group" style="text-align:center">
			<span class="glyphicon glyphicon-comment"></span>
			<textarea name="message" rows="6" class="form-control" style="width:90%" id="input_message" placeholder="Message..."></textarea><br>
			<button type="submit" id="pinglun" class="btn btn-primary" style="margin:0px 0px 0px 100px; float:left">����</button>
			<button type="reset" class="btn btn-default" style="margin:0px 0px 0px 100px; float:left">���</button>
		</div>
	</div>
    </div>
</div>
<script>
$("#pinglun").click(function(){
	var content=$("textarea").val();
	if(content)
	{
	var html='<li><div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av3.jpg"> </div> <div class="article-post"><span class="user-info"> username: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span><p>'+content+' </p> </div></li>'
	$("#lidiv").append(html);
	}
	else
	{
		alert("�������������ݣ�");
		}
	});
</script>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('footer');
?>