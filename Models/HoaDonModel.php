<?php
	class HoaDonModel{
		function hienthi(){
			require_once("OpenConnection.php");
				$query = "select * from tblhoadon";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($data){
				require("OpenConnection.php");
				$query = "insert into tblhoadon(Makhachhang,Tongtien,Ngaymuahang,Tinhtrang,Diachi,Sodienthoai,Email)
						  values ('".$data['Ma']."','".$data['Tongtien']."',CURDATE(),'".'dangcho'."',
						  '".$data['Diachi']."','".$data['Sodienthoai']."','".$data['Email']."')";
				$result = $conn->query($query);
				$mahoadon = mysqli_insert_id($conn);
				return $mahoadon;
		}

		function sua($data){
				require_once("OpenConnection.php");
				$query = "Update tblhoadon set Ten= '".$data['Ten']."',Chucvu= '".$data['Chucvu']."',Ngaysinh= '".$data['Ngaysinh']."',Taikhoan= '".$data['Taikhoan']."',Matkhau='".$data['Matkhau']."',Anh='".$data['Anh']."' where Ma ='".$data['Ma']."'";
				$data = $conn -> query($query);
				return $data;
		}

		function xoa($data){
				require_once("OpenConnection.php");
				$query = "delete from tblhoadon where Mahoadon= '".$data."'";
				$data = $conn -> query($query);
				return $data;

		}

		function timkiem($id){
				require_once("OpenConnection.php");
				$query  = "select * from tblhoadon where ma= '".$id."'";
				$result = $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}
	}
?>