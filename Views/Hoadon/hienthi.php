<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách đơn hàng</h2>  
    		<table class="table table-hover">
    			<tr>
    				<th width="5%">Mã hóa đơn</th>
	    			<th width="5%">Mã khách hàng</th>
	    			<th>Tổng tiền</th>
	    			<th>Ngày mua hàng</th>
                    <th>Số điện thoại</th>
                    <th width="20%">Địa chỉ</th>
                    <th width="10%">Email</th>
                    <th>Tình trạng</th>
	    			<th>Thao tác</th>
    			</tr>
    			<?php foreach($hoadon as $row){ ?>
    			<tr>
    				<td><?php echo $row['Mahoadon'] ?></td>
    				<td><?php echo $row['Makhachhang'] ?></td>
    				<td><?php echo $row['Tongtien'] ?></td>
    				<td><?php echo $row['Ngaymuahang'] ?></td>
                    <td><?php echo $row['Sodienthoai'] ?></td>
                    <td><?php echo $row['Diachi'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><button class="btn btn-info"><?php echo $row['Tinhtrang'] ?></button></td>
    				<td colspan="1">
						<a href="?mod=hoadon&act=xoa&id=<?php echo $row['Mahoadon'] ?>" class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
                        <a href="?mod=hoadon&act=xemchitiet&id=<?php echo $row['Mahoadon'] ?>" class="btn btn-danger">
                            <i class="fa fa-eye"></i>
                        </a>
    				</td>
    			</tr>
    			<?php } ?>
    		</table>  
    </div>	
 <?php
 	require_once('Views/Layout/footer.php');
 ?>

 <script type="text/javascript">
    $(document).ready(function(){
        <?php if(isset($_COOKIE['Themthanhcong'])){ ?>
                Command: toastr["info"]("Thêm thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
        <?php if(isset($_COOKIE['Xoathanhcong'])){ ?>
                Command: toastr["info"]("Xóa thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
        <?php if(isset($_COOKIE['Capnhatthanhcong'])){ ?>
                Command: toastr["info"]("Cập nhật thành công")
                toastr.options = {
                    timeOut : 0,
                    extendedTimeOut : 100,
                    tapToDismiss : true,
                    debug : false,
                    fadeOut: 10,
                    positionClass : "toast-top-center"
                }
        <?php } ?>
    })
</script>