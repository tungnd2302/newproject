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
	<title></title>
	<link rel="stylesheet" type="text/css" href="Public/vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Public/myCSS/user/index2.css">
	<script type="text/javascript" src="Public/vendors/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="Public/myJS/index2.js"></script>
	<link rel="stylesheet" type="text/css" href="Public/myCSS/main-services.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<!-- menu -->
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

	<!-- content -->
	<div class="anhto">
		<img src="Public/IMG/LongIMG/hero.jpg">
		<div class="text1" style=" position: absolute; width: 100%;text-align: center;top: 45%;">
			<p>CONSULT, DEPLOY, MANAGE, SUPPORT AND EDUCATE</p>
			<h1>Services</h1>
		</div>
	</div>
	<div class="controll">
		<ul>
			<li><a href="#1">Services Portfolio</a></li>
			<li><a href="#2">Payment Solutions</a></li>
			<li><a href="#3">Customer Stories</a></li>
			<li><a href="#4">Contact Sales</a></li>
			<p style="clear: both"></p>
		</ul>
	</div>
	<div id="1" class="content1">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 text2">
				<p>Make Dell Technologies Services your transformation partner for the digital future. From the edge, to the core, to the cloud―our industry experts offer strategic guidance and proven practical capabilities to help you accelerate time to value of your transformation objectives.</p>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="container-fluid ctn1">
			<div class="row r1">
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh1.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Consulting Services</h5>
					    <p class="card-text">From objective assessment and strategy development to full-scale implementations, our consultants leverage prescriptive approaches and proven methodologies to plan and execute your IT, workforce and application transformation. We help you deliver the outcomes and value your business demands to compete in the digital future today.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh2.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Deployment Services</h5>
					    <p class="card-text">Streamline complexity and bring new IT investments online as quickly as possible. Leverage our 30-plus years of experience for efficient and reliable PC and infrastructure solution deployment. Accelerate adoption and ROI, and free your IT staff for more strategic work.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh3.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Support Services</h5>
					    <p class="card-text">Change the way you think about support with smart, ground-breaking technology backed by experts to help you maximize productivity, uptime and convenience. Experience more than fast problem resolution—our AI engine proactively detects and even prevents issues before they impact performance.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh4.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Managed Services</h5>
					    <p class="card-text">Reduce the cost, complexity and risk of managing IT. Focus your resources on digital innovation and transformation while our experts help optimize your IT operations and investment with managed services backed by guaranteed service levels.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh5.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Education Services</h5>
					    <p class="card-text">Build the IT skills required to influence the transformational outcomes of the business. Enable talent and empower teams with the right skills to lead and execute transformational strategy that drives competitive advantage. Leverage the training and certification required for real transformation.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh6.jpg" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem">
					    <h5 class="card-title">Virtustream Cloud Services</h5>
					    <p class="card-text">Gain agility, scalability and savings with an enterprise-class cloud purpose-built to run your mission-critical applications. We put the right cloud, software, and services together to meet your performance, security, compliance, and resiliency goals.</p>
					    <a href="#" class="btn btn-primary">Explore</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr width="80%" style="margin: 50px auto; background-color: #007bff; height: 1.5px;">
	<div id="2" class="container-fluid cnt2">
		<div class="row">
			<div class="col-md-6"><img src="Public/IMG/LongIMG/anh7.jpg"></div>
			<div class="col-md-6">
				<div class="jumbotron" style="background-color: transparent;">
				  <h1 class="display-4">Payment Solutions</h1>
				  <p class="lead">Dell Financial Services helps you acquire the essential hardware, software and services you need to run your business. Our portfolio of industry-leading payment solutions includes traditional leasing and financing options, as well as advanced flexible consumption products. Maximize your IT budget, and get the technology you need today.</p>
				  <a class="btn btn-primary btn-lg" href="#" role="button">Explore</a>
				</div>
			</div>
		</div>
	</div>
	<hr width="80%" style="margin: 50px auto; background-color: #007bff; height: 1.5px;">
	<div id="3" class="container-fluid ctn3">
		<div class="text4">
		<p>CUSTOMER STORIES</p>
		<h1>How our customers make transformation real</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh8.png" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem;height: 226px">
					    <h5 class="card-title">McLaren</h5>
					    <p class="card-text">Fueling collaboration and productivity with IT infrastructure and workforce.</p>
					    <!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Watch Customer Video
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							    	<div class="modal-footer" style="background-color: gray">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							     <iframe width="500" height="403" src="https://www.youtube.com/embed/gScX10RtvVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							    </div>
							  </div>
							</div>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh9.png" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem;height: 226px";>
					    <h5 class="card-title">New Belgium Brewing</h5>
					    <p class="card-text">GUsing data to make better business decisions.</p>
					    <!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Watch Customer Video
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							    	<div class="modal-footer" style="background-color: gray">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							     <iframe width="500" height="403" src="https://www.youtube.com/embed/gScX10RtvVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							    </div>
							  </div>
							</div>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #eeeeee">
					  <img src="Public/IMG/LongIMG/anh10.png" class="card-img-top" alt="...">
					  <div class="card-body" style="padding: 2rem;height: 226px";>
					    <h5 class="card-title">Draper</h5>
					    <p class="card-text">Deploying ECS to replace storage and backup silos and lower TCO.</p>
					    <!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Watch Customer Video
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							    	<div class="modal-footer" style="background-color: gray">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
							      </div>
							     <iframe width="500" height="403" src="https://www.youtube.com/embed/gScX10RtvVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							    </div>
							  </div>
							</div>
					  </div>
					</div>
				</div>
		</div>
	</div>
	<div class="container-fluid ctn4">
		<div>
			<h1>Dell Technologies specialists are here to help</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<i class="fas fa-shopping-basket"></i>
				<h4>Shop All Products</h4>
			</div>
			<div class="col-md-6">
				<i class="fas fa-headphones-alt"></i>
				<h4>Contact Sales</h4>
			</div>
		</div>
	</div>
