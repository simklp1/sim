<!DOCTYPE  html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIM RS</title>
    <link rel="shortcut icon" href="<?=base_url()?>assets/admin/build/images/favicon.png" type="image/x-icon" />
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/admin/production/images/faficon.png">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">



  </head>
  <body class="nav-md" style="background: #007ed7">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col"  >
          <div class="left_col scroll-view" style="background: #007ed7 ">
            <div class="navbar nav_title" style="border: 0; background: #ededed">
              <a href="index.html" class="site_title"><img style="width: 35px" src="<?php echo base_url()?>assets/admin/build/images/logo.png"></i><span style="color: #007ed7">          SIM RS</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img width="70%" height="60px" src="<?php echo base_url('assets/admin/build/images/'.$this->session->userdata('foto')); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata("nama"); ?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MENU UTAMA</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i>Kepegawaian<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('index.php/Keuangan/tampil_pegawai'); ?>">Pegawai</a></li>
                      <li><a href="<?=base_url('index.php/Keuangan/tampil_pensiun'); ?>">Pensiunan</a></li>
                    </ul>
                  </li>
                </ul>  
              </div>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('assets/admin/build/images/'.$this->session->userdata('foto')); ?>" alt=""><?php echo $this->session->userdata("nama"); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url()."index.php/Login/logout"?>""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
