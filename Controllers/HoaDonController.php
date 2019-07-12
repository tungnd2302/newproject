<?php
session_start();
	class HoaDonController{
		function hienthi(){
			require_once('Models/HoaDonModel.php');
			$hoadon_model = new HoaDonModel();
			$hoadon = $hoadon_model->hienthi();
			require_once('Views/Hoadon/Hienthi.php');
		}

		function them(){
			require_once("Views/hoadon/Them.php");
		}

		function themact(){
			$data = $_POST;
			require_once('Models/HoaDonModel.php');
			require_once('Models/ChiTietHoaDonModel.php');
			require_once('Models/SanPhammodel.php');
			$hoadon_model = new HoaDonModel();
			$hoadon   = $hoadon_model->them($data);
			foreach ($_SESSION['giohang'] as $key => $value) {
				$dongia = $_SESSION['price'][$key];
				$Chitiethoadon = new ChiTietHoaDonModel();
				$Chitiethoadon -> them($key,$value,$hoadon,$dongia);
				$sanpham = new SanPhammodel();
				$sanpham -> update($key,$value);
			}

			if($hoadon == true){
				setcookie("muahangthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=hoadon&act=completecart");
			}
		}

		function sua(){
			$id = $_GET['id'];
			require_once('Models/HoaDonModel.php');
			$hoadon_model = new HoaDonModel();
			$hoadon = $hoadon_model->timkiem($id);
			require_once('Views/HoaDon/Sua.php');
			
		}

		function suaact(){
			$data = $_POST;
			require_once('Models/HoaDonModel.php');
			$hoadon_model = new HoaDonModel();
			$hoadon = $hoadon_model->sua($data);
			if($hoadon == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=hoadon&act=hienthi");
			}
		}

		function xoa(){
			$data = $_GET['id'];
			require_once('Models/HoaDonModel.php');
			$hoadon_model = new HoaDonModel();
			$hoadon = $hoadon_model->xoa($data);
			require_once('Models/ChiTietHoaDonModel.php');
			$chitiet_model = new ChiTietHoaDonModel();
			$chitiet = $chitiet_model ->xoa($data);
			if(($hoadon == true)&&($chitiet == true)){
				setcookie("Xoathanhcong","Xóa thành công!",time()+4);
				header("location:?mod=hoadon&act=hienthi");
			}
		}

		function xemchitiet(){
			$data = $_GET['id'];
			require_once('Models/ChiTietHoaDonModel.php');
			$hoadon_model = new ChiTietHoaDonModel();
			$chitiethoadon = $hoadon_model -> timkiem($data);
			require_once('Views/Chitiethoadon/hienthi.php');
		}

		function completeCart(){
			require_once('Views/User/html/completeCart.php');
			unset($_SESSION['gia']);
			unset($_SESSION['giohang']);
			unset($_SESSION['soluong']);
			unset($_SESSION['price']);
		}

	}

?>