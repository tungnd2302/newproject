<?php
  //  session_start();
  if(isset($_SESSION['taikhoan'])){
      header("location:?mod=hienthi&act=hienthi");
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

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="Public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Public/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Public/build/js/toastr.min.css">
    <!-- Custom Theme Style -->
    <link href="Public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" id="Taikhoan" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="Matkhau" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" id="btnLogin">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<script src="Public/vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="Public/build/js/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      <?php if(isset($_COOKIE['dangxuatthanhcong'])){ ?>
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
      $("#btnLogin").click(function(){
          taikhoan = $("#Taikhoan").val();
          matkhau = $("#Matkhau").val();
          // console.log(taikhoan + " " + matkhau);
          $.ajax({
            url: '?mod=dangnhap&act=dangnhapact',
            type: 'POST',
            data: {
              'taikhoan': taikhoan, 
              'matkhau' : matkhau
            },
          })
          .done(function(html) {
            if(html=="1"){
                location.href="?mod=sanpham&act=hienthi";
            }
          })
          .fail(function() {
            console.log("error");
          })
      })
    })
</script>
