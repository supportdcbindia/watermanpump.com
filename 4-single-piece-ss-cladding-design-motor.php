<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title ">4” Single Piece Ss Cladding Design Motor</h2>
    </div>
    <div class="breadcrumb ">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
        <li>4” Single Piece Ss Cladding Design Motor</li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ss-cladding/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ss-cladding/*.*");
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
                <h2 class="sec-title ">4” Single Piece Ss Cladding Design Motor</h2>
                <?php include('product-details-btn-domestic-export-submersible-motor.php'); ?>
              </div>
            </div>
          </div>
          
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons centred clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">Product Specification</li>
                  <li class="tab-btn " data-tab="#tab-2">Product Application</li>
                  <li class="tab-btn " data-tab="#tab-3">Cross Sectional View</li>
                  <li class="tab-btn " data-tab="#tab-4">Exploaded View</li>
                </ul>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
					<div class="prodct-tab-items-inner-item">
						<h4>Product Specification And Material Of Consutruction:</h4>
					</div>
					<div class="reviews-box">
						<div class="product-discription-ites">
							<ul class="product-list-check-icon-item">
								 <li>Motor Body: SS304</li>
								<li>Stator Stamping: Electrical Grade Silicon Steel</li>
								<li>Thrust Bearing: SS420 Segment With Carbon Plate</li>
								<li>Rotor Shaft: SS420 / SS431</li>
								<li>Bush: GM LTB4</li>
								<li>Seal: Nitrile Rubber</li>
								<li>Winding Wire: Polywrap Double Coated Copper Wire</li>
								<li>Upper & Lower Bearing Housing: CI FG 200 With CED Coating Covered With SS 304 Jacket</li>
								<li>Rewindable</li>
								<li>Degree of Protection: IP 68</li>
								<li>Max Water Temperature: 35° C</li>
								<li>Nos. of Start per Hour: Max 20 at regular intervals</li>
								<li>Voltage Variation: +6% / -10% at rated voltage</li>
								<li>Motor Cable Length: 3.0 meters (3 core)</li>
								<li>Mounting: NEMA Standards Vertical</li>
								<li>Power Range:
									<ul>
									<li>Single Phase: 0.37 kW – 2.2 kW</li>
									<li>AC Single Phase Operating Voltage Band: 180-240 V, 50Hz</li>
									<li>Three Phase: 0.75 kW – 7.5 kW</li>
									<li>AC Three Phase Operating Voltage Band: 300-415 V, 50Hz</li>
									</ul>
								</li>
								<li>Speed: 2800 RPM</li>							
							</ul>
						</div>
					</div>
                </div>
                <div class="tab" id="tab-2">
					<div class="row">
						<div class="col-lg-4">
							<div class="product-discription-ites">
								<ul class="product-list-check-icon-item">
									<li>Residential Purpose</li>
									<li>Irrigation</li>
									<li>Fountains</li>
									<li>Industrial Water Supply</li>
									<li>Pressure Boosting Units</li>
									<li>Gardens & Horticulture</li>
									<li>Drip & Sprinkler Systems</li>
									<li>Mining Industries</li>
									<li>Oil & Gas Industries</li>	
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover producttable">
									<thead>
										<tr>
											<th>Model</th>
											<th>kW</th>
											<th>HP</th>
											<th>Motor Length (mm)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>W4SP0005H5SSCL</td>
											<td>0.37</td>
											<td>0.5</td>
											<td>441.5</td>
										</tr>
										<tr>
											<td>W4SP0007H5SSCL</td>
											<td>0.55</td>
											<td>0.75</td>
											<td>481.5</td>
										</tr>
										<tr>
											<td>W4SP0010H5SSCL</td>
											<td>0.75</td>
											<td>1</td>
											<td>481.5</td>
										</tr>
										<tr>
											<td>W4SP0015H5SSCL</td>
											<td>1.1</td>
											<td>1.5</td>
											<td>511.5</td>
										</tr>
										<tr>
											<td>W4TP0020H5SSCL</td>
											<td>1.5</td>
											<td>2</td>
											<td>571.5</td>
										</tr>
										<tr>
											<td>W4TP0030H5SSCL</td>
											<td>2.2</td>
											<td>3</td>
											<td>646.5</td>
										</tr>
										<tr>
											<td>W4TP0040H5SSCL</td>
											<td>3</td>
											<td>4</td>
											<td>716.5</td>
										</tr>
										<tr>
											<td>W4TP0050H5SSCL</td>
											<td>3.7</td>
											<td>5</td>
											<td>716.5</td>
										</tr>
										<tr>
											<td>W4TP0075H5SSCL</td>
											<td>5.5</td>
											<td>7.5</td>
											<td>846.5</td>
										</tr>
										<tr>
											<td>W4TP0100H5SSCL</td>
											<td>7.5</td>
											<td>10</td>
											<td>971.5</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>NOTE: W4-4" MOTOR, SP-SINGLE PHASE, TP-THREE PHASE, SSCL-STAINLESS STEEL CLADDING</p>
						</div>
					</div>
                </div>
                <div class="tab" id="tab-3">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover producttable">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Part Description</th>
									<th>MOC</th>
									<th>Qty.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Motor Base</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Cover for Motor Base</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Diaphragm</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Jacket for Lower Housing</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Thrust Bearing</td>
									<td>SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Revolving Plate</td>
									<td>CI + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Lower Housing</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Counter Thrust Ring</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Stator Circlip</td>
									<td>Spring Steel</td>
									<td>2</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Lower Flange</td>
									<td>MS with CED Coating</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Lower Collar</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Stator Stamping Stack</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Rotor Stamping Stack</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>8</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>3</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Upper Collar</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Bush</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Upper Housing</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Upper Flange</td>
									<td>MS with CED Coating</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Upper Housing Cover</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Oil Seal Cover</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Stud (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Sand Guard</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Drain Plug (1/4" BSP) with O-Ring</td>
									<td>Brass</td>
									<td>2</td>
								</tr>
								<tr>
									<td>27</td>
									<td>Stud (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Nut (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Washer (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>30</td>
									<td>O'Ring</td>
									<td>Nitrile Rubber</td>
									<td>4</td>
								</tr>
								<tr>
									<td>31</td>
									<td>Rotor Shaft</td>
									<td>SS 420 H/T/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Rotor Circlip</td>
									<td>Spring Steel</td>
									<td>1</td>
								</tr>
								<tr>
									<td>33*</td>
									<td>Revolving Plate Key</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>34*</td>
									<td>Wooden Stick</td>
									<td>Chill Wood</td>
									<td>24</td>
								</tr>
								<tr>
									<td>35*</td>
									<td>Copper Rod</td>
									<td>Electro Grade Copper</td>
									<td>22</td>
								</tr>
								<tr>
									<td>36*</td>
									<td>Allen Bolt (M6)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>37*</td>
									<td>Grub Screw (M5)</td>
									<td>SS 202</td>
									<td>1</td>
								</tr>
								<tr>
									<td>38*</td>
									<td>Motor Cap</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>39*</td>
									<td>Motor Winding Cap</td>
									<td>PVC</td>
									<td>2</td>
								</tr>
								<tr>
									<td>40*</td>
									<td>Cable</td>
									<td>--</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>41*</td>
									<td>Winding Wire</td>
									<td>Copper + Polywrap</td>
									<td>--</td>
								</tr>
								<tr>
									<td>42*</td>
									<td>End Lamination</td>
									<td>MS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>43*</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>44*</td>
									<td>Cable Clip</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>45*</td>
									<td>Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>NOTE: ITEMS NOT SHOWN IN DRAWING</p>
                </div>
				<div class="tab" id="tab-4">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover producttable">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Part Description</th>
									<th>MOC</th>
									<th>Qty.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Screw With Washer (M5)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Motor Base Plate</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Diaphragm</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Nut (M6)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Flat Washer (M6)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>6</td>
									<td>O'Ring</td>
									<td>Nitrile Rubber</td>
									<td>5</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Stud (M6)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Motor Rocker (M10)</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Motor Base</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Thrust Bearing</td>
									<td>SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Revolving Plate</td>
									<td>CI FG 260 + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Counter Thrust Ring</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Rotor Circlip</td>
									<td>Spring Steel EN42-J</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Revolving Plate Key</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Lower Housing</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Bearing Bush</td>
									<td>GM-LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Stator Circlip</td>
									<td>Spring Steel EN42-J</td>
									<td>2</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Lower Flange</td>
									<td>MS with CED Coating</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Stator Collar</td>
									<td>MS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Rotor Shaft</td>
									<td>SS 420 H/T</td>
									<td>1</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>8</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Rotor Stamping</td>
									<td>50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Upper Flange</td>
									<td>MS with CED Coating</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Upper Housing</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Oil Seal Cover</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Sand Guard</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>31</td>
									<td>Cable Clip</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>33</td>
									<td>Drain Plug (5/16" BSW)</td>
									<td>Brass</td>
									<td>3</td>
								</tr>
								<tr>
									<td>34</td>
									<td>Allen Bolt (M6)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>35</td>
									<td>Stud (M8)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>36*</td>
									<td>Copper Rod</td>
									<td>Electro Grade Copper</td>
									<td>14</td>
								</tr>
								<tr>
									<td>37*</td>
									<td>Stator Stamping</td>
									<td>50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>38*</td>
									<td>Winding Cap</td>
									<td>PVC</td>
									<td>2</td>
								</tr>
								<tr>
									<td>39*</td>
									<td>Cable</td>
									<td>--</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>40*</td>
									<td>Coupling Key</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>41*</td>
									<td>Wooden Stick</td>
									<td>Wooden</td>
									<td>18</td>
								</tr>
								<tr>
									<td>42*</td>
									<td>Grub Screw (M5)</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>43*</td>
									<td>Winding Wire</td>
									<td>Copper + Polywrap</td>
									<td>--</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>Note: "Items Not Shown In Drawing</p>
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