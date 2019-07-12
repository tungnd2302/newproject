<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Danh sách đơn</h2>  
    		<table class="table table-hover">
    			<tr>
    				<th>Mã hóa đơn</th>
	    			<th>Mã sản phẩm</th>
	    			<th>Số lượng</th>
	    			<th>Giá tiền</th>
    			</tr>
                <?php foreach($chitiethoadon as $chitiet):  ?>
    			<tr>
         				<td>
                            <?php echo $chitiet['Mahoadon'] ?>
                        </td>
        				<td class="hoadon" id="<?php echo $chitiet['Masanpham'] ?>">
                            <?php echo $chitiet['Masanpham'] ?>  
                        </td>
        				<td><?php echo $chitiet['Soluong'] ?></td>
        				<td>$<?php echo $chitiet['Giatien'] ?></td>
    			</tr>
                <?php endforeach; ?>
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
 	require_once('Views/Layout/footer.php');
 ?>

 <script type="text/javascript">
    $(document).ready(function(){
        $(".hoadon").css({
            cursor : 'pointer',
            color  : 'blue'
        })
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
        $(".hoadon").click(function(){
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
        })
    })
</script>