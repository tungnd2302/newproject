<?php
	class LoaiSanPhamController{
		function hienthi(){
			require_once('Models/LoaiSanPhamModel.php');
			$loaisanpham_model = new LoaiSanPhamModel();
			$loaisanpham = $loaisanpham_model->hienthi();
			require_once('Views/Loaimathang/Hienthi.php');
		}

		function them(){
			require_once("Views/Loaimathang/Them.php");
		}

		function themact(){
			$data = $_POST;
			require_once('Models/LoaiSanPhamModel.php');
			$loaisanpham_model = new LoaiSanPhamModel();
			$loaisanpham = $loaisanpham_model->them($data);
			if($loaisanpham == true){
				setcookie("Themthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=loaisanpham&act=hienthi");
			}
		}

		function sua(){
			$id = $_GET['id'];
			require_once('Models/LoaiSanPhamModel.php');
			$loaisanpham_model = new LoaiSanPhamModel();
			$loaisanpham = $loaisanpham_model->timkiem($id);
			require_once('Views/Loaimathang/Sua.php');
			
		}

		function suaact(){
			$data = $_POST;
			require_once('Models/LoaiSanPhamModel.php');
			$loaisanpham_model = new LoaiSanPhamModel();
			$loaisanpham = $loaisanpham_model->sua($data);
			if($loaisanpham == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=loaisanpham&act=hienthi");
			}
		}

		function xoa(){
			$data = $_GET['id'];
			require_once('Models/LoaiSanPhamModel.php');
			$loaisanpham_model = new LoaiSanPhamModel();
			$loaisanpham = $loaisanpham_model->xoa($data);
			if($loaisanpham == true){
				setcookie("Xoathanhcong","Xóa thành công!",time()+4);
				header("location:?mod=loaisanpham&act=hienthi");
			}
		}

		function xemchitiet(){
			$data = $_GET['id'];
			require_once('Models/ChiTietLoaiSanPhamModel.php');
			$loaisanpham_model = new ChiTietLoaiSanPhamModel();
			$chitiet = $loaisanpham_model -> timkiem($data);
			require_once('Views/Chitietloaisanpham/hienthi.php');
		}
        
	}

?>