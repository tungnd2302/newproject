<?php
	class LoaiSanPhamModel{
		function hienthi(){
			require("OpenConnection.php");
				$query = "select * from tblloaisanpham";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($data){
				require_once("OpenConnection.php");
				$query = "insert into tblloaisanpham(Ten,Baohanh)
						  values ('".$data['Ten']."','".$data['Baohanh']."')";
				$result = $conn->query($query);
				return $result;
		}

		function sua($data){
				require_once("OpenConnection.php");
				$query = "Update tblloaisanpham set Ten= '".$data['Ten']."',Baohanh= '".$data['Baohanh']."'where Ma ='".$data['Ma']."'";
				$data = $conn -> query($query);
				return $data;
		}

		function xoa($data){
				require_once("OpenConnection.php");
				$query = "delete from tblloaisanpham where Ma= '".$data."'";
				$data = $conn -> query($query);
				return $data;

		}

		function timkiem($id){
				require_once("OpenConnection.php");
				$query  = "select * from tblloaisanpham where ma= '".$id."'";
				$result = $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}
	}
?>