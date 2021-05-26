<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/images/admin.png" class="img-circle">
      </div>
      <div class="pull-left info">
        <p>admin</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
     <!--  <li><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li> -->
      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-share"></i> <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?php echo base_url('index.php/Kelas')?>"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
		  <li><a href="<?php echo base_url('index.php/Jurusan')?>"><i class="fa fa-circle-o"></i> Data Jurusan</a></li>
		  <li><a href="<?php echo base_url('index.php/Siswa')?>"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
          
          
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<!-- /.sidebar -->

</aside>