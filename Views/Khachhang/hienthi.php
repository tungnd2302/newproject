<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách Khách hàng</h2>  
    		<table class="table table-hover">
    			<tr>
	    			<th>Mã khách hàng</th>
	    			<th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Ngày đăng kí</th>
	    			<th>Thao tác</th>
    			</tr>
    			<?php foreach($khachhang as $row){ ?>
    			<tr>
    				<td><?php echo $row['Ma'] ?></td>
    				<td><?php echo $row['Tenkhach'] ?></td>
    				<td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Ngaylap'] ?></td>
    				<td colspan="1">
						<a href="?mod=khachhang&act=xoa&ma=<?php echo $row['Ma'] ?>" class="btn btn-danger">
							<i class="fa fa-trash"></i>
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
        <?php if(isset($_COOKIE['xoathanhcong'])){ ?>
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
    })
</script>
