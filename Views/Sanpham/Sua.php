<?php
	require_once("Views/Layout/header.php");
?>
	<div class="right_col" role="main" style="min-height: 1704px;">
    		<h2 class="text-center">Sửa sản phẩm</h2>  
    		<form method="post" action="?mod=sanpham&act=suaact" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Mã sản phẩm</label>
                        <div class="col-md-6">
                            <input type="text" name="Ma" readonly="readonly" class="form-control" style="width: 60%" value="<?php echo $sanpham['Ma']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tên</label>
                        <div class="col-md-6">
                            <input type="text" name="Ten" class="form-control" style="width: 60%" value="<?php echo $sanpham['Ten']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tên loại</label>
                        <div class="col-md-6">
                            <select name="Loaisanpham" class="form-control" style="width: 60%">
                                <option><?php echo $sanpham['Loaisanpham'] ?></option>
                                <?php foreach($loaisanpham as $loaisanpham1){ ?>
                                  <option><?php echo $loaisanpham1['Ten'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Năm sản xuất</label>
                        <div class="col-md-6">
                            <input type="text" name="Namsanxuat" class="form-control" style="width: 60%" value="<?php echo $sanpham['Namsanxuat']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Tồn kho</label>
                        <div class="col-md-6">
                            <input type="text" name="Tonkho" class="form-control" style="width: 60%" value="<?php echo $sanpham['Tonkho'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Bộ xử lý</label>
                        <div class="col-md-6">
                            <input type="text" name="Boxuly" class="form-control" style="width: 60%" value="<?php echo $sanpham['Boxuly']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ram</label>
                        <div class="col-md-6">
                            <input type="text" name="Ram" class="form-control" style="width: 60%" value="<?php echo $sanpham['Ram']; ?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ổ cứng</label>
                        <div class="col-md-6">
                            <input type="text" name="Ocung" class="form-control" style="width: 60%" value="<?php echo $sanpham['Ocung']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Ảnh</label>
                        <div class="col-md-6">
                            <input type="file" name="Anh" class="form-control" style="width: 60%" value="<?php echo $sanpham['Anh']; ?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Giá bán</label>
                        <div class="col-md-6">
                            <input type="text" name="Giaban" class="form-control" style="width: 60%" value="<?php echo $sanpham['Giaban']; ?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Màn hình</label>
                        <div class="col-md-6">
                            <input type="text" name="Manhinh" class="form-control" style="width: 60%" value="<?php echo $sanpham['Manhinh']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;" class="col-md-2 col-md-offset-3">Giới thiệu</label>
                        <div class="col-md-6">
                            <input type="text" name="Gioithieu" class="form-control" style="width: 60%"  value="<?php echo $sanpham['Gioithieu']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-3"></div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Cập nhật</button>
                           <a href="?mod=sanpham&act=hienthi" class="btn btn-primary">Hủy bỏ</a>
                        </div>
                    </div>

                </form>
    </div>
<?php
	require_once("Views/Layout/footer.php");
?>