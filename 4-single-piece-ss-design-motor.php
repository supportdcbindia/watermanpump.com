<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">4” Single Piece Ss Design Motor</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
        <li>4” Single Piece Ss Design Motor</li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ss-design-motor/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ss-design-motor/*.*");
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
                <h2 class="sec-title animation__char_come">4” Single Piece Ss Design Motor</h2>
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
								<li>Thrust Bearing : SS420 Segment With Carbon Plate</li>
								<li>Rotor Shaft : SS420 / SS431</li>
								<li>Bush : GM LTB4</li>
								<li>Seal : Nitrile Rubber</li>
								<li>Winding Wire : Polywrap Doublecoated Copper Wire</li>
								<li>Upper & Lower Bearing Housing : SS304 IC</li>
								<li>Rewindable</li>
								<li>Degree of protection : IP 68</li>
								<li>Max water temperature : 35° C</li>
								<li>Nos. of Start per Hour : Max 20 at regular intervals.</li>
								<li>Voltage variation : +6% / -10% at rated voltage.</li>
								<li>Motor cable length : 3.0 meters (3 core)</li>
								<li>Mounting : NEMA standards Vertical</li>
								<li><strong>Power Range :</strong></li>
								<ul>
									<li>Single Phase : 0.37 kW–2.2 kW</li>
									<li>AC Single Phase Operating Voltage Band : 180–240 V , 50HZ</li>
									<li>Three Phase : 0.75 kW–7.5 kW</li>
									<li>AC Three Phase Operating Voltage Band : 300–415 V , 50HZ</li>
								</ul>
								<li>Speed : 2800 RPM</li>							
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
											<th>MODEL</th>
											<th>KW</th>
											<th>HP</th>
											<th>MOTOR LENGTH (mm)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>W4SP0005H5SS</td>
											<td>0.37</td>
											<td>0.5</td>
											<td>328.5</td>
										</tr>
										<tr>
											<td>W4SP0007H5SS</td>
											<td>0.55</td>
											<td>0.75</td>
											<td>368.5</td>
										</tr>
										<tr>
											<td>W4SP0010H5SS</td>
											<td>0.75</td>
											<td>1</td>
											<td>368.5</td>
										</tr>
										<tr>
											<td>W4TP0010H5SS</td>
											<td>0.75</td>
											<td>1</td>
											<td>368.5</td>
										</tr>
										<tr>
											<td>W4SP0015H5SS</td>
											<td>1.1</td>
											<td>1.5</td>
											<td>398.5</td>
										</tr>
										<tr>
											<td>W4TP0015H5SS</td>
											<td>1.1</td>
											<td>1.5</td>
											<td>398.5</td>
										</tr>
										<tr>
											<td>W4SP0020H5SS</td>
											<td>1.5</td>
											<td>2</td>
											<td>458.5</td>
										</tr>
										<tr>
											<td>W4TP0020H5SS</td>
											<td>1.5</td>
											<td>2</td>
											<td>458.5</td>
										</tr>
										<tr>
											<td>W4SP0030H5SS</td>
											<td>2.2</td>
											<td>3</td>
											<td>533.5</td>
										</tr>
										<tr>
											<td>W4TP0030H5SS</td>
											<td>2.2</td>
											<td>3</td>
											<td>533.5</td>
										</tr>
										<tr>
											<td>W4TP0040H5SS</td>
											<td>3</td>
											<td>4</td>
											<td>603.5</td>
										</tr>
										<tr>
											<td>W4TP0050H5SS</td>
											<td>3.7</td>
											<td>5</td>
											<td>603.5</td>
										</tr>
										<tr>
											<td>W4TP0075H5SS</td>
											<td>5.5</td>
											<td>7.5</td>
											<td>733.5</td>
										</tr>
										<tr>
											<td>W4TP0100H5SS</td>
											<td>7.5</td>
											<td>10</td>
											<td>858.5</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>NOTE: W4-4" MOTOR, SP - SINGLE PHASE, TP-THREE PHASE SS-STAINLESS STEEL (FULL SS)</p>
						</div>
					</div>
                </div>
                <div class="tab" id="tab-3">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover producttable">
							<thead>
								<tr>
									<th>SR. NO.</th>
									<th>PART DESCRIPTION</th>
									<th>MOC</th>
									<th>QTY.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>SCREW (M5)</td>
									<td>SS 304</td>
									<td>6</td>
								</tr>
								<tr>
									<td>2</td>
									<td>MOTOR BASE PLATE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>DIAPHRAGM</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>THREADED ROCKER (M18)</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>MOTOR BASE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>6</td>
									<td>THRUST BEARING</td>
									<td>CI FG 260 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>REVOLVING PLATE</td>
									<td>CI + CARBON</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>ROTOR CIRCLIP</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>LOWER HOUSING</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>COUNTER THRUST RING</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>BUSH</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>12</td>
									<td>UPPER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>13</td>
									<td>BALANCING RING</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>14</td>
									<td>COPPER RING</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>STATOR TUBE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>16</td>
									<td>STATOR STAMPING</td>
									<td>CRNO M47/50SDP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>17</td>
									<td>ROTOR STAMPING</td>
									<td>CRNO M47/50SDP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>ROTOR SHAFT</td>
									<td>SS 420 HT/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>LOWER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20</td>
									<td>UPPER HOUSING</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>CABLE GROMET</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>22</td>
									<td>CABLE CLIP</td>
									<td>SS 202</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>STUD (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>24</td>
									<td>SAND GUARD</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>OIL SEAL COVER</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>OIL SEAL</td>
									<td>NITRILE RUBBER</td>
									<td>2</td>
								</tr>
								<tr>
									<td>27</td>
									<td>ALLEN BOLT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>28</td>
									<td>O RING</td>
									<td>NITRILE RUBBER</td>
									<td>7</td>
								</tr>
								<tr>
									<td>29</td>
									<td>STATOR CIRCLIP</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>UPPER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>31</td>
									<td>LOWER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>DRAIN PLUG (5/16")</td>
									<td>BRASS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>33</td>
									<td>NUT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>34</td>
									<td>WASHER (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>35</td>
									<td>STUD (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>36</td>
									<td>REVOLVING PLATE KEY</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>37</td>
									<td>GRUB SCREW (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>38</td>
									<td>COPPER ROD</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>22</td>
								</tr>
								<tr>
									<td>39*</td>
									<td>CABLE</td>
									<td>ELECTRO GRADE COPPER + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>40*</td>
									<td>WINDING WIRE</td>
									<td>POLYWRAP + BOPP</td>
									<td>—</td>
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
									<th>SR. NO.</th>
									<th>PART DESCRIPTION</th>
									<th>MOC</th>
									<th>QTY.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>SCREW (M5)</td>
									<td>SS 304</td>
									<td>6</td>
								</tr>
								<tr>
									<td>2</td>
									<td>MOTOR BASE PLATE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>NUT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>4</td>
									<td>WASHER (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>5</td>
									<td>STUD (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>6</td>
									<td>DIAPHRAGM</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>THREADED ROCKER (M18)</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>MOTOR BASE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>THRUST BEARING</td>
									<td>CI FG 260 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>REVOLVING PLATE</td>
									<td>CI + CARBON</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>COUNTER THRUST RING</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>BUSH</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>13</td>
									<td>LOWER HOUSING</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>STATOR CIRCLIP</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>LOWER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>16</td>
									<td>STATOR TUBE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>17</td>
									<td>UPPER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>18</td>
									<td>ROTOR CIRCLIP</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>REVOLVING PLATE KEY</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20</td>
									<td>ROTOR SHAFT</td>
									<td>SS 420 HT/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>BALANCING RING</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>22</td>
									<td>COPPER RING</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>23</td>
									<td>ROTOR STAMPING</td>
									<td>CRNO M47/50SDP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>UPPER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>25</td>
									<td>UPPER HOUSING</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>CABLE GROMET</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>CABLE CLIP</td>
									<td>SS 202</td>
									<td>1</td>
								</tr>
								<tr>
									<td>28</td>
									<td>ALLEN BOLT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>29</td>
									<td>O'RING</td>
									<td>NITRILE RUBBER</td>
									<td>8</td>
								</tr>
								<tr>
									<td>30</td>
									<td>DRAIN PLUG (5/16")</td>
									<td>BRASS</td>
									<td>2</td>
								</tr>
								<tr>
									<td>31</td>
									<td>OIL SEAL</td>
									<td>NITRILE RUBBER</td>
									<td>2</td>
								</tr>
								<tr>
									<td>32</td>
									<td>OIL SEAL COVER</td>
									<td>SS 410 AS PER IS:1570 (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>33</td>
									<td>SAND GUARD</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>34</td>
									<td>STUD (M8)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>35*</td>
									<td>GRUB SCREW (M5)</td>
									<td>SS 304</td>
									<td>2</td>
								</tr>
								<tr>
									<td>36*</td>
									<td>COPPER ROD</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>22</td>
								</tr>
								<tr>
									<td>37*</td>
									<td>LOWER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>38*</td>
									<td>CABLE</td>
									<td>ELECTRO GRADE COPPER + PVC</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>39*</td>
									<td>WINDING WIRE</td>
									<td>POLYWRAP + BOPP</td>
									<td>—</td>
								</tr>
								<tr>
									<td>40*</td>
									<td>O'RING</td>
									<td>NITRILE RUBBER</td>
									<td>3</td>
								</tr>
								<tr>
									<td>41*</td>
									<td>STATOR STAMPING</td>
									<td>CRNO M47/50SDP660</td>
									<td>1</td>
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