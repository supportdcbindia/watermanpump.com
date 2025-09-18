<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">V10 Submersible Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="domestic-submersible-pumps.php">Domestic Submersible Pumps</a></li>
        <li><a href="submersible-pumpsets.php">Submersible Pumpsets</a></li>
        <li><span>V10 Submersible Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/submersible-pumpsets/v10-submersible-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/domestic-submersible-pumps/submersible-pumpsets/v10-submersible-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come">V10 Submersible Pumpset</h2>
                <h5 class="product-list-second-title">Slient Features:</h5>
                <ul class="product-list-check-icon">
                  <li>Multi stage centrifugal pump with radial & mixed flow impeller.</li>
                  <li>It operates submerged beneath the surface of water.</li>
                  <li>Prime mover motors are wet type, water lubricated.</li>
                  <li>Easy installations and easy service.</li>
                  <li>It also works on low voltage.</li>
                  <li>Energy efficient design.</li>
                  <li>Good quality components and parts require less maintenance.</li>
                </ul>
                <?php include('product-details-btn-domestic.php'); ?>
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
                        <li>Motor body - Stainless Steel</li>
                        <li>Components  - Graded cast iron</li>
                        <li>Stamping  - Electrical grade silicon steel sheet</li>
                        <li>Thrust Bearing  - Stainless Steel - 420 Tilting pad segment with carbon plated</li>
                        <li>Bush baring -G.M. LTB-4</li>
                        <li>Shaft - Stainless Steel  - 410 / 420</li>
                        <li>Rotor  - Dynamically balanced</li>
                        <li>Seal - Nitrile rubber oil seal</li>
                        <li>Winding  - Poly wrap double coated copper wire</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab" id="tab-2">
                  <div class="product-discription-ites">
                    <ul class="product-list-check-icon-item">
                      <li>Pump bowl  - Graded cast iron</li>
                      <li>Pump shaft  - Stainless steel  - 410 / 431</li>
                      <li>Bush Bearing/ Neckring - Nitrile Rubber for sand application</li>
                      <li>Impeller  - SS 410</li>
                      <li>Pump Sleeve - SS 410 with hard chrome plating</li>
                    </ul>
                  </div>
                </div>
                <div class="tab" id="tab-4">
                  <div class="product-discription-ites">
                    <ul class="product-list-check-icon-item">
                      <li>10.0 HP TO 100 HP</li>
                      <li>THREE PHASE : 300-415V</li>
                      <li>HEAD : 12 MTR TO 414 MTR</li>
                      <li>CAPACITY : 290 LPM TO 3900 LPM</li>
                      <li>AC, 50 HZ, 2900 RPM</li>
                      <li>TOTAL NO. OF MODELS : 173 Nos.</li>
                      <li>ISI MODELS : 46 Nos.</li>
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