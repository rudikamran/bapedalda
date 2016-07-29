<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pengelolaan Barang</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/bootstrap/datepicker/datepicker3.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome-4.3.0/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/skins/skin-green.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('../bantaeng/dashboard'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SP<b>B</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">BAPEDALDA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">
                  <?php 
                    $user = $this->session->userdata('username');
                    $op   = $this->db->get_where('tb_operator', array('username'=>$user))->row_array();
                  ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>template/dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $op['nama_lengkap'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>template/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $op['nama_lengkap'] ?> - <?php echo $op['level'] ?>
                      <small>Kab. Bantaeng</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('auth/login'); ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>

              <li>
               
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="treeview">
              <a href="<?php echo base_url('dashboard') ?>">
                <i class="fa fa-home"></i> <span>HOME</span>
              </a>
            </li>            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Master Tabel</span>
                <span class="fa fa-angle-left pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('barang') ?>"><i class="fa fa-circle-o"></i> Tabel Barang</a></li>
                <li><a href="<?php echo base_url('kegiatan') ?>"><i class="fa fa-circle-o"></i> Tabel Kegiatan</a></li>
                <li><a href="<?php echo base_url('kategori')?>"><i class="fa fa-circle-o"></i> Tabel Kategori</a></li>
                <li><a href="<?php echo base_url('ruang')?>"><i class="fa fa-circle-o"></i> Tabel Ruang</a></li>
                <li><a href="<?php echo base_url('satuan')?>"><i class="fa fa-circle-o"></i> Tabel Satuan</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url ('masuk') ?>"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
                <li><a href="<?php echo base_url ('keluar') ?>"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
              </ul>
            </li>          
                    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('report');?>"><i class="fa fa-circle-o"></i> Penerimaan Barang</a></li>
                <li><a href="<?php echo site_url('reportkeluar');?>"><i class="fa fa-circle-o"></i> Pengeluaran Barang</a></li>
                <li><a href="<?php echo site_url('reportsedia');?>"><i class="fa fa-circle-o"></i> Persediaan Barang</a></li>
                <li><a href="<?php echo site_url('reportrekap');?>"><i class="fa fa-circle-o"></i> Rekapitulasi Barang</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url('operator') ?>">
                <i class="fa fa-users"></i> <span>Operator</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           <?php echo $title; ?>
            <small></small>
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
           <?php echo $contents; ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        Copyright &copy; 2015-2016. <strong><a>Rudi Kamran</a></strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            
          </div><!-- /.tab-pane -->
        </div>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>template/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/bootstrap/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>template/bootstrap/datepicker/bootstrap-datepicker.id.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>template/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>template/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>template/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

      $('.datepicker').datepicker({
          language:  'id',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          //startView: 2,
          minView: 2,
          forceParse: 0
      });
    </script>
    
  </body>
</html>
