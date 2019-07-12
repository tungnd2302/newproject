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
	<link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Public/myCSS/user/index2.css">
	<script type="text/javascript" src="Public/vendors/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="Public/vendors/bootstrap/dist/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Public/build/js/toastr.min.css">
  <script type="text/javascript" src="Public/build/js/toastr.min.js"></script>
  <script type="text/javascript" src="Public/Boostrap/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="Public/myJS/index2.js"></script>
  
	<title>Computer</title>
</head>
<script type="text/javascript">
  $(document).ready(function(){
      <?php if(isset($_COOKIE['Themthanhcong'])){ ?>
                Command: toastr["info"]("Đăng kí thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
         <?php if(isset($_COOKIE['dangnhapthanhcong'])){ ?>
                Command: toastr["info"]("Đăng nhập thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
        <?php if(isset($_COOKIE['Dangxuatthanhcong'])){ ?>
                Command: toastr["info"]("Đăng xuất thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
  })
</script>
<body>
  <div class="wrapper">
      <header class="container-fluid"> <!-----Phần logo, tìm kiếm --------->
          <div class="row">
            <div class="col-md-1 col-xs-3  col-sm-1 logo">
              <img src="Public/IMG/logo/dell.png" height="50px">
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
                <a id="menuclick" style="position: relative;"><span class="fa fa-user" ></span><?php echo $ten ?></a>
                 <div class="dropdown-menu-utilize sign-in" style="left: -88%">
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
      </header>
      <div class="container-fluid navmenu"><!-----Phần menu--------->
              <div class="row">
                <ul class="menu" >
                 <a href="?mod=user&act=sanpham">Products</a>
                  <a href="?mod=user&act=dichvu">Services</a>
                  <a href="?mod=user&act=deal">Deal</a>
                </ul>
              </div>
      </div>

            <!-- slider -->
            <div class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active">
              <span class="hidden-sm hidden-xs">Memorial Day for Business.</span>
              <span class="hidden-lg hidden-md">1</span>
          </li>
          <li data-target="#myCarousel" data-slide-to="1">
              <span class="hidden-sm hidden-xs">Small Business Mouth.</span>
              <span class="hidden-lg hidden-md">2</span>
          </li>
          <li data-target="#myCarousel" data-slide-to="2">
              <span class="hidden-sm hidden-xs">Great deal on Business essential.</span>
              <span class="hidden-lg hidden-md">3</span>
          </li>
          <li data-target="#myCarousel" data-slide-to="3">
              <span class="hidden-sm hidden-xs">What are you shopping for today?</span>
              <span class="hidden-lg hidden-md">4</span>
          </li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="Public/IMG/index/slide1.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="Public/IMG/index/slide2.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="Public/IMG/index/slide5.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="Public/IMG/index/slide4.jpg" alt="Los Angeles">
          </div>
        </div>

        <!-- Left and right controls -->
        </div>
    </div> <!------<div class="slider" style="height: 454px;">------->

    <!-- phần Browers Popular products -->

    <div class="container-fluid popular-products">
      <h1 class="text-center h1-text">Browse Popular Products</h1>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
            <img src="Public/IMG/index/sanpham1.jpg" class="img-responsive">
            <a href="?mod=user&act=sanpham">Laptops</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
          <img src="Public/IMG/index/sanpham2.jpg" class="img-responsive">
            <a href="?mod=user&act=sanpham">Desktops</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
          <img src="Public/IMG/index/sanpham3.jpg" class="img-responsive">
          <a href="?mod=user&act=sanpham">Workstations</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
          <img src="Public/IMG/index/sanpham4.jpg" class="img-responsive">
          <a href="?mod=user&act=sanpham">Monitors</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
          <img src="Public/IMG/index/sanpham5.jpg" class="img-responsive">
          <a href="?mod=user&act=sanpham">Accessories</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 img-product">
          <img src="Public/IMG/index/sanpham6.jpg" class="img-responsive">
          <a href="?mod=user&act=sanpham">Servers</a>
        </div>
      </div>
    </div> <!--------<div class="container popular-products">------->

    <div class="explore container-fluid">
      <h1 class="h1-text text-center">Explore PCs, Electronics & Accessories</h1>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
           <img src="Public/IMG/index/explore1.jpg" class="img-responsive">
           <button class="btn btn-info btn-explore">Shop PC Details</button>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
           <img src="Public/IMG/index/explore2.jpg" class="img-responsive">
           <button class="btn btn-info btn-explore">Shop Electrics</button>
      </div>
    </div> <!----<div class="explore container">------->

    <div class="adertisement container-fluid">
      <div class="row module1">
          <div class="col-md-6 col-xs-12 col-sm-12 footer-top footer1">
            <div class="caption-left">
              <h5>Save on select Precision workstations now.</h5>
              <p>Built for professional creators, customizable by you.</p>
              <button class="btn btn-success btn-shop-now">Shop now</button>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12 footer-top footer2">
            <div class="caption-right">
              <h5>Save up to 42% on select PowerEdge Servers during Small Business Month.</h5>
            </div>
          </div>  
      </div>
      <div class="row module2">
          <div class="col-md-3 col-lg-3 col-sm-6 footer-bottom footer3">
            <div class="caption-footer">
              <span>New, lower prices on PowerEdge servers.</span>
            </div>
          </div> 

          <div class="col-md-3 col-lg-3 col-sm-6 footer-bottom footer4">
            <div class="caption-footer">
              <span>Looking for products for your business? Shop PCs here.</span>
            </div>
          </div> 

          <div class="col-md-3 col-lg-3 col-sm-6 footer-bottom footer5">
            <div class="caption-footer">
              <span>Price-match guarantee available for identical, lower-priced products.</span>
            </div>
          </div> 

          <div class="col-md-3 col-lg-3 col-sm-6 footer-bottom footer6">
            <div class="caption-footer">
              <span>Boost your workplace productivity with up to 50% off for a limited time.</span>
            </div>
          </div> 
      </div>  
    </div> <!-------<div class="adertisement">----->

    <div class="footer-top2">
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

      <div class="footer-top3">
      <div class="container">
        <div class="col-md-8" style="padding: 0px;">
          <ul class="menu-footer-top1">
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
<script type="text/javascript">
    
</script>
</html>