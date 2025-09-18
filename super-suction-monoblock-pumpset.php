<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">Super suction monoblock Pumpset</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a></li>
        <li><span>Super suction monoblock Pumpset</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/super-suction-monoblock-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/mini-domestic-mono-block-pumps/super-suction-monoblock-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come">Super suction monoblock Pumpset</h2>
				<h5 class="product-list-second-title">Application</h5>
				<ul class="product-list-check-icon">
					<li>Small Fountains</li>
					<li>Civil Applications</li>
					<li>Solar Heater Systems</li>
					<li>Residential Bungalows</li>
					<li>Drinking Water Supply</li>
					<li>Gardens and Domestic</li>
					<li>Small Gardens</li>
					<li>Water Circulation in Lawns</li>
					<li>Water Storage Tanks</li>
					<li>Small Farms </li>
					<li>Domestic Pressure Boosting</li>
				</ul>
                <?php include('product-details-btn.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-4">Features</li>
                  <li class="tab-btn" data-tab="#tab-1">Specifications</li>
                  <li class="tab-btn" data-tab="#tab-2">Material of construction</li>
                  <li class="tab-btn" data-tab="#tab-3">Product Detail</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab" id="tab-1">
                  	<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<tbody>
								<tr>
									<td>Power Range</td>
									<td>0.37 kW to 0.75 kW (0.5 HP t0 1.O HP)</td>
								</tr>
								<tr>
									<td>Versions</td>
									<td>1 Phase, 180 Volts to 240 volts, 50 Hz, AC supply</td>
								</tr>
								<tr>
									<td>Speed</td>
									<td>2880 rpm</td>
								</tr>
								<tr>
									<td>Direction of Rotation</td>
									<td>Clockwise from the driving end</td>
								</tr>
								<tr>
									<td>Nominal size (Suc x Del)</td>
									<td>15 mm x 15mm, 25 x 25 mm</td>
								</tr>
								<tr>
									<td>Class of Insulation</td>
									<td>B</td>
								</tr>
								<tr>
									<td>Type of Duty</td>
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
									<th colspan="11">Head In Meters / Discharge In LPH</th>
									<th rowspan="2">Frame Size</th>
									<th rowspan="2">Price<br><i class="fa fa-inr"></i></th>
									
								</tr>
								<tr>
									<th>3</th>
									<th>8</th>
									<th>14</th>
									<th>17</th>
									<th>20</th>
									<th>22</th>
									<th>24</th>
									<th>27</th>
									<th>30</th>
									<th>33</th>
									<th>36</th>
								</tr>
								
							</thead>
							<tbody>
								<tr>
									
									<td>Power Gold - 2</td>
									<td>0.37 / 0.50</td>
									<td>15 * 15</td>
									<td>ALU</td>
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
									<td>63</td>
									<td>3692</td>
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
								<tr>
									
									<td>Power Gold - 2A</td>
									<td>0.55 / 0.75</td>
									<td>25 * 25</td>
									<td>ALU</td>
									<td>2160</td>
									<td>1740</td>
									<td>1440</td>
									<td>1260</td>
									<td>1080</td>
									<td>960</td>
									<td>840</td>
									<td>660</td>
									<td>480</td>
									<td>120</td>
									<td>-</td>
									<td>63</td>
									<td>4191</td>
								</tr>
								<tr>
									
									<td>Power Gold - 1</td>
									<td>0.75 / 1.0</td>
									<td>25 * 25</td>
									<td>ALU</td>
									<td>2400</td>
									<td>2220</td>
									<td>1980</td>
									<td>1800</td>
									<td>1440</td>
									<td>1380</td>
									<td>1320</td>
									<td>1260</td>
									<td>1020</td>
									<td>720</td>
									<td>300</td>
									<td>63</td>
									<td>4730</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<h6 class="mb-3">Prices And Performance Chart For Single Phase Horizontal "Diamond" Model Openwell Pumpset 'diamond' Model Prices With Single Phase M.c.b. Panel</h6>
					<div class="table-responsive">
						<table class="table  table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									
									<th>Model</th>
									<th>Pipe Size <br>In mm</th>
									<th>Capacitor</th>
									<th colspan="9">Head In Meters / Discharge In LPH</th>
									<th>Price <i class="fa fa-inr"></i><br>Sliver</th>
									<th>Price <i class="fa fa-inr"></i><br>Gold</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2" style="vertical-align: middle;">1DHMS 0.5</td>
									<td rowspan="2" style="vertical-align: middle;">25 * 25</td>
									<td rowspan="2" style="vertical-align: middle;">36 mfd.</td>
									<td>H</td>
									<td>19</td>
									<td>17</td>
									<td>15</td>
									<td>14</td>
									<td>13</td>
									<td>12</td>
									<td>11</td>
									<td>9</td>
									<td rowspan="2" style="vertical-align: middle;">5800</td>
									<td rowspan="2" style="vertical-align: middle;">6469</td>
								</tr>
								<tr>
									<td>Q</td>
									<td>0</td>
									<td>60</td>
									<td>100</td>
									<td>115</td>
									<td>125</td>
									<td>135</td>
									<td>140</td>
									<td>150</td>
								</tr>
								<tr>
									<td rowspan="2" style="vertical-align: middle;">1DHMS 1.0</td>
									<td rowspan="2" style="vertical-align: middle;">25 * 25</td>
									<td rowspan="2" style="vertical-align: middle;">45 mfd.</td>
									<td>H</td>
									<td>27</td>
									<td>26</td>
									<td>25</td>
									<td>21</td>
									<td>20</td>
									<td>18</td>
									<td>15</td>
									<td>14</td>
									<td rowspan="2" style="vertical-align: middle;">7008</td>
									<td rowspan="2" style="vertical-align: middle;">7878</td>
								</tr>
								<tr>
									<td>Q</td>
									<td>0</td>
									<td>25</td>
									<td>70</td>
									<td>95</td>
									<td>125</td>
									<td>145</td>
									<td>155</td>
									<td>180</td>
								</tr>
								
							</tbody>
						</table>
					</div>
                </div>
				<div class="tab  active-tab" id="tab-4">
					<div class="table-responsive">
						<ul class="product-list-check-icon">
							<li>Corrosion free SS Casing, SS Shaft and brass impeller</li>
							<li>Available in cast iron and aluminium extrusion body.</li>
							<li>Double sealed ball bearing</li>
							<li>Sturdy handle for easy lifting</li>
							<li>Fitted with Thermal Overload Protector</li>
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