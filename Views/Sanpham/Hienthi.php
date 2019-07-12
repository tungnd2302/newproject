<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách sản phẩm</h2>  
    		<table class="table table-hover">
    			<tr>
    				<th>Mã</th>
	    			<th>Tên</th>
                    <th>Năm sản xuất</th>
                    <th>Tồn kho</th>
                    <th>Giá bán</th>
	    			<th>Thao tác</th>
    			</tr>
    			<?php foreach($sanpham as $row){ ?>
    			<tr>
    				<td><?php echo $row['Ma'] ?></td>
    				<td><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></td>
    				<td><?php echo $row['Namsanxuat'] ?></td>
    				<td><?php echo $row['Tonkho'] ?></td>
    				<td><?php echo $row['Giaban'] ?></td>
    				<td colspan="2">
						<a href="?mod=sanpham&act=sua&id=<?php echo $row['Ma'] ?>" class="btn btn-danger">
							<i class="fa fa-edit"></i>
						</a>
						<a href="?mod=sanpham&act=xoa&id=<?php echo $row['Ma'] ?>" class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
                        <a id="<?php echo $row['Ma'] ?>" class="btn btn-danger view_data">
                            <i class="fa fa-eye"></i>
                        </a>
    				</td>
    			</tr>
    			<?php } ?>
    		</table>  
    </div>
     <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thông tin sản phẩm</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng </button>
      </div>
    </div>

  </div>
</div>
<?php
	require_once("Views/Layout/footer.php");
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
         $(".view_data").click(function(e) {
                var id_sanpham = $(this).attr("id");
                $.ajax({
                    url: '?mod=sanpham&act=info',
                    type: 'POST',
                    data: {
                        'id_sanpham' : id_sanpham
                    },
                })
                .done(function(html) {
                    $(".modal-body").html(html);
                    $("#myModal").modal("show");
                })
                
        });
    })
</script>