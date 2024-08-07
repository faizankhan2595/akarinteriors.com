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
                            <h2 class="fsz-45 fw-500"> Project <span class="sub-font fst-italic color-orange1 fw-400"> Razine House </span> </h2>
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
                            Area: 3000 Sq Ft, 6 BHK<br/><br/>
                            Design Concept: Modern, Contemporary & Practical Utility<br/><br/>
                            Completed in 120 days<br/><br/>
                            Project Designer: AITS<br/><br/>

                            </h6>
                        </div>
                    </div>
                </div>

                @php
    $projects = '[
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/1.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/2.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/3.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/4.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/5.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/6.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/7.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/8.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/9.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/10.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/11.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/12.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/13.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/14.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/15.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/16.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/17.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/18.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/19.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/20.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/21.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/22.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/23.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/24.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/25.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/26.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/27.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/28.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/29.JPG"},
        {"image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/30.JPG"}
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