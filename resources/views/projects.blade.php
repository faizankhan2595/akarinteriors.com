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

            <!--  Start projects  -->
            <section class="tc-projects-style2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fsz-45 fw-500"> Latest <span class="sub-font fst-italic color-orange1 fw-400"> projects </span> </h2>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <!-- <a href="/projects" class="butn borderd border rounded-pill hover-bg-black">
                                <span> See All Projects <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                            </a> -->
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
                        <div class="text color-666">
                            <h3> Our projects are a reflection of our commitment to excellence and innovation. </h3>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-proj1" role="tabpanel" aria-labelledby="pills-proj1-tab">
                        <div class="projects-slider-content mt-100">
                            <div class="projects-slider">
                                <div class="swiper-wrapper">
                                @php
                                    $projects = '[
                                        {"name":"SWIMWELL EXPERIENCE CENTRE ","image":"/GALLERY-2024/SWIMWELL EXPERIENCE CENTRE PHOTOS/1.JPG","year":"Completed","url":"/project/swimwell"},
                                        {"name":"RAZINE RESIDENCE","image":"/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/1.JPG","year":"Completed","url":"/project/razine-house"},
                                        {"name":"INTERFACE RESIDENCE","image":"/GALLERY-2024/INTERFACE RESIDENCE 3DS/1.jpeg","year":"Completed","url":"/project/interface"},
                                        {"name":"GATEWAY","image":"/GALLERY-2024/THE GATEWAY SHOW FLAT PHOTOS/1.jpg","year":"Completed","url":"/project/gateway"},
                                        {"name":"THOUGHTRAINS CORPORATE OFFICE","image":"/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/1.jpg","year":"Ongoing","url":"/project/thoughtrains"},
                                        {"name":"MALHAR VILLA","image":"/GALLERY-2024/MALHAR VILLA 3DS/1.jpg","year":"Ongoing","url":"/project/malhar"},
                                        {"name":"BERGGRUEN INDIA OFFICE","image":"/GALLERY-2024/BERGGRUEN INDIA OFFICE 3D WALKTHROUGH VIDEO/1.jpg","year":"Completed","url":"/project/berggruen"}
                                    ]';
                                    $projects = json_decode($projects, true);
                                @endphp

                                    @foreach($projects as $project)
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="{{$project['url']}}" class="img">
                                                <img src="{{$project['image']}}" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> {{$project['year']}} </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <h3 class="title"> <a href="#"> {{$project['name']}} </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="GALLERY/RAZINE HOUSE PHOTOS/Study Room_V13_View.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <h3 class="title"> <a href="#"> RAZINE HOUSE </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="GALLERY/MALHAR 3DS/Vijay_Patil_Residence_Living_Room_Option_01.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <h3 class="title"> <a href="#"> MALHAR </a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <a href="#" class="img">
                                                <img src="GALLERY/KAPADIA 3DS/Hall2.jpg" alt="" class="img-cover">
                                                <div class="year">
                                                    <span class="txt"> 2022 </span>
                                                    <img src="assets/img/project_shape.png" alt="" class="bg">
                                                </div>
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </a>
                                            <div class="info">
                                                <h3 class="title"> <a href="#"> KAPADIA </a> </h3>
                                            </div>
                                        </div>
                                    </div> -->
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