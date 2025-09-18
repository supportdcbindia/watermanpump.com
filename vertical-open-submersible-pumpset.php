<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come"> Vertical open Submersible Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="domestic-submersible-pumps.php">Domestic Submersible Pumps</a></li>
        <li><a href="open-submersible-monoset.php">Openwell Submersible Monoset</a></li>
        <li><span> Vertical open Submersible Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/openwell-submersible-monoset/vertical-open-submersible-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/openwell-submersible-monoset/vertical-open-submersible-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come"> Vertical open Submersible Pumpset</h2>
                <?php include('product-details-btn-domestic.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Features:</li>
                  <li class="tab-btn " data-tab="#tab-2">Material Specification:</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Submerged in water permantatly so no need of separate cabin</li>
                        <li>Compact design suitable for minimum water level</li>
                        <li>It also works on low voltage</li>
                        <li>Noiseless and vibration free operation</li>
                        <li>Installation without foot valve</li>
                        <li>Easy installation and servicing</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab" id="tab-2">
                  <div class="product-discription-ites">
					<div class="row">
						<div class="col-lg-6">
							<ul class="product-list-check-icon-item">
								<li>Motor body - Graded cast iron</li>
								<li>Stamping - Electrical grade silicon steel sheet</li>
								<li>Shaft-Stainless Steel 410</li>
								<li>Thrust Bearing - Stainless Steel 304 tilting pad segment with carbon plate</li>
								<li>Seal- Nitrile Rubber Oil Seal</li>
								<li>Impeller/Rotor - Dynamically balanced</li>
								<li>Winding wire - Poly Wrap Double Coated Copper Wire</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="product-list-check-icon-item">
								<li>RANGE 3 PHASE(300-415V)</li>
								<li>HP: 3.0 HP TO 20.0 HP</li>
								<li>HEAD: 8 MTR TO 120 MTR</li>
								<li>CAPACITY: 100 LPM TO 960 LPM</li>
								<li>AC,50 HZ. 2900 RPM</li>
								<li>TOTAL NO. OF MODELS: 38 Nos.</li>
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
  </div>
</section>
<?php include('footer.php'); ?>