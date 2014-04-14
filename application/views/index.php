<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>

<div class="row-fluid">
  <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>欢迎光临!</strong> 希望大家踊跃评论!
    </div>
        <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">博客技术点</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container" style="background-color:#4d5b76;">
<div class="container" style="width:940px;">
  <div id="carousel1" class="carousel slide">
  	<div class="carousel-inner">
      <div class="item active">
      <img src="<?php echo base_url();?>assets/img/3.jpg" alt="">
      <div class="carousel-caption">
      <h4>速度第一</h4>          
      <p>采用最流行的php语言+MYSQL数据库+jquery，体现出强大的运行速度。</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/2.jpg" alt="">
      <div class="carousel-caption">
      <h4>移动前端Bootstrap</h4>
      <p> 采用最流行的前端框架Bootstrap，让网站在移动设备上流畅运行。</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/1.jpg" alt="">
      <div class="carousel-caption">
      <h4>速度敏捷CI</h4>
      <p>采用最为快捷而且强大的php开源框架CodeIgniter,让开发效率和成本大大减小。 </p>
      </div>
      </div>

 	<div class="item">
      <img src="<?php echo base_url();?>assets/img/4.jpg" alt="">
      <div class="carousel-caption">
      <h4>标准MVC架构</h4>
      <p>采用最新的php框架CodeIgniter_2.1.4。</p>
      </div>
      </div>

    </div>
    <a  href="#carousel1" data-slide="prev" class="left carousel-control"><i style="padding-top:12px;" class="icon-chevron-left"></i></a>
    <a  href="#carousel1" data-slide="next" class="right carousel-control"><div><i style="padding-top:12px;"  class="icon-chevron-right"></i></div></a>
   </div>

  
</div>
            </div>
        </div>
    </div>
</div>
    <!-- 此处可按照时间排序显示最新的博客文章-->
<script>var i=0;</script>
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">最新文章<span class="label label-warning"></span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>标题</th>
                  <th>时间</th>
                  <th>简介</th>
                </tr>
              </thead>
              <tbody>

                           
	  <?php foreach ($art_array as $art_item): ?>
        <tr>
         
          <td><?php echo $art_item['title']?></td>
          <td><?php echo date ("Y-m-d H:i",$art_item['created'])?></td>
          <td><?php echo $art_item['text']?></td>
		  <td><a href="index.php/article/show" target="_blank">&nbsp;查看</a></td>
		 <script>i++;</script>

        </tr>
	<?php endforeach ?>
              </tbody>
            </table>
            <p><a href="index.php/article/show">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">关于博客 </a>
        <div id="widget1container" class="block-body collapse in">
            <h2>毕业设计介绍</h2>
<p>项目名称：个人网站的设计与实现</p>
<p>项目背景与目的：根据组员的实际能力，制作一个可运行和使用的个人网站，通过对相关网页制作工具和编程工具以及数据库的运用，达到交流展示的目的。</p>
<p>项目目标：做一个实际可用的个人动态网站，有文字和图片展示，音乐播放。管理员有日志管理发布修改权限，可上传照片，回复访客留言的功能。访客可浏览文章和照片，并加以评论。</p>
<p>项目分工：前端界面设计:王前跃  注册登录：何双钻   博文：李强   数据收集，文档：王嘉豪，赵玺</p>
        </div>
    </div>
</div>


</body>
<script>$(".label-warning").html("+"+i);</script>
</html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('footer');
?>