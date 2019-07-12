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
  <link rel="stylesheet" type="text/css" href="Public/build/js/toastr.min.css">
  <script type="text/javascript" src="Public/build/js/toastr.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Public/myCSS/user/login.css">
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
                <a id="menuclick"><span class="fa fa-user" ></span>Sign in</a>
                <div class="dropdown-menu-utilize sign-in">
                    <h5>My account</h5>
                    <ul>
                      <li>Place orders quickly and easily</li>
                      <li>View orders and track your shipping status</li>
                      <li>Enjoy members-only rewards and discounts</li>
                      <li>Create and access a list of your products</li>
                    </ul>
                    <button onclick="location.href='?mod=user&act=dangnhap'"  class="btn btn-primary sign-in-button">Sign-in</button>
                    <button onclick="location.href='?mod=user&act=dangnhap'"  class="btn btn-default create-button">Create an account</button>
                    <div class="sign-in-content">
                      <hr>
                      <a href="?mod=user&act=dangnhap">Dell Financial Services</a>
                      <hr>
                      <a href="?mod=user&act=dangnhap">Premier Sign in</a>
                      <hr>
                      <a href="?mod=user&act=dangnhap">Partner Program Sign-in</a>
                  </div>
                </div>
                <div class="search hidden-sm hidden-md hidden-lg">
                  <div class="box-search">
                     <input type="text" name="txtSearch" placeholder="What can we help you find?">
                      <button class="btn-search"><span class="fa fa-search"></span></button>
                  </div>
                </div>
                <a id="cartclick"><span class="fa fa-shopping-cart"></span>Cart</a>
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
                <label id="menu"><span class="fa fa-bars"></span>Menu</label>
              </div>
            </div>
          </div>
      </header>
      <div class="container-fluid navmenu"><!-----Phần menu--------->
              <div class="row">
                <ul class="menu" >
                  <a href="#">Products</a>
                  <a href="#">Solutions</a>
                  <a href="?mod=user&act=dichvu">Services</a>
                  <a href="#">Support</a>
                  <a href="?mod=user&act=deal">Deal</a>
                  <a href="#">Finacing</a>
                </ul>
              </div>
      </div>
      
    </div>
  </section> <!--------Kết thúc phần đầu ------>
  <div class="container content">
        <div class="container-fluid login-section">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="login-left">
                  <h3>Sign In</h3>
                  
                  <div class="mylabel">
                        Email Address <span>*</span>
                  </div>
                  <div class="input-control">
                        <input type="text" name="Email" id="Email" class="form-control width40">
                  </div>
                  <div class="mylabel">
                        Password <span>*</span>
                  </div>
                  <div class="input-control">
                        <input type="password" name="Password" id="Password" class="form-control width40">
                  </div>
                  <div class="button-control">
                        <input type="button" id="dangnhapbtn" class="btn btn-primary" value="Sign In">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Forgot your password</a>
                  </div>
                
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="login-right">
                  <h3>Guest check out</h3>
                  <form action="?mod=khachhang&act=dangki" method="post">
                  <div class="mylabel">
                          First Name <span>*</span>
                  </div>
                  <div class="input-control">
                          <input type="text" name="Lastname" class="form-control width40">
                  </div>
                  <div class="mylabel">
                          Last Name <span>*</span>
                  </div>
                  <div class="input-control">
                          <input type="text" name="Firstname" class="form-control width40">
                  </div>
                  <div class="mylabel">
                          Email Address <span>*</span>
                  </div>
                  <div class="input-control">
                          <input type="text" name="Email" class="form-control width40">
                  </div>
                  <div class="mylabel">
                          Enter Password <span>*</span>
                  </div>
                  <div class="input-control">
                          <input type="password" name="Matkhau" class="form-control width40">
                  </div>
                  <div class="info">
                    <p>
                       Passwords must be between 8 and 20 characters in length and contain 1 upper case letter, 1 lower case letter, and 1 number.
                    </p>
                    <div class="small-box">
                      <input type="checkbox" name="">
                      <span class="checkbox-content">
                        <span><b>Yes, I would like to register for Dell Rewards* </b></span>
                        <div>
                          I would like to receive up to 6% back in rewards* on select purchases, as well as free expedited delivery* and communications regarding savings, offers and product announcements from Dell.
                        </div>
                    </div>
                    <div class="small-box small-box-bottom">
                      <input type="checkbox" name="">
                      <span class="checkbox-content">
                          Please email me with offers and announcements from Dell, its group of companies, subsidiaries and authorized partners. For more information on how Dell uses and protects your data click here Privacy Statement.
                      </span>
                    </div>
                     <div class="button-control">
                        <input type="submit" class="btn btn-primary" value="Create an account">
                        <a href="?mod=user&act=trangchu">Cancel</a>
                    </div>
                  </form>
                 </div>
              </div>
            </div>
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
    $(document).ready(function(){
        $("#dangnhapbtn").click(function() {
          var Email    = $("#Email").val();
          var Password = $("#Password").val();
          $.ajax({
            url: '?mod=khachhang&act=dangnhap',
            type: 'POST',
            data: {
              'Email': Email,
              'Password': Password
            },
          })
          .done(function(html) {
            if(html=="1"){
                location.href="?mod=user&act=trangchu";
            }else{
                location.href="?mod=user&act=dangnhap";
            }
          })
          
        });
      <?php if(isset($_COOKIE['dangnhapthatbai'])){ ?>
                Command: toastr["info"]("Sai tài khoản hoặc mật khẩu")
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
</html>