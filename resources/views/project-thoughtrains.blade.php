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
    <link rel="shortcut icon" href="/common/assets/img/fav2.png" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="/common/assets/css/lib/bootstrap.min.css">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="/common/assets/css/lib/all.min.css">
    <!-- themify icons  -->
    <link rel="stylesheet" href="/common/assets/css/lib/themify-icons.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="/common/assets/css/lib/animate.css">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="/common/assets/css/lib/jquery.fancybox.css">
    <!-- lity popup  -->
    <link rel="stylesheet" href="/common/assets/css/lib/lity.css">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="/common/assets/css/lib/swiper8.min.css">

    <!-- common style -->
    <link rel="stylesheet" href="/common/assets/css/common_style.css">

    <!-- home style -->
    <link rel="stylesheet" href="/assets/css/home_2_style.css">


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

            <!--  Start projects  -->
            <section class="tc-projects-style2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fsz-45 fw-500"> Project <span class="sub-font fst-italic color-orange1 fw-400"> Thoughtrains </span> </h2>
                        </div>
                    </div>
                    <div class="tabs-links mt-40">
                        <!-- <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-proj1-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button">Interior Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj2-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button">Landscape</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj3-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button">Rennovation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj4-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button">Furniture</button>
                            </li>
                        </ul> -->

                        <!-- Write a sub heading instead of tabs -->
                        <div class="text color-666" style="line-height: 40px;">
                            <h6> 
                            Head office of a leading advertising agency <br/><br/>
                            Area: 10,000 Sq Ft <br/><br/>
                            Design Concept: Modern, Contemporary yet Minimal <br/><br/>
                            Project Designer: New Garage <br/><br/>
                            </h6>
                        </div>
                    </div>
                </div>


                @php
    $projects = '[
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/1.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/2.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/3.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/4.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/5.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/6.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/7.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/8.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/9.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/10.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/11.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/12.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/13.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/14.jpg"},
        {"image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/15.jpg"}
    ]';
    $projects = json_decode($projects, true);
@endphp  

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-proj1" role="tabpanel" aria-labelledby="pills-proj1-tab">
                        <div class="projects-slider-content mt-100">
                            <div class="projects-slider">
                                <div class="swiper-wrapper">
                                   

                                    @foreach($projects as $project)
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <div class="img">
                                                <img src="{{ $project['image'] }}" alt="" class="img-cover">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="controls">
                                    <div class="container">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="pills-proj2" role="tabpanel" aria-labelledby="pills-proj2-tab">
                        <div class="projects-slider-content mt-100">
                            <div class="projects-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="assets/img/projects/proj3.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Interior Design </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> Salone Skin & Spa </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="assets/img/projects/proj4.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Interior Design </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> Boston D53 Deluxe Apartment </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="assets/img/projects/proj1.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2023 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Interior Design </a>
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> ABERY Apartment Master Bedroom </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="assets/img/projects/proj2.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <div class="tags">
                                                    <a href="#"> Furniture </a>
                                                </div>
                                                <h3 class="title"> <a href="#"> Neoclassical Sofa </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="container">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
            <!--  End projects  -->

        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        @include('layouts.footer')
        <!--  End footer  -->

    </div>

    <!--  request  -->
    <script src="/common/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="/common/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="/common/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="/common/assets/js/lib/wow.min.js"></script>
    <script src="/common/assets/js/lib/jquery.fancybox.js"></script>
    <script src="/common/assets/js/lib/lity.js"></script>
    <script src="/common/assets/js/lib/swiper8-bundle.min.js"></script>
    <script src="/common/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="/common/assets/js/lib/jquery.counterup.js"></script>
    <script src="/common/assets/js/lib/parallaxie.js"></script>
    <!-- === Gsap === -->
    <script src="/common/assets/js/gsap_lib/gsap.min.js"></script>
    <script src="/common/assets/js/gsap_lib/ScrollSmoother.min.js"></script>
    <script src="/common/assets/js/gsap_lib/ScrollTrigger.min.js"></script>
    <script src="/common/assets/js/gsap_lib/SplitText.min.js"></script>
    <!-- === common === -->
    <script src="/common/assets/js/common_js.js"></script>

    <!-- ===== home scripts ===== -->
    <script src="/assets/js/home_2_scripts.js"></script>

</body>

</html>