<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EBLZZJYD58"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EBLZZJYD58');
  </script>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Comium</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <!-- Favicons -->
  <link href="assets/img/logo-rd.svg" rel="icon" />
  <!-- <style>
      @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@200;400;500;700;800;900&display=swap");
    </style> -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!--<link rel="stylesheet" href="https://use.typekit.net/yfw8tzl.css" />-->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v30" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');
  </style>
  <style>
    .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: black !important;
      color: black !important
    }

    .no-bullets {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .no-bullets a {
      color: black;
      line-height: 30px
    }

    .about .content {
      /* background-color: #f9f9f9; */
      background: linear-gradient(90deg, rgba(255, 255, 255, 1) 80%, rgba(249, 249, 249, 1) 100%);

      padding: 40px;
    }

    .about img {
      /* width: 100%; */
      margin-left: -200px;
    }

    .header.header-scrolled {
      padding: 0 !important;
    }

    #carousel-afric .slick-track .slick-slide {
      display: flex !important;
      height: auto !important;
      align-items: flex-end !important;
      justify-content: center !important;
    }

    .slick-track {
      display: flex !important;
    }

    a.hover-careers:hover {
      color: red !important;
    }

    a.hover-careers:hover svg.careers-svg {
      stroke: red !important
    }

    .navbar .active svg {
      stroke: red !important
    }

    canvas {
      position: -webkit-sticky;
      position: -moz-sticky;
      position: -o-sticky;
      position: -ms-sticky;
      position: sticky;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      object-fit: cover;
      object-position: center center;
    }

    #img_container {
      max-height: 100vh !important;
      min-height: 100vh !important;
    }
  </style>
  <style>
    #scrolldiv {
      height: 100vh;
      background-size: auto 110vh;
      background-repeat: no-repeat;
    }

    .scrolldiv {
      position: relative;
      height: 100%;
    }

    .scrolldiv__text {
      font-size: 10rem;
      position: absolute;
      top: 30%;
      /*left: 13%;*/
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
      /* Firefox */
    }
  </style>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <link href="assets/css/slick.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
</head>

