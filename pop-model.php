<style>
  .fa-2x {
    font-size: 1.5em;
}
</style>
<div class="sticklist">
    <button class="open-close-arrow">
      <span class="open-arrow"><i class="fa fa-chevron-right"></i></span>
      <span class="close-arrow"><i class="fa fa-chevron-left"></i></span>
    </button>
    <ul>
      <li class="none-li inquiery-icon  imgnone">
        <a href="javascript:;" class="click1">
          <span class="icon1"> <i class="fa fa-envelope"></i></span> <span class="btn-text"> Send Inquiry</span>
        </a>
      </li>
      <li class="download-pdf none-li inquiery-icon  imgnone">
        <a data-href="pdf/ci-pumpset-performance-booklet.pdf" href="javascript:;" class="click2">
          <span class="icon"> <i class="fa fa-file-pdf"></i></span> <span class="btn-text">Catalogue</span>
        </a>
      </li>
     <li class="whataspp-icon none-li imgnone">
        <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+916354916823' });" href="https://api.whatsapp.com/send?phone=916354916823&amp;text=Hello team Waterman Industries Pvt. Ltd., I was going through your website and wish to get connected for product discussion" target="_blank">
            <span class="icon1"> <i class="fab fa-whatsapp"></i></span> <span class="btn-text"> Whatsapp</span></a>
    </li>
    </ul>
  </div>
  <div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload">
    <div class="modal-dialog modal-lg">
      <input type="hidden" id="ispopupopen" value="1">
      <div class="modal-content">
        <div class="modal-body stick_popup">
          <h5 class="modal-title">Request A Quote</h5>
          <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
          <div class="row">
            <!-- <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="logo-wrapper">
                <img src="./assets/images/logo.png">
                <button class="btn-modal-gra">
                 
                </button>
              </div>
            </div> -->
            <div class="col-md-12 col-sm-12 col-xs-12">


              <div class="widget footer-widgets tag-widget">
                <input id="inquiery-model" value="<?= $_COOKIE['inquierymodel']; ?>" type="hidden" />
                <input id="isloadopenmodel" value="<?= $_COOKIE['isloadopenmodel']; ?>" type="hidden" />

                <input name="junk_trap" class="junk_trap" type="hidden" />

                

                <form class="form-horizontal form1" action="inquiry-action.php" method="post" novalidate="novalidate">
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
                              <select id="country1" class="selectstyle form-control" name="country">Select
                                  Country</select>
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-5 mybottom" style="display:none">
                              <select name="code" id="state1" class="selectstyle form-control"
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

        <div class="clearfix"></div>

      </div>

      <div class="clearfix"></div>

    </div>

    <div class="clearfix"></div>

  </div>

  <div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload1">
    <div class="modal-dialog modal-lg">
      <input type="hidden" id="ispopupopen" value="1">
      <div class="modal-content">
        <div class="modal-body stick_popup">
          <h5 class="modal-title">Catalogue Request Form</h5>
          <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
          <div class="row">
            <!-- <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="logo-wrapper">
                <img src="./assets/images/logo.png">
                <button class="btn-modal-gra">
                 
                </button>
              </div>
            </div> -->
            <div class="col-md-12 col-sm-12 col-xs-12">


              <div class="widget footer-widgets tag-widget">
                <input id="inquiery-model" value="<?= $_COOKIE['inquierymodel']; ?>" type="hidden" />
                <input id="isloadopenmodel" value="<?= $_COOKIE['isloadopenmodel']; ?>" type="hidden" />

                <input name="junk_trap" class="junk_trap" type="hidden" />

                

                <form class="form-horizontal form2" action="catalogue-action.php" method="post" novalidate="novalidate">
                <input type="hidden" id="pt" name="path" value="">
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
                              <select id="country" class="selectstyle form-control" name="country">Select
                                  Country</select>
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-5 mybottom" style="display:none">
                              <select name="code" id="state" class="selectstyle form-control"
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

        <div class="clearfix"></div>

      </div>

      <div class="clearfix"></div>

    </div>

    <div class="clearfix"></div>

  </div>

  <!-- End My Model -->

<div class="footer-box" style="display: none;">
    
    <div class="book-app" style="background: #222;width: 25%;">
      <a class="nav_up click2" data-href="pdf/ci-pumpset-performance-booklet.pdf" href="javascript:;" style="color:#FFF; font-size:12px;font-weight:600;"><i class="fa fa-file-pdf fa-2x" style="margin-right: 5px;"></i></a>
    </div>
    <!-- <div class="book-app" style="background: #000;">
      <a class="nav_up click2" href="tel:+916354916823" href="javascript:;" style="color:#FFF; font-size:12px;font-weight:600;"><i class="fa fa-phone" style="margin-right: 5px;"></i> Call</a>
    </div> -->
<div class="book-app" style="background:#1b5670;width: 75%;" id="req-apnmt2">
      <a class="nav_up click1" href="javascript:;" style="color:#FFF;font-size:12px;font-weight:600;line-height: 1;display: flex;align-items: center;justify-content: center;height: 100%;"><i class="fa fa-envelope fa-2x" style="margin-right: 5px;"></i> Enquire Now</a>
    </div>
    <div class="book-app" style="background: #2db640;width: 25%;">
    <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+916354916823' });" href="https://api.whatsapp.com/send?phone=916354916823&amp;text=Hello team Waterman Industries Pvt. Ltd., I was going through your website and wish to get connected for product discussion" style="color:#FFF; font-size:12px;font-weight:600;"><i class="fab fa-whatsapp fa-2x" style="margin-right: 5px;"></i></a>
  </div>

  </div>

  <!-- End My Model -->
