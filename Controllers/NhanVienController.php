<?php
	class NhanVienController{
		function hienthi(){
			require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->hienthi();
			require_once('Views/Nhanvien/Hienthi.php');
		}

		function them(){
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model -> hienthi();
			require_once("Views/nhanvien/Them.php");
		}

		function themact(){
			$data = $_POST;
			$anh  = $_FILES;
			require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->them($data,$anh);
			if($nhanvien != 0){
				setcookie("Themthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=nhanvien&act=hienthi");
			}else{
				setcookie("Themthatban","Thêm that bai!",time()+4);
				header("location:?mod=nhanvien&act=hienthi");
			}
		}

		function sua(){
			$id = $_GET['id'];
			require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->timkiem($id);
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model -> timkiem($nhanvien['Chucvu']);
			$vitri  = $chucvu_model -> hienthi();
			require_once('Views/NhanVien/Sua.php');
			
		}

		function suaact(){
			$data = $_POST;
			$anh = $_FILES;
			if(($anh['Anh']['name'])==""){
				require_once('Models/NhanVienModel.php');
				$nhanvien_model = new NhanVienModel();
				$nhanvien = $nhanvien_model->sua($data,0);
			}else{
				require_once('Models/NhanVienModel.php');
				$nhanvien_model = new NhanVienModel();
				$nhanvien = $nhanvien_model->sua($data,$anh);
			}
			if($nhanvien == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=nhanvien&act=hienthi");
			}
		}

		function xoa(){
			$data = $_GET['id'];
			require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->xoa($data);
			if($nhanvien == true){
				setcookie("Xoathanhcong","Xóa thành công!",time()+4);
				header("location:?mod=nhanvien&act=hienthi");
			}else{
				setcookie("Xoathatbai","Xóa thành công!",time()+4);
				header("location:?mod=nhanvien&act=hienthi");
			}
		}

		function thongtin(){
			require_once("Views/Nhanvien/thongtinnhanvien.php");
		}

		function suathongtin(){
			include("Views/Nhanvien/capnhatnhanvien.php");
		}
        
        function suathongtinact(){
        	$data = $_POST;
			require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->suathongtin($data);
			if($nhanvien == true){
				setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
				header("location:?mod=nhanvien&act=thongtin");
			}
        }

        function info(){
        	$data = $_POST;
        	$id = $data['id_nhanvien'];
         	require_once('Models/NhanVienModel.php');
			$nhanvien_model = new NhanVienModel();
			$nhanvien = $nhanvien_model->timkiem($id);
			require_once('Models/ChucVuModel.php');
			$chucvu_model = new ChucVuModel();
			$chucvu = $chucvu_model -> timkiem($nhanvien['Chucvu']);
			include("Views/Nhanvien/modalview.php");
        }

	}

?>