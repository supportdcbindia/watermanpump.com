<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">6'' SS Pumps</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps-main.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="open-submersible-monoset.php">Export Submersible Pumps</a></li>
        <li><span> 6'' SS Pumps</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-pumps/6-ss-pumps/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-pumps/6-ss-pumps/*.*");
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
                <h2 class="sec-title animation__char_come"> 6'' SS Pumps</h2>
				<h5 class="product-list-second-title">Construction:</h5>
				<ul class="product-list-check-icon-item">
					<li>Submersible motor & pumps for deep wells of 6” (DN 100 mm).</li>
					<li>Sized for connection to the motor according to NEMA standards</li>
					<li>Delivery casing with built-in non-return valve.</li>
					<li>All standard pumps are completely manufactured out of stainless steel AISI 304 sheet metal.</li>
					<li>Impeller: 
						<ul>
							<li>Mixed Flow impellers</li>
							<li>WSP17, WSP30, WSP46, WSP60</li>
						</ul>
					</li>
					<li>Connection : Screwed pipe connection with BSP thread as standard.</li>
				</ul>
                <?php include('product-details-btn-export-submersible-pumps.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Application</li>
                  <li class="tab-btn" data-tab="#tab-2">Performance range</li>
                  <li class="tab-btn" data-tab="#tab-3">Operating conditions</li>
                  <li class="tab-btn" data-tab="#tab-4">Special construction on request</li>
                  <li class="tab-btn" data-tab="#tab-5">Materials</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Water supply</li>
                        <li>Irrigation</li>
                        <li>Civil</li>
                        <li>Industrial</li>
                        <li>Fire fighting</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-2">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Flow range: Max. 78m</li>
                        <li>Head range: Max. 700m</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-3">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Liquid temperature: 0°C to +45°C</li>
                        <li>Max. sand content into the water:50 g/m<sup>3</sup></li>
                        <li>Max. starts per hour : 20 at regular intervals</li>
                        <li>Direction of rotation : Clockwise as seen from the pump coupling side</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-4">
                  <div class="reviews-box">
                    <div class="product-discription-ites">
                      <ul class="product-list-check-icon-item">
                        <li>Also available in stainless steel AISI 316 material </li>
                        <li>Also available with NPT thread pipe connection.</li>
                      </ul>
                    </div>
                  </div>
                </div>
				<div class="tab" id="tab-5">
                  <div class="table-responsive">
					<table class="table  table-bordered table-hover table-striped table-condensed">
						<thead>
							<tr>

								<th>Pos.</th>
								<th>Component</th>
								<th>Material</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Bowl / Diffuser</td>
								<td>Stainless steel AISI 304</td>
							</tr>

							<tr>
								<td>2</td>
								<td>Impeller</td>
								<td>Stainless steel AISI 304</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Neck Ring </td>
								<td>NBR</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Shaft</td>
								<td>Stainless steel AISI 431</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Couple</td>
								<td>Stainless steel AISI 316</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Delivery casing</td>
								<td>Stainless steel AISI 304</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Suction case</td>
								<td>Stainless steel AISI 304</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Bearing bush</td>
								<td>NBR</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Strainer</td>
								<td>Stainless steel AISI 304</td>
							</tr>


						</tbody>
					</table>
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