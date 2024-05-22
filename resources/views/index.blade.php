@extends('layouts.master')
@section('page', 'Home')
@section('title', 'Mughal-e-Azam Tickets in Los Angeles & New York | Stage Cinema Shows')
@section('canonical', 'https://cinemaonstage.com/')
@section('description', 'Get your tickets for Mughal-e-Azam shows in Los Angeles, New York, and Houston at Cinema on Stage. Experience the grandeur of the stage and cinema. Book now for an unforgettable experience!')
@section('keyword', 'cinemaonstage, cinema on stage mughal e azam, mughal e azam show tickets, mughal e azam show los angeles, mughal e azam musical tickets, mughal e azam show new york, stage cinema movies, stage and cinema, mughal e azam houston tickets')
@section('content')
<!-- carousel slider start here -->
<div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 lazy" src="assets/img/banner/banner1.png" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100 lazy" src="assets/img/banner/banner2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 lazy" src="assets/img/banner/banner3.png" alt="Second slide">
    </div>
    <div class="carousel-item">

      <img class="d-block w-100 lazy" src="assets/img/banner/banner4.png" alt="Third slide">
    </div>


    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- carousel slider end here -->

  <!-- fm-about-area-start -->
  <!-- <div class="fm-about-area bg-common-black section-spacing fix " style="margin-top: -30px;">
      <div class="container">
        <div class="row align-items-center g-5 gy-50">
          <div class="col-xl-6 col-lg-6">
            <div class="fm-director-about-img ">
              <img src="assets/img/new-home.jpg" alt="img not found" />
               <div class="fm-director-years">
                <span class="fm-director-years-number" style="color: #fd6500;">30</span>
                <span class="fm-director-years-content">
                  <span class="fm-director-plus" style="color: #fd6500;">+</span>
                  <span class="fm-director-years-text" style="color: #fd6500;">Years <br />
                    Experience</span>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="fm-about-content-section">
              <span class="section-subtitle  cursive about_us_section_span title-anim" style="color: black;">About Us</span>
              <h2 class="section-main-title text-white mb-25  ibm-plex " style="color: #000; font-size: 3.5rem;">
                Experience the grandeur of Cinema On Stage
              </h2>
              <p class="mb-20 title-anim" style="color:#6e777d">
                With a combined experience of over 450 national and international projects, Cinema On Stage has always been at par with the highest benchmarks in the quality of work and setting our own goals with unrivaled standards.
              </p>


              <p class="title-anim" style="color:#6e777d">
                Working alongside the most respected companies in the events business and broadcasters such as Star, Sony, Viacom 1 8, Zee, Times of India on their renowned projects, Cinema On Stage has efficiently managed a plethora of events of varying magnitude and genre.</p>
              <div class=" about-btn" style="margin-top: 25px;">
                <a class=" monstarat " href="about.php" style=" padding:10px; color:white; border-radius: 0.375rem; border-radius:2px; background-color:#f35c00;letter-spacing:2px;margin-top:20px ">Read More <i class="fa-light fa-arrow-right-long"></i></a>
              </div>
              <div class="fm-director-about-name mt-55">
                <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->
  <div class="about_show" style="padding-bottom:0px;padding-top:50px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-30">
          <span class="  ibm-plex">About Cinema On Stage</span>
          <h1 class=" ibm-plex"> Where Creativity Meets Unforgettable Entertainment Experiences </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2 "> <span class="line-one "></span> </div>
            <div class="col-md-8 mb-30 ">
              <p class="monstarat title-anim1" id="para" style="color: #6e777d;">Welcome to Cinema On Stage, your premier entertainment company based in Houston, North America, with a global footprint spanning over 30 countries and 70 cities. With a rich legacy of delivering exceptional performances on a global scale, we bring unparalleled expertise and experience to every production.
              </p>
              <p class="monstarat title-anim1" style="margin-bottom: 15px;">From breathtaking theatrical experiences to electrifying concerts and meticulously orchestrated corporate events, each production is meticulously designed to captivate and inspire audiences of all ages. Our team of technical experts and production managers ensures that every moment on stage is nothing short of extraordinary, employing cutting-edge technology and innovative staging techniques to create immersive experiences that leave a lasting impression.
              </p>
              <!-- <p class="monstarat title-anim1">As a top Bollywood entertainment company, we pride ourselves on our ability to seamlessly blend artistry, storytelling, and entertainment, ensuring that each show resonates with audiences worldwide. Our commitment to excellence has earned us a reputation as one of the top event companies in Houston and beyond, with a track record of delivering unforgettable experiences that exceed expectations.

                </p>
                <p class="monstarat title-anim1" style="margin-top: 15px;">Whether you're seeking a thrilling Bollywood show, expert technical execution, or seamless event management, Cinema On Stage is your trusted partner for unforgettable entertainment experiences. Join us as we continue to push the boundaries of creativity and production quality, delivering extraordinary shows that captivate hearts and minds around the world.

</p> -->
              <!-- <div class="fm-director-about-name " style="margin-top: 20px;">
                  <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                </div> -->
              <div style="margin-top: 30px;" class="about-btn">
                <a href="{{route('about')}}" class=" monstarat " style=" padding:10px; color:white; border-radius: 0.375rem; border-radius:2px; background-color:#f35c00;letter-spacing:2px;">Read More <i class="fa-light fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- <div class="fm-about-area bg-common-black section-spacing fix " id="youtube_video">

      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">

              <div id="carouselExampleControls_2" class="carousel slide  carousel_youtube" data-interval="false" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="height: 100%;">
                    <div class="iframe-container">
                      <iframe class="iframe-videos-slider" src="https://www.youtube.com/embed/i5lvLVx_IkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="carousel-item" style="height: 100%;">
                    <div class="iframe-container">
                      <iframe src="https://www.youtube.com/embed/Fgz3rt3EKR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls_2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls_2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>



          </div>
        </div>
      </div>
    </div> -->
</div>

<div class="container" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-12 ">
      <span class="fm-section-subtitle  ibm-plex" style="color:#f35c00">Experience the magic of our work – click here to visit our YouTube channel
      </span>
    </div>
    <div class="row mb-30">
      <div class="col-md-2 "> <span class="line-one "></span> </div>
      <div class="col-md-8">
        <p class=" ibm-plex"> <a href="https://www.youtube.com/@cinemaonstage"> https://youtube.com/@cinemaonstage </a> </p>
      </div>
    </div>
  </div>
</div>
<div id="carouselExampleLight" class="carousel carousel-light slide carousel_youtube" data-ride="carousel" data-interval="2000" style="padding-bottom:50px;">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/i5lvLVx_IkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/CbCzstKMDVI?si=jnsTAJidkKFGMnfP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/zP6yZduTYmI?si=_DQwL7MUDOhTbtx3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/lCRoCJxxDao?si=KyDy4KgvDAniz-5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span style="color: #fff;" class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span style="color: #fff;" class="visually-hidden">Next</span>
  </button>
</div>






