	<?php
	session_start();
		class UserController{
			function trangchu(){
				 if(isset($_SESSION['soluong'])&&isset($_SESSION['giohang'])){
				 	$qty = $_SESSION['soluong'];
				 	$price = $_SESSION['gia'];
  				}
				require_once('Views/User/html/index.php');
			}
			function sanpham(){
				require_once('Models/UserProductsModel.php');
				$sanpham_model = new UserProductsModel();
				$sanphamLatitude = $sanpham_model -> hienthi3sanpham('Latitude');
				$sanphamVostro = $sanpham_model -> hienthi3sanpham('Vostro');
				$sanphamInspiron = $sanpham_model -> hienthi3sanpham('Inspiron');
				$sanpham10       = $sanpham_model -> hienthi10sanpham();
				 if(isset($_SESSION['soluong'])&&isset($_SESSION['giohang'])){
				 	$qty = $_SESSION['soluong'];
				 	$price = $_SESSION['gia'];
  				}

				require_once('Views/User/html/products.php');
			}

			function phanloai(){
				$tenloai = $_GET['ma'];
				require_once('Models/UserProductsModel.php');
				$sanpham_model = new UserProductsModel();
				$sanpham = $sanpham_model -> hienthisanpham($tenloai);
				$sanpham_model = new UserProductsModel();
				$sanpham10     = $sanpham_model -> hienthi10sanpham();
				require_once('Views/User/html/products-category.php');
			}

			function chitietsanpham(){
				$ma = $_GET['ma'];
				require_once('Models/SanPhamModel.php');
				$sanpham_model = new SanPhamModel();
				$chitiet = $sanpham_model -> timkiem($ma);
				 if(isset($_SESSION['soluong'])&&isset($_SESSION['giohang'])){
				 	$qty = $_SESSION['soluong'];
				 	$price = $_SESSION['gia'];
  				}
				require_once('Views/User/html/productl-detail.php');
			}		

			function dangnhap(){
				require_once('Views/User/html/login.php');
			}

			function test(){
				require_once('Views/User/html/test.php');
			}

			function loaisanpham(){
				require_once('Models/UserProductsModel.php');
				$sanpham_model = new UserProductsModel();
				$sanpham10     = $sanpham_model -> hienthi10sanpham();
				require_once("Views/User/html/products-category.php");
			}

			function dichvu(){
				require_once("Views/User/html/services.php");
			}

			function deal(){
				require_once("Views/User/html/deals.php");
			}

			function timkiem(){
				if(isset($_POST)){
					$ketqua = $_POST;
					require_once('Models/UserProductsModel.php');
					$sanpham_model = new UserProductsModel();
					$sanpham = $sanpham_model -> timkiem($ketqua);
					if($sanpham == true){
						require_once("Views/User/html/products-category.php");
					}else{
						require_once("Views/User/html/products-category.php");
					}
				}
			}

			function support(){
				require_once("Views/User/html/support.php");
			}
		}

	?>