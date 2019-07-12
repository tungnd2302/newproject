<?php
session_start();
	class GioHangController{
		function hienthi(){
			$soluong = 0;
			if(isset($_SESSION['giohang'])){
				require_once('Models/SanphamModel.php');
				foreach ($_SESSION['giohang'] as $key => $value) {
							// tạo 1 mảng
							$sanpham[] = $key;
							$soluong +=1;
				}
				$_SESSION['soluong'] = $soluong;

				if(!$sanpham){
					unset($_SESSION['giohang']);
					unset($_SESSION['gia']);
					unset($_SESSION['soluong']);
					header("location:?mod=giohang&act=hienthi");
				}
				 if((isset($_SESSION['soluong']))&&(isset($_SESSION['giohang']))){
				 	$qty = $_SESSION['soluong'];
				 	$price = $_SESSION['gia'];
  				}

				//Tách mảng thành 1 chuỗi được cắt nhau bởi dấu phẩy;
				$str = implode(",", $sanpham);
				//Truyền vào phần tìm kiếm chuỗi vừa tìm được,
				$sanpham_model = new SanphamModel();
				$result = $sanpham_model -> timkiemgiohang($str);
				require_once("Views/User/html/cart.php");
			}else{
				header("location:?mod=user&act=sanpham");
			}
		}

		function them(){
			$id = $_POST['Masanpham'];
			if(!isset($_SESSION['giohang'][$id])){
				$_SESSION['giohang'][$id] = 1;
			}
				header("location:?mod=giohang&act=hienthi");				
				
			}

		function remove(){
			$id = $_GET['ma'];
			unset($_SESSION['giohang'][$id]);
			header("location:?mod=giohang&act=hienthi");
		}

		function pricechange(){
			if(isset($_POST)){
				$data = $_POST;
				$soluong =  $data['soluong'];
				$id_change =  $data['id_change'];	
				$_SESSION['giohang'][$id_change] = $soluong;
			}else{
				echo "không tồn tại";
			}
		}

		function thanhtoan(){
			if(isset($_SESSION['soluong'])&&isset($_SESSION['giohang'])){
				 	$qty = $_SESSION['soluong'];
				 	$price = $_SESSION['gia'];
  				}
			require_once("Views/User/html/payment.php");
		}
	}



?>