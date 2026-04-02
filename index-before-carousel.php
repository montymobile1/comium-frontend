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
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!--<link rel="stylesheet" href="https://use.typekit.net/yfw8tzl.css" />-->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v5" rel="stylesheet" />
  <style>
    /* .popover {
        --bs-popover-max-width: 600px;
        --bs-popover-body-color: #848484;
      } */
    .about .content {
      /* background-color: #f9f9f9; */
      background: linear-gradient(90deg,
          rgba(249, 249, 249, 1) 85%,
          rgba(255, 255, 255, 1) 100%);
      padding: 40px;
      padding-right: 200px;
    }

    .about img {
      /* width: 100%; */
      margin-left: -200px;
    }

    .header.header-scrolled {
      padding: 0 !important;
    }

    .slick-track .slick-slide {
      display: flex !important;
      height: auto !important;
      align-items: flex-end !important;
      justify-content: center !important;
    }

    .slick-track {
      display: flex !important;
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
  </style>
</head>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<link href="assets/css/slick.min.css" rel="stylesheet" />

<body>
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
            <a class="nav-link scrollto" href="#products">Products & Services</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#about">About</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#careers">Careers</a>
          </li>
          <li>
          <li>
            <a class="nav-link scrollto" href="#contact">Contact</a>
          </li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <script src="assets/js/rocket.js"></script>
  <div class="main-banner">
    <div class="scrolldiv" id="scrolldiv">
      <div id="img_container" style="min-height: 100vh !important">
        <canvas id="img_canvas"></canvas>
      </div>
      <div class="container-fluid scrolldiv__text">
        <div id="video-overlay">
          <div class="container">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h1>
                <span style="
                      font-size: 90px;
                      font-weight: 700 !important;
                      line-height: 0.8;
                    ">YOUR <span style="color: #E1251B; font-weight: 700 !important">GO-TO</span>
                </span>
                <span style="font-size: 40px; font-weight: 600 !important">TELECOM SERVICE PROVIDER</span>
              </h1>
              <h2 style="font-size: 30px"> As we take on new challenges, our team has extensive expertise <span style="font-weight: 500">the best telecom services.</span> As we take on new challenges, our team has extensive expertise </h2>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      const scrollimage = new ScrollPlay({
        speed: 8,
        container: "img_container",
        canvas: "img_canvas",
        sequence: "assets/img/rocket8/",
        frames: 211,
      });
    </script>
  </div>
  <main id="main">
    <section id="products" class="services">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>  Products & Services</p>
          <p style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484; 
                padding:0% 25%
              "> Our products are here to connect you to the ones you love, with affordable prices and the most attractive bundles in the market. </p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box red">
              <span>
                <img src="assets/img/ic5.svg?v1" />
              </span>
              <h3>4G Connection</h3>
              <p> Comium is currently working on bringing the fastest and widest 4G coverage in the Gambia, by building its network towers in both the industrial and rural areas. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <span>
                <img src="assets/img/ic1.svg?v1" />
              </span>
              <h3>KaCha</h3>
              <p class="ran-kasha">
                With Comium, your loyalty is always rewarded!
                Subscribe, and get the chance to win a TV or D1000 cash every week! </p>

              <p class="ran-overlay"> D25: 100 minutes / 100 SMS To subscribe, dial 155 D50: 250 minutes / 500 SMS To subscribe, dial 156 D100: 600 minutes / 1000 SMS To subscribe, dial 157 D200: 1400 minutes / 2000 SMS To subscribe, dial 158

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box black">
              <span>
                <img src="assets/img/ic2.svg?v2" />
              </span>
              <h3>ISP / Internet Service Provider</h3>
              <p class="isp-random"> Call Comium centers on XXX for free to activate this service within 24 hours. </p>
              <p class="isp-overlay"> We provide the fastest internet coverage in The Gambia with 2 main subscriptions: - For businesses - For individuals. Call Comium centers on XXX for free to activate this service within 24 hours. </p>

            </div>
          </div>
        </div>
        <!-- 
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="700"
            ><div class="service-box pink"><span><img src="assets/img/ic4.svg" /></span><h3>EPL News Update</h3><p>
                  With our new English Premier League News Update Service,
                  Comium subscribers can now get SMS alert of goals, daily
                  scores updates, team news, during the entire 2010 football
                  season.
                </p><a href="#" class="read-more"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a></div></div><div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            ><div class="service-box blue"><span><img src="assets/img/ic5.svg" /></span><h3>Roaming</h3><p>
                  Home can follow you everywhere thanks to our roaming services.
                  Every subscriber can enjoy our roaming facility and make
                  national or international calls while abroad.
                </p><a href="#" class="read-more"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a></div></div> -->
      </div>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding-top: 30px !important">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2></h2>
          <p style="    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #111921;">  About Us</p>
          <p style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484; 
                padding:0% 25%
              "> Our products are here to connect you to the ones you love, with affordable prices and the most attractive bundles in the market. </p>
        </header>
        <div class="row gx-0">
          <div class="col-lg-9 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <p> Human connections have always been at the center of our reality, and so new platforms and tools are created using innovative technologies in order to serve that goal. We, at Comium work in favor of making communications ever convenient for our subscribers, by offering cutting-edge telecom services using the latest technologies and discoveries in the field. As the world keeps evolving and new trends and discoveries are happening by the minute, we promise to stay up to the beat by upgrading our services and boosting our pace to offer you the best telecom services in The Gambia, backed by our professional team of experts. <br />
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#comium-history" data-ticket-type="standard-access" style=" margin-top:25px;      font-size: 14px;
    font-weight: 700;
    color: #e1251b;
    
    color: #E1251B;padding:0">Comium History</button>
              </p>
            </div>
            <div class="row gx-0 py-1">
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                  <h3>Mission</h3>
                  <p> To increase customer satisfaction and gain their loyalty and trust by providing our subscribers with top services and wide coverage all around The Gambia. </p>
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
          <div class="col-lg-3 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/family.png?v1" alt="" width="500" />
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Values Section ======= -->
    <section id="careers" class="values features">
      <div class="container feature-icons" data-aos="fade-up">
        <header class="section-header">
          <p style="    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #111921;">Join Comium! Join Our Family</p>
          <p style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484;
                                padding:0% 25%

              ">Become part of Comium, the telecom pioneer in The Gambia for over a decade, with a growing family of experts, as well as an expanding presence of shops and centers all around the country.</p>
        </header>
        <div class="row">
          <div class="col-xl-12 d-flex content">
            <div class="row align-self-center gy-4">
              <div class="col-md-6 icon-box" data-aos="fade-up">
                <!-- <i class="ri-line-chart-line"></i> -->
                <div>
                  <h4>DBA ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <!-- <i class="ri-stack-line"></i> -->
                <div>
                  <h4>BILLING ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <!-- <i class="ri-brush-4-line"></i> -->
                <div>
                  <h4>SENIOR SYSTEM ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <!-- <i class="ri-magic-line"></i> -->
                <div>
                  <h4> HR MANAGER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <!-- <i class="ri-command-line"></i> -->
                <div>
                  <h4> HR OFFICER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <!-- <i class="ri-radar-line"></i> -->
                <div>
                  <h4>SENIOR RADIO ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <!-- <i class="ri-radar-line"></i> -->
                <div>
                  <h4>OCS ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
                  </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <!-- <i class="ri-radar-line"></i> -->
                <div>
                  <h4>NOC ENGINEER</h4>
                  <p>
                    <a href="mailto:career@comium.gm">Apply here</a>
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
            <p> Since May 2007, we have been providing unparalleled GSM services to our large Gambian family. Our innovative products led us to acquire a 25% market share in the first six months alone. Your trust in our services, and your loyalty to our brand made us want to push further to give you class A services all around. </p>
            <p>From traditional pre-paid and post-paid services, to pioneering mobile internet with GPRS, thus making internet accessible all over The Gambia, all the way to launching a Virtual Private Networking for businesses, everything we did was nothing but a small token of gratitude for your trust. </p>
            <p>Since September 2021, global leading Telecom company Monty Mobile took over the management of Comium, with the objective of enhancing its services through high-tech solutions and international expertise in providing Mobile Network Operate with cutting-edge services to increase their market share. </p>
            <p>Monty Mobile is a pioneering provider of mobile internet and services, offering a wide range of packages to fit the needs of Mobile Operators, businesses, enterprises, and even individuals. Built on the latest technologies and incorporating Artificial Intelligence and Machine Learning into its services, Monty Mobile thrives on innovation, and is sure to enhance the services of any Mobile Operator around the globe. </p>
            <p>Today, Comium is on its way to regain its place as one of the leading mobile operators in The Gambia. </p>
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
          <p style="
                margin: 15px 0 30px 0;
                line-height: 24px;
                font-weight: 400;
                font-size: 17px;
                color: #848484;
                                padding:0% 25%

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
                  <p>Tel: +220 6 601601 <br />Fax: +220 6 601602 </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email </h3>
                  <p>info@comium.gm</p>
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
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required />
                </div>
                <div class="col-md-6">
                  <input type="text" name="lname" class="form-control" placeholder="last Name" required />
                </div>
                <div class="col-md-6">
                  <input type="text" name="company_name" class="form-control" placeholder="Company" required />
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="email" placeholder="Your Email" required />
                </div>
                <!-- <div class="col-md-6"><select id="country" name="country"><option>country</option><option value="Afghanistan">Afghanistan</option><option value="Aland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua & Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option><option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo - Brazzaville</option><option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Côte d’Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czechia</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option><option value="Holy See (Vatican City State)">Vatican City</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">North Korea</option><option value="Korea, Republic of">South Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia</option><option value="Moldova, Republic of">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Curaçao</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Barthelemy">St. Barthélemy</option><option value="Saint Helena">St. Helena</option><option value="Saint Kitts and Nevis">St. Kitts & Nevis</option><option value="Saint Lucia">St. Lucia</option><option value="Saint Martin">St. Martin</option><option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option><option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">São Tomé & Príncipe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Serbia and Montenegro">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option><option value="Swaziland">Eswatini</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syria</option><option value="Taiwan, Province of China">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad & Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks & Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">U.S. Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Vietnam</option><option value="Virgin Islands, British">British Virgin Islands</option><option value="Virgin Islands, U.s.">U.S. Virgin Islands</option><option value="Wallis and Futuna">Wallis & Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></div><div class="col-md-6"><input type="number" class="form-control" name="number" placeholder="Contact Number:" required /></div> -->
                <div class="col-md-6">
                  <input type="mobile" class="form-control" name="mobile" placeholder="Mobile:" required />
                </div>
                <div class="col-md-6">
                  <input type="fax" class="form-control" name="fax" placeholder="Fax:" required />
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message"> Your message has been sent. Thank you! </div>
                  <button type="submit">Send Message</button>
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
            <p style="                padding:0% 25%
"> We, at Comium offer the best-in-class customer service. Our team of trained professionals is dedicated to you and always ready to assist you, answer all your enquiries, and explain any service or offer you need 24/7. </p>
          </div>
          <div class="col-lg-6" style="text-align: center;">
            <a href="tel:xxx" style="color:#111921;margin:0 10px">Call Comium centers on <span style="color:#E1251B!important">XXX </span>for free </a>
            <a href="mailto:info@Comium.gm" style="color:#111921">send us an email at <span style="color:#E1251B!important">info@Comium.gm</span>
            </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo-rd.svg" alt="footer" style="    height: 37px;
    " />
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
          <div class="col-lg-2 col-6 footer-links">
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
              <li>
                <i class="bi bi-chevron-right"></i>
                <a href="/press-release">Press Release</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 footer-links"></div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p> 27 Kairaba Avenue <br /> Pipeline,KSMD <br /> Banjul-The Gambia <br />
              <strong>Phone:</strong> <a href="tel:+220 6 601601 " style="color:black">+220 6 601601 </a><br />
              <strong>Email:</strong> <a href="mailto:info@comium.gm " style="color:black">info@comium.gm</a>
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
  <script src="assets/js/main.js"></script>
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

</html>
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