<!-- footer-->
	<div id="4" class="footer">
		<div class="fothead">
			<div class="foter">
					<ul>
						<li>Our Offerings</li>
						<li><a href=""> Digital Future</a></li>
						<li><a href=""> Products</a></li>
						<li><a href=""> Solutions</a></li>
						<li><a href=""> Services</a></li>
						<li><a href=""> Flexible Consumption Models</a></li>
					</ul>
				</div>
				<div class="foter">
					<ul>
						<li>Support</li>
						<li><a href=""> MyService360</a></li>
						<li><a href=""> Product Support</a></li>
						<li><a href=""> Drivers & Downloads</a></li>
						<li><a href=""> Community</a></li>
						<li><a href=""> Contact Technical Support</a></li>
					</ul>
				</div>
				<div class="foter">
					<ul>
						<li>About Dell Technologies</li>
						<li><a href=""> What We Do</a></li>
						<li><a href=""> Who We Are</a></li>
						<li><a href=""> Our Brands</a></li>
						<li><a href=""> Our Leadership</a></li>
						<li><a href=""> Social Impact</a></li>
					</ul>
				</div>
				<div class="foter">
					<ul>
						<li>Partners</li>
						<li><a href=""> Find a Partner</a></li>
						<li><a href=""> Partner Program</a></li>
						<li><a href=""> RSA Partners</a></li>
						<li><a href=""> OEM</a></li>
					</ul>
				</div>
				<div class="foter">
					<ul>
						<li>Connect With Us</li>
						<li><a href=""> Connect With Us</a></li>
						<li><a href=""> Events</a></li>
						<li><a href=""> Social</a></li>
					</ul>
				</div>
				<p style="clear: both"></p>
		</div>
				<div class="hr2">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<hr width="100%" style="background-color: white;height:1.5px">
							</div>
							<div class="col-md-2">
								<img class="ghf-divider-icon-img" src="https://www.delltechnologies.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/dell-technologies-white.svg" alt="">
							</div>
							<div class="col-md-5">
								<hr width="100%" style="background-color: white;height: 1.5px">
							</div>
						</div>
					</div>
				</div>
				<div class="fot2">
					<ul>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/dell-inc-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/dell-emc-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/pivotal-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/rsa-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/secureware-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/virtustream-white.svg">
						</a></li>
						<li class="chung"><a href="">
							<img src="https://www.dellemc.com/content/dam/delltechnologies/Public/IMG/LongIMG/footericons/vmware-white.svg">
						</a></li>
					</ul>
				</div>
				<div class="fotfot">
					<ul>
						<li><a href="">© 2019 Dell Inc.</a></li>
						<li><a href="">Privacy</a></li>
						<li><a href="">Terms of Use</a></li>
						<li><a href="">Legal</a></li>
					</ul>
				</div>
	</div>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>