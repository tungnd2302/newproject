<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	class NhanVienModel{
		function hienthi(){
			require_once("OpenConnection.php");
				$query = "select * from tblnhanvien";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($data,$anh){
				require_once("OpenConnection.php");
				$querycheck = "select * from tblnhanvien where Taikhoan like '".$data['Taikhoan']."'";
				$resultcheck = $conn -> query($querycheck);
				$column = $resultcheck->num_rows;
				if($column != 0){
					return 0;
				}else{
					if(isset($anh)){
						$ten          = $_FILES['Anh']['tmp_name'];
						$tenanh       = $_FILES['Anh']['name'];
						$kichthuoc    = $_FILES['Anh']['size'];
						$kieu         = $_FILES['Anh']['type'];
						$duongdan = "Public/IMG/Nhanvien/$tenanh";
						if(move_uploaded_file($ten, $duongdan)){
						// die($duongdan);
							$query = "insert into tblnhanvien(Ten,Chucvu,Ngaysinh,Taikhoan,Matkhau,Anh,Email,Sodienthoai)
								  values ('".$data['Ten']."','".$data['Chucvu']."','".$data['Ngaysinh']."','".$data['Taikhoan']."',
								  '".$data['Matkhau']."','".$tenanh."','".$data['Email']."','".$data['Sodienthoai']."')";
							$result = $conn->query($query);
							return $result;
					}
			    }
			 }
		}

		function sua($data,$anh){
			if($anh == 0){
				require_once("OpenConnection.php");
				$query = "Update tblnhanvien set Ten= '".$data['Ten']."',Chucvu= '".$data['Chucvu']."',Ngaysinh= '".$data['Ngaysinh']."',Taikhoan= '".$data['Taikhoan']."',Matkhau='".$data['Matkhau']."',Sodienthoai='".$data['Sodienthoai']."',Email='".$data['Email']."' where Ma ='".$data['Ma']."'";
				$data = $conn -> query($query);
				return $data;
			}else{
				require_once("OpenConnection.php");
				$tentmp       = $_FILES['Anh']['tmp_name'];
				$ten      	  = $_FILES['Anh']['name'];
				$kichthuoc 	  = $_FILES['Anh']['size'];
				$kieu      	  = $_FILES['Anh']['type'];
				$duongdan 	  = "Public/IMG/Nhanvien/$ten";
				if(move_uploaded_file($tentmp, $duongdan)){
					$query = "Update tblnhanvien set Ten= '".$data['Ten']."',Chucvu= '".$data['Chucvu']."',Ngaysinh= '".$data['Ngaysinh']."',Taikhoan= '".$data['Taikhoan']."',Matkhau='".$data['Matkhau']."',Sodienthoai='".$data['Sodienthoai']."',Anh ='".$ten."',Email='".$data['Email']."' where Ma ='".$data['Ma']."'";
					$data = $conn -> query($query);
					return $data;
				}else{
					echo "upload thất bại";
					die;
				}
			}
		}

		function xoa($data){
				require_once("OpenConnection.php");
				if(isset($_SESSION['Ma']) == $data){
					return 0;
				}else{
					$query = "delete from tblnhanvien where Ma= '".$data."'";
					$data = $conn -> query($query);
					return $data;
				}

		}

		function timkiem($id){
				include("OpenConnection.php");
				$query  = "select * from tblnhanvien where Ma= '".$id."'";
				$result =  $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}

		function dangnhap($data){
				require_once("OpenConnection.php");
				$query  = "select * from tblnhanvien where Taikhoan like '".$data['taikhoan']."' AND Matkhau like '".$data['matkhau']."'";
				$result = $conn-> query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}

		function suathongtin($data){
				require_once("OpenConnection.php");
				$query = "Update tblnhanvien set Ten= '".$data['Ten']."',Ngaysinh= '".$data['Ngaysinh']."',Sodienthoai='".$data['Sodienthoai']."',Email='".$data['Email']."' where Ma ='".$data['Ma']."'";
				$data = $conn -> query($query);
				return $data;
		}

	}
?>