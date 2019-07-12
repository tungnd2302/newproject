<?php
require_once("Models/NhanVienModel.php");
	class LoginController{
		function dangnhap(){
			require_once("Views/Layout/login.php");
		}

		function dangnhapact(){
			$data = $_POST;
			$nhanvien_model = new NhanVienModel();
			$row = $nhanvien_model -> dangnhap($data);
			if($row==true){
				echo("1");
				$_SESSION['Ma'] = $row['Ma'];
				setcookie("dangnhapthanhcong","Đăng nhập thành công!!!",time()+3);
			}
		}

		function logoutact(){
			unset($_SESSION['Ma']);
			setcookie("dangxuatthanhcong","Đăng xuất thành công!!!",time()+3);
			header("location:?mod=dangnhap&act=dangnhap");
		}

		function hienthi(){
			$data = $_SESSION['Ma'];
			$nhanvien_model = new NhanVienModel();
			$row = $nhanvien_model -> timkiem($data);	
			return $row;
		}
	}

?>