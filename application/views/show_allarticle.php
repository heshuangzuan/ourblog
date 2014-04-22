<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>
<div class="container">
<div class="page">
      <div class="page-container">
    <div class="container">
  <div class="row">
  <div class="span12">     
  <!--文章显示-->
		<div class="qa">
        <h4> <a href="#">标题</a></h4>
        <p><!--内容,按照此样式显示5个文章，内容只显示部分-->
          Nunc nec erat quam, et egestas nunc. Fusce bibendum tellus eget ante 
          hendrerit laoreet. Nulla id felis diam, in feugiat nisi. Nulla id nibh 
          sit amet felis lobortis imperdiet nec quis diam. Proin ut tellus a purus 
          rutrum aliquet ut a leo. Phasellus eu sollicitudin nibh. Quisque porttitor 
          velit ut dui congue nec lacinia urna dignissim.
        </p><a href="#" class="tag">查看 </a>
      	</div>
   <!--文章显示结束-->
   </div>
  </div>
      <div class="pagination pagination-centered">
        <ul>
        <!-- 当没有上一页或者下一页class为disabled -->
          <li class="disabled"><a href="#">上一页</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">下一页</a></li>
        </ul>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
<div id="newUserModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
    <h3>New User</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
      <div class="control-group">
        <label for="inputEmail" class="control-label">Email </label>
        <div class="controls">
          <input id="inputEmail" type="text" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label for="inputCurrentPassword" class="control-label">Username </label>
        <div class="controls">
          <input id="inputCurrentPassword" type="password" placeholder="Username">
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer"><a href="#" data-dismiss="modal" class="btn">Close</a><a href="#" data-dismiss="modal" class="btn btn-primary">Save Changes</a></div>
</div>
      </div>
    </div>
</div>