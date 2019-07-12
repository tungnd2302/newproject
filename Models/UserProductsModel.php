<?php
	class UserProductsModel{
		function hienthi3sanpham($kieumay){
			require("OpenConnection.php");
			$query = 'Select * from tblsanpham where Loaisanpham like "'.$kieumay.'" order by RAND() limit 3';
			$result = $conn -> query($query);
			$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}

		function hienthisanpham($kieumay){
			require("OpenConnection.php");
			$query = 'Select * from tblsanpham where Loaisanpham like "'.$kieumay.'"';
			$result = $conn -> query($query);
			$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}

		function hienthi10sanpham(){
			require("OpenConnection.php");
			$query = 'Select * from tblsanpham  order by RAND() limit 10';
			$result = $conn -> query($query);
			$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}

		function timkiem($data){
			require("OpenConnection.php");
			$query = 'Select * from tblsanpham where Tensanpham like "%'.$data['txtSearch'].'%"';
			// die($query);
			$result = $conn -> query($query);
			$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}
?>