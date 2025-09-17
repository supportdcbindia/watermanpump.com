<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">8” Water Lubricated Submersible Motor</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
        <li><span>8” Water Lubricated Submersible Motor</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/8-water-lubricated-submersible/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/8-water-lubricated-submersible/*.*");
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
                <h2 class="sec-title animation__char_come">8” Water Lubricated Submersible Motor</h2>
				<p>Waterman W8 series submersible motors are water Lubricated designed for installation in B ^ n diameter or larger water wells. These motors can be easily rewound and repaired..</p>
				<p>Waterman WB Series Submersible motors are robust rewindable and pre-filled with clean water mixed with anti-corrosion fluid. The stator winding is of poly wrap double coated copper winding wires. It features water lubricated radial and thrust bearings. Dynamically balanced rotor of these Waterman WB Series submersible motors maintain uniform clearance to give better efficiency and increase the life cycle of the water lubricated bush. Specially designed high performance thrust bearings are used to withstand high axial thrust loads.</p>
				<p>Pressure equalizing rubber diaphragm is provided to guard against pressure and volume variations due to thermal expansion of water inside the motor. Motor is sealed by "O" rings, shaft seals and sand guards to prevent leakage of motor lubricant and ingress of well water, sand and fiber particles in to the motor. Mounting dimension of motors are in accordance with "NEMA" standard.</p>
                <?php include('product-details-btn.php'); ?>
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
                  <li class="tab-btn " data-tab="#tab-5">Technical Data Of Motors</li>
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
								 <li>Motor Body : SS304</li>
								<li>Stator Stamping : Electrical Grade Silicon Steel</li>
								<li>Thrust Bearing : SS420 Segment With Carbon Plate</li>
								<li>Rotor Shaft : SS420 / SS431</li>
								<li>Bush : GM LTB4 & Nitrile Rubber</li>
								<li>Seal : Nitrile Rubber</li>
								<li>Winding Wire : Polywrap Doublecoated Copper Wire</li>
								<li>Upper & Lower Bearing Housing , Connecting Piece : CI FG 200 With Ced Coating</li>
								<li>Rewindable</li>
								<li>Degree Of Protection : IP 68</li>
								<li>Max Water Temperature : 35° C</li>
								<li>Nos. Of Start Per Hour : Max 20 At Regular Intervals</li>
								<li>Voltage Variation : +6% / -10% At Rated Voltage</li>
								<li>Motor Cable Length : 3.0 Meters (3 Core)</li>
								<li>Mounting : NEMA Standards Vertical</li>
								<li>Power Range :
									<ul>
										<li>Three Phase : 7.5KW–75KW</li>
										<li>AC Three Phase Operating Voltage Band : 300–415 V , 50HZ</li>
									</ul>
								</li>
								<li>Speed : 2900 RPM</li>				
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
									<li>De-Watering</li>
									<li>Fire Fighting</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover producttable">
									<thead>
										<tr>
											<th>Model</th>
											<th>KW</th>
											<th>HP</th>
											<th>Motor Length (MM)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>W8TP0100H5CITR</td>
											<td>7.5</td>
											<td>10</td>
											<td>919</td>
										</tr>
										<tr>
											<td>W8TP0125H5CITR</td>
											<td>9.3</td>
											<td>12.5</td>
											<td>939</td>
										</tr>
										<tr>
											<td>W8TP0150H5CITR</td>
											<td>11</td>
											<td>15</td>
											<td>969</td>
										</tr>
										<tr>
											<td>W8TP0200H5CITR</td>
											<td>15</td>
											<td>20</td>
											<td>999</td>
										</tr>
										<tr>
											<td>W8TP0250H5CITR</td>
											<td>18.5</td>
											<td>25</td>
											<td>1039</td>
										</tr>
										<tr>
											<td>W8TP0300H5CITR</td>
											<td>22</td>
											<td>30</td>
											<td>1069</td>
										</tr>
										<tr>
											<td>W8TP0350H5CITR</td>
											<td>26</td>
											<td>35</td>
											<td>1139</td>
										</tr>
										<tr>
											<td>W8TP0400H5CITR</td>
											<td>30</td>
											<td>40</td>
											<td>1164</td>
										</tr>
										<tr>
											<td>W8TP0500H5CITR</td>
											<td>37</td>
											<td>50</td>
											<td>1209</td>
										</tr>
										<tr>
											<td>W8TP0600H5CITR</td>
											<td>45</td>
											<td>60</td>
											<td>1379</td>
										</tr>
										<tr>
											<td>W8TP0750H5CITR</td>
											<td>55</td>
											<td>75</td>
											<td>1469</td>
										</tr>
										<tr>
											<td>W8TP0850H5CITR</td>
											<td>63</td>
											<td>85</td>
											<td>1549</td>
										</tr>
										<tr>
											<td>W8TP1000H5CITR</td>
											<td>75</td>
											<td>100</td>
											<td>1624</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>NOTE: W8-8" MOTOR, TP-THREE PHASE, CITR-CAST IRON TURBO TYPE (OPEN WINDING)</p>
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
									<td>Motor Base Plate</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Allen Bolt (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Motor Base</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Drain Plug (3/8")</td>
									<td>Brass</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Rocker</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Thrust Bearing</td>
									<td>CI FG 200 As Per IS:210 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Rotor Circlip</td>
									<td>Spring Steel</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Revolving Plate</td>
									<td>CI FG 200 As Per IS:210 + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Counter Thrust Ring</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Rubber Gasket</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Key For Revolving Plate</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Lower Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Rotor Shaft</td>
									<td>SS 420 HT/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>14</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>17</td>
									<td>End Ring</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Upper Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Bearing Bush</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Bearing Bush</td>
									<td>Nitrile Rubber + MS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Connecting Piece</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>CSK Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Oil Seal Cover</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Sand Guard</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>T-Type Key For Sand Guard</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Stud (M16)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Upper T-Bolt</td>
									<td>MS With CED Coating</td>
									<td>4</td>
								</tr>
								<tr>
									<td>30</td>
									<td>Lower T-Bolt</td>
									<td>MS With CED Coating</td>
									<td>4</td>
								</tr>
								<tr>
									<td>31</td>
									<td>CSK Screw (M5)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Dom Nut (M12)</td>
									<td>SS 304</td>
									<td>8</td>
								</tr>
								<tr>
									<td>33</td>
									<td>O-Ring</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>34</td>
									<td>Washer (M12)</td>
									<td>SS 304</td>
									<td>8</td>
								</tr>
								<tr>
									<td>35</td>
									<td>Copper Rod</td>
									<td>Electro Grade Copper</td>
									<td>24</td>
								</tr>
								<tr>
									<td>36</td>
									<td>Grub Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>37</td>
									<td>Cable</td>
									<td>Electro Grade Copper + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>38</td>
									<td>Winding Wire</td>
									<td>Polywrap</td>
									<td>—</td>
								</tr>
								<tr>
									<td>39</td>
									<td>Wooden Stick</td>
									<td>Chill Wood</td>
									<td>24</td>
								</tr>
								<tr>
									<td>40</td>
									<td>Slot Paper</td>
									<td>EM6</td>
									<td>24</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>NOTE: "ITEMS NOT SHOWN IN DRAWING</p>
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
									<td>Sand Guard</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Dom Nut (M12)</td>
									<td>SS 304</td>
									<td>8</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Oil Seal Cover</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>T-Type Key For Sand Guard</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>CSK Screw (M5)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Drain Plug (3/8")</td>
									<td>Brass</td>
									<td>3</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Upper T-Bolt</td>
									<td>MS With CED Coating</td>
									<td>4</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Connecting Piece</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Stud (M16)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>11</td>
									<td>O-Ring</td>
									<td>Nitrile Rubber</td>
									<td>8</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Upper Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Bearing Bush</td>
									<td>Nitrile Rubber + MS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Bearing Bush</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Rotor Shaft</td>
									<td>SS 420 HT/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>14</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Key For Revolving Plate</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Rotor Circlip</td>
									<td>Spring Steel</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Allen Bolt (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Motor Base Plate</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Washer (M12)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Motor Base</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Rocker</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Thrust Bearing</td>
									<td>CI FG 200 As Per IS:210 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>Revolving Plate</td>
									<td>CI FG 200 As Per IS:210 + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Lower T-Bolt</td>
									<td>MS With CED Coating</td>
									<td>4</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Counter Thrust Ring</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>Lower Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>31</td>
									<td>Rubber Gasket</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>33</td>
									<td>End Ring</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>2</td>
								</tr>
								<tr>
									<td>34</td>
									<td>Copper Rod</td>
									<td>Electro Grade Copper</td>
									<td>28</td>
								</tr>
								<tr>
									<td>35</td>
									<td>Grub Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>36</td>
									<td>Cable</td>
									<td>Electro Grade Copper + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>37</td>
									<td>Winding Wire</td>
									<td>Polywrap</td>
									<td>—</td>
								</tr>
								<tr>
									<td>38</td>
									<td>Wooden Stick</td>
									<td>Chill Wood</td>
									<td>24</td>
								</tr>
								<tr>
									<td>39</td>
									<td>Slot Paper</td>
									<td>EM6</td>
									<td>24</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>NOTE: "ITEMS NOT SHOWN IN DRAWING</p>
                </div>
				<div class="tab" id="tab-5">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover producttable">
							<thead>
								<tr>
									<th rowspan="2">KW</th>
									<th rowspan="2">HP</th>
									<th colspan="2">Ampere Range (A)</th>
									<th colspan="3">Full Load</th>
									<th rowspan="2">Max. Down Thrust Load (N)</th>
									<th rowspan="2">Starting Torque (Nm)</th>
									<th rowspan="2">Torque (Nm)</th>
									<th colspan="3">Cable</th>
								</tr>
								<tr>
									<th>Full Load Max.</th>
									<th>Starting Current</th>
									<th>Efficiency %</th>
									<th>Power Factor</th>
									<th></th>
									<th>S/D</th>
									<th>ATS</th>
									<th>Cable Length (Mtr.)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>7.5</td>
									<td>10</td>
									<td>17.50</td>
									<td>72.00</td>
									<td>78</td>
									<td>0.83</td>
									<td></td>
									<td>36000</td>
									<td>26.00</td>
									<td>24.40</td>
									<td>2.5</td>
									<td>-</td>
									<td>3</td>
								</tr>
								<tr>
									<td>9.3</td>
									<td>12.5</td>
									<td>19.80</td>
									<td>87.00</td>
									<td>79</td>
									<td>0.83</td>
									<td></td>
									<td>36000</td>
									<td>36.00</td>
									<td>29.80</td>
									<td>2.5</td>
									<td>-</td>
									<td>3</td>
								</tr>
								<tr>
									<td>11</td>
									<td>15</td>
									<td>24.00</td>
									<td>108.00</td>
									<td>80</td>
									<td>0.84</td>
									<td></td>
									<td>36000</td>
									<td>40.00</td>
									<td>41.50</td>
									<td>4</td>
									<td>-</td>
									<td>3</td>
								</tr>
								<tr>
									<td>15</td>
									<td>20</td>
									<td>28.00</td>
									<td>126.00</td>
									<td>81</td>
									<td>0.85</td>
									<td></td>
									<td>36000</td>
									<td>61.00</td>
									<td>59.80</td>
									<td>4</td>
									<td>-</td>
									<td>3</td>
								</tr>
								<tr>
									<td>18.5</td>
									<td>25</td>
									<td>40.00</td>
									<td>184.00</td>
									<td>83</td>
									<td>0.85</td>
									<td></td>
									<td>36000</td>
									<td>68.00</td>
									<td>105.00</td>
									<td>6</td>
									<td>-</td>
									<td>3</td>
								</tr>
								<tr>
									<td>22</td>
									<td>30</td>
									<td>48.00</td>
									<td>226.00</td>
									<td>83</td>
									<td>0.86</td>
									<td></td>
									<td>45000</td>
									<td>74.00</td>
									<td>120.00</td>
									<td>10</td>
									<td>6</td>
									<td>3</td>
								</tr>
								<tr>
									<td>26</td>
									<td>35</td>
									<td>58.00</td>
									<td>266.00</td>
									<td>84</td>
									<td>0.85</td>
									<td></td>
									<td>45000</td>
									<td>80.00</td>
									<td>126.00</td>
									<td>10</td>
									<td>6</td>
									<td>3</td>
								</tr>
								<tr>
									<td>30</td>
									<td>40</td>
									<td>58.00</td>
									<td>290.00</td>
									<td>84</td>
									<td>0.85</td>
									<td></td>
									<td>45000</td>
									<td>100.00</td>
									<td>140.00</td>
									<td>10</td>
									<td>16</td>
									<td>3</td>
								</tr>
								<tr>
									<td>37</td>
									<td>50</td>
									<td>72.00</td>
									<td>360.00</td>
									<td>84</td>
									<td>0.86</td>
									<td></td>
									<td>45000</td>
									<td>135.00</td>
									<td>176.00</td>
									<td>16</td>
									<td>25</td>
									<td>3</td>
								</tr>
								<tr>
									<td>45</td>
									<td>60</td>
									<td>85.00</td>
									<td>460.00</td>
									<td>85</td>
									<td>0.86</td>
									<td></td>
									<td>45000</td>
									<td>145.00</td>
									<td>235.00</td>
									<td>25</td>
									<td>35</td>
									<td>3</td>
								</tr>
								<tr>
									<td>55</td>
									<td>75</td>
									<td>102.00</td>
									<td>612.00</td>
									<td>85</td>
									<td>0.87</td>
									<td></td>
									<td>45000</td>
									<td>180.00</td>
									<td>330.00</td>
									<td>35</td>
									<td>50</td>
									<td>3</td>
								</tr>
								<tr>
									<td>63</td>
									<td>85</td>
									<td>115.00</td>
									<td>680.00</td>
									<td>85</td>
									<td>0.86</td>
									<td></td>
									<td>45000</td>
									<td>220.00</td>
									<td>410.00</td>
									<td>35</td>
									<td>50</td>
									<td>3</td>
								</tr>
								<tr>
									<td>75</td>
									<td>100</td>
									<td>125.00</td>
									<td>770.00</td>
									<td>84</td>
									<td>0.86</td>
									<td></td>
									<td>45000</td>
									<td>240.00</td>
									<td>460.00</td>
									<td>25</td>
									<td>35</td>
									<td>3</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>NOTE: "ITEMS NOT SHOWN IN DRAWING</p>
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