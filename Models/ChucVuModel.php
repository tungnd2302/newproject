<?php
	class ChucVuModel{
		function hienthi(){
			require("OpenConnection.php");
				$query = "select * from tblchucvu";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($data){
				require_once("OpenConnection.php");
				$query = "insert into tblchucvu(Ten)
						  values ('".$data['Ten']."')";
				$result = $conn->query($query);
				return $result;
		}

		function xoa($data){
				require_once("OpenConnection.php");
				$query = "delete from tblchucvu where Ma= '".$data."'";
				$data = $conn -> query($query);
				return $data;

		}

		function timkiem($id){
				require("OpenConnection.php");
				$query  = "select * from tblchucvu where Ma= '".$id."'";
				$result =  $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}
	}
?>