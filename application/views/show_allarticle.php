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
  <ul>
   	  <?php foreach ($list_art as $art_item): ?>
     <li>
		<div class="qa">
        <h4> <a href="#"><?php echo $art_item['title']?></a></h4>
        <p><!--����,���մ���ʽ��ʾ5�����£�����ֻ��ʾ����-->
			<?php echo $art_item['text']?>
        </p><a href="/index.php/article/show/<?php echo $art_item['pid']?>" class="tag">�鿴 </a>
		
	
      	</div>
		</li>
	<?php endforeach ?>	
	</ul>
   <!--������ʾ����-->

   </div>
  </div>
      <div class="pagination pagination-centered">
        <ul>
        <!-- ��û����һҳ������һҳclassΪdisabled
          <li class="disabled"><a href="#">��һҳ</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">��һҳ</a></li> -->
		 <?php echo $this->pagination->create_links(); ?>
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