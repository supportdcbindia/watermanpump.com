<?php include('header.php'); ?>
<!-- Page Title Start -->
<section class="product-details-title-container">
  <div class="container-fluid big-pad">
    <div class="sec-title-wrapper">
      <h2 class="sec-title animation__char_come">4” Single Piece Ci Design Motor</h2>
    </div>
    <div class="breadcrumb animation__char_come">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-home"></i></a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor / Pumps</a></li>
        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
        <li>4” Single Piece Ci Design Motor</li>
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ci-design-motor/*.*");
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
                      $data = glob("assets/imgs/inner-pages/products/detail-page/export-submersible-motor-pumps/export-submersible-motors/4-single-piece-ci-design-motor/*.*");
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
                <h2 class="sec-title animation__char_come">4” Single Piece Ci Design Motor</h2>
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
								<li>Motor Base : CI FG 200 AS PER IS:210 (Qty: 1)</li>
								<li>Cover for Motor Base : SS 304 (Qty: 1)</li>
								<li>Diaphragm : Nitrile Rubber (Qty: 1)</li>
								<li>Jacket for Lower Housing : SS 304 (Qty: 1)</li>
								<li>Thrust Bearing : SS 420 (Qty: 1)</li>
								<li>Revolving Plate : CI + Carbon (Qty: 1)</li>
								<li>Lower Housing : CI FG 200 AS PER IS:210 (Qty: 1)</li>
								<li>Counter Thrust Ring : PVC (Qty: 1)</li>
								<li>Stator Circlip : Spring Steel (Qty: 2)</li>
								<li>Lower Flange : MS with CED Coating (Qty: 1)</li>
								<li>Lower Collar : MS (Qty: 1)</li>
								<li>Stator Tube : SS 304 (Qty: 1)</li>
								<li>Stator Stamping Stack : CRNO M47/50SP660 (Qty: 1)</li>
								<li>Rotor Stamping Stack : CRNO M47/50SP660 (Qty: 1)</li>
								<li>Copper Ring : Electro Grade Copper (Qty: 8)</li>
								<li>Balancing Ring : CI FG 200 AS PER IS:210 (Qty: 3)</li>
								<li>Upper Collar : MS (Qty: 1)</li>
								<li>Bush : GM LTB-4 (Qty: 4)</li>
								<li>Upper Housing : CI FG 200 AS PER IS:210 (Qty: 1)</li>
								<li>Upper Flange : MS with CED Coating (Qty: 1)</li>
								<li>Oil Seal : Nitrile Rubber (Qty: 2)</li>
								<li>Upper Housing Cover : SS 304 (Qty: 1)</li>
								<li>Oil Seal Cover : SS 410 AS PER IS:1570 (V) (Qty: 1)</li>
								<li>Stud (M8) : SS 304 (Qty: 4)</li>
								<li>Sand Guard : Nitrile Rubber (Qty: 1)</li>
								<li>Drain Plug (1/4" BSP) with O-Ring : Brass (Qty: 2)</li>
								<li>Stud (M6) : SS 304 (Qty: 4)</li>
								<li>Nut (M6) : SS 304 (Qty: 4)</li>
								<li>Washer (M6) : SS 304 (Qty: 4)</li>
								<li>O'Ring : Nitrile Rubber (Qty: 4)</li>
								<li>Rotor Shaft : SS 420 H/T/SS 431 (Qty: 1)</li>
								<li>Rotor Circlip : Spring Steel (Qty: 1)</li>
								<li>Revolving Plate Key : SS 410 AS PER IS:1570 (V) (Qty: 1)</li>
								<li>Wooden Stick : Chill Wood (Qty: 24)</li>
								<li>Copper Rod : Electro Grade Copper (Qty: 22)</li>
								<li>Allen Bolt (M6) : SS 304 (Qty: 3)</li>
								<li>Grub Screw (M5) : SS 202 (Qty: 1)</li>
								<li>Motor Cap : PVC (Qty: 1)</li>
								<li>Motor Winding Cap : PVC (Qty: 2)</li>
								<li>Cable : -- (Qty: 3 Meter)</li>
								<li>Winding Wire : Copper + Polywrap (Qty: --)</li>
								<li>End Lamination : MS (Qty: 2)</li>
								<li>Grommet : Nitrile Rubber (Qty: 1)</li>
								<li>Cable Clip : SS 304 (Qty: 1)</li>
								<li>Screw (M5) : SS 304 (Qty: 2)</li>							
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
									<li>Industrial water supply</li>
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
											<th>SR. NO.</th>
											<th>PART DESCRIPTION</th>
											<th>MOC</th>
											<th>QTY.</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>MOTOR BASE PLATE</td>
											<td>SS 304</td>
											<td>1</td>
										</tr>
										<tr>
											<td>2</td>
											<td>DIAPHRAGM</td>
											<td>NITRILE RUBBER</td>
											<td>1</td>
										</tr>
										<tr>
											<td>3</td>
											<td>DIAPHRAGM SPRING</td>
											<td>SS 304</td>
											<td>1</td>
										</tr>
										<tr>
											<td>4</td>
											<td>DIAPHRAGM SPRING CAP</td>
											<td>PVC</td>
											<td>1</td>
										</tr>
										<tr>
											<td>5</td>
											<td>NUT (M6)</td>
											<td>SS 304</td>
											<td>4</td>
										</tr>
										<tr>
											<td>6</td>
											<td>WASHER (M6)</td>
											<td>SS 304</td>
											<td>4</td>
										</tr>
										<tr>
											<td>7</td>
											<td>O’RING</td>
											<td>NITRILE RUBBER</td>
											<td>1</td>
										</tr>
										<tr>
											<td>8</td>
											<td>STUD (M6)</td>
											<td>SS 304</td>
											<td>4</td>
										</tr>
										<tr>
											<td>9</td>
											<td>ROCKER (M18)</td>
											<td>SS 304</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10</td>
											<td>SCREW (M5)</td>
											<td>SS 304</td>
											<td>6</td>
										</tr>
										<tr>
											<td>11</td>
											<td>DRAIN PLUGE (5/16")</td>
											<td>BRASS</td>
											<td>1</td>
										</tr>
										<tr>
											<td>12</td>
											<td>MOTOR BASE</td>
											<td>CI FG 200 AS PER IS:210</td>
											<td>1</td>
										</tr>
										<tr>
											<td>13</td>
											<td>THRUST BEARING</td>
											<td>SS 420</td>
											<td>1</td>
										</tr>
										<tr>
											<td>14</td>
											<td>ROTOR CIRCLIP</td>
											<td>SPRING STEEL</td>
											<td>1</td>
										</tr>
										<tr>
											<td>15</td>
											<td>REVOLVING PLATE</td>
											<td>CI FG 260 + CARBON</td>
											<td>1</td>
										</tr>
										<tr>
											<td>16</td>
											<td>LOWER HOUSING</td>
											<td>CI FG 200 AS PER IS:210</td>
											<td>1</td>
										</tr>
										<tr>
											<td>17</td>
											<td>COUNTER THRUST RING</td>
											<td>TEFLONE</td>
											<td>1</td>
										</tr>
										<tr>
											<td>18</td>
											<td>STATOR CIRCLIP</td>
											<td>SPRING STEEL</td>
											<td>2</td>
										</tr>
										<tr>
											<td>19</td>
											<td>LOWER FLANGE</td>
											<td>MS WITH CED COATING</td>
											<td>1</td>
										</tr>
										<tr>
											<td>20</td>
											<td>BUSH</td>
											<td>GM LTB-4</td>
											<td>4</td>
										</tr>
										<tr>
											<td>21</td>
											<td>LOWER COLLAR</td>
											<td>MS</td>
											<td>1</td>
										</tr>
										<tr>
											<td>22</td>
											<td>BALANCING RING</td>
											<td>CI FG 200 AS PER IS:210</td>
											<td>2</td>
										</tr>
										<tr>
											<td>23</td>
											<td>END LAMINATION</td>
											<td>MS</td>
											<td>8</td>
										</tr>
										<tr>
											<td>24</td>
											<td>COPPER RING</td>
											<td>ELECTRO GRADE COPPER</td>
											<td>1</td>
										</tr>
										<tr>
											<td>25</td>
											<td>STATOR STAMPING STACK</td>
											<td>CRNO M47/50SP6650</td>
											<td>1</td>
										</tr>
										<tr>
											<td>26</td>
											<td>ROTOR STAMPING STACK</td>
											<td>CRNO M47/50SP6960</td>
											<td>1</td>
										</tr>
										<tr>
											<td>27</td>
											<td>STATOR TUBE</td>
											<td>SS 304</td>
											<td>1</td>
										</tr>
										<tr>
											<td>28</td>
											<td>ROTOR SHAFT</td>
											<td>SS 420 HT/SS 431</td>
											<td>1</td>
										</tr>
										<tr>
											<td>29</td>
											<td>UPPER COLLAR</td>
											<td>MS</td>
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
											<td>UPPER HOUSING</td>
											<td>CI FG 200 AS PER IS:210</td>
											<td>1</td>
										</tr>
										<tr>
											<td>32</td>
											<td>OIL SEAL</td>
											<td>NITRILE RUBBER</td>
											<td>2</td>
										</tr>
										<tr>
											<td>33</td>
											<td>TOP SEAL COVER</td>
											<td>SS 410 AS PER IS:1570 PART (V)</td>
											<td>1</td>
										</tr>
										<tr>
											<td>34</td>
											<td>SAND GUARD</td>
											<td>NITRILE RUBBER</td>
											<td>1</td>
										</tr>
										<tr>
											<td>35</td>
											<td>STUD (M8)</td>
											<td>SS 304</td>
											<td>4</td>
										</tr>
										<tr>
											<td>36</td>
											<td>GROMMET</td>
											<td>NITRILE RUBBER</td>
											<td>1</td>
										</tr>
										<tr>
											<td>37</td>
											<td>CABLE CLIP</td>
											<td>SS 202</td>
											<td>2</td>
										</tr>
										<tr>
											<td>38</td>
											<td>COPPER ROD</td>
											<td>ELECTRO GRADE COPPER</td>
											<td>22</td>
										</tr>
										<tr>
											<td>39</td>
											<td>WOODEN STICK</td>
											<td>CHILL WOOD</td>
											<td>1</td>
										</tr>
										<tr>
											<td>40</td>
											<td>REVOLVING PLATE KEY</td>
											<td>SS 410 AS PER IS:1570 PART (V)</td>
											<td>1</td>
										</tr>
										<tr>
											<td>41</td>
											<td>ALLEN BOLT (M6)</td>
											<td>SS 304</td>
											<td>4</td>
										</tr>
										<tr>
											<td>42</td>
											<td>GRUB SCREW (M5)</td>
											<td>SS 202</td>
											<td>2</td>
										</tr>
										<tr>
											<td>43</td>
											<td>MOTOR KEY CAP</td>
											<td>PVC</td>
											<td>1</td>
										</tr>
										<tr>
											<td>44*</td>
											<td>MOTOR WINDING CAP</td>
											<td>PVC</td>
											<td>1</td>
										</tr>
										<tr>
											<td>45*</td>
											<td>CABLE</td>
											<td>—</td>
											<td>3 Meter</td>
										</tr>
										<tr>
											<td>47</td>
											<td>WINDING WIRE</td>
											<td>COPPER + POLYWRAP</td>
											<td>—</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p>NOTE: W4-4" MOTOR, SP - SINGLE PHASE, TP- THREE PHASE, CI-CAST IRON</p>
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
					<p>NOTE: "ITEMS NOT SHOWN IN DRAWING</p>
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
									<td>NUT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>2</td>
									<td>WASHER (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>3</td>
									<td>O’RING</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>STUD (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>5</td>
									<td>SCREW (M5)</td>
									<td>SS 304</td>
									<td>6</td>
								</tr>
								<tr>
									<td>6</td>
									<td>MOTOR BASE PLATE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>DIAPHRAGM SPRING</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>DIAPHRAGM SPRING CAP</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>DIAPHRAGM</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>10</td>
									<td>MOTOR BASE</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>11</td>
									<td>ROCKER (M18)</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>12</td>
									<td>THRUST BEARING</td>
									<td>CI FG 260 + SS 420</td>
									<td>1</td>
								</tr>
								<tr>
									<td>13</td>
									<td>REVOLVING PLATE</td>
									<td>CI FG 260 + CARBON</td>
									<td>1</td>
								</tr>
								<tr>
									<td>14</td>
									<td>COUNTER THRUST RING</td>
									<td>TEFLONE</td>
									<td>1</td>
								</tr>
								<tr>
									<td>15</td>
									<td>LOWER HOUSING</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>16</td>
									<td>BUSH</td>
									<td>GM LTB-4</td>
									<td>4</td>
								</tr>
								<tr>
									<td>17</td>
									<td>STATOR CIRCLIP</td>
									<td>SPRING STEEL</td>
									<td>2</td>
								</tr>
								<tr>
									<td>18</td>
									<td>LOWER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>19</td>
									<td>ROTOR CIRCLIP</td>
									<td>SPRING STEEL</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20</td>
									<td>REVOLVING PLATE KEY</td>
									<td>SS 410 AS PER IS:1570 PART (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>21</td>
									<td>ROTOR SHAFT</td>
									<td>SS 420 HT/SS 431</td>
									<td>1</td>
								</tr>
								<tr>
									<td>22</td>
									<td>BALANCING RING</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>2</td>
								</tr>
								<tr>
									<td>23</td>
									<td>ROTOR STAMPING STACK</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>24</td>
									<td>COPPER RING</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>8</td>
								</tr>
								<tr>
									<td>25</td>
									<td>LOWER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>26</td>
									<td>STATOR TUBE</td>
									<td>SS 304</td>
									<td>1</td>
								</tr>
								<tr>
									<td>27</td>
									<td>UPPER COLLAR</td>
									<td>MS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>28</td>
									<td>UPPER FLANGE</td>
									<td>MS WITH CED COATING</td>
									<td>1</td>
								</tr>
								<tr>
									<td>29</td>
									<td>UPPER HOUSING</td>
									<td>CI FG 200 AS PER IS:210</td>
									<td>1</td>
								</tr>
								<tr>
									<td>30</td>
									<td>DRAIN PLUGE (5/16")</td>
									<td>BRASS</td>
									<td>1</td>
								</tr>
								<tr>
									<td>31</td>
									<td>GROMMET</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>32</td>
									<td>CABLE CLIP</td>
									<td>SS 202</td>
									<td>4</td>
								</tr>
								<tr>
									<td>33</td>
									<td>STUD (M8)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>34</td>
									<td>OIL SEAL</td>
									<td>NITRILE RUBBER</td>
									<td>2</td>
								</tr>
								<tr>
									<td>35</td>
									<td>TOP SEAL COVER</td>
									<td>SS 410 AS PER IS:1570 PART (V)</td>
									<td>1</td>
								</tr>
								<tr>
									<td>36</td>
									<td>SAND GUARD</td>
									<td>NITRILE RUBBER</td>
									<td>1</td>
								</tr>
								<tr>
									<td>37</td>
									<td>ALLEN BOLT (M6)</td>
									<td>SS 304</td>
									<td>4</td>
								</tr>
								<tr>
									<td>38*</td>
									<td>END LAMINATION</td>
									<td>MS</td>
									<td>8</td>
								</tr>
								<tr>
									<td>39*</td>
									<td>STATOR STAMPING STACK</td>
									<td>CRNO M47/50SP660</td>
									<td>1</td>
								</tr>
								<tr>
									<td>40*</td>
									<td>COPPER ROD</td>
									<td>ELECTRO GRADE COPPER</td>
									<td>22</td>
								</tr>
								<tr>
									<td>41*</td>
									<td>WOODEN STICK</td>
									<td>CHILL WOOD</td>
									<td>1</td>
								</tr>
								<tr>
									<td>42*</td>
									<td>GRUB SCREW (M5)</td>
									<td>SS 202</td>
									<td>2</td>
								</tr>
								<tr>
									<td>43*</td>
									<td>MOTOR KEY CAP</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>44*</td>
									<td>MOTOR WINDING CAP</td>
									<td>PVC</td>
									<td>1</td>
								</tr>
								<tr>
									<td>45*</td>
									<td>CABLE</td>
									<td>---</td>
									<td>3 Meter</td>
								</tr>
								<tr>
									<td>46*</td>
									<td>WINDING WIRE</td>
									<td>COPPER + POLYWRAP</td>
									<td>—</td>
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