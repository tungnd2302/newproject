
<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách chức vụ</h2>  
    		<table class="table table-hover">
    			<tr>
    				<th>Mã chức vụ</th>
	    			<th>Tên chức vụ</th>
	    			<th>Số lượng</th>
	    			<th>Thao tác</th>
    			</tr>
    			<?php foreach($chucvu as $row){ ?>
    			<tr>
    				<td><?php echo $row['Ma'] ?></td>
    				<td><?php echo $row['Ten'] ?></td>
    				<td><?php echo $row['Soluong'] ?></td>
    				<td colspan="1">
						<a href="?mod=chucvu&act=xoa&id=<?php echo $row['Ma'] ?>" class="btn btn-danger">
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
    })
</script>