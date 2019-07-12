<?php
    require_once("Controllers/LoginController.php");
    $login = new LoginController();
    $thongtin = $login -> hienthi();
    $hoten = explode(" ",$thongtin['Ten']);
// session_start();
    if(!isset($_SESSION['Ma'])){
        header("location:?mod=dangnhap&act=dangnhap");
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="Public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="Public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Public/build/js/toastr.min.css">
    <!-- Custom Theme Style -->
    <link href="Public/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Public/myCSS/modalview.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="?mod=nhanvien&act=hienthi" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="Public/IMG/Nhanvien/<?php echo $thongtin['Anh']  ?>" alt="..." class="img-circle profile_img img-responsive" style= "height: 50px;width: 50px;">
              </div>
              <div class="profile_info">
                <span>Welcome, <?php echo $hoten[0] ?></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="?mod=sanpham&act=hienthi"><i class="fa fa-home"></i> Trang chủ</a>
                   
                  </li>
                  <li><a><i class="fa fa-edit"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=sanpham&act=hienthi">Danh sách mặt hàng</a></li>
                      <li><a href="?mod=sanpham&act=them">Thêm sản phẩm</a></li>
                      <li><a href="?mod=loaisanpham&act=hienthi">Danh sách loại sản phẩm</a></li>
                      <li><a href="?mod=loaisanpham&act=them">Thêm loại sản phẩm</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Quản lý nhân viên <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=nhanvien&act=hienthi">Quản lý nhân sự</a></li>
                      <li><a href="?mod=nhanvien&act=them">Thêm nhân sự</a></li>
                      <li><a href="?mod=chucvu&act=hienthi">Quản lý chức vụ</a></li>
                      <li><a href="?mod=chucvu&act=them">Thêm chức vụ</a></li>
                    </ul>
                  </li>
                  <li><a href="?mod=hoadon&act=hienthi"><i class="fa fa-table"></i> Hóa đơn</a>
                  </li>
                  <li><a href="?mod=khachhang&act=hienthi"><i class="fa fa-bar-chart-o"></i> Danh mục khách hàng</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="?mod=dangnhap&act=logoutact">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $hoten[0] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="?mod=nhanvien&act=thongtin"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="?mod=dangnhap&act=logoutact"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->