<?php
    session_start(); 
    $alert = ""; 
    if(isset($_SESSION['alert'])){
        $alert = $_SESSION['alert'];
    }
?>
<?php include('mail.php'); ?>
<?php include('header.php') ?>
<!-- tp-hero-area-start -->
<main>

<!-- hero area start -->
<div class="tp-hero-area-two theme-bg pt-130 p-relative fix">
   <div class="tp-hero-shape-three ">
      <img src="assets/img/hero/hero-shape-3.png" alt="">
   </div>
   <div class="tp-hero-circle-three"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="tp-hero-section-box pt-140 pb-200" style="text-align: initial">
               <h3 class="ct-hero-title text-white wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">We helps your <span class="tp-highlight"><svg width="266" height="12" viewBox="0 0 266 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0L266 12H0V0Z" fill="#FFDC60"/>
                  </svg><i>Business</i></span> move work <span class="tp-highlight"><svg width="266" height="12" viewBox="0 0 266 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0L266 12H0V0Z" fill="#FFDC60"/>
                  </svg><i>forward.</i></span></h3>
               <p class="wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">At WmW we specialize in designing, building, shipping and scaling beautiful, usable products
                  with blazing-fast efficiency</p>
               <div class="tp-hero-three-button-box d-flex align-items-center wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                  <div class="xs-bottom-space">
                     <a class="tp-btn-yellow-semilar mr-55" id="page-scroll" href="#mission">How we Works</a>
                  </div>
                  <!--<div class="tp-hero-paly-button z-index-1">
                     <a class="popup-video" href="https://www.youtube.com/watch?v=LJbkLdtEW00"><i class="far fa-play"></i></a>
                     <span>Behind the scenes</span>
                  </div>-->
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-5 col-md-12">
            <div class="tp-hero-right-img wow tpfadeRight"  data-wow-duration=".9s" data-wow-delay="1.2s">
               <img src="assets/img/hero/hero-4.png" alt="">
            </div>
         </div>
      </div>
   </div>
</div>
<!-- hero area end -->

<!--creative-area-start -->
<div class="p-relative">
      <div class="shape-two z-index-1">
         <img src="assets/img/hero/shape-2.png" alt="">
      </div>
      <div class="tp-creative-area p-relative black-bg pt-140 pb-135 fix">
         <div class="circle-animation testimonial">
            <span class="tp-circle-1"></span>
            <span class="tp-circle-2"></span>
         </div>
         <div class="creative-shape-img">
            <img src="assets/img/creative/creative-hand.png" alt="">
         </div>
         <div class="creative-shape-img-2">
            <img src="assets/img/creative/creative-circle-img.png" alt="">
         </div>
         <div class="container creative-z-index ">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-creative-box text-center">
                     <div class="tp-creative-content mb-110">
                        <h4 class="tp-creative-title">Our Main Strategy - <b>Work First Money Next</b> Model
                           that can design, build, ship and
                           scale your vision in the most efficient way.</h4>
                     </div>
                     <!--<div class="tp-play-button mb-150">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fal fa-play"></i></a>
                        <span>Play Take a look behind the scenes</span>
                     </div>-->
                  </div>
               </div>
            </div>
            <div class="creative-box pl-40 pr-40">
               <div class="row gx-5">
                  <div class="col-lg-4 col-md-12 col-xs-12 mb-30">
                     <div class="tp-creative-item wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.6s; animation-name: tpfadeUp;">
                        <div class="tp-creative-yellow d-flex align-items-center">
                           <div class="tp-creative-icon mr-35">
                              <i class="flaticon-satisfaction"></i>
                           </div>
                           <div class="counter-text">
                              <span>100%</span>
                              <p class="m-0">Client Satisfaction</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-xs-12 mb-30">
                     <div class="tp-creative-item tp-creative-blue wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.8s; animation-name: tpfadeUp;">
                        <div class="tp-creative-yellow d-flex align-items-center">
                           <div class="tp-creative-icon mr-35">
                              <i class="flaticon-clipboard"></i>
                           </div>
                           <div class="counter-text">
                              <span>12+</span>
                              <p class="m-0">Completed Projects</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-xs-12 mb-30">
                     <div class="tp-creative-item tp-creative-pink wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 1s; animation-name: tpfadeUp;">
                        <div class="tp-creative-yellow d-flex align-items-center">
                           <div class="tp-creative-icon mr-35">
                              <i class="flaticon-setting"></i>
                           </div>
                           <div class="counter-text">
                              <span>4+</span>
                              <p class="m-0">Professional Teams</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!--creative-area-end -->

