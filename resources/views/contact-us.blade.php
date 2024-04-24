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
            <!--  Start contact  -->
            <section class="tc-contact-style2">
                <div class="container">
                    <div class="contact-form">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <h2 class="fsz-45 fw-500 text-center mb-80"> Let’s work <span class="sub-font fst-italic color-orange1 fw-400"> together! </span> </h2>
                                <p class="color-orange1 text-center mb-30"> <i class="icon-6 bg-orange1 me-2 rounded-circle"></i> Marked fields are required to fill </p>
                                <form class="form d-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Full name <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Email address <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Phone  <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your phone number">
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> subject <span class="color-orange1">*</span> </label>
                                                <select name="" id="" class="form-select form-control">
                                                    <option value=""> Select a subject </option>
                                                    <option value=""> Select a subject </option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for=""> your budget <span class="color-ccc">(optional)</span> </label>
                                                <input type="text" class="form-control" placeholder="A range budget for your project, ex: $10K - $50K">
                                            </div>
                                        </div> -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for=""> Your Requirements </label>
                                                <textarea rows="8" class="form-control" placeholder="Write your message here"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-12">
                                            <div class="upload_img_content">
                                                <div class="file">
                                                    <div class="file__input" id="file__input">
                                                        <input class="file__input--file" id="customFile" type="file" multiple="multiple" name="files[]">
                                                        <label class="file__input--label" for="customFile" data-text-btn="Add an attachment"> <i class="fal fa-paperclip"></i> Add an attachment </label>
                                                    </div>
                                                    <div class="file__value_content" id="file__value_content"></div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-12">
                                            <div class="form-check terms-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    By summiting, i’m agree to the <a href="#" class="text-decoration-underline text-capitalize" target="_blank"> Terms & Conditions </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="butn borderd border rounded-pill hover-bg-black bg-white mt-50">
                                            <span> Send Your Message <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End contact  -->

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