<!-- fm-about-area-end -->
<!-- fm-project-films-area-start -->
<!-- <div class="fm-project-films-area fm-film-spc mb-5">
      <h2 class="mb-60" style="color: #fd6500;">
        Tour Schedule </h2>
      <div class="fm-project-films-carousel-wrapper fm-video-slider-2">
        <div class="fm-project-video2-active swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="fm-films-video-button-main">
                <a href="tour-schedule.php" class="fm-film-video-btn popup-video">
                  <i class="fa-thin fa-arrow-right"></i>
                  <svg class="eltdf-svg-circle">
                    <circle cx="50%" cy="50%" r="45%"></circle>
                  </svg>
                </a>
              </div>
              <div class="fm-project-films-single fm-video-slider-2-single" data-background="assets/img/show1.jpg">
                <div class="fm-project-films-single-content">
                  <span class="fm-project-films-single-director"> </span>
                  <h4 class="fm-project-films-single-title">
                    <a href="#">UP COMING SHOW IN SETALLE BOOK IT NOW </a>
                  </h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="fm-films-video-button-main">
                <a href="tour-schedule.php" class="fm-film-video-btn popup-video">
                  <i class="fa-thin fa-arrow-right"></i>
                  <svg class="eltdf-svg-circle">
                    <circle cx="50%" cy="50%" r="45%"></circle>
                  </svg>
                </a>
              </div>
              <div class="fm-project-films-single fm-video-slider-2-single" data-background="assets/img/show2.jpg">
                <div class="fm-project-films-single-content">
                  <span class="fm-project-films-single-director">11 AUG 2024</span>
                  <h4 class="fm-project-films-single-title">
                    <a href="#">UP COMING SHOW IN SAN JOSE BOOK IT NOW </a>
                  </h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="fm-films-video-button-main">
                <a href="tour-schedule.php" class="fm-film-video-btn popup-video">
                  <i class="fa-thin fa-arrow-right"></i>
                  <svg class="eltdf-svg-circle">
                    <circle cx="50%" cy="50%" r="45%"></circle>
                  </svg>
                </a>
              </div>
              <div class="fm-project-films-single fm-video-slider-2-single" data-background="assets/img/show3.jpg">
                <div class="fm-project-films-single-content">
                  <span class="fm-project-films-single-director">14-16 JULY 2024</span>
                  <h4 class="fm-project-films-single-title">
                    <a href="#">UP COMING SHOW IN HOUSTON BOOK IT NOW</a>
                  </h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="fm-films-video-button-main">
                <a href="tour-schedule.php" class="fm-film-video-btn popup-video">
                  <i class="fa-thin fa-arrow-right"></i>
                  <svg class="eltdf-svg-circle">
                    <circle cx="50%" cy="50%" r="45%"></circle>
                  </svg>
                </a>
              </div>
              <div class="fm-project-films-single fm-video-slider-2-single" data-background="assets/img/show5.jpg">
                <div class="fm-project-films-single-content">
                  <span class="fm-project-films-single-director">26 MAY 2024</span>
                  <h4 class="fm-project-films-single-title">
                    <a href="#">UP COMING SHOW IN NORTH AMERICA BOOK IT NOW</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fm-film-testimonial-navigation">
          <span class="fm-film-testimonial-next testi-next">Next<img src="assets/img/portfolio/slider-arrow-right.svg" alt="icon" />
          </span>
          <span class="fm-film-testimonial-prev testi-prev"><img src="assets/img/portfolio/slider-arrow-left.svg" alt="icon" />prev
          </span>
        </div>
      </div>
    </div> -->
<!-- fm-project-films-area-end -->
<!-- fm-director-service-area-start -->
<!-- <div class="fm-director-service-area soft-blackbg fix mt-60">
      <div class="fm-director-service-bg" data-background="assets/img/team.png"></div>
      <div class="container">
        <div class="fm-director-service-wrapper section-spacing">
          <div class="row">
            <div class="col-xl-7 col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="fm-director-service-title" id="fm-director" style="margin-top: 80px;">
                    <span class="section-subtitle title-anim" style="color: black;"> ABOUT SHOW</span>
                    <h2 class="section-main-title text-white title-anim mb-55" style="color: #fd6500;">
                      About Tour
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row g-5 gy-50">
                <div class="col-xl-6 col-sm-6">
                  <div class="fm-director-service-single fade_bottom " style="color: black !important;">
                    <img src="assets/img/story.png" alt="img not found" />
                    <h4 class="fm-director-service-title" style="color: #fd6500;">
                      <a href="# ">Iconic Story</a>
                    </h4>
                    <p>
                      Cinema On Stage: Prince Salim, Anarkali's love unfolds with timeless resonance.</p>
                    <a href="about-show.php" class="fm-director-service-btn" style="color: black; background:#fd6500;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                  </div>
                </div>

                <div class="col-xl-6 col-sm-6">
                  <div class="fm-director-service-single fade_bottom">
                    <img src="assets/img/emo.png" alt="img not found" />
                    <h4 class="fm-director-service-title" style="color: #fd6500;">
                      <a href="#">Emotional Impact</a>
                    </h4>
                    <p>
                      Forbidden love, dance; a rollercoaster of emotions, spellbinding and moving musical.</p>
                    <a href="about-show.php" class="fm-director-service-btn" style="color: black; background:#fd6500;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                  </div>
                </div>

                <div class="col-xl-6 col-sm-6">
                  <div class="fm-director-service-single fade_bottom">
                    <img src="assets/img/sub.png" alt="img not found" />
                    <h4 class="fm-director-service-title" style="color: #fd6500;">
                      <a href="#">Sub titles in English</a>
                    </h4>
                    <p>
                      Cinema On Stage: English subtitles, embraced by global non-Indian audiences. </p>
                    <a href="about-show.php" class="fm-director-service-btn" style="color: black; background:#fd6500;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                  </div>
                </div>

                <div class="col-xl-6 col-sm-6">
                  <div class="fm-director-service-single fade_bottom">
                    <img src="assets/img/movie.png" alt="img not found" />

                    <h4 class="fm-director-service-title" style="color: #fd6500;">
                      <a href="#">Spectacular Production</a>
                    </h4>
                    <p>
                      Lavish sets, costumes, stunning effects transport audience to Indian grandeur.</p>
                    <a href="about-show.php" class="fm-director-service-btn" style="color: black; background:#fd6500;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


