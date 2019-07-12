<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Public/myCSS/modalview.css">
</head>
<style type="text/css">
	.img-thumbnail{
		width: 100%;
		text-align: center;
		border: none;
	}

	img{
		width: 160px;
		margin: 0px auto;
	}

	.content{
		margin-top: 20px;
	}

	table{
		margin: 0px auto;
	}

	tr{
		height: 50px;
	}
</style>
<body>
	<div class="img-thumbnail">
		<img src="Public/IMG/Nhanvien/<?php echo $nhanvien['Anh'] ?>" class="img-responsive img-circle img-rounded">
	</div>
	<div class="content">
		<table border="0" width="70%">
			<tr>
				<td width="40%">Họ tên</td>
				<td width="60%;"><?php echo $nhanvien['Ten'] ?></td>
			</tr>
			<tr>
				<td width="40%">Ngày sinh</td>
				<td width="60%;"><?php echo $nhanvien['Ngaysinh'] ?></td>
			</tr>
			<tr>
				<td width="40%">Chức vụ</td>
				<td width="60%;"><?php echo $chucvu['Ten'] ?></td>
			</tr>
			<tr>
				<td width="40%">Email</td>
				<td width="60%;"><?php echo $nhanvien['Email'] ?></td>
			</tr>
			<tr>
				<td width="40%">Số điện thoại</td>
				<td width="60%;"><?php echo $nhanvien['Sodienthoai'] ?></td>
			</tr>
			<tr>
				<td width="40%">Tài khoản</td>
				<td width="60%;"><?php echo $nhanvien['Taikhoan'] ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
