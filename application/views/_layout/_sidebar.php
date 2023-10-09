<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama_user; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Boarding'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Boarding</span>
        </a>


      <li class="header">Laporan</li>

      <li class="treeview">
          <a href="#">
             <i class="fa fa-bus "></i> <span>Kedatangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">	

			     
				   <li><a class="nav-link" href="<?php echo base_url('Kedatangan_bus'); ?>"><i class="fa fa-circle-o"></i> Bus</a></li>
           <li><a class="nav-link" href="<?php echo base_url('Kedatangan_pnp'); ?>"><i class="fa fa-circle-o"></i> Penumpang</a></li>
		      </ul>
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-bus "></i> <span>Keberangkatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">	
          
				   <li><a class="nav-link" href="<?php echo base_url('Keberangkatan_bus'); ?>"><i class="fa fa-circle-o"></i> Bus</a></li>
           <li><a class="nav-link" href="<?php echo base_url('Keberangkatan_pnp'); ?>"><i class="fa fa-circle-o"></i> Penumpang</a></li>
		      </ul>
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-subway "></i> <span>Integrasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">	
			      <li><a class="nav-link" href="<?php echo base_url('Integrasi_po'); ?>"><i class="fa fa-circle-o"></i> Integrasi PO</a></li>
		      </ul>
        </li>
        </li>
        <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Grafik1'); ?>">
          <i class="fa fa-database"></i>
          <span>Tabulasi</span>
        </a>
      </li>
        <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Monitoring'); ?>">
          <i class="fa fa-desktop"></i>
          <span>Monitoring</span>
        </a>
      </li>

      <li class="header">Profil</li>
      <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Profil'); ?>">
          <i class="fa fa-bullhorn"></i>
          <span>Profil</span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>