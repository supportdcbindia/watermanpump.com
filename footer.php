</main>
<!-- Footer area start -->
<footer class="footer__area-3">
    <div class="footer__top-3">
        <div class="footer__top-wrapper-3">
        <div class="footer__logo-3 pt-120">
            <img src="assets/imgs/home-page/logo/waterman.webp" alt="Site Logo">
            <p>An innovative spirit that guides and the power of technology that enables, Waterman Industries Pvt. Ltd. has been a prominent exporter and manufacturer of water pumps.</p>
        </div>
        <div class="footer__social-3">
            <ul>
            <li><a href="https://www.facebook.com/watermanindustries/" target="_blank">facebook</a></li>
            <li><a href="https://www.youtube.com/channel/UCXZ7h30i7qhHYnroKiIdjrA" target="_blank">youtube</a></li>
            <li><a href="https://in.linkedin.com/company/waterman-industries-private-limited" target="_blank">Linkedin</a></li>
            <li><a href="https://www.instagram.com/watermanpumpindustries" target="_blank">Instagram</a></li>
            </ul>
        </div>
        <div class="footer__contact-3">
            <a class="end click1" href="javascript:;">Let’s talk</a>
        </div>
        </div>
    </div>

    <div class="footer__btm-3">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="footer__copyright-3">
                <p>&copy; Copyright <?php echo date('Y') ?> <a href="index.php">Waterman Industries Pvt. Ltd.</a> Alrights reserved</a></p>
            </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="footer__nav-2">
                <ul class="footer-menu-2 menu-anim">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="videos.php">Video</a></li>
                <li><a href="clients.php">Clients</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
</footer>
<!-- Footer area end -->
</div>
</div>
<!-- All JS files -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/chroma.min.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/vanilla-tilt.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/main.js"></script>


  <script type="text/javascript" src="assets/js/index.js"></script>
  <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/js.js"></script>
  <script type="text/javascript" src="assets/js/form-buzz.js"></script>
<script src="http://dimsemenov.com/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function() {
        $('.popup-youtube').magnificPopup({
            type: 'iframe'
        });
    });
</script>
<script>
    $("[data-shipping]").on("click", function () {
    if ($("[data-shipping]:checked").length > 0) {
      $("#shipping-form").slideDown();
    } else {
      $("#shipping-form").slideUp();
    }
  });
  if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
    });
</script>
<script language="javascript">
            populateCountries("country", "state");
    </script>
    <script language="javascript">
            populateCountries("country1", "state1");
    </script>
     <script language="javascript">
            populateCountries("country2", "state2");
    </script>
    <script language="javascript">
            populateCountries("country3", "state3");
    </script>

</body>
</html>