<body style="background-color:rgb(249 249 249);">
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo-rd.svg" alt="comium" style="    height: 74px;
    padding: 20px 0px;" />
        <!-- <span>FlexStart</span> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="nav-link scrollto hover-careers" href="#about">About

              <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
          <li>
            <a class="nav-link scrollto hover-careers" href="#products">Products & Services
              <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>

          <li>
            <a class="nav-link scrollto hover-careers" href="#careers">Careers
              <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
          <li>
          <li>
            <a class="nav-link scrollto hover-careers" href="#contact">Contact
              <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  </div>
  <style>
    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
      bottom: 20px !important;
    }

    .banner-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
    }

    .banner-text {
      width: 40%;
    }

    @media (min-width: 768px) {

      .padd-right {
        padding-right: 150px
      }

      .about {
        padding-top: 140px
      }

      .padding-here {
        padding: 0% 25% !important
      }

      .services .service-box.orange:hover .ran-kasha {
        display: none;
      }

      .services .service-box.orange:hover .ran-overlay {
        display: block;
      }

      .services .service-box.orange .ran-kasha {
        display: block;
      }

      .services .service-box.orange .ran-overlay {
        display: none;
      }

      .services .service-box.orange .kasha-mobile {
        display: none;
      }

      .services .service-box.orange .kasha-mobile {
        display: none;
      }

      .services .service-box.black:hover .kasha-mobile {
        display: none;
      }

      .services .service-box.black .kasha-mobile {
        display: none;
      }

      .services .service-box.black:hover .isp-mobile {
        display: none;
      }

      .services .service-box.black .isp-mobile {
        display: none;
      }

      .services .service-box.black:hover .isp-random {
        display: none;
      }

      .services .service-box.black:hover .isp-overlay {
        display: block;
      }

      .services .service-box.black .isp-random {
        display: block;
      }

      .services .service-box.black .isp-overlay {
        display: none;
      }

      .services .service-box.black:hover .isp-mobile {
        display: none;
      }

      .services .service-box.black .isp-mobile {
        display: none;
      }
    }

    @media screen and (max-width: 767px) {
      .mission-mobile-border {
        border-bottom: 4px solid rgb(249 249 249);
      }

      .banner-text h2 {
        font-size: 45px !important;
        line-height: 50px !important
      }

      .services .service-box.black:hover .isp-random {
        display: none;
      }

      .services .service-box.black:hover .isp-overlay {
        display: none;
      }

      .services .service-box.black .isp-random {
        display: none;
      }

      .services .service-box.black .isp-overlay {
        display: none;
      }

      .services .service-box.orange:hover .ran-kasha {
        display: none;
      }

      .services .service-box.orange:hover .ran-overlay {
        display: none;
      }

      .services .service-box.orange .ran-kasha {
        display: none;
      }

      .services .service-box.orange .ran-overlay {
        display: none;
      }

      .about img {
        display: none
      }

      .banner-text {
        width: 100%;
      }

      .banner-wrapper {
        padding-top: 20px;
        position: relative;
      }

      .swiper-slide:nth-child(2) .banner-wrapper {
        background: #ffffff
      }

      .swiper-slide:nth-child(3) .banner-wrapper {
        background: #FF8300
      }

      .swiper-slide:nth-child(4) .banner-wrapper {
        background: #E1251B
      }
    }

    .slick-slide {
      max-width: 100% !important;
      width: 100% !important;
    }

    .careers svg:hover {
      fill: red;
    }

    .navbar .nav-link svg {
      visibility: hidden;

    }

    .navbar-mobile .nav-link svg {
      visibility: visible !important;
    }
  </style>
  <div class="main">
    <div class="wrapper" style="max-width: 100%;width:100%;">
      <!-- start slider -->
      <div class="swiper promo-swiper" style="margin-top:calc(0vh + 80px)">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="banner-wrapper">
              <div class="container-fluid container-xl">
                <div class="banner-text">
                  <h2 style=" font-size: 60px; font-weight: bold; line-height: 68px;    margin-bottom: 20px;">Your Go-To Telecom Service Provider</h2>
                  <p style="margin-top:10px">As we take on new challenges, our team has extensive expertise that allows us to offer the best telecom services in all The Gambia.</p>
                </div>
              </div>
            </div>
            <video class="d-none d-md-block" width="100%" autoplay="autoplay" muted="muted" loop="loop">
              <source src="assets/img/banner1.mp4" type="video/mp4">
              <!-- <source src="assets/img/comium-rocket.webm" type="video/webm"> -->
            </video>
            <video class="d-block d-md-none" width="100%" autoplay="autoplay" muted="muted" loop="loop">
              <source src="assets/img/banner1-mobile.mp4" type="video/mp4">
              <!-- <source src="assets/img/comium-rocket.webm" type="video/webm"> -->
            </video>
          </div>
          <div class="swiper-slide">
            <div class="banner-wrapper">
              <div class="container-fluid container-xl">
                <div class="banner-text" style="color:white">
                  <h2 style=" font-size: 60px; font-weight: bold; line-height: 68px;    margin-bottom: 20px;">Your Go-To Telecom Service Provider</h2>
                  <p style="margin-top:10px">As we take on new challenges, our team has extensive expertise that allows us to offer the best telecom services in all The Gambia.</p>
                </div>
              </div>
            </div>
            <picture>
              <source srcset="assets/img/banner2.png" media="(min-width: 768px)" alt="Simple Banking D" width="100%">
              <img loading="lazy" src="assets/img/banner2-mobile.png" alt="Simple Banking M" width="100%">
            </picture>
          </div>
          <div class="swiper-slide">
            <div class="banner-wrapper">
              <div class="container-fluid container-xl">
                <div class="banner-text" style="color:white">
                  <h2 style=" font-size: 60px; font-weight: bold; line-height: 68px;    margin-bottom: 20px;">Your Go-To Telecom Service Provider</h2>
                  <p style="margin-top:10px">As we take on new challenges, our team has extensive expertise that allows us to offer the best telecom services in all The Gambia.</p>
                </div>
              </div>
            </div>
            <picture>
              <source srcset="assets/img/banner3.png" media="(min-width: 768px)" alt="Global Financial Technology D" width="100%">
              <img loading="lazy" src="assets/img/banner3-mobile.png" alt="Global Financial Technology M" width="100%">
            </picture>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
            <header class="section-header">
              <h2></h2>
              <p style="    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #111921;">  About Comium</p>
              <p style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484; 
              " class="padding-here"> Our products are here to connect you to the ones you love, with affordable prices and the most attractive bundles in the market. </p>
            </header>
            <div class="row gx-0">
              <div class="col-lg-9 col-md-9 col-sm-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                  <!-- <h3>Who We Are</h3> -->
                  <p class="padd-right">Human connections have always been at the center of our reality, and so new platforms and tools are created using innovative technologies in order to serve that goal. We, at Comium work in favor of making communications ever convenient for our subscribers, by offering cutting-edge telecom services using the latest technologies and discoveries in the field. As the world keeps evolving and new trends and discoveries are happening by the minute, we promise to stay up to the beat by upgrading our services and boosting our pace to offer you the best telecom services in The Gambia, backed by our professional team of experts. <br />
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#comium-history" data-ticket-type="standard-access" style=" margin-top:25px;      font-size: 14px;
    font-weight: 700;
    color: #e1251b;
    
    color: #E1251B;padding:0">Comium History
                      <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.125 14.25L11.875 9.5L7.125 4.75" stroke="red" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>

                    </button>
                  </p>
                </div>
                <div class="row gx-0 py-1">
                  <div class="col-lg-6 d-flex flex-column justify-content-center mission-mobile-border" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                      <h3>Mission</h3>
                      <p> To increase customer satisfaction and gain their loyalty and trust by providing our subscribers with top services and wide coverage all around The Gambia.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                      <h3>Vision</h3>
                      <p> To enhance our range of offerings with state-of-the-art technologies in order to expand the services and use telecom in service of human communication. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/family.png?v1" alt="" width="500" />
              </div>
            </div>
          </div>
        </section>
        <section id="products" class="services">
          <div class="container" data-aos="fade-up">
            <header class="section-header">
              <p>  Products & Services</p>
              <p class="padding-here" style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484; 
              "> Our products are here to connect you to the ones you love, with affordable prices and the most attractive bundles in the market. </p>
            </header>
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box red">
                  <span>
                    <img src="assets/img/ic5.svg?v1" />
                  </span>
                  <h3>4G Connection</h3>
                  <p> Comium is currently working on bringing the fastest and widest 4G coverage in the Gambia, by building its network towers in both the industrial and rural areas.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                  <span>
                    <img src="assets/img/ic1.svg?v1" />
                  </span>
                  <h3>KaCha</h3>
                  <p class="kasha-mobile">
                    D25: 100 minutes / 100 SMS <br>To subscribe, dial 155 <br><br>D50: 250 minutes / 500 SMS <br>To subscribe, dial 156 <br><br>D100: 600 minutes / 1000 SMS <br>To subscribe, dial 157<br><br> D200: 1400 minutes / 2000 SMS <br>To subscribe, dial 158
                    <br> <br> With Comium, your loyalty is always rewarded! Subscribe, and get the chance to win a TV or D1000 cash every week!
                  </p>

                  <p class="ran-kasha"> With Comium, your loyalty is always rewarded! Subscribe, and get the chance to win a TV or D1000 cash every week! </p>
                  <p class="ran-overlay">
                    D25: 100 minutes / 100 SMS <br>To subscribe, dial 155 <br><br>D50: 250 minutes / 500 SMS <br>To subscribe, dial 156 <br><br>D100: 600 minutes / 1000 SMS <br>To subscribe, dial 157<br><br> D200: 1400 minutes / 2000 SMS <br>To subscribe, dial 158
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box black">
                  <span>
                    <img src="assets/img/ic2.svg?v2" />
                  </span>
                  <h3>ISP / Internet Service Provider</h3>
                  <p class="isp-mobile">
                    We provide the fastest internet coverage in The Gambia with 2 main subscriptions:<br> - For businesses <br> - For individuals.<br><br>Call Comium centers on 111 for free to activate this service within 24 hours.<br>
                    Ayman Dergham Amine Lahoud min charje 30$
                  </p>

                  <p class="isp-random"> Call Comium centers on 111 for free to activate this service within 24 hours.<br>
                    Ayman Dergham Amine Lahoud min charje 30$
                  </p>
                  <p class="isp-overlay"> We provide the fastest internet coverage in The Gambia with 2 main subscriptions:<br> - For businesses <br> - For individuals. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Values Section ======= -->
        <section id="careers" class="values careers features">
          <div class="container feature-icons" data-aos="fade-up">
            <header class="section-header">
              <p style="    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #111921;">Join Comium! Join Our Family</p>
              <p class="padding-here" style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484;

              ">Become part of Comium, the telecom pioneer in The Gambia for over a decade, with a growing family of experts, as well as an expanding presence of shops and centers all around the country.</p>
            </header>
            <div class="row ">
              <div class="col-xl-10 offset-xl-2 d-flex content">
                <div class="row align-self-center gy-4 ">
                  <div class="col-md-6 icon-box  " data-aos="fade-up">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>DBA Engineer</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>

                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>Billing Engineer </h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>

                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>Senior System Engineer </h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4> HR Manager</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers"> Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4> HR Officer</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>Senior Radio Engineer</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>OCS Engineer</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/img/careers.svg?v1" style="height:60px">
                    <div style="margin:auto;margin-left:10px">
                      <h4>NOC Engineer</h4>
                      <p>
                        <a href="mailto:career@comium.gm" style="color:#848484;font-size:15px" class="hover-careers">Apply Here
                          <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Values Section -->
        <section class="carrousl">
          <div id="carousel-afric" class="slick-track">
            <div>
              <img src="assets/img/p1.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p2.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p3.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p4.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p5.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p6.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p7.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p8.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p9.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p10.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p11.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p12.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p13.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p14.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p15.png" class="img-responsive" />
            </div>
            <div>
              <img src="assets/img/p16.png" class="img-responsive" />
            </div>
          </div>
        </section>
        <!-- Modal Order Form -->
        <div id="comium-history" class="modal fade">
          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:700px">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="   
    font-weight: 700;
    color: #e1251b;text-align:center">Comium History</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Since May 2007, we have been providing unparalleled GSM services to our large Gambian family. Our innovative products led us to acquire a 25% market share in the first six months alone. Your trust in our services, and your loyalty to our brand made us want to push further to give you class A services all around. </p>
                <p> From traditional pre-paid and post-paid services, to pioneering mobile internet with GPRS, thus making internet accessible all over The Gambia, all the way to launching a Virtual Private Networking for businesses, everything we did was nothing but a small token of gratitude for your trust. </p>
                <p> Since September 2021, global leading Telecom company Monty Mobile took over the management of Comium, with the objective of enhancing its services through high-tech solutions and international expertise in providing Mobile Network Operate with cutting-edge services to increase their market share. </p>
                <p> Monty Mobile is a pioneering provider of mobile internet and services, offering a wide range of packages to fit the needs of Mobile Operators, businesses, enterprises, and even individuals. Built on the latest technologies and incorporating Artificial Intelligence and Machine Learning into its services, Monty Mobile thrives on innovation, and is sure to enhance the services of any Mobile Operator around the globe. </p>
                <p> Today, Comium is on its way to regain its place as one of the leading mobile operators in The Gambia. </p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- ======= F.A.Q Section ======= -->
        <!-- End F.A.Q Section -->
        <!-- ======= Team Section ======= -->
        <!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">
            <header class="section-header">
              <p style="    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #111921;">Contact Us</p>
              <p class="padding-here" style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484;

              ">Get in Touch!</p>
            </header>
            <div class="row gy-4">
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-geo-alt"></i>
                      <h3>Comium Headquarters</h3>
                      <p> 27 Kairaba Avenue <br />Pipeline,KSMD <br />Banjul-The Gambia </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-telephone"></i>
                      <h3>Number</h3>
                      <p> Tel: <a href="tel:+220 6 601601 " style="color:#444444" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#444444'">+220 6 601601 </a>
                        <br />Fax: <a href="tel:+220 6 601602" style="color:#444444" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#444444'">+220 6 601602 </a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-envelope"></i>
                      <h3>Email </h3>
                      <p>
                        <a href="mailto:info@comium.gm " style="color:#444444" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#444444'">info@comium.gm</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-clock"></i>
                      <h3>Our Shops Locations</h3>
                      <p>You are welcome to visit any of our shops to enquire about any product, service or offer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <form method="post" id="mailer-form" class="php-email-form">
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <input type="text" id="fname" class="form-control" placeholder="First Name" required />
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="lname" class="form-control" placeholder="Last Name" required />
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="company_name" class="form-control" placeholder="Company" required />
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" id="email" placeholder="Your Email" required />
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="fax" placeholder="Fax (Optional)">
                    </div>
                    <div class="col-md-12">
                      <select id="country" class="form-control" style="font-size:14px!important;color:gray;padding: 10px 15px;border-radius:0;appearance: none;
    background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2212%22%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%3E%3Ctitle%3Edown-arrow%3C%2Ftitle%3E%3Cg%20fill%3D%22%23000000%22%3E%3Cpath%20d%3D%22M10.293%2C3.293%2C6%2C7.586%2C1.707%2C3.293A1%2C1%2C0%2C0%2C0%2C.293%2C4.707l5%2C5a1%2C1%2C0%2C0%2C0%2C1.414%2C0l5-5a1%2C1%2C0%2C1%2C0-1.414-1.414Z%22%20fill%3D%22%23000000%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E);
    background-size: 1em;
    color:gray;
    background-position: calc(100% - 1.3em) center;
    background-repeat: no-repeat;">
                        <option>Country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Aland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and Mcdonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="XK">Kosovo</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthelemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="CS">Serbia and Montenegro</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.s.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="form-control" id="subject" placeholder="Subject" required />
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" id="message" rows="2" placeholder="Message" required></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message"> Your message has been sent. Thank you! </div>
                      <button type="submit" id="btn-mailer" value="Send An Email">Send message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- End Contact Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12 text-center">
                <h4>Customer Service </h4>
                <p class="padding-here" style="   