<div class="about_show">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-30">
        <span class=" ibm-plex">About Mughal E Azam</span>
        <h1 class=" ibm-plex">Experience the sublime grandeur of ‘Mughal-e-Azam</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2  "> <span class="line-one "></span> </div>
          <div class="col-md-8 mb-30  fadeInUp ">
            <p class="title-anim1 monstarat" id="para">The Musical - presented in North America by Cinema on Stage, an entertainment company dedicated to bringing world-class productions to audiences across the continent.
            </p>
            <p class="title-anim1 monstarat">This Broadway-style production brings to life the timeless story of Prince Salim and courtesan Anarkali, set against the backdrop of Mughal India.
            </p>
            <p class="title-anim1 monstarat" style="margin-top: 15px;">With over 550 stunning costumes, intricate sets and live performances of Indian classical singing and Kathak dance, this is the most expensive theatre production in Indian history.
              Produced by Shapoorji Pallonji and directed by Feroz Abbas Khan, this larger-than-life production (with English sub-titles) has already captivated audiences at 25 venues across India, USA, Canada, Singapore, Malaysia, UAE, Oman and Qatar

            </p>
            <p class="title-anim1 monstarat" style="margin-top: 15px;">Don't miss your chance to witness the first Indian Broadway-style musical, where romance and royalty meet in a grand spectacle of music, dance, and drama.
            </p>
            <div style="margin-top: 30px;" class="about-btn">
              <a href="{{route('about')}}" class=" monstarat " style=" padding:10px; color:white; border-radius: 0.375rem; border-radius:2px; background-color:#f35c00;letter-spacing:2px;">Read More <i class="fa-light fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- <section class="parallax-background-container">
      <div class="section-bg " style="background-image: url('assets/img/about_show/about_show_banner.png');" data-breakpoint="768" data-speed="0.5">

        <div class="">
          <p class="cinema title-anim1"> <span>Mughal-e-Azam </span></p>
          <p class="ibm-plex wow zoomInleft"> <span class="ibm-plex wow zoomInleft">An Unmissable Extravaganza<span></p>
        </div>
      </div>
    </section> -->



<!-- <div class="our_show_bg_img parallax_scroll wow zoomInUp">
      <section class="fm-hero-area-2 fm-home-style-2 bg-common-black fix" id="our_show">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="fm-hero-wrapper p-relative">
                <div class="fm-hero-thumb-2 ">
                  <img src="assets/img/about_show/about_show_2.png" alt="img not found" />
                </div>
                <div class="fm-hero-title-wrapper ">
                  <div class="fm-sec-title  ">
                    <span class="sec-title-3 sec-title-left telling">TELLING THE</span>
                    <span class="sec-title-3 story">BIGGER STORY</span>
                  </div>
                </div>
                <div class="fm-award-thumb d-none d-xl-block">
                  <img src="assets/img/award/award.png" alt="img not found" />
                </div>
                <div class="fm-hero-content">


                  <div class="fm-btn mt-35">
                    <a href="book-now.php" class="border-btn is-white" style="background-color: #f35c00; border-radius:0.375rem;letter-spacing: 2px;">Book Ticket
                      <span>
                        <i class="fa-regular fa-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-none d-sm-none d-md-block ">
                  <div class="fm-hero-thumb-3">

                    <img src="assets/img/our_show/our_show_2.png" class="" alt="img not found" />

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div> -->
<!--  -->
<!-- <div class="achievement-area section-spacing">
      <div class="container">
        <div class="row g-50 align-items-center justify-content-between">
          <div class="col-xl-7 col-lg-5  order-1 order-lg-0">
            <div class="row">
              <div class="col-12">
                <div class="fm-director-service-title mt-60">
                  <span class="section-subtitle title-anim" style="color: black; margin-left:12px;"> About Show</span>
                  <h2 class="section-main-title text-white title-anim mb-55" style="color: #fd6500;">
                    About Tour
                  </h2>
                </div>
              </div>
            </div>
            <div class="row g-5 gy-50">
              <div class="col-xl-6 col-sm-6">
                <div class="fm-director-service-single fade_bottom " style="color: black !important;">
                  <img src="assets/img/story.png" alt="img not found" />
                  <h4 class="fm-director-service-title" style="color: #fd6500;">
                    <a href="#">Iconic Story</a>
                  </h4>
                  <p>
                    Cinema On Stage: Prince Salim, Anarkali's love unfolds with timeless resonance.</p>
                  <a href="about-show.php" class="fm-director-service-btn" style="color: black;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
              </div>

              <div class="col-xl-6 col-sm-6">
                <div class="fm-director-service-single fade_bottom">
                  <img src="assets/img/emo.png" alt="img not found" />
                  <h4 class="fm-director-service-title" style="color: #fd6500;">
                    <a href="#">Emotional Impact</a>
                  </h4>
                  <p>
                    Forbidden love, dance; a rollercoaster of emotions, spellbinding and moving musical.</p>
                  <a href="about-show.php" class="fm-director-service-btn" style="color: black;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
              </div>

              <div class="col-xl-6 col-sm-6">
                <div class="fm-director-service-single fade_bottom">
                  <img src="assets/img/sub.png" alt="img not found" />
                  <h4 class="fm-director-service-title" style="color: #fd6500;">
                    <a href="#">Sub titles in English</a>
                  </h4>
                  <p>
                    Cinema On Stage: English subtitles, embraced by global non-Indian audiences. </p>
                  <a href="about-show.php" class="fm-director-service-btn" style="color: black;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
              </div>

              <div class="col-xl-6 col-sm-6">
                <div class="fm-director-service-single fade_bottom">
                  <img src="assets/img/movie.png" alt="img not found" />

                  <h4 class="fm-director-service-title" style="color: #fd6500;">
                    <a href="#">Spectacular Production</a>
                  </h4>
                  <p>
                    Lavish sets, costumes, stunning effects transport audience to Indian grandeur.</p>
                  <a href="about-show.php" class="fm-director-service-btn" style="color: black;">View Details<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 ">
            <div class="fm-achievement-thumb-wrapper fade__two-item-left">
            <div class="fm-achievement-thumb">
            <img src="assets/img/cos.jpg" class="serv-img" alt="achievement-thumb" style="width: 500px; height:500px">

            </div>
            <div class="fm-achievement-thumb mt-5">
              <img src="assets/img/tab1.jpg" alt="achievement-thumb">
            </div>
            <div class="fm-achievement-thumb">
                  <img src="assets/img/his.jpg" alt="achievement-thumb">
                </div>

          </div>
        </div>
      </div>

    </div> -->
