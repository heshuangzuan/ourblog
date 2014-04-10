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
      <img src="<?php echo base_url();?>assets/img/3.gif" alt="">
      <div class="carousel-caption">
      <h4>标题一</h4>          
      <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/2.gif" alt="">
      <div class="carousel-caption">
      <h4>标题二</h4>
      <p> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/1.gif" alt="">
      <div class="carousel-caption">
      <h4>标题三</h4>
      <p>Egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
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
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">最新文章<span class="label label-warning">+10</span></a>
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
                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="index.php/article/show" target="_blank">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="index.php/article/show" target="_blank">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="index.php/article/show" target="_blank">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="index.php/article/show" target="_blank">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="index.php/article/show" target="_blank">More...</a></td>
                </tr>
              </tbody>
            </table>
            <p><a href="index.php/article/show">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">关于博客 </a>
        <div id="widget1container" class="block-body collapse in">
            <h2>毕业设计介绍</h2>
            <p>This template was developed with <a href="http://middlemanapp.com/" target="_blank">Middleman</a> and includes .erb layouts and views.</p>
            <p>All of the views you see here (sign in, sign up, users, etc) are already split up so you don't have to waste your time doing it yourself!</p>
            <p>The layout.erb file includes the header, footer, and side navigation and all of the views are broken out into their own files.</p>
            <p>If you aren't using Ruby, there is also a set of plain HTML files for each page, just like you would expect.</p>
        </div>
    </div>
</div>


</body>
</html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('footer');
?>