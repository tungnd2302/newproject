<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Thêm Chức Vụ</h2>  
            <form method="post" action="?mod=chucvu&act=themact" class="form-horizontal" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mã Chức vụ</label>
                        <div class="col-md-6">
                            <input type="text" name="Ma" readonly="readonly" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tên Chức Vụ</label>
                        <div class="col-md-6">
                            <input type="text" name="Ten" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-3"></div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Thêm chức vụ</button>
                           <a href="?mod=chucvu&act=hienthi" class="btn btn-primary">Hủy bỏ</a>
                        </div>
                    </div>

                </form>
    </div>
<?php
	require_once("Views/Layout/footer.php");
?>