"> We, at Comium offer the best-in-class customer service. Our team of trained professionals is dedicated to you and always ready to assist you, answer all your enquiries, and explain any service or offer you need 24/7. </p>
              </div>
              <div class="col-lg-6" style="text-align: center;">
                <span style="color:#111921;cursor:unset"> Call Comium centers on <a href="tel:111" style="color:#E1251B!important;cursor:pointer!important">111 </a>for free </span>
                <span href="mailto:info@Comium.gm" style="color:#111921;cursor:unset">Or send us an email at <a href="mailto:info@Comium.gm" style="color:#E1251B!important;cursor:pointer!important">info@Comium.gm</a>
                </span>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-top" style="background:#f9f9f9">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                  <img src="assets/img/logo-rd.svg" alt="footer" style="    height: 37px; " />
                </a>
                <p> At Comium work in favor of making communications ever convenient for our subscribers </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter">
                    <i class="bi bi-twitter"></i>
                  </a>
                  <a href="#" class="facebook">
                    <i class="bi bi-facebook"></i>
                  </a>
                  <a href="#" class="instagram">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="linkedin">
                    <i class="bi bi-linkedin"></i>
                  </a>
                </div>
              </div>
              <!-- <div class="col-lg-3 col-12 footer-links  text-center text-md-start">
                  <h4>Useful Links</h4>
                  <ul>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <a href="#products">Products & Services</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <a href="#about">About</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <a href="#careers">Careers</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <a href="#contact">Contact</a>
                    </li>
                  </ul>
                </div> -->

              <div class="col-lg-3 col-md-12 footer-contact  text-md-start">
                <h4>Useful Links</h4>
                <ul class="no-bullets">
                  <li>
                    <i class="bi bi-chevron-right"></i>
                    <a href="#products">Products & Services</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i>
                    <a href="#about">About</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i>
                    <a href="#careers">Careers</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i>
                    <a href="#contact">Contact</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i>
                    <a href="/press-release">Press Release</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-12 footer-contact  text-md-start">
                <h4>Contact Us</h4>
                <p> 27 Kairaba Avenue <br /> Pipeline,KSMD <br /> Banjul-The Gambia <br />
                  <strong>Phone:</strong>
                  <a href="tel:+220 6 601601 " style="color:black" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">+220 6 601601 </a>
                  <br />
                  <strong>Email:</strong>
                  <a href="mailto:info@comium.gm " style="color:black" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">info@comium.gm</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright"> &copy; Copyright <strong>
              <span>Comium</span>
            </strong>. All Rights Reserved </div>
          <div class="credits"></div>
        </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
      </a>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main.js?v1"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script>
        $("#carousel-afric").slick({
          slidesToShow: 5,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 2000,
          cssEase: "linear",
          infinite: true,
          focusOnSelect: true,
          dots: false,
          prevArrow: false,
          nextArrow: false,
          responsive: [{
            breakpoint: 768,
            settings: {
              arrows: false,
              slidesToShow: 3,
            },
          }, {
            breakpoint: 480,
            settings: {
              arrows: false,
              slidesToShow: 1,
            },
          }, ],
        });
      </script>
