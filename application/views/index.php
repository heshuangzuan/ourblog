<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
    <div class="navbar">
        <div class="navbar-inner">
        
                <ul class="nav pull-right">
                <li>
                            <form class="search form-inline" style="margin: 5px 20px 0px 0px;">
            <input type="text" placeholder="�������������">
        				</form>
        </li>
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">����</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> User
                        </a>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="second">�ҵĲ���</span></a>
        </div>
    </div>
<div class="row-fluid">
  <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">��</button>
        <strong>Just a quick note:</strong> Hope you like the theme!
    </div>
        <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Stats</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container" style="background-color:#4d5b76;">
<div class="container" style="width:940px;">
  <div id="carousel1" class="carousel slide">
  	<div class="carousel-inner">
      <div class="item active">
      <img src="<?php echo base_url();?>assets/img/3.gif" alt="">
      <div class="carousel-caption">
      <h4>����һ</h4>          
      <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/2.gif" alt="">
      <div class="carousel-caption">
      <h4>�����</h4>
      <p> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/1.gif" alt="">
      <div class="carousel-caption">
      <h4>������</h4>
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
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">��������<span class="label label-warning">+10</span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>����</th>
                  <th>ʱ��</th>
                  <th>����</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="#">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="#">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="#">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="#">More...</a></td>
                </tr>
                                <tr>
                  <td>Mark</td>
                  <td>Tompson</td>
                  <td>the_mark7<a href="#">More...</a></td>
                </tr>
              </tbody>
            </table>
            <p><a href="#">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">���ڲ��� </a>
        <div id="widget1container" class="block-body collapse in">
            <h2>��ҵ��ƽ���</h2>
            <p>This template was developed with <a href="http://middlemanapp.com/" target="_blank">Middleman</a> and includes .erb layouts and views.</p>
            <p>All of the views you see here (sign in, sign up, users, etc) are already split up so you don't have to waste your time doing it yourself!</p>
            <p>The layout.erb file includes the header, footer, and side navigation and all of the views are broken out into their own files.</p>
            <p>If you aren't using Ruby, there is also a set of plain HTML files for each page, just like you would expect.</p>
        </div>
    </div>
</div>

                    <footer>
                        <hr>

                        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                        <p class="pull-right">����<a href="#" target="_blank">��ҵ���</a> by <a href="#" target="_blank">��ǰԾ</a></p>

                        <p>&copy; 2014 <a href="#" >��ǰԾ</a></p>
                    </footer>
</body>
</html>