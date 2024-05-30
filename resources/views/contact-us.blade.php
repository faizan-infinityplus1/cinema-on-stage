@extends('layouts.master')
@section('page', 'Contact Us')
@section('content')



<!-- <div class="adjust-header-space bg-common-black"></div> -->

      <!-- breadcrumb-area-start -->
      <div class="fm-breadcrumb-area " data-background="assets/img/banner12.jpg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12">
                  <div class="page-title-wrapper">
                     <h1 class="page-title p-text">Contact Us</h1>
                  </div>
                  <div class="breadcrumb-menu">
                     <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                           <li class="trail-item trail-begin p-text">
                              <a href="index.html"><span>Home</span></a>
                           </li>
                           <li class="trail-item trail-end p-text"><span>Contact</span></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- fm-contact-area-start -->
      <div class="fm-contact-area section-spacing">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-10">
                  <div class="fm-contact-content-wrapper ">
                     <div class="row g-5">
                        <div class="col-md-12">
                        <h2 class="fade__anim-item ibm-plex title-anim1" style="color: rgb(253, 101, 0); perspective: 400px;"><div style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; transform-origin: 705px 30px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Get In Touch</div></h2>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                           <div class="fm-contact-info-wrapper">

                              <div class="fm-contact-info-single mb-40">
                                 <span class="fm-contact-info-icon"><i class="fa-thin fa-phone"></i></span>
                                 <div class="fm-contact-info-text">
                                    <h5 class="fm-contact-info-text-label">Phone</h5>
                                    <p><span>Enquiry : </span><a href="tel:+18552674636">855-267-4636</a></p>
                                 </div>
                              </div>

                              <div class="fm-contact-info-single mb-40">
                                 <span class="fm-contact-info-icon"><i class="fa-thin fa-envelope-open-text"></i></span>
                                 <div class="fm-contact-info-text">
                                    <h5 class="fm-contact-info-text-label">Email</h5>
                                    <p> <a href="mailto:info@cinemaonstage.com"><span class="__cf_email__" data-cfemail="cfa7aaa3a3a08fa9aea6a2aaa2aaaba6aee1aca0a2">info@cinemaonstage.com</span></a>
                                    </p>
                                 </div>
                              </div>

                              

                           </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                           <div class="fm-contact-info-form ml-50">
                              <form action="#">
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                       <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                       <input type="email" placeholder="Email">
                                    </div>

                                 </div>
                                 <input type="text" placeholder="Subject">
                                 <textarea name="fmmessage" id="fmmessage" placeholder="Type your message..."></textarea>
                                 <button type="submit">Send Message</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- fm-contact-area-end -->

      <!-- fm-contact-map-area-start -->
      @endsection
