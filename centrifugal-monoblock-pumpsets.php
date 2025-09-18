<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title ">Centrifugal Monoblock Pumpsets</h2>
    </div>
    <div class="breadcrumb ">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a></li>
        <li><span>Centrifugal Monoblock Pumpsets</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/centrifugal-monoblock-pumpsets/centrifugal-monoblock-pumpsets/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/centrifugal-monoblock-pumpsets/centrifugal-monoblock-pumpsets/*.*");
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
                <h2 class="sec-title ">Centrifugal Monoblock Pumpsets</h2>
                <?php include('product-details-btn-domestic.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Product Detail</li>
                </ul>
              </div>
              <div class="tabs-content">
				<div class="tab active-tab" id="tab-1">
					<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th rowspan="3">MODEL</th>
									<th rowspan="3">MOTOR H.P</th>
									<th rowspan="3">DEL. SIZE</th>
									<th rowspan="3">Voltage Range</th>
									<th colspan="17">DISCHARGE IN LPM</th>
									<th rowspan="3">
										Price<br>
										<i class="fa fa-inr"></i>
									</th>
								</tr>
								<tr>
									<th colspan="17">Head in mtr./Discharge in LPM (ltr.per mintue)</th>
								</tr>
								<tr>
									<th>4</th>
									<th>5</th>
									<th>6</th>
									<th>8</th>
									<th>9</th>
									<th>10</th>
									<th>12</th>
									<th>14</th>
									<th>16</th>
									<th>18</th>
									<th>20</th>
									<th>22</th>
									<th>24</th>
									<th>26</th>
									<th>28</th>
									<th>30</th>
									<th>32</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>11MBC0.5 SP</td>
									<td>0.5</td>
									<td>25x25</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>110</td>
									<td>105</td>
									<td>102</td>
									<td>85</td>
									<td>70</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>4670</td>
								</tr>

								<tr>
									<td>11MBC0.5 TP</td>
									<td>0.5</td>
									<td>25x25</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>110</td>
									<td>105</td>
									<td>102</td>
									<td>85</td>
									<td>70</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>4778</td>
								</tr>
								<tr>
									<td>1515MBC0.5 SP</td>
									<td>0.5</td>
									<td>40x40</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>250</td>
									<td>210</td>
									<td>200</td>
									<td>195</td>
									<td>160</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5070</td>
								</tr>
								<tr>
									<td>1515MBC0.5 TP</td>
									<td>0.5</td>
									<td>40x40</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>250</td>
									<td>210</td>
									<td>200</td>
									<td>195</td>
									<td>160</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5070</td>
								</tr>
								<tr>
									<td>1515MBC0.5 SP LV</td>
									<td>0.5</td>
									<td>40x40</td>
									<td>120 - 210</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>290</td>
									<td>260</td>
									<td>220</td>
									<td>200</td>
									<td>160</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5470</td>
								</tr>
								<tr>
									<td>22MBC0.5 SP</td>
									<td>0.5</td>
									<td>50x50</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>300</td>
									<td>290</td>
									<td>200</td>
									<td>165</td>
									<td>140</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5455</td>
								</tr>
								<tr>
									<td>22MBC0.5 TP</td>
									<td>0.5</td>
									<td>50x50</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>300</td>
									<td>290</td>
									<td>200</td>
									<td>165</td>
									<td>140</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5470</td>
								</tr>
								<tr>
									<td>22MBC0.5 SP LV</td>
									<td>0.5</td>
									<td>50x50</td>
									<td>120 - 210</td>
									<td>&nbsp;</td>
									<td>300</td>
									<td>250</td>
									<td>200</td>
									<td>165</td>
									<td>140</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>5772</td>
								</tr>
								<tr>
									<td>11MBC1.0 SP</td>
									<td>1.0</td>
									<td>25x25</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>150</td>
									<td>149</td>
									<td>140</td>
									<td>135</td>
									<td>95</td>
									<td>80</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7157</td>
								</tr>
								<tr>
									<td>11MBC1.0 TP</td>
									<td>1.0</td>
									<td>25x25</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>150</td>
									<td>149</td>
									<td>140</td>
									<td>135</td>
									<td>95</td>
									<td>80</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7157</td>
								</tr>
								<tr>
									<td>1515MBC1.0 SP</td>
									<td>1.0</td>
									<td>40x40</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>320</td>
									<td>317</td>
									<td>312</td>
									<td>300</td>
									<td>260</td>
									<td>210</td>
									<td>180</td>
									<td>117</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7361</td>
								</tr>
								<tr>
									<td>1515MBC1.0 TP</td>
									<td>1.0</td>
									<td>40x40</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>320</td>
									<td>317</td>
									<td>312</td>
									<td>300</td>
									<td>260</td>
									<td>210</td>
									<td>180</td>
									<td>117</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7361</td>
								</tr>
								<tr>
									<td>22MBC1.0 SP</td>
									<td>1.0</td>
									<td>50x50</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>500</td>
									<td>480</td>
									<td>440</td>
									<td>425</td>
									<td>300</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7340</td>
								</tr>
								<tr>
									<td>22MBC1.0 TP</td>
									<td>1.0</td>
									<td>50x50</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>500</td>
									<td>480</td>
									<td>440</td>
									<td>425</td>
									<td>300</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7361</td>
								</tr>
								<tr>
									<td>22MBC1.0 DP</td>
									<td>1.0</td>
									<td>50x50</td>
									<td>250 - 380</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>500</td>
									<td>480</td>
									<td>440</td>
									<td>425</td>
									<td>300</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7361</td>
								</tr>
								<tr>
									<td>22MBC1.0 SP LV</td>
									<td>1.0</td>
									<td>50x50</td>
									<td>120 - 210</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>500</td>
									<td>480</td>
									<td>440</td>
									<td>425</td>
									<td>300</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>7459</td>
								</tr>
								<tr>
									<td>33MBC1.0 SP (CHAMP)</td>
									<td>1.0</td>
									<td>75x75</td>
									<td>160 - 240</td>
									<td>600</td>
									<td>550</td>
									<td>520</td>
									<td>400</td>
									<td>150</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>8127</td>
								</tr>
								<tr>
									<td>33MBC1.0 SP</td>
									<td>1.0</td>
									<td>75x75</td>
									<td>160 - 240</td>
									<td>750</td>
									<td>700</td>
									<td>650</td>
									<td>480</td>
									<td>350</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>8752</td>
								</tr>
								<tr>
									<td>1515MBC1.5 SP</td>
									<td>1.5</td>
									<td>40x40</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>370</td>
									<td>350</td>
									<td>320</td>
									<td>280</td>
									<td>250</td>
									<td>200</td>
									<td>150</td>
									<td>70</td>
									<td>&nbsp;</td>
									<td>8999</td>
								</tr>
								<tr>
									<td>1515MBC1.5 TP</td>
									<td>1.5</td>
									<td>40x40</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>370</td>
									<td>350</td>
									<td>320</td>
									<td>280</td>
									<td>250</td>
									<td>200</td>
									<td>150</td>
									<td>70</td>
									<td>&nbsp;</td>
									<td>8999</td>
								</tr>
								<tr>
									<td>1515MBC1.5 DP</td>
									<td>1.5</td>
									<td>40x40</td>
									<td>250 - 380</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>370</td>
									<td>350</td>
									<td>320</td>
									<td>280</td>
									<td>250</td>
									<td>200</td>
									<td>150</td>
									<td>70</td>
									<td>&nbsp;</td>
									<td>8999</td>
								</tr>
								<tr>
									<td>22MBC1.5 SP</td>
									<td>1.5</td>
									<td>50x50</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>470</td>
									<td>460</td>
									<td>440</td>
									<td>365</td>
									<td>235</td>
									<td>190</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>8951</td>
								</tr>
								<tr>
									<td>22MBC1.5 SP LV</td>
									<td>1.5</td>
									<td>50x50</td>
									<td>120 - 210</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>470</td>
									<td>460</td>
									<td>440</td>
									<td>365</td>
									<td>235</td>
									<td>190</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9111</td>
								</tr>
								<tr>
									<td>22MBC1.5 TP</td>
									<td>1.5</td>
									<td>50x50</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>470</td>
									<td>460</td>
									<td>440</td>
									<td>365</td>
									<td>235</td>
									<td>190</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>8951</td>
								</tr>
								<tr>
									<td>22MBC1.5 DP</td>
									<td>1.5</td>
									<td>50x50</td>
									<td>250 - 380</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>470</td>
									<td>460</td>
									<td>440</td>
									<td>365</td>
									<td>235</td>
									<td>190</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9048</td>
								</tr>
								<tr>
									<td>252MBC1.5 SP</td>
									<td>1.5</td>
									<td>65x50</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>480</td>
									<td>460</td>
									<td>400</td>
									<td>360</td>
									<td>270</td>
									<td>175</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9048</td>
								</tr>
								<tr>
									<td>252MBC1.5 SP LV</td>
									<td>1.5</td>
									<td>65x50</td>
									<td>120 - 210</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>480</td>
									<td>460</td>
									<td>400</td>
									<td>360</td>
									<td>270</td>
									<td>175</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9210</td>
								</tr>
								<tr>
									<td>252MBC1.5 TP</td>
									<td>1.5</td>
									<td>65x50</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>480</td>
									<td>460</td>
									<td>400</td>
									<td>360</td>
									<td>270</td>
									<td>175</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9048</td>
								</tr>
								<tr>
									<td>252MBC1.5 DP</td>
									<td>1.5</td>
									<td>65x50</td>
									<td>250 - 380</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>480</td>
									<td>460</td>
									<td>400</td>
									<td>360</td>
									<td>270</td>
									<td>175</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9206</td>
								</tr>
								<tr>
									<td>33MBC1.5 SP</td>
									<td>1.5</td>
									<td>75x75</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>900</td>
									<td>750</td>
									<td>425</td>
									<td>167</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9448</td>
								</tr>
								<tr>
									<td>33MBC1.5 TP</td>
									<td>1.5</td>
									<td>75x75</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>900</td>
									<td>750</td>
									<td>425</td>
									<td>167</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9448</td>
								</tr>
								<tr>
									<td>33MBC1.5 DP</td>
									<td>1.5</td>
									<td>75x75</td>
									<td>250 - 380</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>900</td>
									<td>750</td>
									<td>425</td>
									<td>167</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>9448</td>
								</tr>
								<tr>
									<td>1515MBC2.0 SP</td>
									<td>2.0</td>
									<td>40x40</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>390</td>
									<td>370</td>
									<td>350</td>
									<td>320</td>
									<td>280</td>
									<td>250</td>
									<td>200</td>
									<td>70</td>
									<td>10940</td>
								</tr>
								<tr>
									<td>1515MBC2.0 TP</td>
									<td>2.0</td>
									<td>40x40</td>
									<td>350 - 415</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>390</td>
									<td>370</td>
									<td>350</td>
									<td>320</td>
									<td>280</td>
									<td>250</td>
									<td>200</td>
									<td>70</td>
									<td>10940</td>
								</tr>
								<tr>
									<td>22MBC2.0 SP</td>
									<td>2.0</td>
									<td>50x50</td>
									<td>160 - 240</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>520</td>
									<td>500</td>
									<td>450</td>
									<td>440</td>
									<td>415</td>
									<td>385</td>
									<td>340</td>
									<td>300</td>
									<td>217</td>
									<td>197</td>
									<td>142(23 m)</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>10940</td>
								</tr>
								
								
										<tr>
											<td>22MBC2.0 TP</td>
											<td>2.0</td>
											<td>50x50</td>
											<td>350 - 415</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>520</td>
											<td>500</td>
											<td>450</td>
											<td>440</td>
											<td>415</td>
											<td>385</td>
											<td>340</td>
											<td>300</td>
											<td>217</td>
											<td>197</td>
											<td>142(23 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>10940</td>
										</tr>
										<tr>
											<td>22MBC2.0 DP</td>
											<td>2.0</td>
											<td>50x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>520</td>
											<td>500</td>
											<td>450</td>
											<td>440</td>
											<td>415</td>
											<td>385</td>
											<td>340</td>
											<td>300</td>
											<td>217</td>
											<td>197</td>
											<td>142(23 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11242</td>
										</tr>
										<tr>
											<td>22MBC2.0 SP LV</td>
											<td>2.0</td>
											<td>50x50</td>
											<td>120 - 210</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>520</td>
											<td>500</td>
											<td>450</td>
											<td>440</td>
											<td>415</td>
											<td>385</td>
											<td>340</td>
											<td>300</td>
											<td>217</td>
											<td>197</td>
											<td>142(23 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11135</td>
										</tr>
										<tr>
											<td>252MBC2.0 SP</td>
											<td>2.0</td>
											<td>65x50</td>
											<td>160 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>625</td>
											<td>590</td>
											<td>575</td>
											<td>540</td>
											<td>490</td>
											<td>460</td>
											<td>380</td>
											<td>320</td>
											<td>250</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11037</td>
										</tr>
										<tr>
											<td>252MBC2.0 TP</td>
											<td>2.0</td>
											<td>65x50</td>
											<td>350 - 415</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>625</td>
											<td>590</td>
											<td>575</td>
											<td>540</td>
											<td>490</td>
											<td>460</td>
											<td>380</td>
											<td>320</td>
											<td>250</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11037</td>
										</tr>
										<tr>
											<td>252MBC2.0 DP</td>
											<td>2.0</td>
											<td>65x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>625</td>
											<td>590</td>
											<td>575</td>
											<td>540</td>
											<td>490</td>
											<td>460</td>
											<td>380</td>
											<td>320</td>
											<td>250</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11242</td>
										</tr>
										<tr>
											<td>252MBC2.0 SP LV</td>
											<td>2.0</td>
											<td>65x50</td>
											<td>120 - 210</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>625</td>
											<td>590</td>
											<td>575</td>
											<td>540</td>
											<td>490</td>
											<td>460</td>
											<td>380</td>
											<td>320</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11242</td>
										</tr>
										<tr>
											<td>325MBC2.0 SP</td>
											<td>2.0</td>
											<td>75x65</td>
											<td>160 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>700</td>
											<td>620</td>
											<td>590</td>
											<td>550</td>
											<td>497</td>
											<td>400</td>
											<td>260</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11534</td>
										</tr>
										<tr>
											<td>325MBC2.0 TP</td>
											<td>2.0</td>
											<td>75x65</td>
											<td>350 - 415</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>700</td>
											<td>620</td>
											<td>590</td>
											<td>550</td>
											<td>497</td>
											<td>400</td>
											<td>260</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11534</td>
										</tr>
										<tr>
											<td>325MBC2.0 SP LV</td>
											<td>2.0</td>
											<td>75x65</td>
											<td>120 - 210</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>700</td>
											<td>620</td>
											<td>590</td>
											<td>550</td>
											<td>497</td>
											<td>400</td>
											<td>260</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11739</td>
										</tr>
										<tr>
											<td>325MBC2.0 DP</td>
											<td>2.0</td>
											<td>75x65</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>700</td>
											<td>620</td>
											<td>590</td>
											<td>550</td>
											<td>497</td>
											<td>400</td>
											<td>260</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11739</td>
										</tr>
										<tr>
											<td>33MBC2.0 SP</td>
											<td>2.0</td>
											<td>75x75</td>
											<td>160 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>833</td>
											<td>700</td>
											<td>650</td>
											<td>550</td>
											<td>450</td>
											<td>300(13m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11534</td>
										</tr>
										<tr>
											<td>33MBC2.0 TP</td>
											<td>2.0</td>
											<td>75x75</td>
											<td>350 - 415</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>833</td>
											<td>700</td>
											<td>650</td>
											<td>550</td>
											<td>450</td>
											<td>300(13m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11534</td>
										</tr>
										<tr>
											<td>33MBC2.0 SP LV</td>
											<td>2.0</td>
											<td>75x75</td>
											<td>110 - 210</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>833</td>
											<td>700</td>
											<td>650</td>
											<td>550</td>
											<td>390</td>
											<td>300(13m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11739</td>
										</tr>
										<tr>
											<td>33MBC2.0 DP</td>
											<td>2.0</td>
											<td>75x75</td>
											<td>180 - 415</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>833</td>
											<td>700</td>
											<td>650</td>
											<td>550</td>
											<td>390</td>
											<td>300(13m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>11837</td>
										</tr>
										<tr>
											<td>215MBC2.0 SPHD</td>
											<td>2.0</td>
											<td>50x40</td>
											<td>150 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>480</td>
											<td>455</td>
											<td>425</td>
											<td>365</td>
											<td>340</td>
											<td>325</td>
											<td>285</td>
											<td>250</td>
											<td>175</td>
											<td>0</td>
											<td>14710</td>
										</tr>
										<tr>
											<td>22MBC2.0 SPHD</td>
											<td>2.0</td>
											<td>50x50</td>
											<td>160 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>540</td>
											<td>530</td>
											<td>510</td>
											<td>470</td>
											<td>450</td>
											<td>400</td>
											<td>370</td>
											<td>330</td>
											<td>250</td>
											<td>180</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14710</td>
										</tr>
										<tr>
											<td>22MBC3.0 SP</td>
											<td>3.0</td>
											<td>50x50</td>
											<td>170 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>555</td>
											<td>550</td>
											<td>530</td>
											<td>510</td>
											<td>480</td>
											<td>450</td>
											<td>400</td>
											<td>360</td>
											<td>310</td>
											<td>260</td>
											<td>200</td>
											<td>0</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>22MBC3.0 DP</td>
											<td>3.0</td>
											<td>50x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>555</td>
											<td>550</td>
											<td>530</td>
											<td>510</td>
											<td>480</td>
											<td>450</td>
											<td>400</td>
											<td>360</td>
											<td>310</td>
											<td>260</td>
											<td>200</td>
											<td>0</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>22MBC3.0 TP</td>
											<td>3.0</td>
											<td>50x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>555</td>
											<td>550</td>
											<td>530</td>
											<td>510</td>
											<td>480</td>
											<td>450</td>
											<td>400</td>
											<td>360</td>
											<td>310</td>
											<td>260</td>
											<td>200</td>
											<td>0</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>252MBC3.0 SP</td>
											<td>3.0</td>
											<td>65x50</td>
											<td>170 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>640</td>
											<td>590</td>
											<td>550</td>
											<td>490</td>
											<td>440</td>
											<td>330</td>
											<td>0(26 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14519</td>
										</tr>
										<tr>
											<td>252MBC3.0 DP</td>
											<td>3.0</td>
											<td>65x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>640</td>
											<td>590</td>
											<td>550</td>
											<td>490</td>
											<td>440</td>
											<td>330</td>
											<td>0(26 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14519</td>
										</tr>
										<tr>
											<td>252MBC3.0 TP</td>
											<td>3.0</td>
											<td>65x50</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>640</td>
											<td>590</td>
											<td>550</td>
											<td>490</td>
											<td>440</td>
											<td>330</td>
											<td>0(26 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14519</td>
										</tr>
										<tr>
											<td>33MBC3.0 SP</td>
											<td>3.0</td>
											<td>75x75</td>
											<td>170 - 240</td>
											<td>1035</td>
											<td>1010</td>
											<td>960</td>
											<td>900</td>
											<td>840</td>
											<td>700</td>
											<td>550</td>
											<td>400</td>
											<td>0(17 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>33MBC3.0 DP</td>
											<td>3.0</td>
											<td>75x75</td>
											<td>250 - 380</td>
											<td>1035</td>
											<td>1010</td>
											<td>960</td>
											<td>900</td>
											<td>840</td>
											<td>700</td>
											<td>550</td>
											<td>400</td>
											<td>0(17 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>33MBC3.0 TP</td>
											<td>3.0</td>
											<td>75x75</td>
											<td>250 - 380</td>
											<td>1035</td>
											<td>1010</td>
											<td>960</td>
											<td>900</td>
											<td>840</td>
											<td>700</td>
											<td>550</td>
											<td>400</td>
											<td>0(17 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>44MBC3.0 SP</td>
											<td>3.0</td>
											<td>100x100</td>
											<td>170 - 240</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>1080</td>
											<td>1050</td>
											<td>1030</td>
											<td>900</td>
											<td>710</td>
											<td>500</td>
											<td>0(18 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>44MBC3.0 DP</td>
											<td>3.0</td>
											<td>100x100</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>1080</td>
											<td>1050</td>
											<td>1030</td>
											<td>900</td>
											<td>710</td>
											<td>500</td>
											<td>0(18 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
										</tr>
										<tr>
											<td>44MBC3.0 TP</td>
											<td>3.0</td>
											<td>100x100</td>
											<td>250 - 380</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>1080</td>
											<td>1050</td>
											<td>1030</td>
											<td>900</td>
											<td>710</td>
											<td>500</td>
											<td>0(18 m)</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>14900</td>
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