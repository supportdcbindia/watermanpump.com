<?php include('header.php'); ?>
<!-- Contact area start -->
<section class="contact__area-6">
  <div class="container g-0 line pt-120 pb-110">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 ">Let’s get in touch</h2>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="contact__text">
          <p></p>
        </div>
      </div>
    </div>
    <div class="row contact__btm">
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
        <div class="contact__info">
          <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
          <ul>
            <li><a href="tel:+916354916823">+91 63549 16823</a></li>
            <li><a href="mailto:export@watermanpump.com">export@watermanpump.com</a></li>
            <li><span>Plot No. 407, Sarkhej-Bavla Highway, Moraiya, Changodar, Ahmedabad Gujarat, India</li>
          </ul>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
        <div class="contact__form my-custom-modal">
          <form class="form-horizontal form3" action="inquiry-action.php" method="post" novalidate="novalidate">
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="name" id="name" type="text" placeholder="Name" class="form-control">

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                      <div class="col-md-12" style="padding:0px;">
                          <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                              <select id="country3" class="selectstyle form-control" name="country">Select
                                  Country</select>
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-5 mybottom" style="display:none">
                              <select name="code" id="state3" class="selectstyle form-control"
                                  style="width: 100%;">
                                  <option value="">+00</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15" minlength="10" class="form-control number21">

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" id="message" placeholder="Requirement"></textarea>

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8 col position-relative">
                          <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">

                        </div>
                        <div class="col-md-4 col">
                          <img src="captcha.php" class="capside">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12 col-sm-3 col-xs-12">
                      <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                    </div>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact area end -->

<!-- Map area start -->
<section class="contatpage-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.1183653626504!2d72.42658001537492!3d22.909004626310857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e90d59d6809cf%3A0x59473f86f189c635!2sWATERMAN%20INDUSTRIES%20PVT.LTD!5e0!3m2!1sen!2sin!4v1592054196483!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!-- Map area end -->
<?php include('footer.php'); ?>