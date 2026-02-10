<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <base href="/" />
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
    <title>Comium - International Roaming</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="robots" content=”noindex”>
    <!-- Favicons -->
    <link href="assets/img/logo-rd.svg" rel="icon" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!--<link rel="stylesheet" href="https://use.typekit.net/yfw8tzl.css" />-->
    <!--<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />-->
    <link href="assets/vendor/bootstrap-icons-new/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?v36" rel="stylesheet" />
    <link href="assets/css/main.css?v57" rel="stylesheet" />
    <link href="assets/css/data-bundles.css?v=3" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="assets/css/slick.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

    <link href="assets/international-roaming/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/international-roaming/style.css" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo-rd.svg" alt="comium" style="    height: 74px;padding: 20px 0px;" />
                <!-- <span>FlexStart</span> -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#about">About <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#products">Products & Services <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown ip-dropdown">
                        <a
                            class="nav-link ip-trigger"
                            href="#"
                            id="internationalProductsDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span>International Products</span>

                            <!-- Chevron -->
                            <svg class="ip-chevron" style="visibility: visible;" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M6 9l6 6 6-6"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>

                        <ul class="dropdown-menu ip-menu" aria-labelledby="internationalProductsDropdown">
                            <li><a class="dropdown-item" style="margin:0;background:none;" href="/international-direct-dialing">International Direct Dialing</a></li>
                            <li><a class="dropdown-item" style="margin:0;background:none;" href="/international-roaming">International Roaming</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#careers">Careers <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#contact">Contact <svg class="careers-svg" width="19" height="19" viewBox="0 0 19 19" stroke="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.125 14.25L11.875 9.5L7.125 4.75" fill="transparent" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <?php
    $country = $_GET['country'] ?? null;
    $data = [];
    $data['saudi-arabia'] = [
        'image' => 'saudi-bg.webp',
        'flag' => 'saudi.webp',
        'title' => 'Saudi Arabia',
        'marquee' => false,
        'description' => 'Dial *966# and follow the instruction',
        'plans' => [
            [
                'activation' => 'Activation USSD',
                'number' => '*966*1*1#',
                'quota' => '100 MB',
                'days' => 'For 3 Days',
                'price' => 'D 49'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*966*1*2#',
                'quota' => '500 MB',
                'days' => 'For 15 Days',
                'price' => 'D 99'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*966*1*3#',
                'quota' => '1 GB',
                'days' => 'For 15 Days',
                'price' => 'D 199'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*966*1*4#',
                'quota' => '1 GB (15 Min + 15 SMS)',
                'days' => 'For 15 Days',
                'price' => 'D 999'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*966*1*5#',
                'quota' => '3 GB (30 Min + 30 SMS)',
                'days' => 'For 30 Days',
                'price' => 'D 1,999'
            ],

        ],
        'extra' => '<h5>Offer Business Rules</h5><ul><li>Offer is for Prepaid customers</li><li>Voice Charging is 60Sec and data charging is 10KB pulse
                    </li><li>Voice Minutes are valid for: Incoming Calls. Call Back to Gambia & Call to Local (KSA)</li><li>To use mobile data while roaming, prepaid users should set their handset APN to: <strong>internet</strong></li><li>For Remaining bundle resources inquiry, customer has to dial *101#</li><li>After consumption of resources user will charge as per PAYG rate</li><li>Multiple subscription will allow; but customer will get maximum expiry as per the bundle/bucket</li></ul>'
    ];

    $data['senegal'] = [
        'image' => 'senegal-bg.webp',
        'flag' => 'senegal.webp',
        'title' => 'Senegal',
        'description' => 'Before traveling to Senegal, please dial *221# to activate free roaming service for Senegal',
        'marquee' => true,
        'plans' => [
            [
                'activation' => 'Activation USSD',
                'number' => '*221*2#',
                'quota' => '100 MB',
                'days' => 'For 3 Days',
                'price' => 'D 49'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*221*3#',
                'quota' => '500 MB',
                'days' => 'For 15 Days',
                'price' => 'D 99'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*221*4#',
                'quota' => '1 GB',
                'days' => 'For 15 Days',
                'price' => 'D 199'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*221*5#',
                'quota' => '1 GB (15 Min + 15 SMS)',
                'days' => 'For 15 Days',
                'price' => 'D 999'
            ],
            [
                'activation' => 'Activation USSD',
                'number' => '*221*6#',
                'quota' => '3 GB (30 Min + 30 SMS)',
                'days' => 'For 30 Days',
                'price' => 'D 1,999'
            ],

        ],
        'extra' => '<h5>Terms & Conditions</h5><ul><li>This offer is valid for Prepaid customers only.</li><li>Bundle Free Minutes are only valid for Incoming Call, Call in Senegal & Call Back to Gambia.</li><li>To use mobile data while roaming, prepaid users should set their handset APN to: <strong>internet</strong></li><li>For Remaining bundle resources inquiry, customer has to dial *101#.</li><li>Multiple subscription of bundle is allowed; but expiry of bundle will be as per the latest bundle.</li><li>Above mentioned bundle prices are tax 22.50% included</li><li>Above bundle and bucket are only valid for Senegal preferred operator.</li></ul>'
    ];
    $current = $data[$country];
    ?>
    <section class="mt-5">
        <div class="container">
            <p><a href="/international-roaming/roaming-bundles">Roaming bundles</a> > <span><?= $current['title'] ?><span></p>
        </div>
        <div class="custom-container">
            <div class="bundle-container">
                <div class="bundle-image">
                    <img src="assets/international-roaming/<?= $current['image'] ?>" />
                </div>
                <div class="bundle-information">
                    <a style="margin-bottom:30px;display:block;color:black" href="/international-roaming/roaming-bundles">
                        <svg style="margin-top:-1px;margin-right:3px;" width="15px" height="15px" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <style type="text/css">
                                .st0 {
                                    fill: #000000;
                                }
                            </style>

                            <g id="Layer_1" />

                            <g id="Layer_2">

                                <g>

                                    <path class="st0" d="M217,129.88c-6.25-6.25-16.38-6.25-22.63,0L79.61,244.64c-0.39,0.39-0.76,0.8-1.11,1.23    c-0.11,0.13-0.2,0.27-0.31,0.41c-0.21,0.28-0.42,0.55-0.62,0.84c-0.14,0.21-0.26,0.43-0.39,0.64c-0.14,0.23-0.28,0.46-0.41,0.7    c-0.13,0.24-0.24,0.48-0.35,0.73c-0.11,0.23-0.22,0.45-0.32,0.68c-0.11,0.26-0.19,0.52-0.28,0.78c-0.08,0.23-0.17,0.46-0.24,0.69    c-0.09,0.29-0.15,0.58-0.22,0.86c-0.05,0.22-0.11,0.43-0.16,0.65c-0.08,0.38-0.13,0.76-0.17,1.14c-0.02,0.14-0.04,0.27-0.06,0.41    c-0.11,1.07-0.11,2.15,0,3.22c0.01,0.06,0.02,0.12,0.03,0.18c0.05,0.46,0.12,0.92,0.21,1.37c0.03,0.13,0.07,0.26,0.1,0.39    c0.09,0.38,0.18,0.76,0.29,1.13c0.04,0.13,0.09,0.26,0.14,0.4c0.12,0.36,0.25,0.73,0.4,1.09c0.05,0.11,0.1,0.21,0.15,0.32    c0.17,0.37,0.34,0.74,0.53,1.1c0.04,0.07,0.09,0.14,0.13,0.21c0.21,0.38,0.44,0.76,0.68,1.13c0.02,0.03,0.04,0.06,0.06,0.09    c0.55,0.81,1.18,1.58,1.89,2.29l114.81,114.81c3.12,3.12,7.22,4.69,11.31,4.69s8.19-1.56,11.31-4.69c6.25-6.25,6.25-16.38,0-22.63    l-87.5-87.5h291.62c8.84,0,16-7.16,16-16s-7.16-16-16-16H129.51L217,152.5C223.25,146.26,223.25,136.13,217,129.88z" />

                                </g>

                            </g>

                        </svg>Back</a>
                    <div class="flag-container">
                        <img src="assets/international-roaming/<?= $current['flag'] ?>" />
                        <div>
                            <h4><?= $current['title'] ?></h4>
                            <?php if ($current['marquee']): ?>
                                <marquee>
                                    <h5 class="red-text"><?= $current['description'] ?> ★ <?= $current['description'] ?> ★ <?= $current['description'] ?> ★ <?= $current['description'] ?> ★ <?= $current['description'] ?></h5>
                                </marquee>
                            <?php else: ?>
                                <h5><?= $current['description'] ?></h5>
                            <?php endif; ?>

                            </marquee>
                        </div>
                    </div>
                    <div class="plans d-none d-sm-flex">
                        <?php $plans = $current['plans']; ?>
                        <?php foreach ($plans as $plan): ?>
                            <div class="plan">
                                <div class="plan-info">
                                    <div class="plan-white">
                                        <p class="red-text"><?= $plan['activation'] ?></p>
                                        <h4><?= $plan['number'] ?></h4>
                                    </div>
                                    <div class="plan-extra">
                                        <h3><?= $plan['quota'] ?></h3>
                                        <p><?= $plan['days'] ?></p>
                                    </div>
                                </div>
                                <div class="plan-price">
                                    <h6 class="red-text"><?= $plan['price'] ?></h6>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="plans only-mobile d-flex d-sm-none">
                        <?php $plans = $current['plans']; ?>
                        <?php foreach ($plans as $plan): ?>
                            <div class="plan">
                                <div class="plan-extra">
                                    <h3><?= $plan['quota'] ?></h3>
                                    <p><?= $plan['days'] ?></p>
                                </div>
                                <div>
                                    <div class="plan-white">
                                        <p class="red-text"><?= $plan['activation'] ?></p>
                                        <h4><?= $plan['number'] ?></h4>
                                    </div>
                                    <div class="plan-price">
                                        <h6 class="red-text"><?= $plan['price'] ?></h6>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="extra-info">
                        <?= $current['extra'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="footer">

        <div class="footer-top" style="background:#f9f9f9">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo-rd.svg" alt="footer" style="    height: 37px; " />
                        </a>
                        <p> At Comium work in favor of making communications ever convenient for our subscribers </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/ComiumGm" target="_blank" class="twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="https://www.facebook.com/Comium.Gambia" target="_blank" class="facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/comium.gm/" target="_blank" class="instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/comium-gambia/" target="_blank" class="linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact  text-md-start useful-link">
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
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact  text-md-start">
                        <h4>Contact Us</h4>
                        <p> 27 Kairaba Avenue <br /> Pipeline,KSMD <br /> Banjul-The Gambia <br />
                            <strong>Monday</strong> to <strong>Friday</strong> 8:30 AM - 5:00 PM</strong> <br />
                            <strong>Saturday:</strong> 9:00 AM - 2:00 PM <br />
                            <strong>Phone:</strong>
                            <a href="tel:+220 6 601 111" style="color:black" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">+220 6 601 111</a>
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
    <script src="assets/js/main.js?v9"></script>
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/mixall.js?v10"></script>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/international-roaming/select2.min.js"></script>
    <script src="assets/international-roaming/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XJHHRG8NCG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-XJHHRG8NCG');
    </script>
</body>

</html>