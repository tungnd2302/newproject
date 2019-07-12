<?php 
	require_once("Views/User/html/layout-header.php");
  if(isset($_GET['ma'])){
    $loaisanpham = $_GET['ma'];
  }
?>
	<div class="row products-moblie" style="padding: 0px 50px;"> <!---Sản phẩm--->
             <div class="products row">
                  <div class="row">
                  <?php if(isset($sanpham)): ?>
                      <h1>All View <?php echo (isset($loaisanpham))?"$loaisanpham":""; ?> laptops</h1>
                        <?php foreach($sanpham as $row): ?>
                  <div class="col-md-4 img-product">
                    <img src="Public/IMG/sanpham/<?php echo $row['Anh'] ?>" class="img-responsive">
                    <div class="default-laptop">
                      <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>">
                        <?php echo $row['Loaisanpham']." ".$row['Ten'] ?>
                      </a>
                      <span>Starting at <?php echo $row['Giaban'] ?>$</span>
                      <p>
                       <?php echo $row['Gioithieu'] ?>
                     </p>
                    </div>
                  </div>
                <?php endforeach; ?>
                  <?php else: ?>
                    <h2>Cannot found products!!!</h2>
                  <?php endif; ?>
                </div>
                </div>
      </div><!--- <div class="category page">----->

<?php 
	require_once("Views/User/html/layout-footer.php")
?>