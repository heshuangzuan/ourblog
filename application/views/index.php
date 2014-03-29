<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('head');
?>
    <div class="navbar">
        <div class="navbar-inner">
        
                <ul class="nav pull-right">
                <li>
                            <form class="search form-inline" style="margin: 5px 20px 0px 0px;">
            <input type="text" placeholder="请出入搜索内容">
        				</form>
        </li>
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">搜索</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> User
                        </a>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="second">我的博客</span></a>
        </div>
    </div>
<div class="row-fluid">
  <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Just a quick note:</strong> Hope you like the theme!
    </div>
        <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Stats</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container">
                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">2,500</p>
                        <p class="detail">Accounts</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">3,299</p>
                        <p class="detail">Subscribers</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">$1,500</p>
                        <p class="detail">Pending</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">$12,675</p>
                        <p class="detail">Completed</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">最新文章<span class="label label-warning">+10</span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>标题</th>
                  <th>时间</th>
                  <th>内容</th>
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

                    <footer>
                        <hr>

                        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                        <p class="pull-right">关于<a href="#" target="_blank">毕业设计</a> by <a href="#" target="_blank">王前跃</a></p>

                        <p>&copy; 2014 <a href="#" >王前跃</a></p>
                    </footer>
</body>
</html>