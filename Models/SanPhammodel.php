<?php
	class SanPhamModel{
		function hienthi(){
			require_once("OpenConnection.php");
				$query = "select * from tblsanpham";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function them($data,$anh){
				require_once("OpenConnection.php");
				if(isset($anh)){
						$ten          = $_FILES['Anh']['tmp_name'];
						$tenanh       = $_FILES['Anh']['name'];
						$kichthuoc    = $_FILES['Anh']['size'];
						$kieu         = $_FILES['Anh']['type'];
						$duongdan = "Public/IMG/Sanpham/$tenanh";
						if(move_uploaded_file($ten, $duongdan)){
							$query = "insert into tblsanpham(Tensanpham,Ten,Loaisanpham,Namsanxuat,Tonkho,Boxuly,Ram,Ocung,Anh,Giaban,Manhinh,Gioithieu)
									  values ('"."Dell ".$data['Loaisanpham']." ".$data['Ten']."','".$data['Ten']."','".$data['Loaisanpham']."','".$data['Namsanxuat']."','".$data['Tonkho']."','".$data['Boxuly']."','".$data['Ram']."','".$data['Ocung']."','".$tenanh."','".$data['Giaban']."','".$data['Manhinh']."','".$data['Gioithieu']."')";
									  
							$result = $conn->query($query);
							return $result;
					}
			}
		}

		function sua($data,$anh){
			require_once("OpenConnection.php");
			if($anh == 0){
				$query = "Update tblsanpham set Tensanpham ='".$data['Loaisanpham']." ".$data['Ten']."', Ten= '"."Dell ".$data['Ten']."',Loaisanpham='".$data['Loaisanpham']."',Namsanxuat= '".$data['Namsanxuat']."',Tonkho= '".$data['Tonkho']."',Boxuly= '".$data['Boxuly']."',Ram='".$data['Ram']."',Ocung='".$data['Ocung']."',Giaban= '".$data['Giaban']."',Manhinh= '".$data['Manhinh']."',Gioithieu = '".$data['Gioithieu']."' where Ma = '".$data['Ma']."'";
				$data = $conn -> query($query);
				return $data;
			}else{
						$ten          = $_FILES['Anh']['tmp_name'];
						$tenanh       = $_FILES['Anh']['name'];
						$kichthuoc    = $_FILES['Anh']['size'];
						$kieu         = $_FILES['Anh']['type'];
						$duongdan = "Public/IMG/Sanpham/$tenanh";
						if(move_uploaded_file($ten, $duongdan)){
							$query = "Update tblsanpham set Tensanpham ='"."Dell ".$data['Loaisanpham']." ".$data['Ten']."', Ten= '".$data['Ten']."',Loaisanpham='".$data['Loaisanpham']."',Namsanxuat= '".$data['Namsanxuat']."',Tonkho= '".$data['Tonkho']."',Boxuly= '".$data['Boxuly']."',Ram='".$data['Ram']."',Ocung='".$data['Ocung']."',Anh= '".$tenanh."',Giaban= '".$data['Giaban']."',Manhinh= '".$data['Manhinh']."',Gioithieu = '".$data['Gioithieu']."' where Ma = '".$data['Ma']."'";
							$data = $conn -> query($query);
							 return $data;
			}}
		}

		function xoa($data){
				require_once("OpenConnection.php");
				$query = "delete from tblsanpham where Ma= '".$data."'";
				$data = $conn -> query($query);
				return $data;

		}

		function timkiem($id){
				require("OpenConnection.php");
				$query  = "select * from tblsanpham where ma= '".$id."'";
				$result = $conn->query($query);
				$data   =  $result -> fetch_assoc();
				return $data;
		}

		function timkiemgiohang($str){
				require("OpenConnection.php");
				$query  = "select * from tblsanpham where Ma in(".$str.")";
				$result = $conn->query($query);
				$data = array();
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
		}

		function update($id,$qty){
				require("OpenConnection.php");
				$query = "Select * from tblsanpham where Ma=$id";
				$result = $conn -> query($query);
				$data = $result -> fetch_assoc();
				$data['Tonkho'] -= $qty;
				$query2 = "Update tblsanpham set Tonkho = '".$data['Tonkho']."' where Ma = '".$id."'";
				$result2 = $conn -> query($query2);
				return "Sản phầm $id đã bị trừ $qty trong kho!!";
		}

		
	}
?>