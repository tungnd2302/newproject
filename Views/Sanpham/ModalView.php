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
		<img src="Public/IMG/Sanpham/<?php echo $sanpham['Anh'] ?>" class="img-responsive">
	</div>
	<div class="content">
		<table border="0" width="70%">
			<tr>
				<td width="50%">Tên</td>
				<td width="50%;"><?php echo $sanpham['Loaisanpham']." ".$sanpham['Ten'] ?></td>
			</tr>
			<tr>
				<td width="50%">Ram</td>
				<td width="50%;"><?php echo $sanpham['Ram'] ?></td>
			</tr>
			<tr>
				<td width="50%">Bộ xử lý</td>
				<td width="50%;"><?php echo $sanpham['Boxuly'] ?></td>
			</tr>
			<tr>
				<td width="50%">Màn hình</td>
				<td width="50%;"><?php echo $sanpham['Manhinh'] ?></td>
			</tr>
			<tr>
				<td width="50%">Ổ cứng</td>
				<td width="50%;"><?php echo $sanpham['Ocung'] ?></td>
			</tr>
			<tr>
				<td width="50%">Giới thiệu</td>
				<td width="50%;"><?php echo $sanpham['Gioithieu'] ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
	