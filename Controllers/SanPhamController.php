	<?php
		class SanPhamController{
			function hienthi(){
				require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				$sanpham = $sanpham_model->hienthi();
				require_once('Views/Sanpham/Hienthi.php');
			}

			function them(){
				require_once('Models/LoaiSanPhamModel.php');
				$loaisanpham_model = new LoaiSanPhamModel();
				$loaisanpham = $loaisanpham_model -> hienthi();
				require_once("Views/sanpham/Them.php");
			}

			function themact(){
				$data = $_POST;
				$anh = $_FILES;
				require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				$sanpham = $sanpham_model->them($data,$anh);
				if($sanpham == true){
					setcookie("Themthanhcong","Thêm thành công!",time()+4);
					header("location:?mod=sanpham&act=hienthi");
				}
			}

			function sua(){
				$id = $_GET['id'];
				require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				$sanpham = $sanpham_model->timkiem($id);
				require_once('Models/LoaiSanPhamModel.php');
				$loaisanpham_model = new LoaiSanPhamModel();
				$loaisanpham = $loaisanpham_model -> hienthi();
				require_once('Views/Sanpham/Sua.php');
				
			}

			function suaact(){
				$data = $_POST;
				$anh = $_FILES;

				require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				if(($anh['Anh']['name']) == ""){
					$sanpham = $sanpham_model->sua($data,0);
				}else{
					$sanpham = $sanpham_model->sua($data,$anh);
				}
				if($sanpham == true){
					setcookie("Capnhatthanhcong","Cập nhật thành công!",time()+4);
					header("location:?mod=sanpham&act=hienthi");
				}
			}

			function xoa(){
				$data = $_GET['id'];
				require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				$sanpham = $sanpham_model->xoa($data);
				if($sanpham == true){
					setcookie("Xoathanhcong","Xóa thành công!",time()+4);
					header("location:?mod=sanpham&act=hienthi");
				}
			}

			function info(){
				$data = $_POST;
	        	$id = $data['id_sanpham'];
	         	require_once('Models/SanphamModel.php');
				$sanpham_model = new SanphamModel();
				$sanpham = $sanpham_model->timkiem($id);
				include("Views/Sanpham/Modalview.php");
			}

			

		}

	?>