<!-- mission-area-start -->
<div class="tp-mission-area pt-130 p-relative" id="mission">
         <div class="bp-mission-shape-1 d-none d-lg-block">
            <img src="assets/img/mission/mission-shape-5.1.png" alt="">
         </div>
         <div class="bp-mission-shape-2 d-none d-lg-block">
            <img src="assets/img/mission/mission-shape-5.6.png" alt="">
         </div>
         <div class="bp-mission-shape-3 d-none d-lg-block">
            <img src="assets/img/mission/mission-shape-5.3.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-7 col-md-11 wow tpfadeLeft" data-wow-duration=".5s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: tpfadeLeft;">
                  <div class="tp-mission-tab-section pb-10">
                     <nav>
                        <div class="nav tp-mission-tab " id="nav-tab" role="tablist">
                           <button class="nav-links active" id="nav-Mission-tab" data-bs-toggle="tab" data-bs-target="#Mission" type="button" role="tab" aria-controls="nav-Mission-tab" aria-selected="true"><span>Our Mission</span></button>

                           <button class="nav-links" id="nav-Vission-tab" data-bs-toggle="tab" data-bs-target="#Vission" type="button" role="tab" aria-controls="nav-Vission-tab" aria-selected="false" tabindex="-1"><span>Our
                                 Vission</span></button>

                           <button class="nav-links" id="nav-Value-tab" data-bs-toggle="tab" data-bs-target="#Value" type="button" role="tab" aria-controls="nav-Value-tab" aria-selected="false" tabindex="-1"><span>Our
                                 Value</span></button>
                        </div>
                     </nav>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="Mission" role="tabpanel" aria-labelledby="nav-Mission-tab" tabindex="0">
                        <div class="tpmission">
                           <div class="tpmission__content">
                           <h2 class="tp-mission-title">We lead your
                                 <span class="tp-section-highlight">
                                    business
                                    <svg width="201" height="12" viewBox="0 0 201 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0 0L201 12H0V0Z" fill="#FFDC60"></path>
                                    </svg>
                                 </span> 
                                  team to next level
                              </h2>
                              <p class="pb-20">We are a team of passionate business consultants &amp; Technology <br>
                                 veterans eager to help companies and business peoples rech their full potential.</p>
                              <p>As our name suggests, we build websites for your business &amp; take your business to next level digitally.
                                 By doing this, you can manage your businesses anytime  &amp; anywhere. And our team let us make you understand
                                 the actual process of making websites for your businesses in native languages. So that you can easily understand
                                 the work process of ours.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="Vission" role="tabpanel" aria-labelledby="nav-Vission-tab" tabindex="0">
                        <div class="tpmission">
                           <div class="tpmission__content">
                           <h2 class="tp-mission-title">Our vision is to
                                 <span class="tp-section-highlight">
                                    provide
                                    <svg width="160" height="11" viewBox="0 0 160 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0 0L160 11H0V0Z" fill="#FFDC60"></path>
                                    </svg>
                                 </span>
                                  better service - in over the world
                              </h2>
                               <p class="pb-20">Our main aim is to provide services for Business Owners, Agencies,
                                 StartUps, Local Shops &amp; improving their businesses digitally by creating websites.</p>
                              <p>We concentrate mainly on customer satisfaction by End-to-End process (ie.,) we clearly explain top to bottom of the services 
                                 that we're doing. We offer creating websites at an affordable prices and we will be the most valued business partners
                                 of all our customers.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade " id="Value" role="tabpanel" aria-labelledby="nav-Value-tab" tabindex="0">
                        <div class="tpmission">
                           <div class="tpmission__content">
                             <h2 class="tp-mission-title">Work with one of the fastest-growing
                                 <span class="tp-section-highlight">
                                    digital
                                    <svg width="160" height="11" viewBox="0 0 160 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0 0L160 11H0V0Z" fill="#FFDC60"></path>
                                    </svg>
                                 </span>
                                  consultancies
                              </h2>
                              <p class="pb-20">We build digital products and launch ventures for the next evolution of the web.</p>
                              <p>We start by understanding people’s problems. Then we build technology to solve them. The best digital products are more than just tools. 
                                 Interacting with them is an emotional experience and they become a meaningful part of people’s everyday lives.</p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="col-xl-6 col-lg-5 col-md-12 wow tpfadeRight" data-wow-duration=".5s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                  <div class="tp-mission-img">
                     <img src="assets/img/mission/collage.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- mission-area-end -->

