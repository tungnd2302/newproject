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
	<title>trang dell</title>
	<link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Public/myCSS/user/index2.css">
	<script type="text/javascript" src="Public/vendors/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="Public/myJS/index2.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Public/myCSS/main-deals.css">
</head>
<body>
		<!-- content -->
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
		<div class="content container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="son1">
						<ol>
							<li>
								<i class="fas fa-home"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<i class="fas fa-angle-right"></i>
								<a href="#">For Work</a>
							</li>
							<li>
								<i class="fas fa-angle-right"></i>
								<a href="#">Laptops & Notebooks</a>
							</li>
							<li>
								<i class="fas fa-angle-right"></i>
								Latitude Laptops & 2-in-1s
							</li>
						</ol>
					</div>

					<div class="son2">
						<div class="son22 logo1">
							<img src="Public/IMG/LongIMG/h4.webp">
						</div>
						<div class="son22 text1">
							<p class="top1">Intel® Core™ Processors</p>
							<p class="bottom1"><a href="#">Compare</a></p>
							<p style="clear: both"></p>
						</div>
						<img class="text1 son22" src="Public/IMG/LongIMG/logo1.png">
						<p style="clear: both;"></p>
					</div>
					<div class="hrr row">
						<div class="col-md-4" style="padding-left: 0;padding-right: 0">
							<hr width="100%">
						</div>
						<div class="col-md-4" style="padding-left: 0;padding-right: 0">
							<h2>Latitude Laptops & 2-in-1s</h2>
						</div>
						<div class="col-md-4" style="padding-left: 0;padding-right: 0">
							<hr width="100%">
						</div>
					</div>
					<p style="display: none;">Refine your search:</p>
					<div class="son3 row" style="display: none;">
						<div class="col-md-3">
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Dropdown button
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
						</div>
					</div>
					<p class="textp1" style="display: none;">Questions? Call <a href="#">1-877-302-3355</a> or <a href="#">Click to Chat</a></p>
					<hr width="100%">
					<div class="sonchung son4 row">
						<div class="col-md-6">
							<img class="chung img-fluid" style="height: 250px " src="Public/IMG/LongIMG/h5.webp">
						</div>
						<div class="col-md-6" style="align-self: center;">
							<h2>From zero to peak productivity</h2>
							<span>Start up, charge and connect faster than ever with the completely redesigned Dell Latitude family. With smaller, lighter designs and premium finishes and features, you can work at full speed.</span>
						</div>
					</div>
					<hr width="100%">
					<div class="row">
						<div class="col-md-12">
							<img class="img-fluid" src="Public/IMG/LongIMG/h6.webp">
							<p style="display: none;">Video: Meet the new Dell Latitude Family 0:30</p>
						</div>
					</div>
					<hr width="100%">
					<div class="son5 row">
						<div class="col-md-4">
							<img src="Public/IMG/LongIMG/h7.webp">
							<h2>Full speed productivity</h2>
							<p>Dell Latitude helps you get to work faster. Log in with the fingerprint reader on the power button and Dell
							ExpressSign-in, a proximity sensor that wakes your device when you’re near and locks it when you’re away. ExpressConnect links to the best Wi-Fi for less lag. And stay productive longer with industry-leading battery life and ExpressCharge, which can recharge battery life to 80% in one hour*.
							</p>
						</div>
						<div class="col-md-4">
							<img src="Public/IMG/LongIMG/h8.webp">
							<h2>Smaller, smarter designs</h2>
							<p>Our Latitude laptops and 2-in-1s have been impressively redesigned to turn heads. Made with premium finishes like recycled carbon fiber and all new aluminum, you get both reimagined design and durability in a lighter frame. And, with large, vivid displays and thin borders, you can you can still be productive in a smaller footprint.
							</p>
						</div>
						<div class="col-md-4">
							<img src="Public/IMG/LongIMG/h9.webp">
							<h2>Intelligent unified management</h2>
							<p>Dell provides flexible, simplified and secure solutions to support deployment and management of any IT environment. With the integration between Dell Client Command Suite and VMware Workspace ONE, you can manage firmware, OS and applications from one console. Plus, Dell Trusted Devices have embedded and optional security solutions and services to keep your business protected and competitive.
							</p>
						</div>
					</div>
					<hr width="100%">
					<div class="row">
						<div class="col-md-12">
							<img class="img-fluid" src="Public/IMG/LongIMG/h10.webp">
							<p>Video: Latitude Rugged Family Video 2018 1:00</p>
						</div>
					</div>
					<hr width="100%">
					<div class="sonchung son6 row">
						<div class="col-md-6" style="    align-self: center;">
							<h2>7000 Series | Start up and stand out</h2>
							<p>Get busy on the go with the beautifully redesigned Latitude 7000 series with premium features like Dell ExpressSign-in, ExpressConnect, and ExpressCharge. Available in 12-, 13- and 14-inch models with detachable and convertible 2-in-1 options.</p>
						</div>
						<div class="chung col-md-6">
							<img class="img-fluid" src="Public/IMG/LongIMG/h11.webp">
						</div>
					</div>
					<hr width="100%">
					<div class="sonchung son7 row">
						<div class="chung col-md-6">
							<img class="img-fluid" src="Public/IMG/LongIMG/h12.webp">
						</div>
						<div class="col-md-6" style="    align-self: center;">
							<h2>5000 Series | Smaller footprint, more power</h2>
							<p>Get working faster and stay productive with the powerful and scalable Latitude 5000 series, redesigned and smaller and lighter than ever. Available in 12-, 13-, 14- and 15-inch models and now offering a 2-in-1 convertible.</p>
						</div>
					</div>
					<hr width="100%">
					<div class="sonchung son8 row">
						<div class="col-md-6" style="    align-self: center;">
							<h2>3000 Series | All the essentials, elevated</h2>
							<p>Take productivity to the next level with the sleeker, smaller Latitude 3000 series. Available in 14- and 15-inch models.</p>
						</div>
						<div class="chung col-md-6">
							<img class="img-fluid" src="Public/IMG/LongIMG/h13.webp">
						</div>
					</div>
					<hr width="100%">
					<div class="son9 row">
						<div class="col-md-6">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/h14.webp">
							</div>
							<h2>Rugged Series | The harder you push us, the stronger we become</h2>
							<p>Durable laptops and tablets purpose-built to withstand the harshest environments while maintaining the highest level of security, performance and manageability.</p>
						</div>
						<div class="col-md-6">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/h5.jpg">
							</div>
							<h2>Education Series | Student-ready and school yard tough</h2>
							<p>The most complete portfolio of end-to-end Education solutions designed for students, across Windows or Chrome operating systems, backed by world-class services and support.</p>
						</div>
					</div>
					<hr width="100%">
					<div class="son10 row">
						<div class="col-md-6">
							<div class="chung">
								<img src="Public/IMG/LongIMG/h15.webp">
							</div>
							<h3>Dell PC as a Service</h3>
							<p>Dell PCaaS simplifies PC lifecycle management by combining hardware, software, and end-to-end lifecycle services into one all-encompassing solutions that improves IT operational efficiency, delivers the latest technology into the hands of users more quickly, and is funded as a single, predictable price per seat per month**.</p>
						</div>
						<div class="col-md-6">
							<div class="chung">
								<img src="Public/IMG/LongIMG/h16.webp">
							</div>
							<h3>Expert help from ProSupport Plus</h3>
							<p>With ProSupport Plus, you get 24x7 priority access to ProSupport engineers, with onsite support when necessary to provide help for hardware and software challenges, repair for accidental damages and return of replaced hard drives to ensure data security.</p>
						</div>
					</div>
					<hr width="100%">
					<h2>3000 Series</h2>
					<p>Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.</p>
					<div class="son11 row">
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo2.png">
								<h4><a href="#">Latitude 3390 2-in-1</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>13.3" 2-in-1 built to work with your busy day. Long battery life and four flexible usage modes boost productivity at the office and on the go.</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3400</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 14" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3500</a></h4>
								<h5>Starting at $649.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 15" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo4.jpg">
								<h4><a href="#">New Latitude 3301</a></h4>
								<h5>Starting at $699.00</h5>
							</div>
							<hr width="100%">
							<p>The world’s smallest 13" essential business notebook features an innovative webcam for high-quality video conferencing and the latest 8th Generation Intel® Core™ processors.</p>
						</div>
					</div>
					<br>
					<div class="son11 row">
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3490</a></h4>
								<h5>Starting at $699.00</h5>
							</div>
							<hr width="100%">
							<p>An easily managed 14" laptop with top security features critical for small and growing businesses, all in a durable, reliable and sleek design.</p>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
						</div>
					</div>
					<hr width="100%">
					<h2>5000 Series</h2>
					<p>World’s most secure business laptops and 2-in-1s designed with versatile features to fit your needs.</p>
					<div class="son11 row">
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo2.png">
								<h4><a href="#">Latitude 3390 2-in-1</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>13.3" 2-in-1 built to work with your busy day. Long battery life and four flexible usage modes boost productivity at the office and on the go.</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3400</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 14" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3500</a></h4>
								<h5>Starting at $649.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 15" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo4.jpg">
								<h4><a href="#">New Latitude 3301</a></h4>
								<h5>Starting at $699.00</h5>
							</div>
							<hr width="100%">
							<p>The world’s smallest 13" essential business notebook features an innovative webcam for high-quality video conferencing and the latest 8th Generation Intel® Core™ processors.</p>
						</div>
					</div>
					<br>
					<div class="son11 row">
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo4.jpg">
								<h4><a href="#">Latitude 3390 2-in-1</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>13.3" 2-in-1 built to work with your busy day. Long battery life and four flexible usage modes boost productivity at the office and on the go.</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo7.png">
								<h4><a href="#">New Latitude 3400</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 14" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo8.jpg">
								<h4><a href="#">New Latitude 3500</a></h4>
								<h5>Starting at $649.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 15" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo4.jpg">
								<h4><a href="#">New Latitude 3301</a></h4>
								<h5>Starting at $699.00</h5>
							</div>
							<hr width="100%">
							<p>The world’s smallest 13" essential business notebook features an innovative webcam for high-quality video conferencing and the latest 8th Generation Intel® Core™ processors.</p>
						</div>
					</div>
					<br>
					<div class="son11 row">
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo5.jpg">
								<h4><a href="#">Latitude 3390 2-in-1</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>13.3" 2-in-1 built to work with your busy day. Long battery life and four flexible usage modes boost productivity at the office and on the go.</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3400</a></h4>
								<h5>Starting at $599.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 14" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo3.png">
								<h4><a href="#">New Latitude 3500</a></h4>
								<h5>Starting at $649.00</h5>
							</div>
							<hr width="100%">
							<p>This small, sleek 15" laptop with connectivity and management features is ideal for growing businesse</p>
						</div>
						<div class="col-md-3">
							<div class="chung">
								<img class="img-fluid" src="Public/IMG/LongIMG/logo6.png">
								<h4><a href="#">New Latitude 3301</a></h4>
								<h5>Starting at $699.00</h5>
							</div>
							<hr width="100%">
							<p>The world’s smallest 13" essential business notebook features an innovative webcam for high-quality video conferencing and the latest 8th Generation Intel® Core™ processors.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row" style="text-align: center;margin-left: 0;margin-right: 0;background-color: #eeeeee;border: 1px solid #999999">
			<div class="son12chung col-md-4" style="border-right:1px solid #999999">
				<div class="chung"><img src="Public/IMG/LongIMG/logo8.png"></div>
				<a href="#">Fast. Easy. Financing.^</a>
				<p>Update your technology with great financing offers from Dell Business Credit.^</p>
			</div>
			<div class="son12chung col-md-4">
				<div class="chung"><img src="Public/IMG/LongIMG/logo9.png"></div>
				<a href="#">Dell Rewards</a>
				<p>Update your technology with great financing offers from Dell Business Credit.^</p>
			</div>
			<div class="son12chung col-md-4" style="border-left:1px solid #999999">
				<div class="chung"><img src="Public/IMG/LongIMG/logo10.png"></div>
				<a href="#">Fast. Easy. Financing.^</a>
				<p>Update your technology with great financing offers from Dell Business Credit.^</p>
			</div>
		</div>
