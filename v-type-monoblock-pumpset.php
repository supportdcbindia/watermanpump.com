<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">V type Monoblock Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a></li>
        <li><span>V type Monoblock Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/v-type-monoblock-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/v-type-monoblock-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come">V type Monoblock Pumpset</h2>
				<h5 class="product-list-second-title">Application</h5>
				<ul class="product-list-check-icon-item">
					<li>Small fountains. Civil applications, solarheater systems, Residentialbungalows, Drinking water supply Gardens and Domestic, Small gardens, Water circulationin lawns Waterstorage tanks, Smalifarms.Domestic pressure boosting</li>
				</ul>
				<h5 class="product-list-second-title">Features</h5>
				<ul class="product-list-check-icon-item">
					<li>Corrosion free SS Casing, SS Shaft and brass impeller</li>
					<li>Available in cast iron and aluminium extrusion body.</li>
					<li>Double sealed ball bearing</li>
					<li>Sturdy handle for easy lifting</li>
				</ul>
                <?php include('product-details-btn.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Specifications</li>
                  <li class="tab-btn" data-tab="#tab-2">Material of construction</li>
                  <li class="tab-btn" data-tab="#tab-3">Product Detail</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  	<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<tbody>
								<tr>
									<th>Power Range</th>
									<td>0.37 kW to 0.75 kW (0.5 HP t0 1.O HP)</td>
								</tr>
								<tr>
									<th>Versions</th>
									<td>1 Phase, 180 Volts to 240 volts, 50 Hz, AC supply</td>
								</tr>
								<tr>
									<th>Speed</th>
									<td>2880 rpm</td>
								</tr>
								<tr>
									<th>Direction of Rotation</th>
									<td>Clockwise from the driving end</td>
								</tr>
								<tr>
									<th>Nominal size (Suc x Del)</th>
									<td>25 x 25 mm</td>
								</tr>
								<tr>
									<th>Class of Insulation</th>
									<td>B</td>
								</tr>
								<tr>
									<th>Type of Duty</th>
									<td>S1</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>
				<div class="tab" id="tab-2">
					<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th>Part Name</th>
									<th>Material</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Pump Casting</td>
									<td>Stainless Steel (Non Magnetic)</td>
								</tr>
								<tr>
									<td>Motor Frame</td>
									<td>Aluminium &amp; C.I.</td>
								</tr>
								<tr>
									<td>Impeller</td>
									<td>Brass</td>
								</tr>
								<tr>
									<td>Shaft</td>
									<td>SS 410</td>
								</tr>
								<tr>
									<td>Sealing</td>
									<td>Mechanical Seal (Carbon &amp; Ceramic)</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>
				<div class="tab" id="tab-3">
					<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>

									<th rowspan="2">Model</th>
									<th rowspan="2">Kw / Hp</th>
									<th rowspan="2">Pipe Size <br>In mm</th>
									<th rowspan="2">Body</th>
									<th colspan="14">Head In Meters / Discharge In LPH</th>
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
									<th>36</th>
									<th>39</th>
									<th>40</th>
									<th>42</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<td>V-Star 2 CI</td>
									<td>0.37 / 0.50</td>
									<td>25 * 25</td>
									<td>CI</td>
									<td>2270</td>
									<td>2090</td>
									<td>1910</td>
									<td>1800</td>
									<td>1700</td>
									<td>1550</td>
									<td>1300</td>
									<td>1120</td>
									<td>940</td>
									<td>780</td>
									<td>650</td>
									<td>440</td>
									<td>300</td>
									<td>180</td>
									<td>71</td>
									<td>4298</td>
								</tr>
								<tr>
									<td>V-Star 2 CI</td>
									<td>0.37 / 0.50</td>
									<td>25 * 25</td>
									<td>CI</td>
									<td>2270</td>
									<td>2090</td>
									<td>1910</td>
									<td>1800</td>
									<td>1700</td>
									<td>1550</td>
									<td>1300</td>
									<td>1120</td>
									<td>940</td>
									<td>780</td>
									<td>650</td>
									<td>440</td>
									<td>300</td>
									<td>180</td>
									<td>71</td>
									<td>4225</td>
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