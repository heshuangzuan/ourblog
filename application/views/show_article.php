<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>
<style>
.news_ts_tit{
	font-size:40px;
	margin-bottom:20px;
	}
</style>
<div class="container">
<div class="page">
      <div class="page-container">
    <div class="container">
  <div class="row">
  <div class="span12"> 
<div class="news_ts_l" style="margin-left:10px">
<!--����,ʱ�䣬���ߣ�����Ϣ-->
    <div class="news_ts_tit"><?php echo $art_array['title'];?></div>
    <div class="news_ts_ly">2014-04-09 19:31:32 &nbsp; <span>|</span> &nbsp; �༭��<?php echo $user_array['name'];?> &nbsp; <span>|</span> &nbsp;&nbsp; <script language="JavaScript" src="/world/js/bbsenter.js" type="text/JavaScript"></script><script language="javascript" src="/include/comment_count.js"></script>
    </div>
    
    <!--����-->
            <div id="ccontent" class="ccontent"><?php echo $art_array['text'];?>��</div>
<div id="comment">
	<div class="widget-box">
    	<div class="widget-title"> 
        	<span class="icon"> <i class="icon-user"></i> </span>
            <h5>�û�����</h5>
        </div>
        <div class="widget-content nopadding"> 
<ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                <div class="article-post">
                  
                  <span class="user-info"> username: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p class="neirong">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment. </p>
                </div>
              </li>

              <div id="lidiv"> </div>
              <!--
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
              -->
 </ul>
        </div>
    </div>
</div>
    <div class="col-md-7">
		<div class="form-group" style="text-align:center">
			<span class="glyphicon glyphicon-comment"></span>
			<textarea name="message" rows="6" class="form-control" style="width:100%" id="input_message" placeholder="Message..."></textarea><br>
			<button type="submit" id="pinglun" class="btn btn-primary" style="margin:0px 0px 0px 100px; float:left">����</button>
			<button type="reset" id="resetmessage" class="btn btn-default" style="margin:0px 0px 0px 100px; float:left">���</button>
		</div>
	</div>
    </div>
</div>
<style>
.neirong{
	
	background:antiquewhite;
	}
</style>
<script>
$("#resetmessage").click(function(){
	$("textarea").val("");
	});
	var i=0;
$("#pinglun").click(function(){
	var content=$("textarea").val();
	var username="john Deo";
	var myDate = new Date();
	var date=myDate.getFullYear()+"-"+myDate.getMonth()+"-"+myDate.getDate(); 
	var time=myDate.getHours()+":"+myDate.getMinutes()+":"+myDate.getSeconds();
	if(content)
	{
		i++;
		//ɾ��return����ģ�����post�ɹ����������
						var html='<li id="li'+i+'"><div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av3.jpg"> </div> <div class="article-post"><span class="user-info"> username: '+username+' / ����:'+date+'  / ʱ��:'+time+' </span><p class="neirong">'+content+' </p> </div></li>'
				$("#lidiv").append(html);
				$("textarea").val("");//���۳ɹ������textarea
				$("#li"+i).hide();
				$("#li"+i).show("slow");
				return ;
				var id="1";
		//����post����
		$.post(
			"",//�����ַ
			{"id":id,"content":content},//�������
			function(data){
				//���۳ɹ���
				var html='<li><div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av3.jpg"> </div> <div class="article-post"><span class="user-info"> username: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span><p>'+content+' </p> </div></li>'
				$("#lidiv").append(html);
		});
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