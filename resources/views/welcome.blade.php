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

    <style>
        /* opacity: 1 !important;transform: none !important; */
        .hero_slider_main {
            opacity: 1 !important;
            transform: none !important;
        }
        @media screen and (min-width: 768px){
            .sub-font.smaall {
                font-size: 34px !important;
            }
        }
    </style>

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


        <!--  Start header  -->
        <header class="tc-header-style2">
            <div class="container">
                <div class="top-info">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-8">
                                <h1> Redefining Luxury Spaces to  <span class="sub-font"> Meet Functionality </span> </h1>
                                <div class="award-wrapper">
                                    <p> <a href="mailto:admin@akarinteriors.com">admin@akarinteriors.com </a> </p>
                                    <span class="line"></span>
                                    <p> <a href="tel:+918080380031"> (+91) 80803 80031 </a> </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="side-info ps-lg-5">
                                    <div class="facts-wrapper" data-speed="1" data-lag="0.5">
                                        <div class="title fsz-12 text-uppercase mb-30"> <i class="icon-6 bg-orange1 rounded-circle me-2"></i> The Facts </div>
                                        <div class="numbers">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h2 class="num sub-font"> <span class="counter">100</span>% </h2>
                                                    <p> Clients Satisfied </p>
                                                </div>
                                                <div class="col-6">
                                                    <h2 class="num sub-font"> <span class="counter">15</span>+ </h2>
                                                    <p> Projects Done </p>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/img/subtract.png" alt="" class="line">
                                    </div>
                                    <div class="text color-666 mt-80"> Our goal is to create spaces that are not only <br> beautiful, but also functional & comfortable. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content wow zoomIn slow" data-wow-delay="0.2s">
                <div class="container-fluid">
                    <div class="head-slider">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                                <div class="slider-card">
                                    <div class="img">
                                        <img src="/GALLERY-2024/THOUGHTRAINS CORPORATE OFFICE 3DS/1.jpg" alt="" class="main-img img-cover">
                                    </div>
                                    <div class="info">
                                        <div class="container hero_slider_main">
                                            <div class="cont">
                                                <!-- <div class="tags">
                                                    <a href="#"> Furniture </a>
                                                    <a href="#"> Furniture </a>
                                                </div> -->
                                                <h2 class="title"> <a href="/project/thoughtrains"> Thoughtrains </a> </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-card">
                                    <div class="img">
                                        <img src="/GALLERY-2024/THE GATEWAY SHOW FLAT PHOTOS/1.jpg" alt="" class="main-img img-cover">
                                    </div>
                                    <div class="info">
                                        <div class="container">
                                            <div class="cont">
                                                <!-- <div class="tags">
                                                    <a href="#"> Furniture </a>
                                                    <a href="#"> Furniture </a>
                                                </div> -->
                                                <h2 class="title"> <a href="/project/gateway"> Gateway </a> </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-card">
                                    <div class="img">
                                        <img src="GALLERY-2024/INTERFACE RESIDENCE 3DS/1.jpeg" alt="" class="main-img img-cover">
                                    </div>
                                    <div class="info">
                                        <div class="container" style="">
                                            <div class="cont">
                                                <!-- <div class="tags">
                                                    <a href="#"> Furniture </a>
                                                    <a href="#"> Furniture </a>
                                                </div> -->
                                                <h2 class="title"> <a href="/project/interface"> Interface Residence </a> </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <img src="assets/img/controls_bg.png" alt="" class="cont-bg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="head-features">
                    <div class="row gx-0 justify-content-between">
                        <div class="col-lg-3">
                            <div class="feat-card">
                                <span class="icon"> <i class="fal fa-betamax"></i> </span>
                                <b class="fsz-18 fw-600"> Customised  <br> Solutions </b>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feat-card">
                                <!-- icon related to time -->
                                <span class="icon"> <i class="fal fa-clock"></i> </span>
                                <b class="fsz-18 fw-600"> Timely <br> Delivery </b>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feat-card">
                                <span class="icon"> <i class="fal fa-bezier-curve"></i> </span>
                                <b class="fsz-18 fw-600"> Young, Enthusiastic and <br> Innovative Team </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--  Start header  -->


        <!--Contents-->
        <main>

            <!--  Start services  -->
            <section class="tc-services-style2">
                <div class="container">
                    <div class="row gx-0">
                        <div class="col-lg-12">
                            <h2 class="fsz-45 fw-500 mb-50"> Akar Interior's <span class="sub-font fst-italic color-orange1 fw-400"> services </span> </h2>
                            <div class="services">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a href="/services" class="service-card wow fadeInUp slow" data-wow-delay="0.2s">
                                            <div class="img">
                                                <img src="/GALLERY-2024/THE GATEWAY SHOW FLAT PHOTOS/3.jpg" alt="" class="img-cover">
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </div>
                                            <div class="info pt-30">
                                                <h4 class="fsz-24"> Interiors Turnkey Execution </h4>
                                                <p class="color-666 mt-15"> Transform your vision into reality effortlessly with our Interiors Turnkey Execution service, ensuring efficient and precise results. </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="/services" class="service-card wow fadeInUp slow" data-wow-delay="0.4s">
                                            <div class="img">
                                                <img src="assets/img/services/ser2.jpg" alt="" class="img-cover">
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </div>
                                            <div class="info pt-30">
                                                <h4 class="fsz-24"> Renovation </h4>
                                                <p class="color-666 mt-15"> Revitalise your space with our Renovation service, enhancing both functionality and aesthetics to exceed your expectations. </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="/services" class="service-card wow fadeInUp slow" data-wow-delay="0.6s">
                                            <div class="img">
                                                <img src="/GALLERY-2024/RAZINE RESIDENCE 3DS & PHOTOS/4.JPG" alt="" class="img-cover">
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </div>
                                            <div class="info pt-30">
                                                <h4 class="fsz-24"> Loose Furniture </h4>
                                                <p class="color-666 mt-15"> Elevate comfort and style with our Loose Furniture service, offering personalised solutions that reflect your unique taste and lifestyle. </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="/services" class="service-card wow fadeInUp slow" data-wow-delay="0.6s">
                                            <div class="img">
                                                <img src="https://images.unsplash.com/photo-1598368195835-91e67f80c9d7?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-cover">
                                                <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                            </div>
                                            <div class="info pt-30">
                                                <h4 class="fsz-24"> Design Services </h4>
                                                <p class="color-666 mt-15"> We provide comprehensive services including look and feel presentations, 3D modeling, and detailed construction drawings that are ready for implementation. </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 offset-lg-1">
                            <h2 class="fsz-45 sub-font fw-500 js-splittext-lines"> Our goal is to create spaces that are not only beautiful, but also <span class="color-orange1"> functional </span> and <span class="color-orange1"> comfortable. </span> </h2>
                            <div class="btns">
                                <a href="/about-us" class="butn borderd border rounded-pill mt-70 hover-bg-black me-2">
                                    <span> About Us <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <div class="btm-info mt-50">
                        <div class="row gx-0">
                            <div class="col-lg-7">
                                <h5 class="fsz-24 lh-4 wow fadeInUp slow"> Discover our bespoke solutions, crafted to uphold the utmost quality and luxury. </h5>
                                <a href="/projects" class="butn borderd border rounded-pill mt-70 hover-bg-black">
                                    <span> See Our Projects <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                                </a>
                            </div>
                            <div class="col-lg-4 offset-lg-1" style="color: black;">
                                <div class="phone-box" data-speed="1" data-lag="0.5">
                                    <img src="assets/img/subtract2.png" alt="" class="bg-img">
                                    <h2 class="fsz-45 sub-font fw-400"> T: (+91) 80803 80031 </h2>
                                    <p class="color-111 mt-40"> Contact us to transform your </p>
                                    <p class="color-111"> vision into reality. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End services  -->


            <!--  Start process  -->
            <section class="tc-process-style2">
                <div class="container">
                    <h2 class="fsz-45 fw-500 mb-80 text-center"> Meet The  <span class="sub-font fst-italic color-orange1 fw-400"> Founders  </span> </h2>
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="accordion-side wow fadeInUp slow">
                                    <div class="accordion" id="accordionProcess">
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                <span class="num"> 1 / </span> <h3> Abdullah Khan  </h3>
                                            </button>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProcess">
                                                <div class="accordion-body">
                                                    <div class="text">
                                                    Introducing Khan Abdullah Aftab, one of the two visionary leaders behind Akar Interiors. His journey is woven with over two decades of rich experience in the realm of procurement and interior construction. With an unwavering commitment to excellence, Abdullah's career epitomizes a fusion of passion and precision.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingTwo">
                                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                <span class="num"> 2 / </span> <h3> Afreen Khan </h3>
                                            </button>
                                            </div>
                                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionProcess">
                                                <div class="accordion-body">
                                                    <div class="text">
                                                    Introducing Afreen Khan, the other driving force behind Akar Interiors, whose expertise lies in cultivating seamless interactions and fostering relationships. With a keen focus on maintaining high-quality standards, she ensures that every aspect contributes to the achievement of excellence.
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
                            <div class="col-lg-7">
                                <div class="imgs">
                                    <div class="img" data-lag="0.2">
                                        <img src="/new_images/13.JPG" alt="" class="img-cover">
                                        <!-- <span class="txt sub-font">  </span> -->
                                    </div>
                                    <!-- <div class="img" data-lag="0.4">
                                        <img src="/Imag1.jpg" alt="" class="img-cover">
                                    </div> -->
                                    <!-- <div class="img" data-lag="0.3">
                                        <img src="https://images.unsplash.com/photo-1564564295391-7f24f26f568b?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-cover">
                                    </div>
                                    <div class="img" data-lag="0.5">
                                        <img src="https://images.unsplash.com/photo-1615109398623-88346a601842?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-cover">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/prc_bg.png" alt="" class="bg" data-speed="1.2">
            </section>
            <!--  End process  -->


            <!--  Start projects  -->
            <section class="tc-projects-style2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fsz-45 fw-500"> Latest <span class="sub-font fst-italic color-orange1 fw-400"> projects </span> </h2>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="/projects" class="butn borderd border rounded-pill hover-bg-black">
                                <span> See All Projects <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                            </a>
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


            <!--  Start awards  -->
            <section class="tc-awards-style2" style="display: none;">
                <div class="container">
                    <h2 class="fsz-45 fw-500 text-center mb-30"> Featured <span class="sub-font fst-italic color-orange1 fw-400"> awards </span> </h2>
                    <div class="awards">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.2s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo1.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Winner Best of Substainable Interior 2023 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Neoclassical Sofa </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.4s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo2.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Top 5 Interior Design Inspiration 2023 </h5>
                                    <a href="#" class="color-666 text-capitalize"> ABERY Apartment Master Bedroom </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.6s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo3.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Top 10 Agency Use Sustainable Material </h5>
                                    <a href="#" class="color-666 text-capitalize"> Neoclassical Sofa </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.8s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo4.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Winner Best CGI Artirst 2022 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Boston CGI </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.2s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo5.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Winner UID of The Year in 2020 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Bristo Restaurant </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.4s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo6.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.6s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo7.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="award-card wow fadeInUp slow" data-wow-delay="0.8s">
                                    <div class="logo">
                                        <img src="assets/img/logos/logo8.svg" alt="">
                                    </div>
                                    <h5 class="fsz-24 sub-font title"> Top 5 Excellent Furniture Store USA 2020 </h5>
                                    <a href="#" class="color-666 text-capitalize"> Wooden Furniture </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End awards  -->


            <!--  Start testimonials  -->
            <section class="tc-testimonials-style2">
                <div class="container">
                    <div class="row center" style="justify-content: center;align-items: center;">
                        <!-- <div class="col-lg-5">
                            <div class="img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-card">
                                            <div class="img">
                                                <img src="assets/img/testimonials/testi1.jpg" alt="" class="main-img img-cover">
                                                <img src="assets/img/testimonials/testi_shap1.png" alt="" class="shap1">
                                                <img src="assets/img/testimonials/testi_shap2.png" alt="" class="shap2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-card">
                                            <div class="img">
                                                <img src="assets/img/testimonials/testi2.jpg" alt="" class="main-img img-cover">
                                                <img src="assets/img/testimonials/testi_shap1.png" alt="" class="shap1">
                                                <img src="assets/img/testimonials/testi_shap2.png" alt="" class="shap2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-card">
                                            <div class="img">
                                                <img src="assets/img/testimonials/testi3.jpg" alt="" class="main-img img-cover">
                                                <img src="assets/img/testimonials/testi_shap1.png" alt="" class="shap1">
                                                <img src="assets/img/testimonials/testi_shap2.png" alt="" class="shap2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-9">
                            <div class="text-side">
                                <div class="text-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="text sub-font smaall"> "Akar Interiors has consistently delivered outstanding results across multiple projects for us. Most recently, they completed our show flat, and once again, their punctuality and professionalism were exemplary. Despite a demanding timeline, the Akar Interiors team ensured everything was finished right on schedule. Their dedication to meeting deadlines without compromising on quality has made them our go-to partner. We are thoroughly impressed with their work and highly recommend them for any turnkey projects." </div>
                                            <div class="user-wrapper">
                                                <div class="user-content">
                                                    <div class="img">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/9131/9131529.png" alt="" class="img-cover">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-18"> Mr. Vijay Patil </h6>
                                                        <p class="color-ccc mt-2"> Founder, Priyanka Regency, Navi Mumbai </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text sub-font smaall"> "Akar Interiors completely transformed my spaces into modern, open, and inviting areas. The use of light and smarter solutions made a significant difference. I would highly recommend Akar Interiors to anyone looking to upgrade their spaces. Their attention to detail, creativity, and dedication to customer satisfaction set them apart from other turnkey execution firms." </div>
                                            <div class="user-wrapper">
                                                <div class="user-content">
                                                    <div class="img">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/9131/9131529.png" alt="" class="img-cover">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-18"> Mr. Roshan More </h6>
                                                        <p class="color-ccc mt-2"> Managing Partner, Om Builders & Superstructures, Navi Mumbai </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text sub-font smaall"> "My experience with Akar Interiors has been nothing short of exceptional. From the initial consultation to the final touches, their team exhibited professionalism, creativity, and attention to detail that surpassed my expectations." </div>
                                            <div class="user-wrapper">
                                                <div class="user-content">
                                                    <div class="img">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/9131/9131529.png" alt="" class="img-cover">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-18"> Mrs. Harshita Sarogi </h6>
                                                        <p class="color-ccc mt-2"> Sarogi Residence, Mumbai </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text sub-font smaall">"Without hesitation, I would recommend Akar Interiors to anyone seeking top-notch interior design & execution services. Their ability to understand and execute my vision while incorporating their expertise and flair resulted in a space that exceeded my expectations. Working with them was an absolute pleasure." </div>
                                            <div class="user-wrapper">
                                                <div class="user-content">
                                                    <div class="img">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/9131/9131529.png" alt="" class="img-cover">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-18"> Mr. Abu Razine </h6>
                                                        <p class="color-ccc mt-2"> Razine Residence, Mumbai </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text sub-font smaall">"Swimwell Pools India Pvt Ltd take immense pleasure to appreciate your work, quality of product, designing, execution and much more, giving us the most aesthetic cooperate office interiors to work happily and safely." </div>
                                            <div class="user-wrapper">
                                                <div class="user-content">
                                                    <div class="img">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/9131/9131529.png" alt="" class="img-cover">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-18"> Mrs. Zubeda Shaikh </h6>
                                                        <p class="color-ccc mt-2"> C.E.O, Swimwell Pool India Pvt Ltd, Mumbai </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-controls">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="logos">
                        <a href="#"> <img src="assets/img/clients/cl1.svg" alt=""> </a>
                        <a href="#"> <img src="assets/img/clients/cl2.svg" alt=""> </a>
                        <a href="#"> <img src="assets/img/clients/cl3.svg" alt=""> </a>
                        <a href="#"> <img src="assets/img/clients/cl4.svg" alt=""> </a>
                        <a href="#"> <img src="assets/img/clients/cl5.svg" alt=""> </a>
                    </div> -->
                </div>
            </section>
            <!--  End testimonials  -->


            <!--  Start blog  -->
            <!-- <section class="tc-blog-style2">
                <div class="container">
                    <div class="row align-items-center mb-40">
                        <div class="col-lg-8">
                            <h2 class="fsz-45 fw-500"> Latest <span class="sub-font fst-italic color-orange1 fw-400"> Posts </span> </h2>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="#" class="butn borderd border rounded-pill hover-bg-black bg-white">
                                <span> All Articles <i class="ms-2 fal fa-long-arrow-right ico-45"></i> </span>
                            </a>
                        </div>
                    </div>
                    <div class="posts">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="blog-card wow fadeInUp slow" data-wow-delay="0.2s">
                                    <a href="#" class="img">
                                        <img src="assets/img/blog/blog1.jpg" alt="" class="img-cover">
                                        <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                    </a>
                                    <div class="info pt-30">
                                        <h5 class="title fsz-24 fw-600"> <a href="#" class="hover-orange1"> Top 10 Inspiration Scadinavian Interior for Living Room </a> </h5>
                                        <div class="text mt-3 color-666"> This area is short text of this post, it will take from the first line [...] </div>
                                        <div class="tags">
                                            <a href="#"> Inspiration </a>
                                            <a href="#"> Jul 20, 2024 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="blog-card wow fadeInUp slow" data-wow-delay="0.4s">
                                    <a href="#" class="img">
                                        <img src="assets/img/blog/blog2.jpg" alt="" class="img-cover">
                                        <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                    </a>
                                    <div class="info pt-30">
                                        <h5 class="title fsz-24 fw-600"> <a href="#" class="hover-orange1"> Constrast Color in Interior Design </a> </h5>
                                        <div class="text mt-3 color-666"> This area is short text of this post, it will take from the first line [...] </div>
                                        <div class="tags">
                                            <a href="#"> Inspiration </a>
                                            <a href="#"> Jul 15, 2024 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="blog-card wow fadeInUp slow" data-wow-delay="0.6s">
                                    <a href="#" class="img">
                                        <img src="assets/img/blog/blog3.jpg" alt="" class="img-cover">
                                        <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                    </a>
                                    <div class="info pt-30">
                                        <h5 class="title fsz-24 fw-600"> <a href="#" class="hover-orange1"> Think to keep in mind when reading technical draws </a> </h5>
                                        <div class="text mt-3 color-666"> This area is short text of this post, it will take from the first line [...] </div>
                                        <div class="tags">
                                            <a href="#"> Knowledge </a>
                                            <a href="#"> Jun 7, 2024 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="blog-card wow fadeInUp slow" data-wow-delay="0.8s">
                                    <a href="#" class="img">
                                        <img src="assets/img/blog/blog4.jpg" alt="" class="img-cover">
                                        <div class="arrow"> <i class="fal fa-long-arrow-right ico-45"></i> </div>
                                    </a>
                                    <div class="info pt-30">
                                        <h5 class="title fsz-24 fw-600"> <a href="#" class="hover-orange1"> Bathroom Classic </a> </h5>
                                        <div class="text mt-3 color-666"> This area is short text of this post, it will take from the first line [...] </div>
                                        <div class="tags">
                                            <a href="#"> Inspiration </a>
                                            <a href="#"> aug 26, 2024 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!--  End blog  -->


            <!--  Start contact  -->
            <section class="tc-contact-style2">
                <div class="container">
                    <div class="contact-form">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <h2 class="fsz-45 fw-500 text-center mb-80"> Let’s work <span class="sub-font fst-italic color-orange1 fw-400"> together! </span> </h2>
                                <p class="color-orange1 text-center mb-30"> <i class="icon-6 bg-orange1 me-2 rounded-circle"></i> Marked fields are required to fill </p>
                                <form class="form d-block" id="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Full name <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Email address <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""> Phone  <span class="color-orange1">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Your phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for=""> Your Requirements </label>
                                                <textarea rows="8" class="form-control" placeholder="Write your message here" name="message"></textarea>
                                            </div>
                                        </div>
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
                                        <a href="#" class="butn borderd border rounded-pill hover-bg-black bg-white mt-50" id="submit-btn-main">
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

    <script>
        // contact-form submit function
        $('#submit-btn-main').click(function(e) {
            e.preventDefault();
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var phone = $('input[name="phone"]').val();
            var message = $('textarea[name="message"]').val();
            
            if (!$('#flexCheckDefault').is(':checked')) {
                alert('Please agree to the terms and conditions');
                return false;
            }


            if (name == '' || email == '' || phone == '' || message == '') {
                alert('Please fill all the fields');
                return false;
            }

            $.ajax({
                url: '/api/contact',
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message
                },
                success: function(response) {
                    alert('Message sent successfully');
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                    $('input[name="phone"]').val('');
                    $('textarea[name="message"]').val('');
                },
                error: function(err) {
                    alert('Something went wrong. Please try again later');
                }
            });
        });
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('.accordion-button').click(function() {
                var clickedAccordionId = $(this).data('bs-target');
                
                if (clickedAccordionId === '#collapseOne') {
                $('.imgs .img:first-child img').attr('src', '/Imag1.jpg');
                $('.imgs .img:last-child img').attr('src', '/Imag2.jpg');
                } else if (clickedAccordionId === '#collapseTwo') {
                $('.imgs .img:first-child img').attr('src', '/Imag2.jpg');
                $('.imgs .img:last-child img').attr('src', '/Imag1.jpg');
                }
            });
        });
    </script> -->

</body>

</html>