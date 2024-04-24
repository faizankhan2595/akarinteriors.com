<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Akar Interiors Turnkey Solutions">
    <meta name="description" content="Akar Interiors Turnkey Solutions">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Akar Interiors Turnkey Solutions</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../common/assets/img/fav2.png" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="../common/assets/css/lib/bootstrap.min.css">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="../common/assets/css/lib/all.min.css">
    <!-- themify icons  -->
    <link rel="stylesheet" href="../common/assets/css/lib/themify-icons.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="../common/assets/css/lib/animate.css">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="../common/assets/css/lib/jquery.fancybox.css">
    <!-- lity popup  -->
    <link rel="stylesheet" href="../common/assets/css/lib/lity.css">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="../common/assets/css/lib/swiper8.min.css">

    <!-- common style -->
    <link rel="stylesheet" href="../common/assets/css/common_style.css">

    <!-- home style -->
    <link rel="stylesheet" href="assets/css/home_2_style.css">
</head>

<body class="home-style2">

    <!-- ====== Start Loading ====== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!--  start side_menu  -->
    <!--  End side_menu  -->

    <div class="smooth-scroll-content" id="scrollsmoother-container">

        <!--  Start navbar  -->
        @include('layouts.header')
        <!--  End navbar  -->

        <!--Contents-->
        <main>
            <section class="tc-process-style2">
                <div class="container">
                    <h2 class="fsz-45 fw-500 mb-20 text-center"> About  <span class="sub-font fst-italic color-orange1 fw-400"> Us!  </span> </h2>
                    <p class="color-orange1 text-center mb-30"> Redefining Luxury Workspaces to Meet Functionality </p>
                    <div class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion-side wow fadeInUp slow">
                                    <div class="accordion" id="accordionProcess">
                                        <div class="accordion-item">
                                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                                <div class="accordion-body pt-4 pr-3">
                                                    <div class="text">
                                                    We specialise in creating inspiring spaces that adds a sense of luxury and refinement, elevating everyday living to extraordinary experiences. All our projects and work are accomplished with our drive for uniformity, simplicity, discipline, and punctuality. Experience the benefits of partnering with Akar Interiors today.
                                                    <br/>
                                                    <br/>
                                                    <strong>Vision</strong>
                                                    <br/>
                                                    <br/>
                                                    To lead the luxury interior and contracting industry by revolutionising it with seamlessly integrated turnkey solutions 
                                                    <br/>
                                                    <br/>
                                                    <strong>Mission</strong>
                                                    <br/>
                                                    <br/>
                                                    To exceed client expectations with high ethical standards and exceptional experiences, upholding a commitment to excellence.
                                                    <br/>
                                                    <br/>
                                                    <strong>Philosophy</strong>
                                                    <br/>
                                                    <br/>
                                                    To foster lasting relationships through a blend of traditional values and innovative ideas, prioritising collaboration and customer satisfaction.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <a href="#" class="butn bg-white rounded-pill mt-50 hover-bg-black">
                                        <span> Get A Free Quotes <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/prc_bg.png" alt="" class="bg" data-speed="1.2">
            </section>

        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        @include('layouts.footer')
        <!--  End footer  -->

    </div>

    <!--  request  -->
    <script src="../common/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="../common/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="../common/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../common/assets/js/lib/wow.min.js"></script>
    <script src="../common/assets/js/lib/jquery.fancybox.js"></script>
    <script src="../common/assets/js/lib/lity.js"></script>
    <script src="../common/assets/js/lib/swiper8-bundle.min.js"></script>
    <script src="../common/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="../common/assets/js/lib/jquery.counterup.js"></script>
    <script src="../common/assets/js/lib/parallaxie.js"></script>
    <!-- === Gsap === -->
    <script src="../common/assets/js/gsap_lib/gsap.min.js"></script>
    <script src="../common/assets/js/gsap_lib/ScrollSmoother.min.js"></script>
    <script src="../common/assets/js/gsap_lib/ScrollTrigger.min.js"></script>
    <script src="../common/assets/js/gsap_lib/SplitText.min.js"></script>
    <!-- === common === -->
    <script src="../common/assets/js/common_js.js"></script>

    <!-- ===== home scripts ===== -->
    <script src="assets/js/home_2_scripts.js"></script>

</body>

</html>