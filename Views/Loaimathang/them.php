<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Thêm Loại Mặt Hàng</h2>  
            <form method="post" action="?mod=loaisanpham&act=themact" class="form-horizontal" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mã loại sản phẩm</label>
                        <div class="col-md-6">
                            <input type="text" name="Ma" readonly="readonly" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tên loại sản phẩm</label>
                        <div class="col-md-6">
                            <input type="text" name="Ten" class="form-control" style="width: 60%">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Thời gian bảo hành</label>
                        <div class="col-md-6">
                            <select style="width: 60%" name="Baohanh" class="form-control">
                                <option>--Chọn--</option>
                                <option>12 tháng</option>
                                <option>24 tháng</option>
                                <option>36 tháng</option>
                                <option>48 tháng</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-3"></div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Thêm Loại Mặt Hàng</button>
                           <a href="?mod=loaisanpham&act=hienthi" class="btn btn-primary">Hủy bỏ</a>
                        </div>
                    </div>

                </form>
    </div>
<?php
	require_once("Views/Layout/footer.php");
?>