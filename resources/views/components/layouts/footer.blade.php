 <section id="footer">
     <div class="row">
         <div class="col-1">
             <a href="{{ route('home') }}"><img src="{{ asset('uploads/images/PERA Logo.jpg') }}" alt="PERA Logo"></a>
         </div>
         <div class="col-2">
             <div class="about">
                 <h6>
                     About Us
                 </h6>
                 <p>
                     Based in Surabaya with manufacturing in Malang
                     Indonesia to service South East Asia region with
                     advanced cement technologies. Offering customised Solutions
                     to your projects. We are the manufacturer of PT. PERA ABADI SENTAUSA
                     products in South East Asia and provide technical assistance to
                     PERA range of products for tropical climates.
                 </p>
             </div>
             <div class="contact">
                 <h6>
                     Contact
                 </h6>
                 <div class="address">
                     <div>
                         <a href="{{ config('app.office_map_link') }}">
                             <span><i class="fas fa-map-marker-alt"></i></span>
                             {{ config('app.office_address') }}
                         </a>
                     </div>
                     <div class="contact-link">
                         <a href="tel:{{ config('app.phone_number') }}">
                             <span><i class="fa-solid fa-phone"></i></i></span>
                             {{ config('app.phone_number') }}
                         </a>
                         <a href="mailto:{{ config('app.email') }}">
                             <span><i class="fa-solid fa-envelope"></i></i></span>
                             {{ config('app.email') }}
                         </a>
                         <a href="{{ config('app.instagram_link') }}" target="_blank">
                             <span><i class="fa-brands fa-instagram"></i></span>
                             {{ config('app.instagram_account') }}
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-3">
             <p>Copyright © 2023 PT. PERA ABADI SENTAUSA | All Rights Reserved</p>
         </div>
     </div>
 </section>
