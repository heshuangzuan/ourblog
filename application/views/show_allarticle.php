<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>
<div class="container">
<div class="page">
      <div class="page-container">
    <div class="container">
  <div class="row">
  <div class="span12">     
  <!--������ʾ-->
		<div class="qa">
        <h4> <a href="#">����</a></h4>
        <p><!--����,���մ���ʽ��ʾ5�����£�����ֻ��ʾ����-->
          Nunc nec erat quam, et egestas nunc. Fusce bibendum tellus eget ante 
          hendrerit laoreet. Nulla id felis diam, in feugiat nisi. Nulla id nibh 
          sit amet felis lobortis imperdiet nec quis diam. Proin ut tellus a purus 
          rutrum aliquet ut a leo. Phasellus eu sollicitudin nibh. Quisque porttitor 
          velit ut dui congue nec lacinia urna dignissim.
        </p><a href="#" class="tag">�鿴 </a>
      	</div>
   <!--������ʾ����-->
   </div>
  </div>
      <div class="pagination pagination-centered">
        <ul>
        <!-- ��û����һҳ������һҳclassΪdisabled -->
          <li class="disabled"><a href="#">��һҳ</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">��һҳ</a></li>
        </ul>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
<div id="newUserModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">��</button>
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