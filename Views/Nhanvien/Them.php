<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Thêm nhân viên</h2>  
    		<form method="post" action="?mod=nhanvien&act=themact" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mã nhân viên</label>
                        <div class="col-md-6">
                            <input type="text" name="Ma" readonly="readonly" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Họ tên</label>
                        <div class="col-md-6">
                            <input type="text" name="Ten" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Chức vụ</label>
                        <div class="col-md-6">
                            <select type="text" name="Chucvu" class="form-control" style="width: 60%">
                                    <option>--Chọn--</option>
                                    <?php foreach ($chucvu as $rowchucvu) {?>
                                       <option value="<?php echo $rowchucvu['Ma'] ?>">
                                            <?php echo $rowchucvu['Ten'] ?>    
                                       </option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ngày sinh</label>
                        <div class="col-md-6">
                            <input type="date" name="Ngaysinh" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tài khoản</label>
                        <div class="col-md-6">
                            <input type="text" name="Taikhoan" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" name="Matkhau" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Email</label>
                        <div class="col-md-6">
                            <input type="text" name="Email" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Số điện thoại</label>
                        <div class="col-md-6">
                            <input type="text" name="Sodienthoai" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ảnh</label>
                        <div class="col-md-6">
                            <input type="file" name="Anh" class="form-control" style="width: 60%">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-3"></div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Thêm mới</button>
                           <a href="?mod=nhanvien&act=hienthi" class="btn btn-primary">Hủy bỏ</a>
                        </div>
                    </div>

                </form>
    </div>
<?php
	require_once("Views/Layout/footer.php");
?>