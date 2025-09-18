<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">Centrifugal Shallow well Monoblock Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a></li>
        <li><span>Centrifugal Shallow well Monoblock Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/centrifugal-shallow-well-monoblock/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/centrifugal-shallow-well-monoblock/*.*");
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
                <h2 class="sec-title animation__char_come">Centrifugal Shallow well Monoblock Pumpset</h2>
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
									<th rowspan="2">SR No.</th>
									<th rowspan="2">Model</th>
									<th rowspan="2">Kw / Hp</th>
									<th rowspan="2">Pipe Size <br>In mm</th>
									<th rowspan="2">Body</th>
									<th colspan="10">Head In Meters / Discharge In LPH</th>
									<th rowspan="2">Frame Size</th>
									<th rowspan="2">Price<br><i class="fa fa-inr"></i></th>

								</tr>
								<tr>
									<th>6</th>
									<th>9</th>
									<th>12</th>
									<th>15</th>
									<th>18</th>
									<th>21</th>
									<th>24</th>
									<th>27</th>
									<th>30</th>
									<th>33</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>WSW 0.5</td>
									<td>0.37 / 0.50</td>
									<td>25 * 25</td>
									<td>ALU</td>
									<td>3000</td>
									<td>2950</td>
									<td>2900</td>
									<td>2800</td>
									<td>2750</td>
									<td>2500</td>
									<td>1900</td>
									<td>1100</td>
									<td>-</td>
									<td>-</td>
									<td>71</td>
									<td>5762</td>
								</tr>
								<tr>

									<td>Power Gold - 2 CI</td>
									<td>0.37 / 0.50</td>
									<td>15 * 15</td>
									<td>CI</td>
									<td>1800</td>
									<td>1440</td>
									<td>1140</td>
									<td>1020</td>
									<td>840</td>
									<td>660</td>
									<td>480</td>
									<td>300</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>71</td>
									<td>3941</td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="table-responsive mt-3">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>

									<th rowspan="2">Model</th>
									<th rowspan="2">Kw / Hp</th>
									<th rowspan="2">Pipe Size <br>In mm</th>
									<th rowspan="2">Body</th>
									<th colspan="9">Head In Meters / Discharge In LPH</th>
									<th rowspan="2">Price<br><i class="fa fa-inr"></i></th>
								</tr>
								<tr>
									<th>6</th>
									<th>9</th>
									<th>12</th>
									<th>15</th>
									<th>18</th>
									<th>21</th>
									<th>24</th>
									<th>27</th>
									<th>30</th>
								</tr>

							</thead>
							<tbody>
								<tr>


									<td>WJC 1.0 (Regular Type)</td>
									<td>0.75 / 1.0</td>
									<td>32 * 25</td>
									<td>ALU</td>
									<td>1800</td>
									<td>1700</td>
									<td>1630</td>
									<td>1510</td>
									<td>1480</td>
									<td>1390</td>
									<td>1350</td>
									<td>810</td>
									<td>780</td>
									<td>10510</td>
								</tr>
								<tr>

									<td>WJC 1.0 (Packet Type)</td>
									<td>0.75 / 1.0</td>
									<td>32 * 25</td>
									<td>ALU</td>
									<td>1800</td>
									<td>1700</td>
									<td>1630</td>
									<td>1510</td>
									<td>1480</td>
									<td>1390</td>
									<td>1350</td>
									<td>810</td>
									<td>780</td>
									<td>11600</td>
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