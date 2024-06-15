@extends('layouts.master')
@section('page', 'Home')
@section('title', 'Mughal-e-Azam Show Tickets in Houton, New Jersey, New York, Dallas, San Jose & LA')
@section('canonical', 'https://cinemaonstage.com/')
@section('description', 'Get your tickets for Mughal-e-Azam shows in Los Angeles, New York, and Houston at Cinema on Stage. Experience the grandeur of the stage and cinema. Book now for an unforgettable experience!')
@section('keyword', 'cinemaonstage, cinema on stage mughal e azam, mughal e azam show tickets, mughal e azam show los angeles, mughal e azam musical tickets, mughal e azam show new york, stage cinema movies, stage and cinema, mughal e azam houston tickets')
@section('content')
<!-- carousel slider start here -->
<div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 lazy lazy img-responsive" src="assets/img/banner/banner1.png" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100 lazy lazy img-responsive" src="assets/img/banner/banner2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 lazy" src="assets/img/banner/banner3.png" alt="Second slide">
    </div>
    <div class="carousel-item">

      <img class="d-block w-100 lazy lazy img-responsive" src="assets/img/banner/banner4.png" alt="Third slide">
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
              <p class="monstarat title-anim1" id="para" style="color: #6e777d;">Welcome to Cinema On Stage, your
                premier entertainment company based in Houston, North America, with a global footprint spanning over 30
                countries and 70 cities. With a rich legacy of delivering exceptional performances on a global scale, we
                bring unparalleled expertise and experience to every production.
              </p>
              <p class="monstarat title-anim1" style="margin-bottom: 15px;">From breathtaking theatrical experiences to
                electrifying concerts and meticulously orchestrated corporate events, each production is meticulously
                designed to captivate and inspire audiences of all ages. Our team of technical experts and production
                managers ensures that every moment on stage is nothing short of extraordinary, employing cutting-edge
                technology and innovative staging techniques to create immersive experiences that leave a lasting
                impression.
              </p>
              <div style="margin-top: 30px;" class="about-btn">
                <a href="{{route('about')}}" class=" monstarat "
                  style=" padding:10px; color:white; border-radius: 0.375rem; border-radius:2px; background-color:#f35c00;letter-spacing:2px;">Read
                  More <i class="fa-light fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<div class="container" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-12 ">
      <span class="fm-section-subtitle  ibm-plex" style="color:#f35c00">Experience the magic of our work – click here to
        visit our YouTube channel
      </span>
    </div>
    <div class="row mb-30">
      <div class="col-md-2 "> <span class="line-one "></span> </div>
      <div class="col-md-8">
        <p class=" ibm-plex"> <a href="https://www.youtube.com/@cinemaonstage"> https://youtube.com/@cinemaonstage </a>
        </p>
      </div>
    </div>
  </div>
</div>
<div id="carouselExampleLight" class="carousel carousel-light slide carousel_youtube" data-ride="carousel"
  data-interval="2000" style="padding-bottom:50px;">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/i5lvLVx_IkM"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/CbCzstKMDVI?si=jnsTAJidkKFGMnfP"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/zP6yZduTYmI?si=_DQwL7MUDOhTbtx3"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <div class="iframe-container">
        <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/lCRoCJxxDao?si=KyDy4KgvDAniz-5k"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
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
            <p class="title-anim1 monstarat" id="para">The Musical - presented in North America by Cinema on Stage, an
              entertainment company dedicated to bringing world-class productions to audiences across the continent.
            </p>
            <p class="title-anim1 monstarat">This Broadway-style production brings to life the timeless story of Prince
              Salim and courtesan Anarkali, set against the backdrop of Mughal India.
            </p>
            <p class="title-anim1 monstarat" style="margin-top: 15px;">With over 550 stunning costumes, intricate sets
              and live performances of Indian classical singing and Kathak dance, this is the most expensive theatre
              production in Indian history.
              Produced by Shapoorji Pallonji and directed by Feroz Abbas Khan, this larger-than-life production (with
              English sub-titles) has already captivated audiences at 25 venues across India, USA, Canada, Singapore,
              Malaysia, UAE, Oman and Qatar

            </p>
            <p class="title-anim1 monstarat" style="margin-top: 15px;">Don't miss your chance to witness the first
              Indian Broadway-style musical, where romance and royalty meet in a grand spectacle of music, dance, and
              drama.
            </p>
            <div style="margin-top: 30px;" class="about-btn">
              <a href="{{route('about')}}" class=" monstarat "
                style=" padding:10px; color:white; border-radius: 0.375rem; border-radius:2px; background-color:#f35c00;letter-spacing:2px;">Read
                More <i class="fa-light fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<section class="featured-area section-spacing featured-full-width p-relative bg-common-black testimonial-bg"
  data-background="assets/img/33.jpg" id="fan_speak">
  <div class="container">
    <div class="row g-5 section-title-spacing">
      <div class="col-lg-8">
        <div class="fm-featured-wrapper">
          <div class="featured-sec-wrapper">
            <div class="section-title ">
              <!-- <span class="section-subtitle featured-sub-title  ibm-plex " data-animation="fadeInUp" style="color: white;">FAN
                    SPEAK</span> -->
              <h1 class="section-main-title text-white  ibm-plex" style="color: #fd6500;">From screen to scene, the
                magic unfolds live! </h1>
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
                <a href="#"> <img src="assets/img/10.jpg" class="lazy img-responsive" alt="img not found"></a>
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
                <a href="#"> <img src="assets/img/12.jpg" class="lazy img-responsive" alt="img not found"></a>
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
                <a href="#"> <img src="assets/img/13.jpg" class="lazy img-responsive" alt="img not found"></a>
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
                <a href="#"> <img src="assets/img/15.jpg" class="lazy img-responsive" alt="img not found"></a>
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
                <a href="#"> <img src="assets/img/17.jpg" class="lazy img-responsive" alt="img not found"></a>
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
                <a href="#"> <img src="assets/img/18.jpg" class="lazy img-responsive" alt="img not found"></a>
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



