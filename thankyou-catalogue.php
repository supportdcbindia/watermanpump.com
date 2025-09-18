<?php include('header.php'); ?>
<!-- Blog area start -->
<section class="blog__area-6 blog__animation productpage-details-container">
    <div class="container g-0 pb-110">
        <div class="row pb-90">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="sec-title-wrapper">
                    <h2 class="sec-title-2 ">THANK YOU</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <a  id="lnnk" href='pdf/<?php echo $_GET['varname']; ?>' target="_blank"   download> <h4 class="text-center thnak4">" Thank You For Inquiry We Will Reply You Within 24 Hours"</h4> 
                <div class="message" style="display:block;margin:0px 0 100px;text-align:center"><img src="assets/imgs/download_gif.gif"  class="center-block">Click Here For Your  Requested Catalogue Download</div>
               </a>
            </div>
            
        </div>
    </div>
</section>
<!-- Blog area end -->
<?php include('footer.php'); ?>

  <script> 
 
  var hreff = $("#lnnk").attr('href'); 
  setTimeout(
    function() {
  window.location = hreff;
    }, 5000);

</script>  