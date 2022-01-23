<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!--       <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
    <!-- search form -->
    <!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="<?= site_url('staf') ?>">
          <i class="fa fa-user"></i> Data Staff
        </a>
      </li>
      <li>
        <a href="<?= site_url('foto') ?>">
          <i class="fa fa-picture-o"></i> <span>Foto</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('berita_admin') ?>">
          <i class="fa fa-dribbble"></i> <span>Berita</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('blt_admin') ?>">
          <i class="fa fa-certificate"></i> <span>BLT</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('pengumuman_admin') ?>">
          <i class="fa fa-dribbble"></i> <span>Pengumuman</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('prestasi_admin') ?>">
          <i class="fa fa-certificate"></i> <span>Prestasi</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('kritik') ?>">
          <i class="fa fa-certificate"></i> <span>Kritik & Saran</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('auth/logout') ?>">
          <i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>
      <!--   <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('foto') ?>"><i class="fa fa-circle-o"></i>Foto</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i>Video</a></li>
          </ul>
        </li> -->

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>