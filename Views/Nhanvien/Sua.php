<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Sửa nhân viên</h2>  
    		<form method="post" action="?mod=nhanvien&act=suaact" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mã nhân viên</label>
                        <div class="col-md-6">
                            <input type="text" name="Ma" readonly="readonly" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Ma']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Họ tên</label>
                        <div class="col-md-6">
                            <input type="text" name="Ten" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Ten']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Chức vụ</label>
                        <div class="col-md-6">
                            <select name="Chucvu" class="form-control" style="width: 60%">
                                    <option value="<?php $chucvu['Ma'] ?>">
                                        <?php echo $chucvu['Ten']?>   
                                    </option>
                                    <?php foreach($vitri as $row){ ?>
                                        <option value="<?php echo $row['Ma'] ?>"> 
                                            <?php echo $row['Ten']; ?>
                                        </option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ngày sinh</label>
                        <div class="col-md-6">
                            <input type="date" name="Ngaysinh" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Ngaysinh'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tài khoản</label>
                        <div class="col-md-6">
                            <input type="text" name="Taikhoan" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Taikhoan']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mật khẩu</label>
                        <div class="col-md-6">
                            <input type="password" name="Matkhau" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Matkhau']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Email</label>
                        <div class="col-md-6">
                            <input type="text" name="Email" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Email']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Số điện thoại</label>
                        <div class="col-md-6">
                            <input type="text" name="Sodienthoai" class="form-control" style="width: 60%" value="<?php echo $nhanvien['Sodienthoai']; ?>">
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
                           <button type="submit" class="btn btn-primary">Cập nhật</button>
                           <a href="?mod=nhanvien&act=hienthi" class="btn btn-primary">Hủy bỏ</a>
                        </div>
                    </div>

                </form>
    </div>
<?php
	require_once("Views/Layout/footer.php");
?>