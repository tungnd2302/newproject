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
          <div class="row">
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
              <div class="row">
                <ul class="menu" >
                  <a href="#">Products</a>
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
  <div class="container content" style="margin: 0px auto; padding: 0px;">
    <div class="row">
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
      <div class="col-xs-12 category-page">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="logo-section">
                <div>
                  <span>Intel &reg; core  &trade; Processors</span><br>
                  <a href="#">Compare</a>
                </div>
                <img src="Public/IMG/product/core1.jpg" class="img-responsive intel-logo">
              </div>
          </div>
          <div style="clear: both;"></div>
          <div class="col-xs-12">
              <div class="banner1">
                <h1>Laptops & 2-in-1 Computers</h1>
              </div>
              <div class="btn-compare hidden-md hidden-lg">
                <button class="btn btn-primary">Filter and Compare</button>
                <button class="btn btn-primary btn-hidden">Close</button>
              </div>
              <div style="clear: both;">
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
          </div>
          <div style="clear: both;"></div>
          <div class="offset-medium-top"></div>

          <div class="row products-moblie"> <!---Sản phẩm--->
              <!-- Filter -->
            <div class="col-sm-3 col-md-3 filter" style="display: none;">
              <div class="define-search">
                <span>Refine your search:</span>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-processor-items">
                     <span>Processsor</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-processor-items" class="collapse opening-items in" style="height: auto">
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Pentium  &reg;</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Celeron  &reg;</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Core &trade; i3</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Core  &trade; i5</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Core  &trade; i7</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Intel &reg; Core  &trade; i9</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Xeon</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>AMD &reg; Ryzen  &trade;</span>
                    </div>

                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-ram-items">
                     <span>Ram</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-ram-items" class="collapse opening-items  in" style="height: auto">
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>Up to4 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium"><span>8 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium" disabled="disabled"><span>12 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium" disabled="disabled"><span>16 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium" disabled="disabled"><span>20 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium" disabled="disabled"><span>24 GB</span>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" name="chkPentium" disabled="disabled"><span>32 GB</span>
                    </div>
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-drive-items">
                     <span>Hard Drive Type</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-drive-items" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Solid State Disk(SSD)</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Hard Disk Drive(HDD)</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>eMMC</span>
                      </div>   
                  </div>
              </div> 
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-size-drive-items">
                     <span>Hard Drive Size</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-size-drive-items" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Up to 500 GB</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>500 GB - 1 TB</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>2000 GB & up (2TB)</span>
                      </div>   
                  </div>
              </div> 
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-operation">
                     <span>Operatin System</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-operation" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Windows 10</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Ubutu</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Chrome</span>
                      </div>   
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-screen">
                     <span>Screen Size</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-screen" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>11" - 14"</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>15" - 16"</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>17" - 18"</span>
                      </div>   
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-touch">
                     <span>Touch & 2 in 1's</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-touch" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Non-touch Screen Display</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Touch Screen Display</span>
                      </div> 
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-display">
                     <span>Display Resolution</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-display" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>1366 x 768</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>1600 x 900</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>1920 x 1080</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>1920 x 1280</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>2560 x 1440</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>2880 x 1920</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>3840 x 2160</span>
                      </div> 
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-video">
                     <span>Display Resolution</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-video" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>NVIDIA&reg;</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>AMD&reg;</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Intel&reg;</span>
                      </div>  
                  </div>
              </div>
              <div class="accordion-items-block">
                  <a class="" data-toggle="collapse" data-target="#open-price">
                     <span>Display Resolution</span>
                     <span class="caret pull-right caret-pull-down" data-toggle="collapse"></span>
                  </a>
                  <div id="open-price" class="collapse opening-items in" style="height: auto">
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>Under $500</span>
                      </div>
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>$500 - 800$</span>
                      </div> 
                      <div class="custom-checkbox">
                          <input type="checkbox" name="chkPentium"><span>$800+</span>
                      </div> 
                  </div>
              </div>
          </div><!------ <div class="col-sm-3 col-md-3 filter">------>
            <div class="col-sm-12 col-md-12">
                <div class="laptopType1 laptopType row">
                  <div class="col-md-12 col-lg-12">
                    <h2>Latitude Family</h2>
                  </div>
                  <div class="col-md-7">
                    <p><b>Office everywhere</b></p>
                    <span>
                         Our laptops and 2-in-1s offer all day productivity, are beautifully designed and trusted by IT for the right solutions, no matter how you work.
                    </span>
                  </div>
                  <div class="col-md-5">
                    <button onclick="location.href='?mod=user&act=phanloai&ma=latitude'" class="btn btn-primary" style="float: right;">View all Latitude Laptops</button>
                  </div>
                </div>
                <div style="clear: both;"></div>
                <div class="products row">
                  <div class="row">
                  <?php foreach($sanphamLatitude as $row){ ?>
                  <div class="col-md-4 img-product">
                    <img src="Public/IMG/sanpham/<?php echo $row['Anh'] ?>" class="img-responsive">
                    <div class="default-laptop">
                      <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>"><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></a>
                      <span>Starting at <?php echo $row['Giaban'] ?>$</span>
                      <p>
                        Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.
                      </p>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                </div>
                <div class="row ads">
                    <b>Exclusive Offer:</b> Get no interest if paid in full within 90 days on Latitudes $699 or more.<a href="">Learn more</a>|<a href="">Apply</a>
                </div>

                <div class="laptopType row">
                  <div class="col-md-12 col-lg-12">
                    <h2 class="margintop">Vostro</h2>
                  </div>
                  <div class="col-md-7">
                    <p><b>Office everywhere</b></p>
                    <span>
                         <?php echo $row['Gioithieu'] ?>
                    </span>
                  </div>
                  <div class="col-md-5">
                    <button class="btn btn-primary" onclick="location.href='?mod=user&act=phanloai&ma=vostro'"  style="float: right;">View all Vostro Laptops</button>
                  </div>
                </div>
                <div style="clear: both;"></div>
                <div class="products row">
                  <div class="row">
                    <?php foreach($sanphamVostro as $row){ ?>
                  <div class="col-md-4 img-product">
                    <img src="Public/IMG/sanpham/<?php echo $row['Anh'] ?>" class="img-responsive">
                    <div class="default-laptop">
                      <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>"><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></a>
                      <span>Starting at $<?php echo $row['Giaban'] ?></span>
                      <p>
                       <?php echo $row['Gioithieu'] ?>
                      </p>
                    </div>
                  </div>
                <?php } ?>
                  </div>
                </div>
                <div class="row ads">
                    <b>Exclusive Offer</b>
                    : Get no interest if paid in full within 90 days on Latitudes $699 or more.<a href="">Learn more</a>|<a href="">Apply</a>
                </div>

                <div class="laptopType row">
                  <div class="col-md-12 col-lg-12">
                    <h2 class="margintop">Inspiron</h2>
                  </div>
                  <div class="col-md-7">
                    <p><b>Office everywhere</b></p>
                    <span>
                         Our laptops and 2-in-1s offer all day productivity, are beautifully designed and trusted by IT for the right solutions, no matter how you work.
                    </span>
                  </div>
                  <div class="col-md-5">
                    <button class="btn btn-primary" onclick="location.href='?mod=user&act=phanloai&ma=inspiron'" style="float: right;">View all Inspiron Laptops</button>
                  </div>
                </div>
                <div style="clear: both;"></div>
                <div class="products row">
                  <div class="row">
                  <?php foreach($sanphamInspiron as $row){ ?>
                  <div class="col-md-4 img-product">
                    <img src="Public/IMG/sanpham/<?php echo $row['Anh'] ?>" class="img-responsive">
                    <div class="default-laptop">
                      <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>"><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></a>
                      <span>Starting at $<?php echo $row['Giaban'] ?></span>
                      <p>
                          <?php echo $row['Gioithieu'] ?>
                      </p>
                    </div>
                  </div>
                  <?php } ?>
                  </div>
                </div>
                <div class="row ads">
                    <b>Exclusive Offer</b>
                    : Get no interest if paid in full within 90 days on Latitudes $699 or more.<a href="">Learn more</a>|<a href="">Apply</a>
                </div>


            </div> <!-----------<div class="col-sm-12 col-md-12">------>
      </div><!--- <div class="category page">----->
    </div>
  </div> <!---------<div class="container row"-------->
  <div class="row category-product">
    <h3>Most-viewed items in this category</h3>
    <div class="owl-carousel owl-theme owl-loaded custom-owl">
    <div class="owl-stage-outer">
        <div class="owl-stage">
          <?php foreach($sanpham10 as $row): ?>
            <div class="owl-item">
              <img src="Public/IMG/product/<?php echo $row['Anh'] ?>" class="img-responsive"> 
              <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>"><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></a>
              <span>Starting at $<?php echo $row['Giaban'] ?>.00</span>
              <p>
                <?php echo $row['Gioithieu'] ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
  </div><!-----------<div class="category-product">-------->

  <div class="row content-bottom">
    <div class="col-md-6 content-bottom-outside">
      <div class="content-bottom-left">
        <p>Price Match Guarantee. Find a lower price? We'll match it.</p>
        <button class="btn btn-default">Learn More</button>
      </div>
    </div>
    <div class="col-md-6 content-bottom-outside">
      <div class="row content-bottom-right">
        <div class="col-md-6">
          <p> 
            Enjoy no interest when paid in full within 90 days on all Qualifying Business PCs $699 or more when using Dell Business Credit this Small Business Month.^
          </p>
          <h3>Afford yours today</h3>
          <button class="btn btn-default">Learn More</button>
        </div>
        <div class="col-md-6 credit-extra">
          <div class="credit">
            <span>Dell Bussiness Credit</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="footer-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 footer-ads" style="border-right: 1px solid #ccc;">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/calculator.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Fast.Easy.Financing.^</a>
            <p>Update your technology with great financing offers from Dell Business Credit.^</p>
          </div>
        </div>
        <div class="col-md-4 footer-ads" style="border-right: 1px solid #ccc;">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/Star.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Dell Rewards</a>
            <p>Join for free and get up to 6% back in rewards* and free expedited delivery*</p>
          </div>
        </div>
        <div class="col-md-4 footer-ads">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/Shipping-image.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Free Shipping & Easy Returns</a>
            <p>Enjoy free shipping and no-hassle returns. It's shopping made simple.​</p>
          </p>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="col-md-8" style="padding: 0px;">
          <ul class="menu-footer-top">
            <li><a href="">About Dell</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Event</a></li>
            <li><a href="">Partner Program</a></li>
            <li><a href="">Premier</a></li>
            <li><a href="">Dell technologies</a></li>
            <li><a href="">Make a payment</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-3"></div>
      </div>
  </div><!-----<div class="footer-top2">-------->

  <div class="footer-bottom">
      <div class="container">
        <div class="col-md-8" style="padding: 0px;">
          <ul class="menu-footer-bottom">
            <li><a href="">2019 Dell</a></li>
            <li><a href="">Terms of sale</a></li>
            <li><a href="">Privacy Statement</a></li>
            <li><a href="">Adds and emails</a></li>
            <li><a href="">Legal & Regulatory</a></li>
            <li><a href="">Corporate Social Responsibility</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-3"></div>
      </div>
  </div><!-----<div class="footer-top2">-------->
</div><!----------Div wraper---------->
</body>

</html>