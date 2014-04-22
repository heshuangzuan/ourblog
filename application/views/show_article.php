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
<!--标题,时间，作者，等信息-->
    <div class="news_ts_tit"><?php echo $art_array['title'];?></div>
    <div class="news_ts_ly">2014-04-09 19:31:32 &nbsp; <span>|</span> &nbsp; 编辑：<?php echo $user_array['name'];?> &nbsp; <span>|</span> &nbsp;&nbsp; <script language="JavaScript" src="/world/js/bbsenter.js" type="text/JavaScript"></script><script language="javascript" src="/include/comment_count.js"></script>
    </div>
    
    <!--内容-->
            <div id="ccontent" class="ccontent"><?php echo $art_array['text'];?>　</div>
<div id="comment">
	<div class="widget-box">
    	<div class="widget-title"> 
        	<span class="icon"> <i class="icon-user"></i> </span>
            <h5>用户评论</h5>
        </div>
        <div class="widget-content nopadding"> 

<ul class="recent-posts">
<!--展示用户评论-->
<?php foreach ($comments_array as $comments): ?>

	 <?php if($comments['owner_name']){ ?>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                <div class="article-post">
                  
                  <span class="user-info"> NAME: <?php echo $comments['owner_name']?> / Date: <?php echo date ("Y-m-d H:i",$comments['created'])?> </span>
                  <p class="neirong"><?php echo $comments['text']?></p>
                </div>
              </li>
	  <?php } else { ?>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                <div class="article-post">
                  
                  <span class="user-info"> IP: <?php echo $comments['ip']?> / Date: <?php echo date ("Y-m-d H:i",$comments['created'])?> </span>
                  <p class="neirong"><?php echo $comments['text']?></p>
                </div>
              </li>
		<?php }?>	  
<?php endforeach ?>

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
			<form action="/index.php/article/add_coments/<?php echo $art_array['pid'];?>" method="post">
			<textarea id="message" name="message" rows="6" class="form-control" style="width:100%" id="input_message" placeholder="Message..."></textarea><br>
			<button type="submit" id="pinglun" class="btn btn-primary" style="margin:0px 0px 0px 100px; float:left">评论</button>
			<button type="reset" id="resetmessage" class="btn btn-default" style="margin:0px 0px 0px 100px; float:left">清除</button>
			</form>
		</div>
	</div>
    </div>
</div>
<style>
.neirong{
	
	background:antiquewhite;
	}
</style>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('footer');
?>