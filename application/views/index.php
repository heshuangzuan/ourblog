<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('index_header');
?>

<div class="row-fluid">
  <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">��</button>
        <strong>��ӭ����!</strong> ϣ�����ӻԾ����!
    </div>
        <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">���ͼ�����</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container" style="background-color:#4d5b76;">
<div class="container" style="width:940px;">
  <div id="carousel1" class="carousel slide">
  	<div class="carousel-inner">
      <div class="item active">
      <img src="<?php echo base_url();?>assets/img/3.jpg" alt="">
      <div class="carousel-caption">
      <h4>�ٶȵ�һ</h4>          
      <p>���������е�php����+MYSQL���ݿ�+jquery�����ֳ�ǿ��������ٶȡ�</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/2.jpg" alt="">
      <div class="carousel-caption">
      <h4>�ƶ�ǰ��Bootstrap</h4>
      <p> ���������е�ǰ�˿��Bootstrap������վ���ƶ��豸���������С�</p>
      </div>
      </div>
	  
      <div class="item">
      <img src="<?php echo base_url();?>assets/img/1.jpg" alt="">
      <div class="carousel-caption">
      <h4>�ٶ�����CI</h4>
      <p>������Ϊ��ݶ���ǿ���php��Դ���CodeIgniter,�ÿ���Ч�ʺͳɱ�����С�� </p>
      </div>
      </div>

 	<div class="item">
      <img src="<?php echo base_url();?>assets/img/4.jpg" alt="">
      <div class="carousel-caption">
      <h4>��׼MVC�ܹ�</h4>
      <p>�������µ�php���CodeIgniter_2.1.4��</p>
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
    <!-- �˴��ɰ���ʱ��������ʾ���µĲ�������-->
<script>var i=0;</script>
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">��������<span class="label label-warning"></span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>����</th>
                  <th>ʱ��</th>
                  <th>���</th>
                </tr>
              </thead>
              <tbody>

                           
	  <?php foreach ($art_array as $art_item): ?>
        <tr>
         
          <td><?php echo $art_item['title']?></td>
          <td><?php echo date ("Y-m-d H:i",$art_item['created'])?></td>
          <td><?php echo $art_item['text']?></td>
		  <td><a href="index.php/article/show" target="_blank">&nbsp;�鿴</a></td>
		 <script>i++;</script>

        </tr>
	<?php endforeach ?>
              </tbody>
            </table>
            <p><a href="index.php/article/show">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">���ڲ��� </a>
        <div id="widget1container" class="block-body collapse in">
            <h2>��ҵ��ƽ���</h2>
<p>��Ŀ���ƣ�������վ�������ʵ��</p>
<p>��Ŀ������Ŀ�ģ�������Ա��ʵ������������һ�������к�ʹ�õĸ�����վ��ͨ���������ҳ�������ߺͱ�̹����Լ����ݿ�����ã��ﵽ����չʾ��Ŀ�ġ�</p>
<p>��ĿĿ�꣺��һ��ʵ�ʿ��õĸ��˶�̬��վ�������ֺ�ͼƬչʾ�����ֲ��š�����Ա����־�������޸�Ȩ�ޣ����ϴ���Ƭ���ظ��ÿ����ԵĹ��ܡ��ÿͿ�������º���Ƭ�����������ۡ�</p>
<p>��Ŀ�ֹ���ǰ�˽������:��ǰԾ  ע���¼����˫��   ���ģ���ǿ   �����ռ����ĵ������κ�������</p>
        </div>
    </div>
</div>


</body>
<script>$(".label-warning").html("+"+i);</script>
</html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$this->load->view('footer');
?>