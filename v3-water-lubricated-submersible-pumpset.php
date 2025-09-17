<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come"> V3 Water lubricated</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="domestic-submersible-pumps.php">Domestic Submersible Pumps</a></li>
        <li><a href="submersible-pumpsets.php">Submersible Pumpsets</a></li>
        <li>V3 Water lubricated</li>
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
    <div class="products-details-content">
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/submersible-pumpsets/v3-water-lubricated/*.*");
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
                        <img src="<?php echo $p ?>" alt=" Laser Marking Machine" title=" Laser Marking Machine" class="img-fluid" />
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/submersible-pumpsets/v3-water-lubricated/*.*");
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
                      <img src="<?php echo $p;?>" alt="Laser Marking Machine" title="Laser Marking Machine" />
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
                <h2 class="sec-title animation__char_come">V3 Water lubricated Submersible Pumpset</h2>
                <h5 class="product-list-second-title">Slient Features:</h5>
                <ul class="product-list-check-icon">
                  <li>Multi Stage Centrifugal Pump with Radial flow Impeller.</li>
                  <li>It operates submerged beneath the surface of water.</li>
                  <li>Prime Mover Motors are wet type, water lubricated.</li>
                  <li>It also works on low voltage.</li>
                  <li>Easy installation and easy servicing.</li>
                  <li>Good quality components and parts require less maintenance.</li>
                  <li>All Cl components with CED coating.</li>
                </ul>
                <?php include('product-details-btn.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Motor</li>
                  <li class="tab-btn " data-tab="#tab-2">Pump</li>
                  <li class="tab-btn " data-tab="#tab-4">Renge</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Motor Body - Stainless Steel</li>
                        <li>Stamping - Electrical Grade Silicon steel sheet</li>
                        <li>Trust Bearing - Stainless Steel 304 Tilting pad segment with Carbon plate</li>
                        <li>Bush Bearing - Stainless Steel 410/420</li>
                        <li>Shaft - Stainless Steel 410</li>
                        <li>Rotor - Dynamically Balanced</li>
                        <li>Seal - Nitrile Rubber Oil Seal</li>
                        <li>Winding Wire - Poly wrap double coated copper wire</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab" id="tab-2">
                  <div class="product-discription-ites">
                    <ul class="product-list-check-icon-item">
                      <li>Suction / NRV — Graded cast iron</li>
                      <li>Bowl/Impeller — NoryI—GIass filed with stainless steel neck ring</li>
                      <li>Pump Sleeve — Stainless steel 410 with hard chrome</li>
                    </ul>
                  </div>
                </div>
                <div class="tab" id="tab-4">
                  <div class="product-discription-ites">
                    <ul class="product-list-check-icon-item">
                      <li>3" (80 MM)(180-240V)</li>
                      <li>HP : 0.5 HP TO 1.5 HP 1Ø</li>
                      <li>HEAD : 9 MTR T0 120 MTR</li>
                      <li>CAPACITY : 10LPM TO 95 LPM</li>
                      <li>AC,50Hz, 2800 RPM</li>
                      <li>TOTAL NO. OF MODELS : 25 Nos. (1Ø)</li>
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
</section>
<?php include('footer.php'); ?>