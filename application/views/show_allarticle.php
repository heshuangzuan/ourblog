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
  <ul>
   	  <?php foreach ($list_art as $art_item): ?>
     <li>
		<div class="qa">
        <h4> <a href="#"><?php echo $art_item['title']?></a></h4>
        <p><!--内容,按照此样式显示5个文章，内容只显示部分-->
			<?php echo $art_item['text']?>
        </p><a href="/index.php/article/show/<?php echo $art_item['pid']?>" class="tag">查看 </a>
		
	
      	</div>
		</li>
	<?php endforeach ?>	
	</ul>
   <!--文章显示结束-->

   </div>
  </div>
      <div class="pagination pagination-centered">
        <ul>
        <!-- 当没有上一页或者下一页class为disabled
          <li class="disabled"><a href="#">上一页</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">下一页</a></li> -->
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