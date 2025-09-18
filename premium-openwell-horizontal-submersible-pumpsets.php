<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title ">Premium openwell horizontal submersible pumpsets</h2>
    </div>
    <div class="breadcrumb ">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="domestic-submersible-pumps.php">Domestic Submersible Pumps</a></li>
        <li><a href="open-submersible-monoset.php">Openwell Submersible Monoset</a></li>
        <li><span> Premium openwell horizontal submersible pumpsets</span></li>
      </ul>
    </div>
  </div>
</section>
<!-- Page Title Ends -->

<!-- Product Slider & Content Start -->
<section class="shop-details">
  <div class="shape">
    <div class="secondary" data-speed="0.9"></div>
    <div class="primary"></div>
  </div>
  <div class="container-fluid big-pad">
    <div class="products-details-content ">
      <div class="row">
        <div class="col-lg-3">
          <?php include('product-list-sidebar.php'); ?>
        </div>
        <div class="col-lg-9 product-content-right-items">
          <div class="row">
            <div class="col-lg-6">
              <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-outer">
                  <div class="carousel-inner image-box">
                    <?php
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/openwell-submersible-monoset/premium-openwell-horizontal/*.*");
                    ?> 
                    <?php 
                        $i = 0;
                        $active = "";
                        foreach($data as $p){
                          if($i == 0){
                              $active = "active";
                          }else{
                            $active = "";
                          }
                          $i++;
                    ?>
                    <div class="carousel-item  <?=$active;?>" id="my1">
                        <img src="<?php echo $p ?>" alt=" waterman pump" title=" waterman pump" class="img-fluid" />
                    </div>
                    <?php 
                    }?>
                    <a class="left carousel-control" href="#carousel-custom" data-bs-slide="prev"> <span
                        class="fa fa-arrow-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-custom" data-bs-slide="next"> <span
                        class="fa fa-arrow-right"></span>
                    </a>
                  </div>
                  <ol class="carousel-indicators meartlab">
                    <?php
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/openwell-submersible-monoset/premium-openwell-horizontal/*.*");
                    ?> 
                    <?php 
                    $i = 0;
                        $active = "";
                        foreach($data as $p){
                          if($i == 0){
                              $active = "active";
                          }else{
                            $active = "";
                          }
                          
                    ?>
                    <li data-bs-target="#carousel-custom" data-bs-slide-to="<?=($i);?>" class="<?=$active;?>">
                      <img src="<?php echo $p;?>" alt="waterman pump" title="waterman pump" />
                    </li>
                    <?php
                    $i++;
                    }?>
                  </ol>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sec-title-wrapper">
                <h2 class="sec-title "> Premium openwell horizontal submersible pumpsets</h2>
                <?php include('product-details-btn-domestic.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Features:</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Long life due to sturdy construction.</li>
						<li>Water lubricated thrust bearings- dynamically balanced all rotating parts.</li>
						<li>Motor design to withstand wide voltage fluctuation.</li>
						<li>CRNO stamping for high efficiency of the motor.</li>
						<li>Non-overloading power characteristic for safety of motor.</li>
						<li>Replaceable wearing parts.</li>
						<li>Highly durable water cooled rewindable motor.</li>
						<li>Noiseless operation.</li>
						<li>Maintenance free LTB4 bushes</li>
						<li>All casting and stamping parts CED coated for rust preventive.</li>
						<li>Trust bearing is carbon & SS for less friction loss and high efficiency.</li>
						<li>Reliable for continues operation.</li>
						<li>More water capacity in motor for better cooling and long life.</li>
						<li>Mechanical seals for more safety of Motor.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>