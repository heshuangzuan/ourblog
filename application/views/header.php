<body>
<html>
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    <!--<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">�ҵ��˻�</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/login">�˳�</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="brand" href="index.html"><span class="first"></span> <span class="second">���ͺ�̨����</span></a>
        </div>
    </div>
<div class="sidebar-nav">
        <!--
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>
        -->
<?php if($article_active!=""||$article_write_active!=""){?>
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>��̨����</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li class="<?php echo $article_active?>"><a href="<?php echo base_url();?>index.php/article">���¹���</a></li>
            <li class="<?php echo $article_write_active?>"><a href="<?php echo base_url();?>index.php/article/write">д����</a></li>
        </ul>
<?php }else{ ?>
        <a href="#dashboard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-dashboard"></i>��̨����</a>
        <ul id="dashboard-menu" class="nav nav-list collapse">
            <li class="<?php echo $article_active?>"><a href="<?php echo base_url();?>index.php/article">���¹���</a></li>
            <li class="<?php echo $article_write_active?>"><a href="<?php echo base_url();?>index.php/article/write">д����</a></li>
        </ul>
<?php } ?>
<?php if($page_listuser_active!=""||$page_personalinfo_active!=""||$page_changepwd_active!=""){?>
        <a href="#accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-briefcase"></i>�˻�����</a>
        <ul id="accounts-menu" class="nav nav-list collapsed">
            <li class="<?php echo $page_listuser_active; ?>"><a href="<?php echo base_url();?>index.php/listuser">�û�����</a></li>
            <li class="<?php echo $page_personalinfo_active; ?>"><a href="<?php echo base_url();?>index.php/user/userinfo">������Ϣ</a></li>
            <li class="<?php echo $page_changepwd_active; ?>"><a href="<?php echo base_url();?>index.php/user/changepwd">�޸�����</a></li>
        </ul>
<?php }else{?>  
        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>�˻�����</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li class="<?php echo $page_listuser_active; ?>"><a href="<?php echo base_url();?>index.php/listuser">�û�����</a></li>
            <li ><a href="<?php echo base_url();?>index.php/user/userinfo">������Ϣ</a></li>
            <li ><a href="<?php echo base_url();?>index.php/user/changepwd">�޸�����</a></li>
        </ul>
<?php }?>
        <a href="<?php echo base_url();?>index.php/help" class="nav-header" ><i class="icon-briefcase"></i>����</a>
        <a href="#" class="nav-header" ><i class="icon-comment"></i>��������</a>
    </div>
</html>
</body>