<!-- Cliet Review Start here  -->

<div class="container-flude m-5" style="padding-top: 50px;padding-bottom:50px">
  <div class="row">
    <div class="col-lg-4 col-12 ">


      <div class="container ">
        <div class="d-flex">
          <div class="col-2">
            <img class="text-start" style="width: 50px;height:50px; border-radius: 50%;" decoding="async"
              src="https://lh3.googleusercontent.com/places/ANXAkqFaWecX_M_l11FGAug5jIaaoBjXfB6aanhpsymmn2toTYnbP3XnChhqODVsjywVqFVHCenPvhsjDMn4P7UA7hsvYowqWCP3-_M=s1600-w300-h300"
              alt="See Reviews for Cinema On Stage" title="See Reviews for Cinema On Stage">
          </div>
          <div class="col-10 text-start mb-4 review-col-10">
            <h5 class="card-title text-start mt-2" style="color: #6e777d;">See Reviews for Cinema On Stage</h5>
            <p style="color: #fb8e28; font-size: 20px;" class="card-text">5.0 ★★★★★</p>
            <p class="card-text text-start mt-2">Based on 538 reviews</p>
            <img class="mt-2" style="width: 199px;" src="assets/img/power.png" alt="img">
            <button style="background: rgb(10, 108, 255); padding: 10px 40px; color:white; border-radius:10px"
              class="mt-3">Reviews us on

              <svg viewBox="0 0 512 512" height="18" width="18">
                <g fill="none" fill-rule="evenodd">
                  <path
                    d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                    fill="#4285f4"></path>
                  <path
                    d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                    fill="#34a853"></path>
                  <path
                    d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                    fill="#fbbc05"></path>
                  <path
                    d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                    fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_a5734c7808ae2c5bfedaed6c9b9d930c.jpg"
                      class="card-img-top" alt="img">
                    <div class="m-2">
                      <h5 style="font-size: 13px;" class="card-title">fatima Fatima</h5>
                      <p class="card-text">2 months ago</p>
                    </div>

                  </div>
                  <div class="card-body">
                    <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                    <div class="card-review-container">
                      <p class="card-text">Must watch . Enthralling performances by every character. Looked like live
                        Moghle Azam for 3 hours</p>
                    </div>
                  </div>
                  <div class="google-svg">
                    <svg viewBox="0 0 512 512" height="18" width="18">
                      <g fill="none" fill-rule="evenodd">
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_998c7892fdefbe10ac9f3723ae97d5a4.jpg"
                      class="card-img-top" alt="img">
                    <div class="m-2">
                      <h5 style="font-size: 13px;" class="card-title">Shalmali Zankar</h5>
                      <p class="card-text">6 months ago</p>
                    </div>

                  </div>
                  <div class="card-body">
                    <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                    <div class="card-review-container">
                      <p class="card-text">hospitality, such a personal touch in each and every small detail. All our
                        gratitude and love to you guys!</p>
                    </div>
                  </div>
                  <div class="google-svg">
                    <svg viewBox="0 0 512 512" height="18" width="18">
                      <g fill="none" fill-rule="evenodd">
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_e8dd98b5399bd0a48fb3b06c670d1658.jpg"
                      class="card-img-top" alt="img">
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
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_cbb079ad8a192fa013a99795c788ecc3.jpg"
                      class="card-img-top" alt="img">
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
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_0e4f0b11a92e05184e709f6e5db503e9.jpg"
                      class="card-img-top" alt="img">
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
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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
                    <img style="width: 50px; height:50px;"
                      src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_0e4f0b11a92e05184e709f6e5db503e9.jpg"
                      class="card-img-top" alt="img">
                    <div class="m-2">
                      <h5 style="font-size: 13px;" class="card-title">Satbir Thind</h5>
                      <p class="card-text">7 months ago</p>
                    </div>
                  </div>
                  <div class="card-body">
                    <p style="color: #fb8e28; font-size: 20px;" class="card-text">★★★★★</p>
                    <div class="card-review-container">
                      <p class="card-text">Excellent show with amazing production and set. The actors were all
                        professional and put on a show to move you to tears. I was not familiar with the story in detail
                        before seeing this show.Beautiful costume design and musical score.The only drawback is that the
                        subtitles are placed to the side of the stage and it's hard to enjoy the show if you are relying
                        on the subtitles. Also the subtitles use words that simply are too formal or archaic and hard to
                        understand. I felt like I needed a dictionary and thesaurus for the subtitles which were meant
                        to help me understand the show!</p>
                    </div>
                  </div>
                  <div class="google-svg">
                    <svg viewBox="0 0 512 512" height="18" width="18">
                      <g fill="none" fill-rule="evenodd">
                        <path
                          d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                          fill="#4285f4"></path>
                        <path
                          d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                          fill="#34a853"></path>
                        <path
                          d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                          fill="#fbbc05"></path>
                        <path
                          d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                          fill="#ea4335"></path>
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


<!-- feed end here -->


@endsection

@section('extrajs')
<script>
  $('.tab-menu li a').on('click', function () {
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
</script>

<script>
  $(document).ready(function () {
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