</div>
<!-- fm-director-service-area-end -->
<!-- <div class="history-area  mt-0 pb-30  ">
      <div class="container">
        <div class="section-title">
          <span class="text-p  title-anim section-subtitle" style="color: black;"></span>
          <h2 class=" mb-30 ibm-plex" style="color: #fd6500;">Tour Location</h2>
        </div>
        <div class="row tab-teaser align-items-center">
          <div class="col-lg-3 tab-menu">
            <ul>
              <li>
                <a href="#" class="" data-rel="tab-1">Houston</a>
              </li>
              <li>
                <a href="#" data-rel="tab-2" class="active">New Jersey</a>
              </li>
              <li>
                <a href="#" data-rel="tab-3" class="">New York
                </a>
              </li>
              <li>
                <a href="#" data-rel="tab-4" class="">Dallas
                </a>
              </li>
              <li>
                <a href="#" data-rel="tab-5" class="">San Jose
                </a>
              </li>
              <li>
                <a href="#" data-rel="tab-6" class="">LOS ANGELES</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 tab-box" id="tab-1" style="display: none; ">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-img pr-20">
                  <img src="assets/img/tab11.jpg" alt="Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">16TH-18TH AUG 2024 </span>
                    <h2>Brown Theater</h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 tab-box" id="tab-2" style="display: block;">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">23RD-31ST AUG 2023</span>
                    <h2 class="ibm-plex">NJPAC</h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-img">
                  <img src="assets/img/tab2.jpg" alt="Image">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 tab-box" id="tab-3" style="display: none;">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-img pr-15">
                  <img src="assets/img/tab3.jpg" alt="Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">6TH-8TH SEP 2023</span>
                    <h2>David H Koch Theater</h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 tab-box" id="tab-4" style="display: none;">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">13TH-15TH SEP 2023</span>
                    <h2>Music Hall at Fairpark</h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-img">
                  <img src="assets/img/tab4.jpg" alt="Image">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 tab-box" id="tab-5" style="display: none;">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-img pr-15">
                  <img src="assets/img/tab5.jpg" alt="Image">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">20TH-29TH SEP 2023</span>
                    <h2>San Jose Performing Art Center</h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 tab-box" id="tab-6" style="display: none;">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="history-content">
                  <div class="history-title">
                    <span style="color: #fd6500;">4TH-6TH OCT 2023</span>
                    <h2>Dolby Theater </h2>
                    <p>At vero eos et accusamus et iusto odio ducimus qui bland itiis praesentium voluptatum deleniti atque cor quos dolores etquas molestias excepturi sint libero</p>
                  </div>
                  <div class="logo-list">
                    <div class="fm-director-about-name mt-55">
                      <a href="#" class="director-about-nam" style="color: #fd6500;">Cinema On Stage</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-img">
                  <img src="assets/img/tab6.jpg" alt="Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!-- fm-director-films-area-start ----fans speaks -->
<!-- <div
        class="fm-director-films-area bg-common-black section-spacing fm-director-padding"
      >
        <div class="container">
          <div class="row section-title-spacing">
            <div class="col-12">
              <div class="fm-director-sec-title text-center">
                <span class="section-subtitle title-anim">MY WORKS</span>
                <div>
                  <h2
                    class="section-main-title text-white title-anim featured-work-title"
                  >
                    Featured Films
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="fm-director-wrapper">
            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films5.jpg" alt="" />
                </div>
              </a>

              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">Short Films</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Leonar Pedron</a>
                </h4>
              </div>
            </div>

            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films6.jpg" alt="" />
                </div>
              </a>

              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">Commercial</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Twinkle Start</a>
                </h4>
              </div>
            </div>

            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films8.jpg" alt="" />
                </div>
              </a>
              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">TV Serial</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Adrenlia Hem</a>
                </h4>
              </div>
            </div>

            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films7.jpg" alt="" />
                </div>
              </a>
              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">Anthology</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Hero Army Man</a>
                </h4>
              </div>
            </div>

            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films1.jpg" alt="" />
                </div>
              </a>

              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">Short Film</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Nijhom Jungle</a>
                </h4>
              </div>
            </div>

            <div class="fm-director-films-single text-center">
              <a href="portfolio-details.html">
                <div class="fm-director-films-img">
                  <img src="assets/img/films/films5.jpg" alt="" />
                </div>
              </a>

              <div class="fm-director-films-content">
                <span class="fm-director-films-subtitle">Short Films</span>
                <h4 class="fm-director-films-title">
                  <a href="portfolio-details.html">Leonar Pedron</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div> -->

