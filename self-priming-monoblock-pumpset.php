<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">Self Priming Monoblock Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a></li>
        <li><span>Self Priming Monoblock Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/self-priming-monoblock-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/self-priming-monoblock-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come">Self Priming Monoblock Pumpset</h2>
                <?php include('product-details-btn.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Specifications:</li>
                  <li class="tab-btn" data-tab="#tab-2">Features:</li>
                  <li class="tab-btn" data-tab="#tab-3">Applications:</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Power Range: 0.37 kW to 0.75 kW (0.5 HPtol.0 HP)</li>
                        <li>Versions: 1 Phase, 180 Volts to 240 Volts, 50 Hz. AC Supply</li>
                        <li>Speed: 2880rpm</li>
                        <li>Direction of Rotation: Clockwise from the driving end</li>
                        <li>Nominal size (Suex Del): 25 x 25 mm</li>
                        <li>Class of Insulation: B</li>
						<li>Type ot Duty: S1</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-2">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Corrosion free SS Casing, SS Shaft and brass impeller</li>
                        <li>Availablein castiron and aluminium extrusion body.</li>
                        <li>Double sealed ball bearing</li>
                        <li>Sturdy handle for easy lifting</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-3">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Small fountains, Civil applications, solar heater systems, Residential bungalows, Drinking water supply, Gardens and Domestic, Small gardens, Water circulation in lawns, Water storage tanks, Small farms, Domestic pressure boosting.</li>
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