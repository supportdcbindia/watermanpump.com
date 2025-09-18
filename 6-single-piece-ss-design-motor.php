<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">6” Single Piece Ss Design Motor</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
        <li><span>6” Single Piece Ss Design Motor</span></li>
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
                      $data = glob("assets/imgs/inner-pages/products/domestic-submersible-pumps/details/submersible-pumpsets/v3-water-lubricated-submersible-pumpset/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/domestic-submersible-pumps/details/submersible-pumpsets/v3-water-lubricated-submersible-pumpset/*.*");
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
                <h2 class="sec-title animation__char_come">6” Single Piece Ss Design Motor</h2>
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
								<li>Thrust Bearing : SS420 Segment with Carbon Plate</li>
								<li>Rotor Shaft : SS420 / SS431</li>
								<li>Bush : Sintered Impregnated Carbon</li>
								<li>Seal : Nitrile Rubber + Carbon + Ceramic + SS 304</li>
								<li>Winding Wire : Polywrap Doublecoated Copper Wire</li>
								<li>Upper Housing Cover & Motor Base : SS304 IC</li>
								<li>Rewindable</li>
								<li>Degree of Protection : IP 68</li>
								<li>Max Water Temperature : 35° C</li>
								<li>Nos. of Start per Hour : Max 20 at regular intervals</li>
								<li>Voltage Variation : +6% / -10% at rated voltage</li>
								<li>Motor Cable Length : 3.0 meters (3 core)</li>
								<li>Mounting : NEMA Standards Vertical</li>
								<li><strong>Power Range :</strong></li>
								<ul>
									<li>Three Phase : 2.2 kW – 37 kW</li>
									<li>AC Three Phase Operating Voltage Band : 300 – 415 V , 50Hz</li>
								</ul>
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
									<li>De-watering</li>
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
											<th>Motor Length (mm)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>W6TP0030H5SS</td>
											<td>2.2</td>
											<td>3</td>
											<td>620.9</td>
										</tr>
										<tr>
											<td>W6TP0040H5SS</td>
											<td>2.9</td>
											<td>4</td>
											<td>640.9</td>
										</tr>
										<tr>
											<td>W6TP0050H5SS</td>
											<td>3.7</td>
											<td>5</td>
											<td>665.9</td>
										</tr>
										<tr>
											<td>W6TP0060H5SS</td>
											<td>4.4</td>
											<td>6</td>
											<td>700.9</td>
										</tr>
										<tr>
											<td>W6TP0075H5SS</td>
											<td>5.5</td>
											<td>7.5</td>
											<td>750.9</td>
										</tr>
										<tr>
											<td>W6TP0100H5SS</td>
											<td>7.5</td>
											<td>10</td>
											<td>765.9</td>
										</tr>
										<tr>
											<td>W6TP0125H5SS</td>
											<td>9.3</td>
											<td>12.5</td>
											<td>790.9</td>
										</tr>
										<tr>
											<td>W6TP0150H5SS</td>
											<td>11</td>
											<td>15</td>
											<td>840.9</td>
										</tr>
										<tr>
											<td>W6TP0175H5SS</td>
											<td>13</td>
											<td>17.5</td>
											<td>880.9</td>
										</tr>
										<tr>
											<td>W6TP0200H5SS</td>
											<td>15</td>
											<td>20</td>
											<td>970.9</td>
										</tr>
										<tr>
											<td>W6TP0250H5SS</td>
											<td>18.5</td>
											<td>25</td>
											<td>1040.9</td>
										</tr>
										<tr>
											<td>W6TP0300H5SS</td>
											<td>22</td>
											<td>30</td>
											<td>1120.9</td>
										</tr>
										<tr>
											<td>W6TP0350H5SS</td>
											<td>26</td>
											<td>35</td>
											<td>1170.9</td>
										</tr>
										<tr>
											<td>W6TP0400H5SS</td>
											<td>30</td>
											<td>40</td>
											<td>1195.9</td>
										</tr>
										<tr>
											<td>W6TP0500H5SS</td>
											<td>37</td>
											<td>50</td>
											<td>1315.9</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>NOTE: W6-6" MOTOR, TP-THREE PHASE, SS-STAINLESS STEEL (FULL SS)</p>
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
									<td>SCK Screw (M5)</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>4</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Motor Base Plate</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
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
									<td>Diaphragm Spring</td>
									<td>SS 202</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Diaphragm Spring Cap</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Threaded Rocker (16MM)</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Thrust Bearing</td>
									<td>CI FG 260 As Per IS:210 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Revolving Plate</td>
									<td>CI FG 260 As Per IS:210 + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>End Ring</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Stator Circlip</td>
									<td>Spring Steel EN-42J</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Lower Flange</td>
									<td>MS With CED Coating</td>
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
									<td>Carbon Bush</td>
									<td>Sintered Impregnated Carbon</td>
									<td>4</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Winding Cap</td>
									<td>PVC</td>
									<td>2</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Stator Stamping With End Lamination</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Rotor Stamping</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>Rotor Shaft</td>
									<td>
										SS 420 HT Up To 450SL<br />
										SS 431 Above 450SL
									</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>8</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Upper Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Upper Flange</td>
									<td>MS With Zinc Plated</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Mechanical Seal</td>
									<td>Carbon + Ceramic</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Cable</td>
									<td>Electrograde Copper + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Cable Clip</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>Upper Cover</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Stud (M12)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>Sand Guard Cover</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>31</td>
									<td>Sand Guard</td>
									<td>Nitrile Rubber + MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Allen Bolt (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>33</td>
									<td>Screw (M5)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>34</td>
									<td>Cable Clip</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>2</td>
								</tr>
								<tr>
									<td>35</td>
									<td>¼” BSP Drain Plug With O'ring</td>
									<td>Brass + Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>36</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>30</td>
								</tr>
								<tr>
									<td>37</td>
									<td>Stud (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>38</td>
									<td>Counter Thrust Ring</td>
									<td>Carbon Filled Teflon (CFT)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>39</td>
									<td>Rotor Circlip</td>
									<td>Spring Steel EN42-J</td>
									<td>1</td>
								</tr>
								<tr>
									<td>40</td>
									<td>Motor Base</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>41</td>
									<td>Washer (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>42</td>
									<td>Nut (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>43</td>
									<td>Gasket</td>
									<td>Polytetrafluoroethylene (PTFE)</td>
									<td>2</td>
								</tr>
								<tr>
									<td>44</td>
									<td>Bolt (CSK) (M5)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>45</td>
									<td>Grub Screw (M5)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>46</td>
									<td>O'ring</td>
									<td>Nitrile Rubber</td>
									<td>4</td>
								</tr>
								<tr>
									<td>47</td>
									<td>Revolving Plate Key</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>48</td>
									<td>Wooden Stick</td>
									<td>Chill Wood</td>
									<td>24</td>
								</tr>
								<tr>
									<td>49</td>
									<td>Slot Paper</td>
									<td>EM6</td>
									<td>24</td>
								</tr>
							</tbody>
						</table>
					</div>
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
									<td>Sck Screw (M5)</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>4</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Motor Base Plate</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Diaphragm Spring</td>
									<td>SS 202</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Diaphragm Spring Cap</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Dome Nut (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Washer (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>7</td>
									<td>O'Ring</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Diaphragm</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Stud (M10)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Threaded Rocker (M22)</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Motor Base</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>Gasket</td>
									<td>Polytetrafluoroethylene (PTFE)</td>
									<td>2</td>
								</tr>
								<tr>
									<td>13</td>
									<td>Thrust Bearing</td>
									<td>CI FG 260 As Per IS:210 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>Revolving Plate</td>
									<td>CI FG 260 As Per IS:210 + Carbon</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>Bolt (CSK) (M5)</td>
									<td>SS 304</td>
									<td>3</td>
								</tr>
								<tr>
									<td>16</td>
									<td>Counter Thrust Ring</td>
									<td>Carbon Filled Teflon (CFT)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>17</td>
									<td>Lower Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>O'Ring</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>19</td>
									<td>Carbon Bush</td>
									<td>Sintered Impregnated Carbon</td>
									<td>4</td>
								</tr>
								<tr>
									<td>20</td>
									<td>Lower Flange</td>
									<td>MS With Zinc Plated</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>Stator Circlip</td>
									<td>Spring Steel EN-42J</td>
									<td>1</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Winding Cap</td>
									<td>PVC</td>
									<td>2</td>
								</tr>
								<tr>
									<td>23</td>
									<td>Revolving Plate Key</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>Rotor Shaft</td>
									<td>SS 420 HT Up To 450SL, SS 431 Above 450SL</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>Balancing Ring</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>26</td>
									<td>Grub Screw (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>27</td>
									<td>Copper Ring</td>
									<td>Electro Grade Copper</td>
									<td>8</td>
								</tr>
								<tr>
									<td>28</td>
									<td>Rotor Stamping</td>
									<td>CRNO M47/Hybrid 50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>29</td>
									<td>Stator Tube</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>End Ring</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>2</td>
								</tr>
								<tr>
									<td>31</td>
									<td>Upper Flange</td>
									<td>MS With Zinc Plated</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>Upper Housing</td>
									<td>CI FG 200 As Per IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>33</td>
									<td>Mechanical Seal</td>
									<td>Carbon + Ceramic</td>
									<td>1</td>
								</tr>
								<tr>
									<td>34</td>
									<td>Grommet</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>35</td>
									<td>Cable Clip</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>36</td>
									<td>Cable</td>
									<td>Electrograde Copper + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>37</td>
									<td>Allen Bolt (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>38</td>
									<td>Oil Seal</td>
									<td>Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>39</td>
									<td>Sand Guard Cover</td>
									<td>SS 410 As Per IS:1570 Part (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>40</td>
									<td>Sand Guard</td>
									<td>Nitrile Rubber + MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>41</td>
									<td>Stud (M12)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>42</td>
									<td>¼” BSP Drain Plug With O’Ring</td>
									<td>Brass + Nitrile Rubber</td>
									<td>1</td>
								</tr>
								<tr>
									<td>43</td>
									<td>O'Ring</td>
									<td>Nitrile Rubber</td>
									<td>2</td>
								</tr>
								<tr>
									<td>44</td>
									<td>Winding</td>
									<td>Polywrap</td>
									<td>—</td>
								</tr>
								<tr>
									<td>45</td>
									<td>Stator Stamping With End Lamination</td>
									<td>CRNO M47/Hybrid 50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>46</td>
									<td>Laminate</td>
									<td>—</td>
									<td>—</td>
								</tr>
								<tr>
									<td>47</td>
									<td>Cable</td>
									<td>Electrograde Copper + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>48</td>
									<td>Copper Rod</td>
									<td>Electro Grade Copper</td>
									<td>30</td>
								</tr>
								<tr>
									<td>49</td>
									<td>Wooden Stick</td>
									<td>Chill Wood</td>
									<td>24</td>
								</tr>
								<tr>
									<td>50</td>
									<td>Slot Paper</td>
									<td>EM6</td>
									<td>24</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>NOTE: ITEMS NOT SHOWN IN DRAWING</p>
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