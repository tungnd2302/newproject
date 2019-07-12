<?php
	class ChucVuController{
		function hienthi(){
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model->hienthi();
			require_once('Views/chucvu/Hienthi.php');
		}

		function them(){
			require_once("Views/chucvu/Them.php");
		}

		function themact(){
			$data = $_POST;
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model->them($data);
			if($chucvu == true){
				setcookie("Themthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=chucvu&act=hienthi");
			}
		}

		function sua(){
			$id = $_GET['id'];
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model->timkiem($id);
			require_once('Views/ChucVu/Sua.php');
			
		}

		function suaact(){
			$data = $_POST;
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model->sua($data);
			if($chucvu == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=chucvu&act=hienthi");
			}
		}

		function xoa(){
			$data = $_GET['id'];
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model->xoa($data);
			if($chucvu == true){
				setcookie("Xoathanhcong","Xóa thành công!",time()+4);
				header("location:?mod=chucvu&act=hienthi");
			}
		}

	}

?>