<!-- feature-area-start -->
<div class="tp-chose-area pt-190 pb-130 p-relative">
         <div class="bp-chose-1 d-none d-lg-block">
            <img src="assets/img/chose/bp-chose-5.1.png" alt="">
         </div>
         <div class="bp-chose-2 d-none d-lg-block">
            <img src="assets/img/chose/bp-chose-5.2.png" alt="">
         </div>
         <div class="bp-chose-3 d-none d-lg-block">
            <img src="assets/img/chose/bp-chose-5.3.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-7 col-md-12">
                  <div class="tpchosebox-main p-relative">
                     <div class="tp-chose-bg">
                        <img src="assets/img/feature/fea-2.png" alt="">
                     </div>
                     <div class="row gx-40 align-items-center tp-chose-space">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow tpfadeLeft" data-wow-duration=".3s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.5s; animation-name: tpfadeLeft;">
                           <div class="tp-chose-item mb-40">
                              <div class="tpchosebox">
                                 <div class="tpchosebox__icon mb-30">
                                    <a href=""><i class="flaticon-group"></i></a>
                                 </div>
                                 <div class="tpchosebox__content">
                                    <h4><a href="">Professional <br> Team</a></h4>
                                    <p>4+ Team Members</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                           <div class="tp-chose-item">
                              <div class="tpchosebox tpchosebox-two mb-40 wow tpfadeIn" data-wow-duration=".5s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: tpfadeIn;">
                                 <div class="tpchosebox__icon fea-color-4 mb-30">
                                    <a href=""><i class="flaticon-web"></i></a>
                                 </div>
                                 <div class="tpchosebox__content">
                                    <h4><a href="">Reaching <br>
                                       Globally</a></h4>
                                    
                                 </div>
                              </div>
                              <div class="tpchosebox tpchosebox-three wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                                 <div class="tpchosebox__icon fea-color-5 mb-30">
                                    <a href=""><i class="fas fa-star"></i></a>
                                 </div>
                                 <div class="tpchosebox__content">
                                    <h4><a href="">Competitive <br>
                                       Rate</a></h4>
                                    <p>100% Client Satisfied</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-5 col-md-10 col-12 wow tpfadeRight" data-wow-duration=".5s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.9s; animation-name: tpfadeRight;">
                  <div class="tp-feature-section-title-box">
                     <h5 class="tp-subtitle pb-10">Why Choose us</h5>
                     <h2 class="tp-title tp-title-sm">We provide the best
                        <span class="tp-section-highlight">
                           solution for
                           <svg width="247" height="12" viewBox="0 0 247 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M-0.000488281 0L247 12H-0.000488281V0Z" fill="#FFDC60"></path>
                           </svg>
                        </span>
                         your business developmnet</h2>
                     <p class="pb-25">We have an excellent team of web application developers who are 
                        capable of creating innovative and high-performance website development of any complexity.</p>
                     <p class="pb-20">Our creative web designers work closely with the web development team to properly 
                        blend the design with the best UX and functionality. Whether you need a new unique custom web design 
                        or want a performance-optimized responsive web design service, talk to us today.</p>
                     <div class="tp-fea-button-five">
                        <a class="tp-btn-sky" href="about.php">About WmW247</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- feature-area-end -->

