<?php include('header.php'); ?>
<!-- Blog area start -->
<section class="blog__area-6 blog__animation clients-new-container">
  <div class="container g-0 pb-110">
    <div class="row pb-90">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">Our Clients</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
          $data = glob("assets/imgs/home-page/clients/*.*");
      ?> 
      <?php 
          foreach($data as $p){
      ?>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
        <div class="clients-items">
          <img class="image-box__item" src="<?php echo $p;?>" alt="clients">
        </div>
      </div>
      <?php
      }?>
    </div>
  </div>
</section>
<!-- Blog area end -->
<?php include('footer.php'); ?>