<?php
	class KhachHangModel{
		function them($data){
			require_once("OpenConnection.php");
			$query = "insert into tblkhachhang(Tenkhach,Matkhau,Email,Ngaylap) values ('".$data['Firstname']." ".$data['Lastname']."','".$data['Matkhau']."','".$data['Email']."',CURDATE())";
			$result = $conn->query($query);
				return $result;
			
		}

		function hienthi(){
			require("OpenConnection.php");
			$query = "Select * from tblkhachhang";
			$data = array();
			$result = $conn ->query($query);
			while ($row = $result -> fetch_assoc() ) {
				$data[] = $row;
			}
			return $data;
		}

		function xoa($data){
			require_once("OpenConnection.php");
			$query = "delete from tblkhachhang where Ma= '".$data."'";
			$data = $conn -> query($query);
			return $data;
		}

		function dangnhap($data){
				require_once("OpenConnection.php");
				$query  = "select * from tblkhachhang where Email like '".$data['Email']."' AND Matkhau like '".$data['Password']."'";
				$result = $conn-> query($query);
				$data   =  $result -> fetch_assoc();
				return $data;	
		}

		function timkiem($id){
				include("OpenConnection.php");
				$query  = "select * from tblkhachhang where Ma= '".$id."'";
				$result =  $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}
	}

?>