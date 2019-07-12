<?php
	class ChiTietHoaDonController{
		function hienthi(){
			require_once('Models/ChiTietHoaDonModel.php');
			$chitiethoadon_model = new ChiTietHoaDonModel();
			$chitiethoadon = $chitiethoadon_model->hienthi();
			require_once('Views/Chitiethoadon/Hienthi.php');
		}

		function them(){
			require_once("Views/chitiethoadon/Them.php");
		}

		function themact(){
			$data = $_POST;
			require_once('Models/ChiTietHoaDonModel.php');
			$chitiethoadon_model = new ChiTietHoaDonModel();
			$chitiethoadon = $chitiethoadon_model->them($data);
			if($chitiethoadon == true){
				setcookie("Themthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=chitiethoadon&act=hienthi");
			}
		}

		function sua(){
			$id = $_GET['id'];
			require_once('Models/ChiTietHoaDonModel.php');
			$chitiethoadon_model = new ChiTietHoaDonModel();
			$chitiethoadon = $chitiethoadon_model->timkiem($id);
			require_once('Views/ChiTietHoaDon/Sua.php');
			
		}

		function suaact(){
			$data = $_POST;
			require_once('Models/ChiTietHoaDonModel.php');
			$chitiethoadon_model = new ChiTietHoaDonModel();
			$chitiethoadon = $chitiethoadon_model->sua($data);
			if($chitiethoadon == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=chitiethoadon&act=hienthi");
			}
		}
	}

?>