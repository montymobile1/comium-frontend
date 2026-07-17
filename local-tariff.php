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
    <title>Comium - Local Tariff</title>
    <meta name="description" content="View Comium Gambia's local call and SMS tariffs." />
    <meta name="keywords" content="Comium, local tariff, call rates, SMS rates, Gambia" />

    <link href="assets/img/logo-rd.svg" rel="icon" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons-new/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/style.css?v36" rel="stylesheet" />
    <link href="assets/css/main.css?v57" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Comium Local Tariff" />
    <meta property="og:description" content="View Comium Gambia's local call and SMS tariffs." />
    <meta property="og:url" content="https://comium.gm/local-tariff" />
    <meta property="og:site_name" content="Comium" />

    <style>
        .local-tariff-section {
            min-height: calc(100vh - 200px);
            padding: 140px 0 80px;
            background:
                radial-gradient(circle at top left, rgba(225, 37, 27, 0.1), transparent 35%),
                linear-gradient(180deg, #ffffff 0%, #fff7f6 100%);
            font-family: "Poppins", sans-serif;
            color: #222222;
        }

        .local-tariff-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 18px;
            border-radius: 999px;
            background: rgba(225, 37, 27, 0.1);
            color: #e1251b;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .local-tariff-title {
            font-size: clamp(34px, 5vw, 56px);
            line-height: 1.08;
            font-weight: 800;
            color: #161616;
        }

        .local-tariff-description {
            max-width: 720px;
            margin-right: auto;
            margin-left: auto;
            font-size: 18px;
            line-height: 1.7;
            color: #666666;
        }

        .tariff-card {
            height: 100%;
            padding: 28px;
            border: 1px solid rgba(225, 37, 27, 0.12);
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 15px 40px rgba(28, 28, 28, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .tariff-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 48px rgba(28, 28, 28, 0.12);
        }

        .tariff-icon {
            display: inline-flex;
            width: 52px;
            height: 52px;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            border-radius: 16px;
            background: rgba(225, 37, 27, 0.1);
            color: #e1251b;
            font-size: 24px;
        }

        .tariff-service {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: 700;
            color: #1e1e1e;
        }

        .tariff-detail {
            min-height: 52px;
            margin-bottom: 22px;
            color: #666666;
            line-height: 1.6;
        }

        .tariff-rate {
            display: flex;
            align-items: baseline;
            gap: 8px;
            padding-top: 18px;
            border-top: 1px solid #eeeeee;
            color: #e1251b;
        }

        .tariff-rate strong {
            font-size: 32px;
            font-weight: 800;
        }

        .tariff-rate span {
            color: #777777;
            font-size: 14px;
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .local-tariff-section {
                padding: 115px 0 55px;
            }

            .local-tariff-description {
                font-size: 16px;
            }

            .tariff-card {
                padding: 24px;
            }

            .tariff-detail {
                min-height: auto;
            }
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo-rd.svg" alt="Comium" style="height: 74px; padding: 20px 0;" />
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#about">About</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#products">Products &amp; Services</a>
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
                        <a class="nav-link scrollto hover-careers" href="/#careers">Careers</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto hover-careers" href="/#contact">Contact</a>
                    </li>
                    <li>
                        <a class="nav-link standout" href="/mycomium-app">MyComium Self-care APP</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main>
        <section class="local-tariff-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-9 text-center">
                        <span class="local-tariff-badge">Local Tariff</span>
                        <h1 class="local-tariff-title mt-3 mb-3">Simple, transparent local rates</h1>
                        <p class="local-tariff-description mb-0">
                            Stay connected with clear rates for local calls and SMS services on the Comium network and across other national operators.
                        </p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <article class="tariff-card">
                            <div class="tariff-icon" aria-hidden="true">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h2 class="tariff-service">On-net Calls</h2>
                            <p class="tariff-detail">Calls from Comium to Comium.</p>
                            <div class="tariff-rate">
                                <strong>D2.40</strong>
                                <span>per minute</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <article class="tariff-card">
                            <div class="tariff-icon" aria-hidden="true">
                                <i class="bi bi-telephone-outbound"></i>
                            </div>
                            <h2 class="tariff-service">Off-net Calls</h2>
                            <p class="tariff-detail">National calls from Comium to other operators.</p>
                            <div class="tariff-rate">
                                <strong>D2.80</strong>
                                <span>per minute</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <article class="tariff-card">
                            <div class="tariff-icon" aria-hidden="true">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h2 class="tariff-service">On-net SMS</h2>
                            <p class="tariff-detail">National SMS from Comium to Comium.</p>
                            <div class="tariff-rate">
                                <strong>D0.40</strong>
                                <span>per SMS</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <article class="tariff-card">
                            <div class="tariff-icon" aria-hidden="true">
                                <i class="bi bi-chat-right-text"></i>
                            </div>
                            <h2 class="tariff-service">Off-net SMS</h2>
                            <p class="tariff-detail">National SMS from Comium to other operators.</p>
                            <div class="tariff-rate">
                                <strong>D1.10</strong>
                                <span>per SMS</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <article class="tariff-card">
                            <div class="tariff-icon" aria-hidden="true">
                                <i class="bi bi-globe2"></i>
                            </div>
                            <h2 class="tariff-service">International SMS</h2>
                            <p class="tariff-detail">SMS sent from Comium to an international number.</p>
                            <div class="tariff-rate">
                                <strong>D3.30</strong>
                                <span>per SMS</span>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="footer-top" style="background:#f9f9f9">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="/" class="logo d-flex align-items-center">
                            <img src="assets/img/logo-rd.svg" alt="Comium" style="height: 37px;" />
                        </a>
                        <p>At Comium, we work to make communications ever more convenient for our subscribers.</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/ComiumGm" target="_blank" rel="noopener noreferrer" class="twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="https://www.facebook.com/Comium.Gambia" target="_blank" rel="noopener noreferrer" class="facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/comium.gm/" target="_blank" rel="noopener noreferrer" class="instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/comium-gambia/" target="_blank" rel="noopener noreferrer" class="linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-md-start useful-link">
                        <h4>Useful Links</h4>
                        <ul class="no-bullets">
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/#products">Products &amp; Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/#about">About</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/#careers">Careers</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/#contact">Contact</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/press-release">Press Release</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            27 Kairaba Avenue<br />
                            Pipeline, KSMD<br />
                            Banjul-The Gambia<br />
                            <strong>Monday to Friday:</strong> 8:30 AM - 5:00 PM<br />
                            <strong>Saturday:</strong> 9:00 AM - 2:00 PM<br />
                            <strong>Phone:</strong>
                            <a href="tel:+2206601111" style="color:black">+220 6 601 111</a><br />
                            <strong>Email:</strong>
                            <a href="mailto:info@comium.gm" style="color:black">info@comium.gm</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Comium</span></strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" aria-label="Back to top">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v9"></script>
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

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