<!--service-area-start -->
<div class="tp-service-area pb-90 grey-bg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-7 col-lg-10">
                  <div class="tp-service-section-box text-center pb-60">
                     <h5 class="tp-subtitle pb-10">Our Services</h5>
                     <h2 class="tp-title-sm">Managing you business with our
                        <span class="tp-section-highlight">
                           best service
                           <svg width="266" height="12" viewBox="0 0 266 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0L266 12H0V0Z" fill="#FFDC60"></path>
                           </svg>
                        </span>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect">
                     <div class="tp-service-item-four sv-color-1 mb-30">
                        <div class="tp-service-item-four__img  mb-40">
                           <img src="assets/img/service/service4.1.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                           <h3 class="tp-sv-sm-title"><a href="services.php">Wesbite Development</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-1">
                     <div class="tp-service-item-four sv-color-2 mb-30">
                        <div class="tp-service-item-four__img  mb-40">
                           <img src="assets/img/service/icons8-wordpress-64.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                        <h3 class="tp-sv-sm-title"><a href="services.php">Wordpress Websites</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-2">
                     <div class="tp-service-item-four sv-color-3 mb-30">
                        <div class="tp-service-item-four__img mb-40">
                           <img src="assets/img/service/icons8-basket-48.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                           <h3 class="tp-sv-sm-title"><a href="services.php">Ecommerce Websites</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 1s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-3">
                     <div class="tp-service-item-four sv-color-4 mb-30">
                        <div class="tp-service-item-four__img mb-40">
                           <img src="assets/img/service/icons8-digital-marketing-48.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                           <h3 class="tp-sv-sm-title"><a href="services.php">Digital Marketing</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 1.1s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-4">
                     <div class="tp-service-item-four sv-color-5 mb-30">
                        <div class="tp-service-item-four__img mb-40">
                           <img src="assets/img/service/icons8-seo-48.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                           <h3 class="tp-sv-sm-title"><a href="services.php">SEO</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration="1s" data-wow-delay="1.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.1s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-5">
                     <div class="tp-service-item-four sv-color-6 mb-30">
                        <div class="tp-service-item-four__img mb-40">
                           <img src="assets/img/service/splash.png" width="32px" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                        <h3 class="tp-sv-sm-title"><a href="services.php">Graphic Design</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration="1s" data-wow-delay="1.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.2s; animation-name: tpfadeUp;">
                  <div class="tp-sv-border-effect sv-border-effect-6">
                     <div class="tp-service-item-four sv-color-7 mb-30">
                        <div class="tp-service-item-four__img mb-40">
                           <img src="assets/img/service/service4.6.png" alt="">
                        </div>
                        <div class="tp-service-item-four__title">
                           <h3 class="tp-sv-sm-title"><a href="services.php">Social Media Marketing</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6  wow tpfadeUp" data-wow-duration="1.1s" data-wow-delay="1.3s" style="visibility: visible; animation-duration: 1.1s; animation-delay: 1.3s; animation-name: tpfadeUp;">
                  <div class="sv-color-eight  mb-30">
                     <div class="sv-color-eight__title text-center">
                        <h3 class="tp-sv-sm-title"><a href="#">More Services</a></h3>
                        <a href="services.php"><i class="fal fa-long-arrow-up"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!--service-area-end -->