</body>
<!-- <script>
    $(document).ready(function() {
      $(".promotions-carousel").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 1,
        columns: 3,
        arrows: true,
        dots: true,
        prevArrow: true,
        nextArrow: true,
        
        responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }, {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }]
      });
    });
  </script> -->

</html>
<script type="text/javascript">
  $('#btn-mailer').on('click', function(e) {
    $("#loader").addClass("fa fa-refresh fa-spin");
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var company = $("#company_name").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var phone = jQuery("input[type='number']").val();
    var fax = jQuery("input[type='number']").val();
    var email = jQuery("input[type='email']").val();
    var country = $("#country option:selected").text();
    if ((fname != '') && (lname != '') && (email != '')) {
      $.ajax({
        type: 'POST',
        url: "sendEmail.php",
        data: {
          fname: fname,
          lname: lname,
          email: email,
          message: message,
          subject: subject,
          company: company,
          phone: phone,
          fax: fax,
          country: country
        },
        dataType: 'json',
        success: function(data) {
          $("#mailer-form").trigger("reset");
        },
        error: function(xhr) {
          console.log('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
          $("#mailer-form").trigger("reset");
        }
      });
    }
    e.preventDefault();
  });
</script>
<script>
  window.onload = function() {
    // register the scrolltrigger pluger with GSAP
    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".scrolldiv__image", {
      opacity: 0,
      scrollTrigger: {
        trigger: "#scrolldiv",
        start: "top top",
        end: "bottom top",
        pin: true, // pin the trigger element
        // scrub: true, // link the image fade to the scroll
        markers: false,
      },
    });
  };
</script>
<script>
  var swiper = new Swiper(".promo-swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,

    },
  });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>