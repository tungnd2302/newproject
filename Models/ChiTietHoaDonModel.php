<?php
	class ChiTietHoaDonModel{
		function hienthi(){
			require_once("OpenConnection.php");
				$query = "select * from tblchitiethoadon";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($ma,$soluong,$mahoadon,$dongia){
				require("OpenConnection.php");
				$query = "insert into tblchitiethoadon(Masanpham,Soluong,Mahoadon,Giatien)
						  values ('".$ma."','".$soluong."','".$mahoadon."','".$dongia."')";
				// die($query);
				$result = $conn->query($query);
				return $result;
		}

		function sua($data){
				require_once("OpenConnection.php");
				$query = "Update tblchitiethoadon set Ten= '".$data['Ten']."',Chucvu= '".$data['Chucvu']."',Ngaysinh= '".$data['Ngaysinh']."',Taikhoan= '".$data['Taikhoan']."',Matkhau='".$data['Matkhau']."',Anh='".$data['Anh']."' where Ma ='".$data['Ma']."'";
				$id = $conn -> lastInsertID();
				echo $id;
				// die();
				$data = $conn -> query($query);
				return $data;
		}

		function xoa($data){
				require("OpenConnection.php");
				$query = "delete from tblchitiethoadon where Mahoadon= '".$data."'";
				$data = $conn -> query($query);
				return $data;

		}

		function timkiem($id){
				require_once("OpenConnection.php");
				$query  = "select * from tblchitiethoadon where Mahoadon= '".$id."'";
				$result = $conn->query($query);
				$data  = array();
				while($row   =  $result -> fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}
	}
?>