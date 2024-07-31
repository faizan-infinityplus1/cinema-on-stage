@extends('layouts.master')
@section('page', 'Book Now')
@section('extracss')


<!-- gallery -->
<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css" />

<style>
    .iframe {
        width: 100% !important;
    }

    @media(max-width:992px) {
        .parallax-background-container {
            height: 274px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        .section-bg {
            height: 274px;
        }
    }

    @media(max-width:512px) {

        #nav_flex {
            flex-direction: column;
        }

        .i-title {
            margin-top: 20px;
        }

        .parallax-background-container {
            height: 190px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        .section-bg {
            height: 190px;
        }
    }

    .offical-main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .official {
        display: inline-block;
        padding: 4px;
        color: #000;
        font-size: 18px;
        text-align: center;
        margin-top: 5px;
        font-weight: 900;
        margin-bottom: 0px;
        /* padding-bottom: 0px !important; */
        margin-bottom: 0px !important;

    }

    .down-arrow {
        color: #000;
        font-size: 15px;
    }

    .i-dates-all {
        padding-bottom: 40px !important;
    }

    .term_condition li {
        margin-left: 33px;
        margin-bottom: 0px;
        margin-top: 10px;
        list-style: disc;
    }

    .term_condition strong {
        color: #000;
    }

    .term_condition li {
        color: #6e777d;
        line-height: 25px;
    }

    @media(max-width:992px) {
        .term_condition li {

            margin-left: 17px;

        }


    }

    .mobile-menu.mean-container .mean-nav ul li a.mean-expand {
        background: white !important;
    }
</style>
@endsection
@section('content')
<!-- carousel start here -->
<div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 lazy" src="assets/img/banner/banner4.png" alt="First slide">
        </div>
    </div>
</div>

<!-- carousel end here -->
<!-- breadcrumb-area-end -->

<!-- fm-ticket-past-show-start -->
<div class="fm-movie-details-area soft-greybg section-spacing" style="padding-top: 14px;">
    <div class="container navs-bars p-5" style="background-color: white;">

        <div class="desktop-city-name-container">
            <div class="city-name">
                Houston, New Jersey, New York, Dallas - New dates will be announced soon, till then new booking is closed and current ticket holders will get refunds from original point of purchase within 7 to 10 days, we regret any inconvenience caused.
            </div>
            {{-- <a href="{{ route('houston') }}" class="city-name">Houston</a>
            <a href="{{ route('new.jersey') }}" class="city-name">New Jersey</a>
            <a href="{{ route('new.york') }}" class="city-name">New York</a>
            <a href="{{ route('dallas') }}" class="city-name">Dallas</a> --}}
            <a href="{{ route('san.jose') }}" class="city-name">San Jose</a>
            <a href="{{ route('los.angeles') }}" class="city-name">LA</a>
        </div>

    </div>

</div>
@endsection
@section('extrajs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Touch Module -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('[data-fancybox="gallery"]').fancybox();

        new Swiper(".carousel-gallery .swiper-container", {
            effect: "slide",
            speed: 900,
            slidesPerView: 3,
            spaceBetween: 20,
            simulateTouch: true,
            touch: {
                enabled: true, // Enable touch interactions
            },
            autoplay: {
                delay: 5000,
                stopOnLastSlide: false,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".carousel-gallery .swiper-pagination",
                clickable: true,
            },
            loop: true, // Enable looping
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 5,
                },
                425: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        $('.new_jersey').click(() => {
            new Swiper("#carousel-gallery-1 .swiper-container", {
                effect: "slide",
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                touch: {
                    enabled: true, // Enable touch interactions
                },
                425: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                pagination: {
                    el: "#carousel-gallery-1 .swiper-pagination",
                    clickable: true,
                },
                loop: true, // Enable looping
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        });

        $('.new_york').click(() => {
            new Swiper("#carousel-gallery-2 .swiper-container", {
                effect: "slide",
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                touch: {
                    enabled: true, // Enable touch interactions
                },
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: "#carousel-gallery-2 .swiper-pagination",
                    clickable: true,
                },
                loop: true, // Enable looping
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        });

        $('.dallas').click(() => {
            new Swiper("#carousel-gallery-3 .swiper-container", {
                effect: "slide",
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                touch: {
                    enabled: true, // Enable touch interactions
                },
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: "#carousel-gallery-3 .swiper-pagination",
                    clickable: true,
                },
                loop: true, // Enable looping
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        });

        $('.san_jose').click(() => {
            new Swiper("#carousel-gallery-4 .swiper-container", {
                effect: "slide",
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                touch: {
                    enabled: true, // Enable touch interactions
                },
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: "#carousel-gallery-4 .swiper-pagination",
                    clickable: true,
                },
                loop: true, // Enable looping
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        });

        $('.l_a').click(() => {
            new Swiper("#carousel-gallery-5 .swiper-container", {
                effect: "slide",
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 20,
                simulateTouch: true,
                touch: {
                    enabled: true, // Enable touch interactions
                },
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: "#carousel-gallery-5 .swiper-pagination",
                    clickable: true,
                },
                loop: true, // Enable looping
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        });
        // function swiper() {




    });
</script>

@endsection