<!-- <div class="our_pictures">

      <div class="fm-landing-download-movies-area section-spacing-bottom bg-common-black">
        <div class="container">
          <div class="fm-landing-download-movies-wrapper">
            <div class="fm-landing-movies-flex">
              <div class="fm-landing-download-movies-content-wrapper">
                <div class="fm-landing-download-movies-content">
                  <span class="fm-landing-download-movies-content-subtext title-anim" style="perspective: 400px;">
                    <div class="cursive" style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 83.9167px 10px; transform: translate3d(0px, 0px, 0px); opacity: 1; line-height:30px;">Live Cinema Experience: Reel Magic Onstage!</div>
                  </span>
                  <h4 class="fm-landing-download-content-text  mb-25 ibm-plex" style="perspective: 400px;">
                    <div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 180.896px 22.8594px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Secure Your </div>
                    <div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 180.896px 22.8594px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Seat Step Into </div>
                    <div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 180.896px 22.8594px; transform: translate3d(0px, 0px, 0px); opacity: 1;">The Spotlight </div>
                  </h4>
                  <div class="fm-director-about-name mt-55 title-anim">
                    <a href="#" class="director-about-nam title-anim " style="color: #fd6500;">Cinema On Stage</a>
                  </div>
                  <a href="book-now.php" class="fm-download-btn bdFadeUp monstarat " style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);letter-spacing: 2px;">Book Now</a>
                </div>
              </div>
              <div class="fm-landing-download-movies-wrapper-section">
                <div class="fm-landing-download-movies-wrapper fix">
                  <div class="fm-landing-download-movies-flex justify-content-lg-end">

                    <div class="swiper mySwiper1 d-height swiper-container-initialized swiper-container-vertical" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transition-duration: 1000ms; transform: translate3d(0px, -800px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/abs-1.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/abs-2.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/abs-3.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/abs-4.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-5.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-6.jpg" alt="img"></a>
                          </div>
                        </div>



                      </div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    <div class="swiper mySwiper2 d-height swiper-container-initialized swiper-container-vertical" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -320px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-7.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-8.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-9.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-10.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-11.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/exp/ab-12.jpg" alt="img"></a>
                          </div>
                        </div>


                      </div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    <div class="swiper mySwiper3 d-height swiper-container-initialized swiper-container-vertical" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transition-duration: 1000ms; transform: translate3d(0px, -800px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie21.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie23.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie24.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie4.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie21.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie23.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie24.jpg" alt="img"></a>
                          </div>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie4.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie21.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie23.jpg" alt="img"></a>
                          </div>
                        </div>
                      </div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    <div class="swiper mySwiper4 d-height swiper-container-initialized swiper-container-vertical" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -320px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie9.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie15.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie14.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie8.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie9.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie15.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="3" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie14.jpg" alt="img"></a>
                          </div>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="0" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie8.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie9.jpg" alt="img"></a>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="height: 150px; margin-bottom: 10px;">
                          <div class="fm-dmovie-slide">
                            <a href="movie-details.html"><img src="assets/img/movie/movie15.jpg" alt="img"></a>
                          </div>
                        </div>
                      </div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

<section class="featured-area section-spacing featured-full-width p-relative bg-common-black testimonial-bg" data-background="assets/img/33.jpg" id="fan_speak">
  <div class="container">
    <div class="row g-5 section-title-spacing">
      <div class="col-lg-8">
        <div class="fm-featured-wrapper">
          <div class="featured-sec-wrapper">
            <div class="section-title ">
              <!-- <span class="section-subtitle featured-sub-title  ibm-plex " data-animation="fadeInUp" style="color: white;">FAN
                    SPEAK</span> -->
              <h1 class="section-main-title text-white  ibm-plex" style="color: #fd6500;">From screen to scene, the magic unfolds live! </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="btn-featured-wrapper d-flex justify-content-lg-end">
          <div class="featured-btn-circle-wrap btn_wrapper">
            <a href="{{route('book.now')}}" class="featured-rotate-btn btn__item-move">
              <span>
                <i class="flaticon-right-arrow-1"></i>
              </span>
            </a>
            <img class="image-text" src="{{route('book.now')}}" alt="img not found">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container section-spacing-bottom">
    <div class="featured-wrapper featured-slider-wrapper ">
      <div class="swiper-container featured-active">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/10.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">L.K Advani</h4>
                  </a>
                  <span class="fm-featured-meta">Former Deputy Prime Minister of India</span>
                </div>
                <!-- <div class="fm-video-play">
                                <a class="play-btn popup-video"
                                   href="https://assets.mixkit.co/videos/preview/mixkit-mercenary-looking-for-zombies-in-an-abandoned-building-41783-large.mp4"><i
                                      class="fas fa-play"></i></a>
                             </div> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/12.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title monstarat">Tina Ambani</h4>
                  </a>
                  <span class="fm-featured-meta monstarat">Actress</span>
                </div>
                <!-- <div class="fm-video-play">
                                <a class="play-btn popup-video"
                                   href="https://assets.mixkit.co/videos/preview/mixkit-mime-in-front-of-the-eiffel-tower-4772-large.mp4"><i
                                      class="fas fa-play"></i></a>
                             </div> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/13.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">Mira Nair</h4>
                  </a>
                  <span class="fm-featured-meta">Flimmaker</span>
                </div>
                <!-- <div class="fm-video-play">
                                <a class="play-btn  popup-video"
                                   href="https://assets.mixkit.co/videos/preview/mixkit-running-scared-down-a-hospital-hall-at-night-41764-large.mp4"><i
                                      class="fas fa-play"></i></a>
                             </div> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/14.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">Anil Kapoor</h4>
                  </a>
                  <span class="fm-featured-meta">Actor</span>
                </div>
                <!-- <div class="fm-video-play">
                                <a class="play-btn popup-video"
                                   href="https://assets.mixkit.co/videos/preview/mixkit-airplane-flying-in-a-red-cloudy-sky-7476-large.mp4"><i
                                      class="fas fa-play"></i></a>
                             </div> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/15.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">Twinkle Khanna</h4>
                  </a>
                  <span class="fm-featured-meta">Actress</span>
                </div>
                <!-- <div class="fm-video-play">
                                <a class="play-btn popup-video"
                                   href="https://assets.mixkit.co/videos/preview/mixkit-large-tarantula-spider-in-red-light-45639-large.mp4"><i
                                      class="fas fa-play"></i></a>
                             </div> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/17.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">Javed Akhtar</h4>
                  </a>
                  <span class="fm-featured-meta">Poet</span>
                </div>

              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="fm-single-featured">
              <div class="fm-featured-thumb">
                <a href="#"> <img src="assets/img/18.jpg" alt="img not found"></a>
              </div>
              <div class="fm-featured-content">
                <div class="fm-featured-content-inner">
                  <a href="#">
                    <h4 class="fm-featured-title">Irfan Khan</h4>
                  </a>
                  <span class="fm-featured-meta">Actor</span>
                </div>
                <!-- <div class="fm-video-play">
                             <a class="play-btn popup-video"
                                href="https://assets.mixkit.co/videos/preview/mixkit-large-tarantula-spider-in-red-light-45639-large.mp4"><i
                                   class="fas fa-play"></i></a>
                          </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="featured-slider-btn">
          <div class="featured-slider-button-prev square-btn">
            <i class="fal fa-angle-left"></i>
          </div>
          <div class="featured-slider-button-next square-btn">
            <i class="fal fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="featured-scroll-area wow zoomInUp" style="background: orangered; padding:10px">
    <div class="swiper text-scroll" dir="ltr">
      <div class="swiper-wrapper featured-scroll-wrapper">
        <div class="swiper-slide">
          <div class="featured-scroll-line">
            <h2 class="scroll-line-heading">New York. New Jersey. Houston.</h2>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="featured-scroll-line">
            <h2 class="scroll-line-heading">Dallas. San Jose. LOS ANGELES.</h2>
          </div>
        </div>
        <!-- <div class="swiper-slide">
              <div class="featured-scroll-line">
                <h2 class="scroll-line-heading">LONDON. ORLANDO. CHICAGO</h2>
              </div> -->
      </div>
    </div>
  </div>
  </div>
</section>



<!-- fm-director-films-area-end -->

<!-- history-in-tabs- start -->
<!-- <div class="row d-flex align-items-center justify-content-center  mt-75 mb-75">
        <div class="nav col-lg-2 col-12 flex-lg-column flex-md-row nav-pills me-3 justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link mb-5 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
          <button class="nav-link mb-5 " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
          <button class="nav-link mb-5 " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
          <button class="nav-link mb-5" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
        <div class="tab-content col-lg-8 col-12 align-items-end" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row align-items-end text-center " >
              <div class="col-12 col-lg-4 col-md-4
              ">
                <img src="assets/img/hq.jpg">
              </div>
              <div class="col-12 col-lg-6 col-md- align-items-center " style="margin-left:20px; text-align:start;">
                  <h5>History</h5>
                  <h3>india </h3>
                  <p class="txt" style="font-size: 0.9rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo nostrum voluptatibus aspernatur labore rerum laudantium accusantium libero aliquam</p>
              </div>

            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
             <div class="row align-items-end text-center " >
            <div class="col-12 col-lg-4">
              <img src="assets/img/hq.jpg">
            </div>
            <div class="col-12 col-lg-6 align-items-center " style="margin-left:20px; text-align:start;">
                <h5>History</h5>
                <h3>india </h3>
                <p class="txt" style="font-size: 0.9rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo nostrum voluptatibus aspernatur labore rerum laudantium accusantium libero aliquam</p>
            </div>

          </div></div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div class="row align-items-end text-center " >
            <div class="col-12 col-lg-4">
              <img src="assets/img/hq.jpg">
            </div>
            <div class="col-12 col-lg-6 align-items-center " style="margin-left:20px; text-align:start;">
                <h5>History</h5>
                <h3>india </h3>
                <p class="txt" style="font-size: 0.9rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo nostrum voluptatibus aspernatur labore rerum laudantium accusantium libero aliquam</p>
            </div>

          </div></div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <div class="row align-items-end text-center " >
            <div class="col-12 col-lg-4">
              <img src="assets/img/hq.jpg">
            </div>
            <div class="col-12 col-lg-6 align-items-center " style="margin-left:20px; text-align:start;">
                <h5>History</h5>
                <h3>india </h3>
                <p class="txt" style="font-size: 0.9rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo nostrum voluptatibus aspernatur labore rerum laudantium accusantium libero aliquam</p>
            </div>

          </div></div>
        </div>
      </div> -->

<!-- testimonial-area-start -->
<!-- <section class="testimonial-area section-spacing p-relative">
      <div class="testimonial-bg" data-background="assets/img/bg/testimonial.png"></div>
      <div class="container">
        <div class="row g-5 align-items-center section-title-spacing">
          <div class="col-lg-6 order-lg-2">
            <div class="testimonial-sec-wrapper">
              <div class="section-title testimonial-pos">
                <span class="section-subtitle title-anim" style="color: white;">FEEDBACK</span>
                <h2 class="section-main-title text-white title-anim" style="color: #fd6500;">
                  Customers Feedback
                </h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="testimonial-pagination circle-dot-pagination fade_bottom_2"></div>
          </div>
        </div>
        <div class="fm-testimonial-slide-wrapper">
          <div class="testimonial-active swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="fm-testimonial-content">
                  <div class="fm-testimonial-quote-icon">
                    <span><svg id="quote_2_" data-name="quote (2)" xmlns="http://www.w3.org/2000/svg" width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                        <path id="Path_8645" data-name="Path 8645" d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0" fill="#171717" />
                        <path id="Path_8646" data-name="Path 8646" d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0" transform="translate(-251.598)" fill="#171717" />
                      </svg>
                    </span>
                  </div>
                  <div class="fm-testimonial-text">
                    <p>
                      I Have Worked With Faime The Past Couple Of Years And
                      Have Purchased 10+ Videos. My Company Is All Across The
                      US And Working With Faime Was Easy.
                    </p>
                  </div>
                  <div class="fm-testimonial-bottom-content">
                    <div class="fm-testimonial-author">
                      <span> Adam quel </span>
                    </div>
                    <div class="fm-testimonial-brand-thumb">
                      <img src="assets/img/brand/testi-brand.png" alt="img not found" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="fm-testimonial-content">
                  <div class="fm-testimonial-quote-icon">
                    <span><svg id="quote_3_" data-name="quote (3)" xmlns="http://www.w3.org/2000/svg" width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                        <path id="Path_28645" data-name="Path 28645" d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0" fill="#171717" />
                        <path id="Path_28646" data-name="Path 28646" d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0" transform="translate(-251.598)" fill="#171717" />
                      </svg>
                    </span>
                  </div>
                  <div class="fm-testimonial-text">
                    <p>
                      I Have Worked With Faime The Past Couple Of Years And
                      Have Purchased 10+ Videos. My Company Is All Across The
                      US And Working With Faime Was Easy.
                    </p>
                  </div>
                  <div class="fm-testimonial-bottom-content">
                    <div class="fm-testimonial-author">
                      <span> Ander son </span>
                    </div>
                    <div class="fm-testimonial-brand-thumb">
                      <img src="assets/img/brand/testi-brand.png" alt="image not found" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="fm-testimonial-content">
                  <div class="fm-testimonial-quote-icon">
                    <span><svg id="quote_4_" data-name="quote (4)" xmlns="http://www.w3.org/2000/svg" width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                        <path id="Path_18645" data-name="Path 18645" d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0" fill="#171717" />
                        <path id="Path_18646" data-name="Path 18646" d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0" transform="translate(-251.598)" fill="#171717" />
                      </svg>
                    </span>
                  </div>
                  <div class="fm-testimonial-text">
                    <p>
                      I Have Worked With Faime The Past Couple Of Years And
                      Have Purchased 10+ Videos. My Company Is All Across The
                      US And Working With Faime Was Easy.
                    </p>
                  </div>
                  <div class="fm-testimonial-bottom-content">
                    <div class="fm-testimonial-author">
                      <span> Rowan san </span>
                    </div>
                    <div class="fm-testimonial-brand-thumb">
                      <img src="assets/img/brand/testi-brand.png" alt="img not found" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- testimonial-area-end -->

<!-- fm-director-team-area-start -->
<!-- <div
        class="fm-director-team-area team__animation bg-common-black section-spacing fix"
      >
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="fm-director-team-title text-center">
                <span class="section-subtitle title-anim">EXPERT TEAM</span>
                <div>
                  <h2
                    class="section-main-title text-white title-anim team-name-clr"
                  >
                    Meet My Team
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-5 gy-50">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="fm-director-team-single team__item">
                <a href="team-details.html" class="fm-director-team">
                  <img
                    src="assets/img/team/director1.jpg"
                    alt="img not found"
                  />
                  <span class="fm-director-sign">Daniyel</span>
                </a>
                <div class="fm-director-content">
                  <span class="fm-director-designation">Junior Director</span>
                  <h4 class="fm-director-name">
                    <a href="team-details.html" class="team-name-clr"
                      >Daniyel Feather</a
                    >
                  </h4>
                  <div class="fm-director-social social-hov-clr">
                    <a href="https://www.facebook.com/" target="_blank"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/" target="_blank"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="https://www.pinterest.com/" target="_blank"
                      ><i class="fa-brands fa-pinterest-p"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="fm-director-team-single team__item">
                <a href="team-details.html" class="fm-director-team">
                  <img src="assets/img/team/director2.jpg" alt="director-img" />
                  <span class="fm-director-sign">Mary</span>
                </a>
                <div class="fm-director-content">
                  <span class="fm-director-designation">Makeup Artist</span>
                  <h4 class="fm-director-name">
                    <a href="team-details.html" class="team-name-clr"
                      >Mary Gautreaux</a
                    >
                  </h4>
                  <div class="fm-director-social social-hov-clr">
                    <a href="https://www.facebook.com/" target="_blank"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/" target="_blank"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="https://www.pinterest.com/" target="_blank"
                      ><i class="fa-brands fa-pinterest-p"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="fm-director-team-single team__item">
                <a href="team-details.html" class="fm-director-team">
                  <img
                    src="assets/img/team/director3.jpg"
                    alt="img not found"
                  />
                  <span class="fm-director-sign">Ledesma</span>
                </a>
                <div class="fm-director-content">
                  <span class="fm-director-designation">Makeup Artist</span>
                  <h4 class="fm-director-name">
                    <a href="team-details.html" class="team-name-clr"
                      >Ledesma Mildred</a
                    >
                  </h4>
                  <div class="fm-director-social social-hov-clr">
                    <a href="https://www.facebook.com/" target="_blank"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/" target="_blank"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="https://www.pinterest.com/" target="_blank"
                      ><i class="fa-brands fa-pinterest-p"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="fm-director-team-single team__item">
                <a href="team-details.html" class="fm-director-team">
                  <img
                    src="assets/img/team/director4.jpg"
                    alt="img not found"
                  />
                  <span class="fm-director-sign">Stephen</span>
                </a>
                <div class="fm-director-content">
                  <span class="fm-director-designation">Script Writer</span>
                  <h4 class="fm-director-name">
                    <a href="team-details.html" class="team-name-clr"
                      >Stephen Ketchum</a
                    >
                  </h4>
                  <div class="fm-director-social social-hov-clr">
                    <a href="https://www.facebook.com/" target="_blank"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/" target="_blank"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="https://www.pinterest.com/" target="_blank"
                      ><i class="fa-brands fa-pinterest-p"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!-- fm-director-team-area-end -->
<!-- ticket card -->

<!-- ticket card -->
<!-- <div class="title-ticket text-center mt-30" style="">
      <h2 class="section-main-title text-white mb-25 title-anim" style="color: #fd6500;">
        TOUR DATES AND TICKETS
      </h2>
    </div>
    <div class="col-xl-8   col-lg-12 mt-4 mb-4 " style="margin:auto">
      <div class="fm-services-content-2 fade_bottom">

        <div class="fm-single-services-content mb-20" style="background-color: #ff8c3f  ;">
          <span class="services-num" style="background-color: black ; color:white;  ">01</span>
          <h4 class="fm-service-title">
            <a class="fm-content-title" href="#" style="color: black;">LOS ANGLES</a>
          </h4>
          <p class="fm-services-text-2 " style="color: black;">Terrace Theater, Long Beach Performing Arts Center: 300 E Ocean Blvd #300, Long Beach, CA 90802 </p><br>
          <p class="fm-services-text-2 " style="color: #000;"> 26th, 27th AUGUST 2024</p>
          <div class="fm-btn services-btn-2 " style="justify-content:center">
            <a href="#" class="border-btn is-black">Book< Tickets <span>
                <i class="fa-regular fa-arrow-right"></i>
                </span>
            </a>
          </div>
        </div>


        <div class="fm-single-services-content mb-20" style="background-color: #fd65008a;">
          <span class="services-num" style="background-color: black; color:white;">02</span>
          <h4 class="fm-service-title">
            <a class="fm-content-title" href="#" style="color: black;">LOS ANGLES</a>
          </h4>
          <p class="fm-services-text-2 " style="color: black;">Terrace Theater, Long Beach Performing Arts Center: 300 E Ocean Blvd #300, Long Beach, CA 90802 </p><br>
          <p class="fm-services-text-2 " style="color: #000;"> 26th, 27th AUGUST 2024</p>
          <div class="fm-btn services-btn-2 " style="justify-content:center">
            <a href="#" class="border-btn is-black">Book< Tickets <span>
                <i class="fa-regular fa-arrow-right"></i>
                </span>
            </a>
          </div>
        </div>

        <div class="fm-single-services-content mb-20">
          <span class="services-num">03</span>
          <h4 class="fm-service-title">
            <a class="fm-content-title" href="#" style="color: black;">LOS ANGLES</a>
          </h4>
          <p class="fm-services-text-2 " style="color: black;">Terrace Theater, Long Beach Performing Arts Center: 300 E Ocean Blvd #300, Long Beach, CA 90802 </p><br>
          <p class="fm-services-text-2 " style="color: #000;"> 26th, 27th AUGUST 2024</p>
          <div class="fm-btn services-btn-2 " style="justify-content:center">
            <a href="#" class="border-btn is-black">Book< Tickets <span>
                <i class="fa-regular fa-arrow-right"></i>
                </span>
            </a>
          </div>
        </div>

        <div class="fm-single-services-content mb-20">
          <span class="services-num">04</span>
          <h4 class="fm-service-title">
            <a class="fm-content-title" href="#" style="color: black;">LOS ANGLES</a>
          </h4>
          <p class="fm-services-text-2 ">Terrace Theater, Long Beach Performing Arts Center: 300 E Ocean Blvd #300, Long Beach, CA 90802 </p><br>
          <p class="fm-services-text-2 " style="color: #000;"> 26th, 27th AUGUST 2024</p>
          <div class="fm-btn services-btn-2 " style="justify-content:center">
            <a href="#" class="border-btn is-black">Book< Tickets <span>
                <i class="fa-regular fa-arrow-right"></i>
                </span>
            </a>
          </div>
        </div>

      </div>
    </div> -->



<!-- Cliet Review Start here  -->

<div class="container-flude m-5" style="padding-top: 50px;padding-bottom:50px">
  <div class="row">
    <div class="col-lg-4 col-12 ">


      <div class="container ">
        <div class="d-flex">
          <div class="col-2">
            <img class="text-start" style="width: 50px;height:50px; border-radius: 50%;" decoding="async" src="https://lh3.googleusercontent.com/places/ANXAkqFaWecX_M_l11FGAug5jIaaoBjXfB6aanhpsymmn2toTYnbP3XnChhqODVsjywVqFVHCenPvhsjDMn4P7UA7hsvYowqWCP3-_M=s1600-w300-h300" alt="See Reviews for Cinema On Stage" title="See Reviews for Cinema On Stage">
          </div>
          <div class="col-10 text-start mb-4 review-col-10">
            <h5 class="card-title text-start mt-2" style="color: #6e777d;">See Reviews for Cinema On Stage</h5>
            <p style="color: #fb8e28; font-size: 20px;" class="card-text">5.0 ★★★★★</p>
            <p class="card-text text-start mt-2">Based on 538 reviews</p>
            <img class="mt-2" style="width: 199px;" src="assets/img/power.png" alt="img">
            <button style="background: rgb(10, 108, 255); padding: 10px 40px; color:white; border-radius:10px" class="mt-3">Reviews us on

              <svg viewBox="0 0 512 512" height="18" width="18">
                <g fill="none" fill-rule="evenodd">
                  <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                  <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                  <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                  <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                  <path d="M20 20h472v472H20V20z"></path>
                </g>
              </svg>

            </button>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-8 swiper-container swiper-container-nobe">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m-2 col-12">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_a5734c7808ae2c5bfedaed6c9b9d930c.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">fatima Fatima</h5>
                          <p class="card-text">2 months ago</p>
                        </div>

                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container">
                          <p class="card-text">Must watch . Enthralling performances by every character. Looked like live Moghle Azam for 3 hours</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m- ">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_998c7892fdefbe10ac9f3723ae97d5a4.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">Shalmali Zankar</h5>
                          <p class="card-text">6 months ago</p>
                        </div>

                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container">
                          <p class="card-text">hospitality, such a personal touch in each and every small detail. All our gratitude and love to you guys!</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m- ">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_e8dd98b5399bd0a48fb3b06c670d1658.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">Pooja Kothari</h5>
                          <p class="card-text">6 months ago</p>
                        </div>
                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container-container">
                          <p class="card-text">Excellent, extraordinary.</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m- ">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_cbb079ad8a192fa013a99795c788ecc3.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">Vijay Yadav</h5>
                          <p class="card-text">7 months ago</p>
                        </div>
                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container">
                          <p class="card-text">Beautiful production. Choreography evokes striking images from.</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m- ">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_0e4f0b11a92e05184e709f6e5db503e9.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">Neelam Shewa</h5>
                          <p class="card-text">6 months ago</p>
                        </div>
                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container">
                          <p class="card-text">Amazingly mesmerizing show!!</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="container-flude">
                <div class="row">
                  <div class="col">
                    <div class="card p-3 review-card" style="max-width: 400px;">
                      <div class="d-flex m- ">
                        <img style="width: 50px; height:50px;" src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_0e4f0b11a92e05184e709f6e5db503e9.jpg" class="card-img-top" alt="img">
                        <div class="m-2">
                          <h5 style="font-size: 13px;" class="card-title">Satbir Thind</h5>
                          <p class="card-text">7 months ago</p>
                        </div>
                      </div>
                      <div class="card-body">
                        <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                        <div class="card-review-container">
                          <p class="card-text">Excellent show with amazing production and set. The actors were all professional and put on a show to move you to tears. I was not familiar with the story in detail before seeing this show.Beautiful costume design and musical score.The only drawback is that the subtitles are placed to the side of the stage and it's hard to enjoy the show if you are relying on the subtitles. Also the subtitles use words that simply are too formal or archaic and hard to understand. I felt like I needed a dictionary and thesaurus for the subtitles which were meant to help me understand the show!</p>
                        </div>
                      </div>
                      <div class="google-svg">
                        <svg viewBox="0 0 512 512" height="18" width="18">
                          <g fill="none" fill-rule="evenodd">
                            <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                            <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                            <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                            <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                            <path d="M20 20h472v472H20V20z"></path>
                          </g>
                        </svg>

                        <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button> -->
          <div style="color:#000" class="swiper-button-prev"></div>
          <div style="color:#000" class="swiper-button-next rotate-180"></div>
        </div>

  </div>
</div>

<!-- <section id="client-review-section">
      <div id="client-review-section-header">
        <div id="client-review-section-header-left">
          <div class="client-review-profile-container">
            <img src="./assets/img/tab11.jpg" alt="profile">
          </div>
        </div>
        <div id="client-review-section-header-right">
          <span class="client-review-section-header-right-heading">See Reviews for Cinema On Stage</span>
          <div class="star-container">
            <span class="star-count">5.0</span>
            <div class="star-content">
              <div class="star">
                <svg width="17" height="17" viewBox="0 0 1792 1792"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fb8e28"></path></svg>
              </div>
              <div class="star">
                <svg width="17" height="17" viewBox="0 0 1792 1792"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fb8e28"></path></svg>
              </div>
              <div class="star">
                <svg width="17" height="17" viewBox="0 0 1792 1792"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fb8e28"></path></svg>
              </div>
              <div class="star">
                <svg width="17" height="17" viewBox="0 0 1792 1792"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fb8e28"></path></svg>
              </div>
              <div class="star">
                <svg width="17" height="17" viewBox="0 0 1792 1792"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#fb8e28"></path></svg>
              </div>
            </div>
          </div>
          <p>Based on 538 reviews</p>
          <div class="poweredby-google">
            <img src="assets/img/power.png" alt="powered by google">
          </div>
          <a href="" class="review-us">review us on
          <svg viewBox="0 0 512 512" height="18" width="18"><g fill="none" fill-rule="evenodd"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path><path d="M20 20h472v472H20V20z"></path></g></svg>
          </a>
        </div>
      </div>
      <div id="client-review-section-body">
        <h1>body</h1>
      </div>
    </section> -->

<!--  Cliet Review End here  -->

<!-- feed start here -->
<!-- <div class="container">
  <div class="row row-fluid home-album">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="noo-shortcode-events grid">
            <div class="col-md-12 mb-30">
              <span class="  ibm-plex contact_us">
                Cinema On Stage On Digital Media</span>
              <h1 class=" ibm-plex " style="visibility: visible;">
                    Like, Follow, Share and Subscribe.
                  </h1>
            </div>
            <p class="sh-ds">
                                Like, Follow, Share and Subscribe to be a part of our memorable journey and to get all
                                the updates on upcoming events.
                            </p>
            <div class="noo-sh-event-content row mt-5">
              <div class="col-md-4 col-sm-6 mb-30">

                <div class="feed_facebook" style="width: 100%;">

                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcinemaonstage&tabs=timeline&width=400&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=819077713364262" width="400" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>

              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <a href="{{route('book.now')}}">
                  <h3 class="text-center" style="margin-bottom: 0;padding: 15px;z-index: 99;background:#f35c00;color:white;    font-size: 20px;font-weight: 600;">
                    Book Ticket</h3>
                  <img width="100%" height="400" src="assets/img/book-ticket-feed.png" alt="social">
                </a>
              </div>
              <div class="col-md-4 col-sm-6 flexcroll">
                <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/CwnoCCTxMPf/embed/captioned/?cr=1&amp;v=12&amp;wp=543&amp;rd=https%3A%2F%2Feventsnmore.in&amp;rp=%2F#%7B%22ci%22%3A0%2C%22os%22%3A6153.700000047684%2C%22ls%22%3A370.59999990463257%2C%22le%22%3A872.4000000953674%7D" allowtransparency="true" allowfullscreen="true" frameborder="0" height="455px" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white; max-width: 400px;width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: 0px 0px 12px; min-width: 326px; padding: 0px;"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
</div>

<!-- feed end here -->


@endsection

@section('extrajs')
<script>
    $('.tab-menu li a').on('click', function() {
      var target = $(this).attr('data-rel');
      $('.tab-menu li a').removeClass('active');
      $(this).addClass('active');
      $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
      return false;
    });

    if ($('.main-slider').length > 0) {
      var bannerSlider = $(".main-slider");
      bannerSlider.owlCarousel({
        items: 1,
        mouseDrag: true,
        loop: true,
        touchDrag: true,
        autoplay: true,
        dots: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut',
        autoplayHoverPause: true,
        smartSpeed: 250,

      });
    }



    //     $(document).ready(function() {
    //     // Parallax scroll
    //     $(window).scroll(function(e) {
    //         parallax();
    //     });
    // });




    // function parallax() {
    //   var scroll = $(window).scrollTop();
    //   var screenHeight = $(window).height();

    //   $('.parallax_scroll').each(function() {
    //     var offset = $(this).offset().top;
    //     var distanceFromBottom = offset - scroll - screenHeight

    //     if (offset > screenHeight && offset) {
    //       $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.5) +'px');
    //     } else {
    //       $(this).css('background-position', 'center ' + (( -scroll ) * 0.5) + 'px');
    //     }
    //   })
    // }
    // });
  </script>

  <script>
    $(document).ready(function() {
      var swiper = new Swiper('.swiper-container-nobe', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If you need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        navigation: {
          prevEl: '.swiper-button-prev',
          nextEl: '.swiper-button-next',
        },

        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 992px (desktop)
          992: {
            slidesPerView: 3,
            spaceBetween: 10
          },
          // when window width is >= 768px and < 992px (tablet)
          768: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          // when window width is < 768px (mobile)
          0: {
            slidesPerView: 1,
            spaceBetween: 5
          }
        }
      });
    })
  </script>
  @endsection
