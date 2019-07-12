 <div class="row category-product">
    <h3>Most-viewed items in this category</h3>
    <div class="owl-carousel owl-theme owl-loaded custom-owl">
    <div class="owl-stage-outer">
        <div class="owl-stage">
          <?php foreach($sanpham10 as $row): ?>
            <div class="owl-item">
              <img src="Public/IMG/product/<?php echo $row['Anh'] ?>" class="img-responsive"> 
              <a href="?mod=user&act=chitietsanpham&ma=<?php echo $row['Ma'] ?>"><?php echo $row['Loaisanpham']." ".$row['Ten'] ?></a>
              <span>Starting at $<?php echo $row['Giaban'] ?>.00</span>
              <p>
                <?php echo $row['Gioithieu'] ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
  </div><!-----------<div class="category-product">-------->

  <div class="row content-bottom">
    <div class="col-md-6 content-bottom-outside">
      <div class="content-bottom-left">
        <p>Price Match Guarantee. Find a lower price? We'll match it.</p>
        <button class="btn btn-default">Learn More</button>
      </div>
    </div>
    <div class="col-md-6 content-bottom-outside">
      <div class="row content-bottom-right">
        <div class="col-md-6">
          <p> 
            Enjoy no interest when paid in full within 90 days on all Qualifying Business PCs $699 or more when using Dell Business Credit this Small Business Month.^
          </p>
          <h3>Afford yours today</h3>
          <button class="btn btn-default">Learn More</button>
        </div>
        <div class="col-md-6 credit-extra">
          <div class="credit">
            <span>Dell Bussiness Credit</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="footer-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 footer-ads" style="border-right: 1px solid #ccc;">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/calculator.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Fast.Easy.Financing.^</a>
            <p>Update your technology with great financing offers from Dell Business Credit.^</p>
          </div>
        </div>
        <div class="col-md-4 footer-ads" style="border-right: 1px solid #ccc;">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/Star.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Dell Rewards</a>
            <p>Join for free and get up to 6% back in rewards* and free expedited delivery*</p>
          </div>
        </div>
        <div class="col-md-4 footer-ads">
          <p class="img-footer-top">
            <img src="Public/IMG/Product/Shipping-image.png" class="img-responsive">
          </p>
          <div class="ads-content">
            <a href="#">Free Shipping & Easy Returns</a>
            <p>Enjoy free shipping and no-hassle returns. It's shopping made simple.​</p>
          </p>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="col-md-8" style="padding: 0px;">
          <ul class="menu-footer-top">
            <li><a href="">About Dell</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Event</a></li>
            <li><a href="">Partner Program</a></li>
            <li><a href="">Premier</a></li>
            <li><a href="">Dell technologies</a></li>
            <li><a href="">Make a payment</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-3"></div>
      </div>
  </div><!-----<div class="footer-top2">-------->

  <div class="footer-bottom">
      <div class="container">
        <div class="col-md-8" style="padding: 0px;">
          <ul class="menu-footer-bottom">
            <li><a href="">2019 Dell</a></li>
            <li><a href="">Terms of sale</a></li>
            <li><a href="">Privacy Statement</a></li>
            <li><a href="">Adds and emails</a></li>
            <li><a href="">Legal & Regulatory</a></li>
            <li><a href="">Corporate Social Responsibility</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-3"></div>
      </div>
  </div><!-----<div class="footer-top2">-------->
</div><!----------Div wraper---------->
</body>

</html>