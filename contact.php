<?php
    session_start(); 
    $alert = ""; 
    if(isset($_SESSION['alert'])){
        $alert = $_SESSION['alert'];
    }
?>
<?php include('mail.php'); ?>
<?php include('header.php') ?>
<main>
<!-- breadcrumb area start -->
<section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative" style="background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E);">
         <div class="ac-about-shape-img z-index-1">
            <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Contact Us </h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!--contact-area-start -->
    <div class="tp-contact-area pt-135 pb-130">
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-6 ">
               <div class="tp-contct-wrapper contact-space-40">
                <div class="tp-contact-thumb mb-60">
                   <img src="assets/img/contact/contact-1.jpg" alt="">
                </div>
                <div class="tp-contact-info mb-40">
                   <h4 class="contact-title">Mail Address</h4>
                   <span><a href="mailto:(webmail@gmail.com)">(wemakewebsites247@gmail.com)</a></span>
                   <span><a href="mailto:(infoweb@gmail.com)">(prasathjp95@@gmail.com)</a></span>
                </div>
                <div class="tp-contact-info mb-40">
                   <h4 class="contact-title">Phone Number</h4>
                   <span><a href="tel:(+1255-568-6523)">(+91 89043 54676)</a></span>
                   <span><a href="tel:(+1255-568-6523)">(+91 80721 70740)</a></span>
                </div>
                <div class="tp-contact-info">
                   <h4 class="contact-title">Address line</h4>
                   <span><a href="https://www.google.com/maps" target="blank">Salem, Tamilnadu, India</a></span>
                </div>
               </div>
             </div>
             <div class="col-xl-6 col-lg-6">
                <div class="tpcontact">
                   <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                   <div class="tpcontact__form tpcontact__form-3">
                   <form id="contactForm" method="POST" action="">
                   <div class="col-md-12 col-sm-12 col-xs-12 my-2" id="alert"><?php echo $alert; ?></div>
                         <input name="name" type="text" placeholder="Name*" required="">
                         <input name="email" type="email" placeholder="Email*" required="">
                         <input name="mobile" type="tel" placeholder="Phone*" required="">
                         <textarea name="message" placeholder="Message"></textarea>
                        <button type="submit" class="tp-btn-yellow" name="submit" id="submit">Send Message</button>
                        </form>
                   </div>
                   <p class="ajax-response"></p>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- contact-area-end -->

 </main>
 <?php include('footer.php') ?>