 <!-- JS here -->
 <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="assets/js/jquery-3.6.0.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/meanmenu.js"></script>
 <script src="assets/js/swiper-bundle.min.js"></script>
 <script src="assets/js/slick.min.js"></script>
 <script src="assets/js/magnific-popup.min.js"></script>
 <script src="assets/js/parallax.min.js"></script>
 <script src="assets/js/gsap.min.js"></script>
 <script src="assets/js/ScrollTrigger.min.js"></script>
 <script src="assets/js/ScrollToPlugin.min.js"></script>
 <script src="assets/js/SplitText.min.js"></script>
 <script src="assets/js/vanilla-tils.js"></script>
 <script src="assets/js/appair.min.js"></script>
 <script src="assets/js/knob.min.js"></script>
 <script src="assets/js/nice-select.min.js"></script>
 <script src="assets/js/ajax-form.js"></script>
 <script src="assets/js/wow.min.js"></script>
 <script src="assets/js/imagesloaded.pkgd.min.js"></script>
 <script src="assets/js/isotope.pkgd.min.js"></script>
 <script src="assets/js/fontawesome.min.js"></script>
 <script src="assets/js/ui-range-slider.js"></script>
 <script src="assets/js/main.js"></script>
 <script src="assets/js/sidebar.js"></script>
 <script src="assets/js/fancybox.js"></script>
 <script src="assets/js/custom.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


 <script>
     $(document).ready(function() {
         $(".fancybox").fancybox({
             'width': 1000,
             fitToView: true,
             autoSize: false,
             closeClick: false,

             helpers: {
                 overlay: {
                     locked: false,

                 }
             }
         });
         $(".fancybox1").fancybox({
             'width': 1000,
             'height': 700,
             fitToView: true,
             autoSize: true,
             closeClick: false,

             helpers: {
                 overlay: {
                     locked: false,

                 }
             }
         });


         $(".fancyboxEnq").fancybox({
             'width': 400,
             'height': 450,
             'z-index': 9999,
             fitToView: true,
             autoSize: false,
             closeClick: false,

             helpers: {
                 overlay: {
                     locked: false,

                 }
             }
         });

     });

     //  if ($(window).width() < 768) {
     //         $("#v-pills-profile-tab").on('click', function() {
     //             // Find the element with both id "dynamictabstrp" and class "active"
     //             var $target = $(".tab-pane.active");

     //             // If no element with both id "tab-pane" and class "active" is found,
     //             // fallback to selecting the element with id "tab-pane" only
     //             if ($target.length === 0) {
     //                 $target = $(".tab-pane");
     //             }

     //             // Scroll to the top of the target element
     //             $('html, body').animate({
     //                 scrollTop: $target.position().top
     //             });
     //         });
     //     }
     if ($(window).width() < 768) {
         // Array of IDs for elements to scroll to
         var tabIDs = ["#v-pills-home-tab", "#v-pills-profile-tab", "#v-pills-messages-tab", "#v-pills-settings-tab", "#v-pills-la-tab", "#v-pills-new-tab", "#v-pills-tabContent"];

         // Loop through each tab ID
         tabIDs.forEach(function(tabID) {
             $(tabID).on('click', function() {
                 // Find the element with both id "dynamictabstrp" and class "active"
                 var $target = $(".tab-pane.active");

                 // If no element with both id "tab-pane" and class "active" is found,
                 // fallback to selecting the element with id "tab-pane" only
                 if ($target.length === 0) {
                     $target = $(".tab-pane");
                 }

                 // Scroll to the top of the target element
                 $('html, body').animate({
                     scrollTop: $target.position().top
                 });
             });
         });
     }

     var floatingButton = $('.floating-button span');
     floatingButton.text('+');

     function toggleSocialMenu() {
         var socialIcons = $('.social-icons');

         if (socialIcons.is(':visible')) {
             socialIcons.fadeOut();
             floatingButton.text('+');
         } else {
             socialIcons.fadeIn();
             floatingButton.text('-');
         }
     }
 </script>