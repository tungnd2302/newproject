<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	class KhachHangController{
		function dangnhap(){
			$data = $_POST;
			require("Models/KhachHangModel.php");
			$khachhang_model = new KhachHangModel();
			$row = $khachhang_model -> dangnhap($data);
			if($row==true){
				echo("1");
				$_SESSION['Makhachhang'] = $row['Ma'];
				setcookie("dangnhapthanhcong","Đăng nhập thành công!!!",time()+3);
			}else{
				setcookie("dangnhapthatbai","Đăng nhập thất bại!!!",time()+3);
			}
		}

		function dangki(){
			$data = $_POST;
			require("Models/KhachHangModel.php");
			$khachhang_model = new KhachHangModel();
			$khachhang = $khachhang_model -> them($data);
			if($khachhang == true){
				setcookie("Themthanhcong","Thêm thành công!",time()+4);
				header("location:?mod=user&act=trangchu");
			}
		}

		function dangxuat(){
			unset($_SESSION['Makhachhang']);
			setcookie("Dangxuatthanhcong","Thêm thành công!",time()+4);
			header("location:?mod=user&act=trangchu");
		}

		function hienthi(){
			require("Models/KhachHangModel.php");
			$khachhang_model = new KhachHangModel();
			$khachhang = $khachhang_model -> hienthi();
			require("Views/khachhang/hienthi.php");
		}

		function xoa(){
			$data = $_GET['ma'];
			require("Models/KhachHangModel.php");
			$khachhang_model = new KhachHangModel();
			$khachhang = $khachhang_model -> xoa($data);
			if($khachhang == true){
				setcookie("xoathanhcong","Xóa thành công", time()+3);
				header("location:?mod=khachhang&act=hienthi");
			}
		}

		function thongtinkhachhang(){
			if(isset($_SESSION['Makhachhang'])){
				$data = $_SESSION['Makhachhang'];
				require("Models/KhachHangModel.php");
				$khachhang_model = new KhachHangModel();
				$khachhang = $khachhang_model -> timkiem($data);
				return $khachhang;
			}
		}
	}

?>