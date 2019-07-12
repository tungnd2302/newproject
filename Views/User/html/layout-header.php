<?php   
  require_once("Controllers/KhachHangController.php");
  $khachhang_controller = new KhachHangController();
  $khachhang = $khachhang_controller -> thongtinkhachhang();
  $tenkhachhang = $khachhang['Tenkhach'];
  $name = explode(' ', $tenkhachhang); // Lấy ra tên của khách hàng
  $ten =  array_pop($name);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Public/Boostrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="../../Boostrap/css/docs.theme.min.css"> -->
  <link rel="stylesheet" type="text/css" href="Public/Boostrap/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="Public/Boostrap/css/owl.theme.default.min.css">
	<script type="text/javascript" src="Public/Boostrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="Public/Boostrap/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="Public/Boostrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="Public/myJS/index2.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Public/myCSS/user/products.css">
	<title>Computer</title>
</head>

<body>
  <div class="wrapper">
    <section class="header">
      <header class="container-fluid"> <!-----Phần logo, tìm kiếm --------->
          <div class=" ">
            <div class="col-md-1 col-xs-3  col-sm-1 logo">
              <img onclick="location.href='?mod=user&act=trangchu'" src="Public/IMG/logo/dell.png" height="50px">
            </div>
            <div class="col-md-7 col-sm-5 hidden-xs">
              <form action="?mod=user&act=timkiem" method="post">
              <div class="text-input">
                <input type="text" name="txtSearch" placeholder="What can we help you find?">
                <button type="submit" class="btn-input">Search</button>
              </div>
             </form>
            </div>
            <div class="col-md-4 col-xs-9 col-sm-6 un-relative">
              <div class="utilize un-relative">
                <a class="a-hidden" id="search"><span class="fa fa-search"></span>Search</a>
                <?php if(isset($khachhang)){?>
                <a id="menuclick"><span class="fa fa-user" ></span><?php echo $ten ?></a>
                 <div class="dropdown-menu-utilize sign-in" style="left: -109%;">
                    <h5>My account</h5>
                    <ul>
                      <li>Place orders quickly and easily</li>
                      <li>View orders and track your shipping status</li>
                      <li>Enjoy members-only rewards and discounts</li>
                      <li>Create and access a list of your products</li>
                    </ul>
                    <button onclick="location.href='?mod=khachhang&act=dangxuat'" class="btn btn-primary sign-in-button">
                      Sign-out
                    </button>
                    <div class="sign-in-content">
                      <hr>
                      <a href="?mod=user&act=dangnhap">Dell Financial Services</a>
                      
                    </div>
                <?php }else{?>
                <a id="menuclick"><span class="fa fa-user" ></span>Sign In</a>
                 <div class="dropdown-menu-utilize sign-in">
                    <h5>My account</h5>
                    <ul>
                      <li>Place orders quickly and easily</li>
                      <li>View orders and track your shipping status</li>
                      <li>Enjoy members-only rewards and discounts</li>
                      <li>Create and access a list of your products</li>
                    </ul>
                    <button onclick="location.href='?mod=user&act=dangnhap'" class="btn btn-primary sign-in-button">
                      Sign-in
                    </button>
                    <button onclick="location.href='?mod=user&act=dangnhap'" class="btn btn-default create-button">Create an account</button>
                    <div class="sign-in-content">
                      <hr>
                      <a href="?mod=user&act=dangnhap">Dell Financial Services</a>
                      <hr>
                      <a href="?mod=user&act=dangnhap">Premier Sign in</a>
                      <hr>
                      <a href="?mod=user&act=dangnhap">Partner Program Sign-in</a>
                    </div>
                <?php }?>
               
                </div>
                <div class="search hidden-sm hidden-md hidden-lg">
                  <div class="box-search">
                     <input type="text" name="txtSearch" placeholder="What can we help you find?">
                      <button class="btn-search"><span class="fa fa-search"></span></button>
                  </div>
                </div>
                <?php if(isset($qty)){ ?>
                <a id="cartclick">
                  <span class="fa fa-shopping-cart"></span>Cart
                  <span class="badge"><?php echo $qty ?></span>
                </a>
                <div class="box-shopping-cart" style="left: -47%;">
                      <h4>Cart (<?php echo $qty ?> items)</h4>
                      <ul>
                        <li class="sub-total-left">Subtotal:</li>
                        <li class="sub-total-right">$<?php echo $price ?>.00</li>
                        <li style="clear: both;">
                      </ul>
                      <div class="btn-cart">
                        <button onclick="location.href='?mod=giohang&act=hienthi'" class="btn-default btn">
                        Go to Cart
                      </button>
                      </div>
                      <hr>
                      <a href="#">Save carts</a>
                </div>
                 <?php }else{ ?>
                   <a id="cartclick">
                  <span class="fa fa-shopping-cart"></span>Cart
                  <!-- <span class="badge">1</span> -->
                </a>
                <div class="box-shopping-cart">
                      <h4>Cart (0 items)</h4>
                      <ul>
                        <li class="sub-total-left">Subtotal:</li>
                        <li class="sub-total-right">$0.00</li>
                        <li style="clear: both;">
                      </ul>
                      <div class="btn-cart">
                        <button class="btn-default btn">Go to Cart</button>
                      </div>
                      <hr>
                      <a href="#">Save carts</a>
                </div>
                 <?php } ?>
                <label id="menu"><span class="fa fa-bars"></span>Menu</label>
              </div>
            </div>
            </div>
          </div>
      </header>
      <div class="container-fluid navmenu"><!-----Phần menu--------->
              <div class=" ">
                <ul class="menu" >
                 <a href="?mod=user&act=sanpham">Products</a>
                  <a href="?mod=user&act=dichvu">Services</a>
                  <a href="?mod=user&act=deal">Deal</a>
                </ul>
              </div>
      </div>
      <div class="container-fluid" style="background-color: #eee;">
        <div class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-md-1 hidden-xs hidden-sm">
                      <img src="Public/IMG/product/chomebook1.jpg" class="img-responsive img-slider">
                    </div>
                    <div class="caption-slider col-md-11">
                      <div>
                        Save up to 45% on select Business PCs and electronics during Memorial Day.
                      </div>
                      <p>
                        <a href="#">Shop Now</a>
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="col-md-1 hidden-xs hidden-sm">
                      <img src="Public/IMG/product/chomebook2.jpg" class="img-responsive img-slider">
                    </div>
                    <div class="caption-slider col-md-11">
                      <div>
                        Get additional savings when you call 1-800-685-9224 or click to chat with a Small Business Technology Advisor.
                      </div>
                      <p>
                        <a href="#">Chat Now</a>
                      </p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="col-md-1 hidden-xs hidden-sm">
                      <img src="Public/IMG/product/chomebook3.jpg" class="img-responsive img-slider">
                    </div>
                    <div class="caption-slider col-md-11">
                      <div>
                        I dont know write what this is here. Please help me to fill this to complete this div
                      </div>
                      <p>
                        <a href="#">Call Now</a>
                      </p>
                    </div>
                  </div>

                </div>

        <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
          </div>
      </div>
    </div>
  </section> <!--------Kết thúc phần đầu ------>
  <div class="container content" style="margin: 0 auto; padding: 0px;">
    <div class=" ">
      <div class="col-xs-12">
        <div class="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><span class="fa fa-home"></span>Viet Nam</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laptops</li>
            </ol>
        </div>

      </div>
      <div class="col-xs-12 offset-medium-top"></div>
      <div style="clear: both;"></div>
      <div class="row head-moblie">
                <div class="computer computer1">
                  <img src="Public/IMG/product/head1.jpg" class="img-responsive">
                  <a href="">Shop All</a>
                </div>

                <div class="computer computer2">
                  <img src="Public/IMG/product/head2.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=phanloai&ma=inspiron">Inspiron Laptops & 2-in-1 PCs</a>
                    <span>For home and home office</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>

                <div class="computer computer3">
                  <img src="Public/IMG/product/head3.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=phanloai&ma=xps">XPS Laptops & 2-in-1 PCs</a>
                    <span>Designed to be the best</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>

                <div class="computer computer4">
                  <img src="Public/IMG/product/head4.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=phanloai&ma=g-series">G Series Laptops</a>
                    <span>High-performance gaming</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>

                <div class="computer computer5">
                  <img src="Public/IMG/product/head5.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=phanloai&ma=alienware">Alienware Laptops</a>
                    <span>Best-in-class gaming and VR ready</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>

                <div class="computer computer6">
                  <img src="Public/IMG/product/head5.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=phanloai&ma=inspiron">Inspiron Chromebook</a>
                    <span>For fast access to the web</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>

                <div class="computer computer7">
                  <img src="Public/IMG/product/head7.jpg" class="img-responsive">
                  <div class="head-left">
                    <a href="?mod=user&act=deal">Deals</a>
                    <span>For current Laptop Deals</span>
                  </div>
                  <span class="hidden-md hidden-lg fa fa-chevron-right chevron-moblie"></span>
                </div>
              </div>
