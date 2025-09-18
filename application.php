<?php include('header.php'); ?>
<!-- Blog area start -->
<section class="blog__area-6 blog__animation gallery-new-container">
  <div class="container g-0 pb-110">
    <div class="row pb-90">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 ">Applications</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
          $data = glob("assets/imgs/home-page/industries/*.*");
      ?> 
      <?php 
          foreach($data as $p){
      ?>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
        <div class="gallery-items">
          <a href="<?php echo $p;?>" data-fancybox="gallery">
          <img class="image-box__item" src="<?php echo $p;?>" alt="clients">
          </a>
		  <h2><?php echo  str_replace("-"," ", str_replace(".webp","", str_replace(".png","", str_replace(".jpg","",str_replace("assets/imgs/home-page/industries/","",$p))))); ?></h2>
        </div>
      </div>
      <?php
      }?>
    </div>
  </div>
</section>
<!-- Blog area end -->
<?php include('footer.php'); ?>