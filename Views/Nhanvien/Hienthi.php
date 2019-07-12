<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách nhân viên</h2>  
    		<table class="table table-hover">
    			<tr>
    				<th>Mã</th>
	    			<th>Tên</th>
	    			<th>Chức Vụ</th>
	    			<th>Ngày Sinh</th>
	    			<th>Tài khoản</th>
	    			<th>Ảnh</th>
	    			<th>Thao tác</th>
    			</tr>
    			<?php foreach($nhanvien as $row){ ?>
    			<tr>
    				<td id="ma"><?php echo $row['Ma'] ?></td>
    				<td><?php echo $row['Ten'] ?></td>
    				<td><?php echo $row['Chucvu'] ?></td>
    				<td><?php echo $row['Ngaysinh'] ?></td>
    				<td><?php echo $row['Taikhoan'] ?></td>
    				<td><img src="Public/IMG/Nhanvien/<?php echo $row['Anh'] ?>" class="img-responsive" style="height: 60px; width: 60px;"></td>
    				<td colspan="2">
						<a href="?mod=nhanvien&act=sua&id=<?php echo $row['Ma'] ?>" class="btn btn-danger">
							<i class="fa fa-edit"></i>
						</a>
						<a href="?mod=nhanvien&act=xoa&id=<?php echo $row['Ma'] ?>" class="btn btn-danger">
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
        <h4 class="modal-title">Thông tin nhân viên</h4>
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
        <?php if(isset($_COOKIE['Xoathatbai'])){ ?>
                Command: toastr["info"]("Không thể xóa nhân viên này!!")
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
        <?php if(isset($_COOKIE['Themthatban'])){ ?>
                Command: toastr["info"]("Trùng tài khoản, thử lại")
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
                var id_nhanvien = $(this).attr("id");
                $.ajax({
                    url: '?mod=nhanvien&act=info',
                    type: 'POST',
                    data: {
                        id_nhanvien: id_nhanvien
                    },
                })
                .done(function(html) {
                    $(".modal-body").html(html);
                    $("#myModal").modal("show");
                })
                
        });
    })
</script>