<!-- project-area-start -->
<div class="tp-project-area pt-125 pb-120 grey-bg fix">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-project-section-box text-center pb-25">
                     <h5 class="tp-subtitle">Projects</h5>
                     <h2 class="tp-title">Our completed
                        <span class="tp-section-highlight">
                           projects
                           <svg width="197" height="11" viewBox="0 0 197 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="wow" d="M0 0L197 11H0V0Z" fill="#FFDC60" style="visibility: visible;"></path>
                           </svg>
                        </span>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="tp-project-slider-section-three">
               <div class="swiper-container project-slider-three-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                  <div class="swiper-wrapper" id="swiper-wrapper-fff3ef7dbdc7a7ce" aria-live="polite" style="transform: translate3d(-1525px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="1 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/nuxe.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Salon Website</a></h3>
                                 <h5 class="tp-project-subtitle">Branding</h5>
                              </div>
                           </div>
                        </div>
                        <div class="tp-project-item-three text-center p-relative">
                           </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="2 / 8" style="width: 732.5px; margin-right: 30px;">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/aa.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Academy Website</a></h3>
                                 <h5 class="tp-project-subtitle">Education</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="3 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/mahathe.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Digital Card Design</a></h3>
                                 <h5 class="tp-project-subtitle">Digital</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="4 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/ecomm.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Ecommerce design</a></h3>
                                 <h5 class="tp-project-subtitle">Ecommerce</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="5 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/landing.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Landing Page</a></h3>
                                 <h5 class="tp-project-subtitle">Landing</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="6 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/portfolio.PNG" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio.php">Portfolio Website</a></h3>
                                 <h5 class="tp-project-subtitle">Portfolio</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="7 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/project-9.jpg" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio-details.html">Book art design</a></h3>
                                 <h5 class="tp-project-subtitle">Branding</h5>
                              </div>
                           </div>
                        </div>
                     </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="8 / 8" style="width: 732.5px; margin-right: 30px;">
                        <div class="tp-project-item-three text-center p-relative">
                           <div class="tp-project-item-three__img">
                              <img src="assets/img/project/project-10.jpg" alt="">
                           </div>
                           <div class="tp-project-item-three__bg">
                              <div class="tp-project-item-three__bg-info">
                                 <h3 class="tp-project-title"><a href="portfolio-details.html">Book art design</a></h3>
                                 <h5 class="tp-project-subtitle">Branding</h5>
                              </div>
                           </div>
                        </div>
                     </div></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
               <div class="project-slider-dots text-center swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
            </div>
         </div>
      </div>
<!-- project-area-end -->

<!--testimonial-area-start -->
<div class="tp-testimonial-area pb-130 p-relative">
         <div class="bs-testi-shape-1 d-none d-lg-block">
            <img src="assets/img/testimonial/testimonial-shape-5.3.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-testi-wrapper d-flex pb-50 justify-content-between align-items-end">
                     <div class="tp-testimonial-title-box ">
                        <h5 class="tp-subtitle">Testimonial</h5>
                        <h2 class="tp-title-sm">Check what client say</h2>
                     </div>
                     <div class="tp-testi-button-right-side">
                        <a class="tp-btn-yellow" href="testimonial.html">More Testimonial</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-testimonial-slider-section-four">
               <div class="swiper-container testi-slider-active-five ">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                             <!-- <div class="tp-testimonial-item-four__logo">
                                 <a href="#"><img src="assets/img/testimonial/testi-brands-1.png" alt=""></a>
                              </div>-->
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p> The team’s in-depth knowledge of user interaction and behavior resulted in an impressive UI/UX design.</p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                              <!--<div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.2.png" alt="">
                              </div>-->
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">ManiKandan</h4>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <!--<div class="tp-testimonial-item-four__logo">
                                 <a href="#"><img src="assets/img/testimonial/testi-brands-2.png" alt=""></a>
                              </div>-->
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p> It really transcends everything we’ve done to date. Everyone who’s seen the app has loved it.
                              </p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                             <!-- <div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.5.png" alt="">
                              </div>-->
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Vimal</h4>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <!--<div class="tp-testimonial-item-four__logo">
                                 <a href="#"><img src="assets/img/testimonial/testi-brands-2.png" alt=""></a>
                              </div>-->
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p>They develop Ecommerce website for my business. It really helpful for me to manage my stocks 
                              </p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                             <!-- <div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.5.png" alt="">
                              </div>-->
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Suresh</h4>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <!--<div class="tp-testimonial-item-four__logo">
                                 <a href="#"><img src="assets/img/testimonial/testi-brands-3.png" alt=""></a>
                              </div>-->
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p>Firstofall they offer websites at an affordable prices. They develop website for my salon and its really helpful for me that customers book their appoinment through websites.</p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                              <!--<div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.1.png" alt="">
                              </div>-->
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Radhakrishnan</h4>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial-area-end -->

<div class="tp-blog-area tp-blog-bs-space pt-130 pb-130 mr-130 ml-130 grey-bg p-relative" style="background: linear-gradient(to right, #4BC0C8, #C779D0, #FEAC5E);">
         <div class="bp-blog-shape-1 d-none d-lg-block">
            <img src="assets/img/blog/bp-chose-5.2.png" alt="">   
         </div>
         <div class="bp-blog-shape-2 d-none d-lg-block">
            <img src="assets/img/blog/bp-chose-5.3.png" alt="">
         </div>
         <div class="bp-blog-shape-3 d-none d-lg-block">
            <img src="assets/img/blog/hero-shape-5.2.png" alt="">
         </div>
         <div class="container">
            <div class="row justify-content-center">
               
               <div class="col-xl-8 col-lg-5 tp-contact-space col-12 ">
                  <div class="tp-border-left">
                     <div class="tp-blog-section-box pb-35">
                        <h5 class="tp-subtitle tp-subtitle-before-color"><span style="color:#fff">Get in Touch</span></h5>
                        <h2 class="tp-title-sm">
                           <span class="tp-section-highlight">
                              Contact
                              <svg width="160" height="11" viewBox="0 0 160 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0 0L160 11H0V0Z" fill="#89CEFB"></path>
                              </svg>                              
                           </span>
                           us
                        </h2>
                     </div>
                     <div class="tpcontact">
                        <!--<div class="tpcontact__heading">
                           <h4 class="tp-contact-title"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M22.9201 9.11169C22.8196 9.00949 22.6998 8.92831 22.5678 8.87286C22.4355 8.81732 22.2936 8.78872 22.1502 8.78872C22.0068 8.78872 21.8649 8.81732 21.7326 8.87286C21.6005 8.92835 21.4806 9.0096 21.38 9.1119C21.3799 9.11199 21.3798 9.11209 21.3797 9.11219L13.2476 17.2717L13.2281 17.2913L13.2214 17.3182L12.7524 19.2026L12.7121 19.3644L12.8738 19.3238L14.7499 18.8526L14.7768 18.8459L14.7964 18.8262L22.9197 10.6577C22.9198 10.6577 22.9198 10.6576 22.9199 10.6575C23.0218 10.5565 23.1027 10.4361 23.1579 10.3035C23.2131 10.1708 23.2415 10.0283 23.2415 9.88451C23.2415 9.74067 23.2131 9.59826 23.1579 9.46552C23.1027 9.33298 23.0219 9.2127 22.9201 9.11169ZM22.9201 9.11169C22.92 9.11154 22.9198 9.11141 22.9197 9.11127L22.8493 9.18228L22.9206 9.11219C22.9204 9.11202 22.9203 9.11186 22.9201 9.11169ZM15.1768 0.100017L15.1774 0.100013C15.2807 0.0994136 15.383 0.11929 15.4786 0.158513C15.5742 0.197727 15.6612 0.255516 15.7345 0.328588C15.7345 0.328604 15.7345 0.328619 15.7346 0.328635L19.2738 3.88363C19.2738 3.88364 19.2738 3.88364 19.2738 3.88365C19.3465 3.95734 19.4041 4.04475 19.4432 4.1409C19.4823 4.23705 19.5021 4.34002 19.5015 4.4439V4.44448V6.22227C19.5015 6.43164 19.4187 6.63234 19.2715 6.78026C19.1242 6.92815 18.9246 7.01116 18.7166 7.01116C18.5086 7.01116 18.309 6.92815 18.1617 6.78026C18.0145 6.63234 17.9317 6.43164 17.9317 6.22227V4.80893V4.76764L17.9025 4.73837L14.8849 1.70725L14.8556 1.6778H14.814H2.78764C2.52627 1.6778 2.2757 1.7821 2.09102 1.9676C1.90636 2.15309 1.8027 2.40457 1.8027 2.66669V22.2223C1.8027 22.4845 1.90636 22.736 2.09102 22.9214C2.2757 23.1069 2.52627 23.2112 2.78764 23.2112H16.9467C17.2081 23.2112 17.4587 23.1069 17.6433 22.9214C17.828 22.736 17.9317 22.4845 17.9317 22.2223V20.4446C17.9317 20.2352 18.0145 20.0345 18.1617 19.8866C18.309 19.7387 18.5086 19.6557 18.7166 19.6557C18.9246 19.6557 19.1242 19.7387 19.2715 19.8866C19.4187 20.0345 19.5015 20.2352 19.5015 20.4446V22.2223C19.5015 22.9032 19.2323 23.5561 18.7531 24.0374C18.2739 24.5187 17.6242 24.789 16.9467 24.789H2.78764C2.1102 24.789 1.46042 24.5187 0.981261 24.0374C0.502089 23.5561 0.232813 22.9032 0.232813 22.2223V2.66669C0.232813 1.98583 0.502089 1.33293 0.981262 0.85162C1.46042 0.370323 2.1102 0.100015 2.78764 0.100015L15.1768 0.100017ZM23.819 11.949H23.8652L15.7349 20.1156C15.7348 20.1157 15.7347 20.1158 15.7346 20.1159C15.6326 20.2166 15.5051 20.2874 15.366 20.3206L15.3649 20.3209L11.8251 21.2098L11.8251 21.2098L11.8222 21.2106C11.6896 21.2481 11.5495 21.2499 11.416 21.2157C11.2825 21.1816 11.1602 21.1127 11.0615 21.016C10.9628 20.9192 10.8912 20.798 10.8539 20.6646C10.8166 20.5311 10.8149 20.3902 10.849 20.2559L10.8492 20.2554L11.7341 16.6998L11.7344 16.6987C11.7675 16.5587 11.8381 16.4306 11.9384 16.3281C11.9384 16.328 11.9385 16.3279 11.9386 16.3278L20.2388 7.99061L20.2389 7.99071L20.2425 7.98667C20.4848 7.7154 20.7795 7.4966 21.1088 7.34361C21.438 7.19062 21.7948 7.10664 22.1574 7.09677C22.52 7.08691 22.8807 7.15137 23.2177 7.28624C23.5547 7.4211 23.8608 7.62355 24.1174 7.88124C24.3739 8.13893 24.5755 8.44646 24.7098 8.78508C24.8441 9.12369 24.9084 9.48626 24.8985 9.85065C24.8887 10.215 24.8051 10.5736 24.6527 10.9044C24.5003 11.2352 24.2825 11.5313 24.0124 11.7747L23.819 11.949ZM4.00264 16.331C4.14988 16.1831 4.34949 16.1001 4.55752 16.1001H8.09729C8.30533 16.1001 8.50494 16.1831 8.65217 16.331C8.79943 16.4789 8.88224 16.6796 8.88224 16.889C8.88224 17.0984 8.79943 17.2991 8.65218 17.447C8.50494 17.5949 8.30533 17.6779 8.09729 17.6779H4.55752C4.34949 17.6779 4.14988 17.5949 4.00264 17.447C3.85539 17.2991 3.77258 17.0984 3.77258 16.889C3.77258 16.6796 3.85539 16.4789 4.00264 16.331ZM4.55752 5.43337H12.522C12.73 5.43337 12.9296 5.51638 13.0769 5.66428C13.2241 5.81219 13.3069 6.0129 13.3069 6.22227C13.3069 6.43164 13.2241 6.63234 13.0769 6.78026C12.9296 6.92815 12.73 7.01116 12.522 7.01116H4.55752C4.34949 7.01116 4.14988 6.92815 4.00264 6.78026C3.85539 6.63234 3.77258 6.43164 3.77258 6.22227C3.77258 6.0129 3.85539 5.81219 4.00264 5.66428C4.14988 5.51638 4.34949 5.43337 4.55752 5.43337ZM13.0769 10.9976C13.2241 11.1455 13.3069 11.3463 13.3069 11.5556C13.3069 11.765 13.2241 11.9657 13.0769 12.1136C12.9296 12.2615 12.73 12.3445 12.522 12.3445H4.55752C4.34949 12.3445 4.14988 12.2615 4.00264 12.1136C3.85539 11.9657 3.77258 11.765 3.77258 11.5556C3.77258 11.3463 3.85539 11.1455 4.00264 10.9976C4.14988 10.8497 4.34949 10.7667 4.55752 10.7667H12.522C12.73 10.7667 12.9296 10.8497 13.0769 10.9976Z" fill="#171717" stroke="#0F0F0F" stroke-width="0.2"></path>
                              </svg>
                              Fill the form
                           </h4>
                        </div>-->
                        <div class="tpcontact__form">
                        <form id="contactForm" method="POST" action="">
                   <div class="col-md-12 col-sm-12 col-xs-12 my-2" id="alert"><?php echo $alert; ?></div>
                         <input name="name" type="text" placeholder="Name*" required="">
                         <input name="email" type="email" placeholder="Email*" required="">
                         <input name="mobile" type="tel" placeholder="Phone*" required="">
                         <textarea name="message" placeholder="Message"></textarea>
                        <button type="submit" class="tp-btn-yellow" name="submit" id="submit">Send Message</button>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="p-relative">
      <button class="scrollTop d-none d-md-block" data-target="html">
         <div class="tp-backto-top">
            <svg width="16" height="58" viewBox="0 0 16 58" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M8.70711 0.292892C8.31659 -0.0976295 7.68342 -0.0976296 7.2929 0.292892L0.928934 6.65685C0.53841 7.04738 0.53841 7.68054 0.928934 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41422L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 58L9 1L7 1L7 58L9 58Z" fill="#292930"></path>
            </svg>
         </div>
      </button>
      <div class="footer-clip-shape">
         <svg width="1918" height="98" viewBox="0 0 1918 98" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M435.5 54L0 1V0L1917.5 1L1309 75.5C1263 82 1178.75 88.6471 1176.5 89C1116 98.5 958.667 98.3333 885.5 97C874.167 96.5 856.5 95.5 850.5 95.5C793.5 95.5 554.667 69.3333 435.5 54Z" fill="white"></path>
         </svg>
      </div>
      <div class="tp-clip-height-one"></div>
      <div class="tp-clip-height-two"></div>
      <div class="tp-footer-area tp-footer-space black-bg p-relative fix pt-0">
         <div class="tp-footer-border-shape d-none"></div>
         <div class="tp-footer-border-shape-two"></div>
         <div class="circle-animation footer-animation d-none d-md-block">
            <span class="tp-circle-3"></span>
         </div>
         <div class="container">
            <div class="tp-footer-widget wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: tpfadeUp;">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                     <div class="tp-footer-top">
                        <h5 class="tp-footer-title">More than 4+ years in the game and we're <br> just getting started.
                           🤝</h5>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                     <div class="tp-footer-button text-start text-md-end">
                        <a class="tp-btn" href="contact.php">Available for new Project<i class="far fa-arrow-right"></i> </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <div class="modal-overlay"></div>
    <div class="modal">
      <div class="bg-shape"></div>
      <div class="close-btn">
      <i class="ti-close"></i>
      </div>

      <div class="left">
        <div class="discount-text">
          <h3>Special</h3>
          <h3 class="sale-text">Offer</h3>
        </div>

        <div class="discount">
          <p>Save up to</p>
          <div class="discount-percent">20%</div>
        </div>
      </div>

      <div class="right">
        <div class="bridal_popup">
          <a href="appoinment.php"><img src="img/bridal/bridal_popup.jpeg" alt="" class=""></a>
        </div>
        <!--<h2>
          Grab Our Latest Offer
        </h2>
        <p>Click below</p>
        <a href="appoinment.php" class="discount-btn">Book Now!</a>-->
      </div>
    </div>   
<?php include('footer.php') ?>