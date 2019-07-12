       <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="Public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="Public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="Public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="Public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Public/vendors/Flot/jquery.flot.js"></script>
    <script src="Public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="Public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="Public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="Public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="Public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="Public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="Public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="Public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="Public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="Public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="Public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Public/vendors/moment/min/moment.min.js"></script>
    <script src="Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="Public/build/js/custom.min.js"></script>
    <script type="text/javascript" src="Public/build/js/toastr.min.js"></script>
	
  </body>
</html>
        <script type="text/javascript">
             $(document).ready(function(e){
<?php 
        if(isset($_COOKIE["dangnhapthanhcong"])){
?>
                Command: toastr["info"]("Đăng nhập thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
<?php
        }
?>
             })
        </script>