<!-- footer -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
			      <li class="nav-item">
			        	<a class="nav-link" href="#">About Dell</a>
			      </li>
			      <li class="nav-item">
			        	<a class="nav-link" href="#">Careers</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Community</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Events</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Partner Program</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Premier</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Dell Technologies</a>
			      </li>
			      <li class="nav-item">
			       	 	<a class="nav-link" href="#">Make a Payment</a>
			      </li>
			      <li class="nav-item dropdown mr-auto">
			        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          		 United States
			        	</a>
			        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				         	 <a class="dropdown-item" href="#">VietNam</a>
				         	 <a class="dropdown-item" href="#">France</a>
				          	<a class="dropdown-item" href="#">Russia</a>
			        </div>
			      </li>
		    </ul>
		  </div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light foot">
		    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="#">© 2019 Dell <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">Terms of Sale</a>
			      <a class="nav-item nav-link" href="#">Privacy Statement</a>
			      <a class="nav-item nav-link" href="#">Ads & Emails</a>
			      <a class="nav-item nav-link" href="#">Legal & Regulatory</a>
			      <a class="nav-item nav-link" href="#">Corporate Social Responsibility</a>
			      <a class="nav-item nav-link" href="#">Contact Us</a>
			      <a class="nav-item nav-link" href="#">Feedback</a>
		    </div>
		  </div>
	</nav>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>