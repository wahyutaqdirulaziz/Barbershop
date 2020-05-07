
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../gambar/tes.png" width="50" alt=""><b>Sistem</b> Babershop</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

     </header>
 
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
       <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="<?= base_url('home')?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
       
	  <li>
          <a href="<?= base_url('data_barber/tambah')?>">
            <i class="fa fa-user"></i> <span>Input Data Babershop</span>
            </a>
		</li>
		
		<li>
          <a href="<?= base_url('data_barber')?>">
            <i class="fa fa-book"></i> <span>Data Babershop</span>
            </a>
        </li>
        <li>
          <a href="<?= base_url('maps')?>">
            <i class="fa fa-map"></i> <span>Data Pemetaan</span>
            </a>
        </li>
		<li>
          <a href="<?= base_url('login/logout') ?>">
            <i class="fa fa-"></i> <span>Logout</span>
            </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>
  