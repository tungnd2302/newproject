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
  <link rel="stylesheet" type="text/css" href="Public/Boostrap/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="Public/Boostrap/css/owl.theme.default.min.css">
	<script type="text/javascript" src="Public/Boostrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="Public/Boostrap/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="Public/Boostrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="Public/myJS/index2.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Public/myCSS/user/product-detail.css">
	<title>Computer</title>
</head>
<body>
  <div class="wrapper">
    <section class="header">
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
  <div class="container content">
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
          </div>
          <div style="clear: both;"></div>
          <div class="row product-detail-section">
            <div class="col-md-6 col-lg-6">
              <h3>Made for active Education</h3>
              <p>
                 A 13.3-inch laptop built with advanced applications for modern learning and best-in-class durability to withstand every school day.
              </p>
              <p>
                <b>Small Business Month: 35% off list price with coupon SAVE35 in cart</b>
              </p>
              <p class="bigsize">
                Starting at $<?php echo $chitiet['Giaban'] ?>
              </p>
              <p> 
                <form action="?mod=giohang&act=them" method="post">  
                  <input type="hidden" name="Masanpham" value="<?php echo $chitiet['Ma'] ?>">
                  <button type="submit" class="btn btn-danger">Add to cart</button >
                </form>
              </p>
            </div>
            <div class="col-md-6 col-lg-6">
              <img src="Public/IMG/Sanpham/<?php echo $chitiet['Anh'] ?>">
            </div>
          </div>
          <div class="row-specs-tech">
            <div class="col-md-9 col-lg-9">
              <table class="table table-hover">
                  <tr>
                    <th>Options</th>
                    <th>Selection</th>
                    <th>Quanlity</th>
                  </tr>
                  <tr>
                    <td>Ram</td>
                    <td><?php echo $chitiet['Ram'] ?></td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Processor</td>
                    <td><?php echo $chitiet['Boxuly'] ?></td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Monitor</td>
                    <td><?php echo $chitiet['Manhinh'] ?></td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Drive</td>
                    <td><?php echo $chitiet['Ocung'] ?></td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Others</td>
                    <td>8GB</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Warranty</td>
                    <td>2 years</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Primary Battery</td>
                    <td>Primary 4 cells</td>
                    <td>1</td>
                  </tr>
              </table>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="payment-detail">
                <p class="smallsize">
                  <b>Small Business Month</b>: 35% off list price with coupon <b>SAVE35</b> in cart
                </p>
                <h4>
                  <?php echo $chitiet['Loaisanpham']." ".$chitiet['Ten'] ?>
                </h4>
                <p class="view-special-offers">
                  View special offers
                </p>
                <div class="detail">
                    <div class="row">
                          <div class="col-lg-9 col-md-9">Total Savings</div>
                          <div class="col-md-3 col-lg-3"><?php echo $chitiet['Giaban'] ?>$</div>
                    </div>
                     <div class="row">
                          <div class="col-lg-9 col-md-9">Shipping</div>
                          <div class="col-md-3 col-lg-3">Free</div>
                    </div>
                     <div class="row">
                          <div class="col-lg-9 col-md-9">Dell price</div>
                          <div class="col-md-3 col-lg-3"><?php echo $chitiet['Giaban'] ?>$</div>
                    </div>
                </div>
                <div class="btn-add">
                <form action="?mod=giohang&act=them" method="post">  
                  <input type="hidden" name="Masanpham" value="<?php echo $chitiet['Ma'] ?>">
                  <button type="submit" class="btn btn-danger">Add to cart</button >
                </form>
                </div>
              </div>
            </div>
          </div>
           
      </div><!--- <div class="category page">----->
    </div>
  </div> <!---------<div class="container row"-------->

  <div class="footer-top">
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
<script type="text/javascript">
  
</script>
</html>