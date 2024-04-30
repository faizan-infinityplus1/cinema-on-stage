@extends('layouts.master')
@section('title', 'Past Shows')
@section('content')



<!-- <div class="adjust-header-space bg-common-black"></div> -->

        <!-- breadcrumb-area-start -->
        <!-- <div class="fm-breadcrumb-area " data-background="assets/img/banner11.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="page-title-wrapper">
                            <h1 class="page-title p-text">Past Shows</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin p-text">
                                        <a href="index.html"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end p-text"><span>Past Shows</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <section class="parallax-background-container" style="margin-top: 100px;margin-bottom:100px">
            <div class="section-bg parallax-object1" style="background-image: url('assets/img/banner/shows.png');" data-breakpoint="768" data-speed="0.5"></div>
        </section> -->
        <!-- 
        <div >

            <img src="assets/img/banner/shows.jpg" alt="past shows" style="    max-width: 100%;
    height: auto; margin:auto;display:block">
        </div> -->

        <div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 lazy" src="assets/img/banner/shows.png" alt="First slide">
                </div>
                <!-- <div class="carousel-item">

                    <img class="d-block w-100 lazy" src="assets/img/banner/pritam.png" alt="Third slide">
                </div> -->




                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
            <!-- <div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="iframe-container">
                            <iframe class="d-block w-100 iframe_height" src="https://www.youtube.com/embed/GuHRPXInvVU?si=3IyIwQ6Kmxi0AMbC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>


                </div> -->

                <!-- <section class="parallax-background-container" s>
            <div class="section-bg " style="background-image: url('assets/img/banner/shows.png');" data-breakpoint="768" data-speed="0.5"></div>
        </section> -->
        @endsection