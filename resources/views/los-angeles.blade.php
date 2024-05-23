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
</style>
@endsection
@section('content')
<!-- carousel start here -->
<div id="carouselExampleControls" class="carousel slide carousel_home" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 lazy" src="/assets/img/banner/banner4.png" alt="First slide">
        </div>
    </div>
</div>

<!-- carousel end here -->
<!-- breadcrumb-area-end -->

<!-- fm-ticket-past-show-start -->
<div class="fm-movie-details-area soft-greybg section-spacing" style="padding-top: 14px;">
    <div class="container navs-bars p-5" style="background-color: white;">
        <div class="nav-main d-flex align-items-start " id="nav_flex">
            <!-- <div class=" col-lg-2   col-12 nav flex-column  nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link   nav-tic active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true"
                            style=" padding:15px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">Houston</button>
                        <button class="nav-link  nav-tic new_jersey" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false"
                            style=" padding:15px; margin-top: 20px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">New
                            Jersey</button>
                        <button class="nav-link nav-tic new_york " id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false"
                            style=" padding:15px; margin-top: 20px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">New
                            York</button>
                        <button class="nav-link nav-tic dallas " id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false"
                            style=" padding:15px; margin-top: 20px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">Dallas</button>
                        <button class="nav-link nav-tic san_jose " id="v-pills-la-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-la" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false"
                            style=" padding:15px; margin-top: 20px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">San
                            Jose</button>
                        <button class="nav-link nav-tic l_a " id="v-pills-new-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false"
                            style=" padding:15px; margin-top: 20px; color: #df4f06; background-color:white; border:2px solid #df4f06; font-size:1.6rem; font-weight:600;">LA</button>

                    </div> -->
            <div class="col-12 tab-content text-center" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            <div class="i-tab">
                                <div class="i-title"
                                    style="background-color: #f36500; padding:10px; border-radius: 0.375em;">
                                    <h4 style="color: black;">Select Date for LA: <span style="color: #fff;">Dolby Theater
                                        </span> </h4>
                                </div>
                                <div class="i-title   mt-4"
                                    style="background-color: #fff; padding:10px; border-radius: 0.375em; ">
                                    <p style="color: black;">Click on the show date and time Of your choice to proceed for
                                        Booking.</p>
                                </div>
                                <div class="i-title container-anim"
                                    style="background-color: #fff; padding:10px; border-radius: 0.375em; ">
                                    <style>
                                        .text_anim{
										    height: 45px;
                                            animation: textscale 3s infinite;
                                        }

                                        @keyframes textscale {

                                            0% {
                                                color: #f36500;
                                                text-shadow: 0 0 50px #f36500;
                                            }
                                            50% {
                                                color: #f36500;
                                                text-shadow: 0 0 50px #f36500;
                                                font-size: 25px;
                                            }
                                            100% {
                                                color: black;
                                                text-shadow: 0 0 50px black;
                                            }

                                        }
                                        /* .text_anim{
                                            animation: textscale 1s infinite;
                                        }

                                        @keyframes textscale {
                                            0% {
                                                color: #f36500;
                                                text-shadow: 0 0 50px #f36500;
                                            }
                                            100% {
                                                color: black;
                                                text-shadow: 0 0 50px black;
                                            }
                                        } */

                                        @media screen and (max-width: 512px) {
                                            .container-anim{
                                                margin-bottom: 35px;
                                            }
                                        }
                                    </style>
                                    <p class="text_anim" style="color: black;">Tickets go on sale 20th May 2024</p>
                                </div>
                                <div class="i-dates i-dates-all mt-5"
                                    style="background-color: #f36500; padding:10px; border-radius: 0.375em;">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button class="dates   nav-tic active mt-4"><a href="https://www.ticketmaster.com/event/090060AEADB928AB">4th OCT 2024 |
                                                    FRI | 7:30 PM</a></button>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button class="dates   nav-tic active mt-4"><a href="https://www.ticketmaster.com/event/090060B1900224DC">5th OCT 2024 |
                                                    SAT | 1:30 PM </a></button>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button class="dates   nav-tic active mt-4"><a href="https://www.ticketmaster.com/event/090060B1900D24EB">5th OCT 2024 |
                                                    SAT | 7:30 PM</a></button>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button class="dates   nav-tic active mt-4"><a href="https://www.ticketmaster.com/event/090060B1901724FD">6th OCT 2024 |
                                                    SUN 2:00 PM</a></button>

                                        </div>
                                    </div>
                                </div>
                                <!--Carousel Gallery-->
                                <div class="carousel-gallery" id="carousel-gallery-5">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="/swiper-slide">
                                                <a href="/assets/img/book-ticket/la/1.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style="background-image: url(/assets/img/book-ticket/la/1.png);">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/assets/img/book-ticket/la/2.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style=" background-image: url(/assets/img/book-ticket/la/2.png); ">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/assets/img/book-ticket/la/3.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style=" background-image: url(/assets/img/book-ticket/la/3.png); ">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/assets/img/book-ticket/la/4.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style=" background-image: url(/assets/img/book-ticket/la/4.png)">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/assets/img/book-ticket/la/5.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style=" background-image: url(/assets/img/book-ticket/la/5.png)">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/assets/img/book-ticket/la/6.png" data-fancybox="gallery">
                                                    <div class="image"
                                                        style=" background-image: url(/assets/img/book-ticket/la/6.png)">
                                                        <div class="overlay">
                                                            <em class="mdi mdi-magnify-plus"></em>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <!--#Carousel Gallery-->

                                <div class="i-dates  mt-60">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <!-- <img src="assets/img/ABOUT2.png"> -->
                                            <iframe class="w-100"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.7234681825935!2d-118.34287722428137!3d34.1022239231382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf23c3bb14c7%3A0xf5f01d0d3b59ab76!2sDolby%20Theatre!5e0!3m2!1sen!2sin!4v1710575701379!5m2!1sen!2sin"
                                                width="400" height="300" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div class="col-12 col-lg-6 text-start">

                                            <h5>Los Angeles</h5>
                                            <h6 class="pt-30">Dolby Theater</h6>
                                            <p class="pt-30">6801 Hollywood Blvd, Hollywood, CA 90028, United States</p>

                                            <!-- <div class="pt-30">
                                                      <img src="assets/img/Group-383.jpg">
                                                  </div> -->
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
            </div>
        </div>

        <!-- <div class="container"> -->
        <div class="about-ticket term_condition mt-60">
            <h5 style="color: #fc6703;">Why should you attend?</h5>
            <p class="mt-20">Mughal-e-Azam: The Musical" is a captivating theatrical experience that brings to
                life the opulence, romance, and drama of one of Bollywood's most iconic films. </p>
            <ul>
                <!-- <li style="list-style-type: circle;">
                              </li> -->
                <li style="margin-top: 20px;"><strong> Spectacular Production:</strong>&nbsp;The musical boasts
                    lavish sets, extravagant costumes, and stunning visual effects that transport the audience to
                    the grandeur of the Indian heritage.</li>
                <li><strong>Iconic Story:</strong>&nbsp;Based on the timeless love story of Prince Salim and the
                    courtesan Anarkali, Mughal-e-Azam explores themes of love, sacrifice and societal norms that
                    resonate with audiences of all ages.</li>
                <li><strong>Legendary Music:</strong>&nbsp;Featuring unforgettable melodies composed by Late Naushad
                    Ali, the musical showcases classic songs like "Pyar Kiya To Darna Kya" and "Teri Mehfil Mein
                    Qismat." The music adds nuances and emotions to the narrative, enhancing the overall theatrical
                    experience.</li>
                <li><strong>Talented Cast:</strong>&nbsp;The production features a talented cast of actors, live
                    singers, and kathak artistes who bring the iconic characters to life with their stellar
                    performances and spectacular choreography, capturing the essence of the original film's beloved
                    characters.</li>
                <li><strong>Cultural Heritage:</strong>&nbsp;Mughal-e-Azam: The Musical celebrates India's rich
                    cultural heritage and cinematic legacy, paying homage to one of the greatest films in Indian
                    cinema history while also offering a fresh interpretation for contemporary audiences.</li>
                <li><strong>Emotional Impact:</strong>&nbsp;From heart-wrenching moments of forbidden love to
                    exhilarating dance sequences, the musical offers a rollercoaster of emotions that will leave you
                    spellbound and deeply moved.</li>
                <li><strong>Unforgettable Experience:</strong>&nbsp;Whether you are a fan of the original film or
                    new to the story, Mughal-e-Azam: The Musical promises an unforgettable experience of acting,
                    live signing and choreography that combines the magic of Bollywood with the grandeur of a
                    Broadway style Musical.</li>
                <li><strong>Sub titles in English:</strong>&nbsp;All performances of Mughal-e-Azam have sub-titles
                    in English and accordingly the play has been enjoyed by non-Indian audiences across the world.
                </li>

            </ul>
            <p class="mt-20">
                Overall, "Mughal-e-Azam: The Musical" is a must-see production that promises to transport you into a
                world of romance, grandeur and timeless beauty - making it a cultural experience not to be missed.
            </p>
        </div>
        <hr class="mt-30">
        <div class="about-ticket mt-60">
            <h5 style="color: #fc6703;">About The Show</h5>
            <p class="mt-20">Experience the grandeur of Mughal-e-Azam: The Musical - presented in North American
                by Cinema on Stage, an entertainment company dedicated to bringing world-class productions to
                audiences across the continent. </p>
            <p class="mt-20">This Broadway-style production brings to life the timeless story of Prince Salim and
                courtesan Anarkali, set against the backdrop of Mughal India. </p>
            <p class="mt-20">With over 550 stunning costumes, intricate sets and live performances of Indian
                classical singing and Kathak dance, this is the most expensive theatre production in Indian history.
                Produced by Shapoorji Pallonji and directed by Feroz Abbas Khan, this larger-than-life production
                (with English sub-titles) has already captivated audiences at 25 venues across India, USA, Canada,
                Singapore, Malaysia, UAE, Oman and Qatar
            </p>
            <p class="mt-20">Don't miss your chance to witness the first Indian Broadway-style musical, where
                romance and royalty meet in a grand spectacle of music, dance, and drama. </p>
        </div>
        <hr class="mt-30">
        <div class="about-ticket mt-60 term_condition">
            <h5 style="color: #fc6703;">Terms & Conditions</h5>
            <!-- <p class="mt-20">1. Tickets once booked cannot be exchanged or refunded</p>
                          <p class="mt-20">2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>
                          <p class="mt-20">3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry</p>
                          <p class="mt-20">4. It is mandatory to wear masks at all times and follow social distancing norms</p>
                          <p class="mt-20">5. Please do not purchase tickets if you feel sick</p>
                          <p class="mt-20">6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>
                          <p class="mt-20">7. Rights of admission reserved
                          </p>
                          <p class="mt-20">8. These terms and conditions are subject to change from time to time at the discretion of the organizer</p> -->
            <ul>
                <!-- <li style="list-style-type: circle;">
                              </li> -->
                <li style="margin-top: 20px;"><strong>Ticket Purchase:</strong>&nbsp;By purchasing a ticket, you
                    agree to abide by all terms and conditions outlined herein.</li>
                <li><strong>Refunds and Exchanges:</strong>&nbsp;All ticket sales are final. No refunds or exchanges
                    will be issued unless the event is canceled or rescheduled, in which case refunds or exchanges
                    may be offered at the discretion of the organizer.</li>
                <li><strong>Event Cancellation:</strong>&nbsp;In the event of cancellation, tickets will be refunded
                    at face value only. Additional fees such as processing or delivery fees may not be refundable.
                </li>
                <li><strong>Event Rescheduling:</strong>&nbsp;If the event is rescheduled, tickets will be valid for
                    the new date unless otherwise notified by the organizer. Refunds may be offered if the new date
                    is not suitable for the ticket holder.</li>
                <li><strong>Lost or Stolen Tickets:</strong>&nbsp;The organizer is not responsible for lost or
                    stolen tickets. It is the ticket holder’s responsibility to keep tickets in a safe place or
                    emails and to present them for entry to the event.</li>
                <li><strong>Admission and Seating:</strong>&nbsp;Admission to the event is subject to the terms and
                    conditions of the venue. Latecomers may be admitted at a suitable break in the performance, at
                    the discretion of the venue staff. Seating is allocated on a first-come, first-served basis
                    unless otherwise specified.</li>
                <li><strong>Unlawful Resale:</strong>&nbsp;Unlawful resale or attempted unlawful resale of a ticket
                    is prohibited and may result in the seizure or cancellation of that ticket without refund or
                    other compensation.</li>
                <li><strong>Age Restrictions:</strong>&nbsp;Some events may have age restrictions. It is the ticket
                    holder’s responsibility to ensure they meet any age requirements before purchasing tickets. For
                    this event, only individuals aged 5 years and above will be allowed entry.</li>
                <li><strong>Behavior:</strong>&nbsp;The organizer reserves the right to refuse admission or eject
                    any person whose behavior is disruptive or violates the rules and regulations of the venue.</li>
                <li><strong>Recording and Photography:</strong>&nbsp;Photography, video recording, and audio
                    recording may be prohibited during the event. It is the ticket holder’s responsibility to comply
                    with any such restrictions.</li>
                <li><strong>Changes to Terms and Conditions:</strong>&nbsp;The organizer reserves the right to amend
                    or update these terms and conditions at any time without prior notice.</li>
            </ul>
        </div>
        <hr class="mt-30">
        <div class="about-ticket mt-60">
            <h5>FAQS</h5>
            <div class="accordion mt-20" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                            style="color: #fc6703;">
                            What is the story of the play?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Does the Prince have a right to choose a slave girl as his princess when his father
                                is the Emperor of India ?” is the dilemma the play addresses amidst music, dance,
                                drama and war sequences.</p>
                            <p class="mt-10"><strong>The story line :</strong> Emperor Akbar’s desire for a son is
                                fulfilled when his wife, Jodhabai gives birth to Salim who grows up to be a spoiled,
                                flippant and disrespectful teen. Consequently, his father sends him to the
                                battlefield and war to teach him courage and discipline. Fourteen years later, he
                                returns home as a distinguished soldier. Salim, now a young man, falls in love with
                                Anarkali, a lowly courtesan.</p>
                            <p class="mt-10">Bahaar, a dancer who covets the love of the prince, is consumed with
                                jealousy upon discovering the secret love affair of Salim and Anarkali, and exposes
                                it to Akbar. The emperor, full of royal pride, vehemently disapproves of the
                                relationship and imprisons Anarkali, which leads Salim to declare an open rebellion
                                and goes to war against his own father. This defiance and uncompromising love,
                                threatens the existence and future of the India.</p>
                            <p class="mt-10">The play is based on K Asif’s classic film Mughal-e-Azam ( 1960,
                                starring Prithviraj Kapoor, Madhubala & Dilip Kumar). The songs from film are
                                performed live during the play. The original love story of Salim and Anarkali was
                                penned by Syed Imtiaz Ali Taj in 1922.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                            style="color: #fc6703;">
                            Was the original film Mughal-e-Azam (1960) in Black & White or in colour ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>In 1950s, the film took nine years the making during which the colour technology
                                arrived in India. So, the 1960 film was 15% in color and 85% in B&W. K Asif died in
                                1971. His wish to see the entire film in color was fulfilled in 2004 by the original
                                producers – Shapoorji Pallonji. The color version (Design and Direction : Deepesh
                                Salgia) also proved blockbuster and ran for over 25 weeks in cinema halls. Shapoorji
                                Pallonji produced the Broadway style musical play Mughal-e-Azam in 2016 (Directed by
                                Feroz Abbas Khan).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                            style="color: #fc6703;">
                            What is so special about the film Mughal-e-Azam ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Besides being the most expensive and the all-time biggest grosser of Indian cinema
                                (inflation adjusted), the film created new benchmark in Indian cinema in all aspects
                                of film making – Screenplay, Production Design, Direction, Music, Dialogue,
                                Performances, Cinematography et al.</p>
                            <p class="mt-10">Such has been the impact of this film that year-on-year the film
                                experienced house full shows during its re-release until 1990s when audiences moved
                                to Satellite and Cable TV to enjoy Mughal-e-Azam. The colour version (2004) and the
                                musical (2016) also proved blockbusters, even when the audience comprised of a
                                completely new generation.</p>
                            <p class="mt-10">Besides the above, the legendary love story of Salim and Anarkali has
                                been enjoyed by audiences as a silent film, as a radio play and as talkie film by
                                other makers.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                            style="color: #fc6703;">
                            How many awards has this Broadway style musical won ?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>In 2017, Mughal-e-Azam (The Musical Play), bagged seven out of the fourteen Broadway
                                World India awards which include, Best Play, Best Director, Best Choreography, Best
                                Costume Design, Best Lighting Design, Best Set Design, Best Ensemble Cast.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                            style="color: #fc6703;">
                            What is the size of the cast and crew ?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Mughal-e-Azam is the first Broadway style musical from India and till date the most
                                expensive theatre production from India. There are about 100 members of the cast and
                                crew.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"
                            style="color: #fc6703;">
                            Will the same performers be performing who have been performing in Mumbai ?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Yes. All performers are coming from India. It is the same team that has been
                                performing in India.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven "
                            style="color: #fc6703;">
                            Are there technical experts from Broadway who have supervised the technical aspects of
                            the show ?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Yes. The Production Design, Lighting Design and Projections have been designed and
                                supervised by experts from Broadway.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"
                            style="color: #fc6703;">
                            Will the show be the same as is being performed in Mumbai or will it be a scaled down
                            version ?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>The performance in US & Canada will be of the same as scale as the performances in
                                Mumbai, with same sets and the same cast and crew. US & Canada shows will have no
                                compromises.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"
                            style="color: #fc6703;">
                            Will the singers be singing live ?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Yes. Both Anarkali and Bahaar will be singing live.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"
                            style="color: #fc6703;">
                            Does the play have some additional songs that are not there in the film ?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Will the singers be singing live ?</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"
                            style="color: #fc6703;">
                            Are the dancers trained Kathak dancers ?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Kathak requires years of training to reach professional proficiency. Top Kathak
                                dancers from across different Indian cities (Mumbai, Delhi, Kolkata, Bangalore,
                                Bangalore, Pune, Jaipur, ,Patna, Ranchi Nasik etc.) will be performing during US &
                                Canada season.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"
                            style="color: #fc6703;">
                            Can I have some more details about the choreography ?
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>The core of dances in Mughal-e-Azam is Kathak. The Kathak is a story telling dance
                                form and is more than 2000 years old. The term “Kathak” comes from “Kathaa” meaning
                                story. Kathak reached a new high during the Mughal era when the emperors were great
                                patrons of various art forms.</p>
                            <p class="mt-10">Mayuri Upadhyay, the choreographer has weaved in moments of dramatic
                                flair in the choreography. The dance forms portray wide variety, from Raasleela for
                                ‘Mohe Panghat Pe’ which is a celebration of the birth of Lord Krishna to the iconic
                                ‘Pyar Kiya toh Darna Kya’ which is Anarkali’s ode to boundless love that could not
                                be crushed by Akbar’s ego. </p>

                            <p class="mt-10">The dancers were provided training in body conditioning, Abhinaya,
                                nuanced Kathak and then choreography. Typically, dancers would go six to eight hours
                                straight perfecting their craft. The dancers were taught sequences and every
                                sequence underwent trial. Gauri Diwakar has provided the Kathak expertise.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTrd" aria-expanded="false" aria-controls="collapseTrd"
                            style="color: #fc6703;">
                            I don’t understand Hindi/Urdu, will I be able to enjoy the play ?
                        </button>
                    </h2>
                    <div id="collapseTrd" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>All performances of Mughal-e-Azam always have sub-titles in English. The past
                                performances outside India have experienced a larger number of non-Indian audiences.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen"
                            style="color: #fc6703;">
                            How many costumes are being used in the play ?
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>There are about 550 costumes. All have been designed by India’s ace designer, Manish
                                Malhotra.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFif" aria-expanded="false" aria-controls="collapseFif"
                            style="color: #fc6703;">
                            Can I have more details about the costumes ?
                        </button>
                    </h2>
                    <div id="collapseFif" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>The designs had to speak of grandeur, glory and the extravagance of the Mughal
                                period. They carry forward the legacy of original characters. Manish Malhotra has
                                provided a signature sheen to illuminate the grandiosity.
                            </p>
                            <p class="mt-10">There were layers of vintage fabric, whether it be silk, kota,
                                zardosi embroidery, brocades, bandini, or velvet, everything is pure and rich in the
                                display. The use pure fabrics and intricate embroideries provide an extremely rich
                                feel.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen"
                            style="color: #fc6703;">
                            In how many countries has the play performed ?
                        </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>The play has had over 200 performances over six Asian countries – India, UAE,
                                Singapore, Malaysia, Oman and Qatar</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen"
                            style="color: #fc6703;">
                            Can I take video of the play ?
                        </button>
                    </h2>
                    <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>The play is fully copyright protected. Any video recording or photography is strictly
                                prohibited and would be a violation of law. Audiences are, however, free to take
                                pictures/video recording of the curtain call at the end of the play.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen"
                            style="color: #fc6703;">
                            Can you let me know more about Shapoorji Pallonji ?
                        </button>
                    </h2>
                    <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>When in 1940s, the legendary filmmaker K Asif was unable to find a financier for his
                                dream project, a film that was not only infeasible but also a loss-making
                                proposition, came in Shapoorji Pallonji and produced Mughal-e-Azam (1960) to support
                                the cause of Indian art and culture. Later in 2004, Shapoorji continued its agenda
                                and fulfilled the wish of K Asif, by releasing the colourised version of the film
                                (Design and Direction : Deepesh Salgia) which too proved a blockbuster. In 2016,
                                Shapoorji Pallonji produced the musical play Mughal-e-Azam (Directed by Feroz Abbas
                                Khan, Creative & Strategic Vision : Deepesh Salgia)</p>
                            <p class="mt-10">
                                Besides the above, Shapoorji Pallonji Group has no stakes in Entertainment business.
                                This $ 4 billion Mumbai headquartered conglomerate has interests in Engineering &
                                Construction, Infrastructure, Energy, Real Estate, Water Recycling and Financial
                                Services. From Research Parks to Marine terminals, from Royal Palaces to Cricket
                                stadiums, from Industrial Complexes to IT Parks and from Luxury Skysrapers to Mass
                                Housing, Shapoorji Pallonji’s work dominate skyline of several Asian and African
                                nations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty"
                            style="color: #fc6703;">
                            Can you please let me know about other works of Feroz Abbas Khan ?
                        </button>
                    </h2>
                    <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Feroz Abbas Khan is recognised as much for exploring new forms, as for bringing
                                theatre, mainstream recognition. The bandwidth of his works range from intensely
                                contemplative to the utterly exhilarating and from autobiographical one man shows to
                                two character plays to full scale musicals.
                            </p>
                            <p class="mt-10">His works include Tumhari Amrit (Shabana Azmi & Farouque Shaikh),
                                Saalgirah (Anupam & Kirron Kher), Mahatma V/S Gandhi (Naseeruddin Shah & Kay Kay
                                Menon), Salesman Ramlal (Satish Kaushik and Seema Biswas), Kuch Bhi Ho sakta (Anupam
                                Kher), Dinner With Friends (Perizad Zorabian & others).</p>
                            <p class="mt-10">His film ‘Gandhi- My Father’ Feroz won Several National and
                                International Awards. Dekh Tamasha Dekh, is a social and political satirical film,
                                based on a true story.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-30">

        <!-- </div> -->
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

        // let carousel_gallery = document.querySelectorAll('.carousel-gallery');
        // console.log(carousel_gallery);
        // for (let i = 0; i < carousel_gallery.length; i++) {
        //     new Swiper(".carousel-gallery .swiper-container", {
        //         effect: "slide",
        //         speed: 900,
        //         slidesPerView: 3,
        //         spaceBetween: 20,
        //         simulateTouch: true,
        //         touch: {
        //             enabled: true, // Enable touch interactions
        //         },
        //         autoplay: {
        //             delay: 5000,
        //             stopOnLastSlide: false,
        //             disableOnInteraction: false,
        //         },
        //         pagination: {
        //             el: ".carousel-gallery .swiper-pagination",
        //             clickable: true,
        //         },
        //         loop: true, // Enable looping
        //         breakpoints: {
        //             320: {
        //                 slidesPerView: 1,
        //                 spaceBetween: 5,
        //             },
        //             425: {
        //                 slidesPerView: 2,
        //                 spaceBetween: 10,
        //             },
        //             768: {
        //                 slidesPerView: 3,
        //                 spaceBetween: 20,
        //             },
        //         },
        //     });
        // }
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