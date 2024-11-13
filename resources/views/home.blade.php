@extends('layouts.app')
@section('content')

<section class="banner_flight_page hone_page home-responssive">
   <div class="container">
      <div class="anim_text round home_h_flight">
         <p class="animate__animated animate__shakeY m-0 p-0"> Welcome To Royal Care Travels </p>
         <h1 class="animate__animated animate__shakeY">Best Travel Agency</h2>
      </div>
      <div class=" footer_form">
         @include('commonform.flight_booking_form')
      </div>
   </div>
</section>
<section class="why-exploremyflight home_why">
   <div class="container">
      <div class="why_text_box about_text_box paddingtop_media">
         <h2>WHY ROYAL CARE TRAVELS?</h2>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
            <div class="why_box">
               <img src="{{ custom_asset('assets/img/plane.png') }}" alt="image" class="img-fluid">
               <h3>Best Price Guarantee</h3>
               <p>We are honest to our customers. Instead of listing eye catchy offers, we provide the
                  affordable air
                  tickets of all the major airlines.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="why_box">
               <img src="{{ custom_asset('assets/img/call.png') }}" alt="image" class="img-fluid">
               <h3>24/7 Customer Support</h3>
               <p>We are available for you 24*7. Please feel free to contact us. You can contact us through
                  call, chat
                  or email.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="why_box">
               <img src="{{ custom_asset('assets/img/credit-card.png') }}" alt="image" class="img-fluid">
               <h3>Safe & Secure Payment</h3>
               <p>SSL security protocols makes all your transactions safe and secure.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about_section">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 col-sm-12 gf">
            <div class="about_img">
               <img src="{{ custom_asset('assets/img/about-six.png') }}" alt="​best travel agency in usa"
                  class="img-fluid">
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="about_text_box content_para_padding">
               <span>About Us</span>
               <h2>Who We Are</h2>
               <p>Welcome to ROYAL CARE TRAVELS - the <a href="{{route('home')}}">best travel agency</a> in NYC and a
                  top-rated, affordable travel agency in the USA for your tour and travel journey. We provide cheap and
                  budget-friendly services like:
               </p>
               <ul class="ul_list_royal">
                  <li>
                     Flight Tickets
                     Booking
                     or Airfare
                     Booking

                  </li>
                  <li>
                     Last Minute
                     Flight Booking
                     >
                  </li>
                  <li>Round Trip
                     Flight
                     Booking
                  </li>
                  <li>Flight
                     Cancellation
                     Services
                  </li>
                  <li>Hotel Bookings</li>
                  <li>Book Now Pay Later Hotels Services
                  </li>
                  <li>Rental Cars Booking
                  </li>
               </ul>
               <p>With a long history in the travel business, we've built a reputation for providing amazing service,
                  affordable deals, and personalized attention to every guest. Our team of travel experts is committed
                  to understanding your preferences and needs, offering options like <a href="{{route('hotel')}}">book
                     hotel pay later </a>and last minute travel packages to create a customized itinerary that's perfect
                  for you.
               </p>
               <div class="mt-4">
                  <a href="{{url('/about')}}" class="clearfix_btn clearfix_btn packages">Learn More</a>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="popular-destions ">
   <div class="container">
      <div class="trip_booking_text about_text_box paddingtop_media">
         <h2>Royal Care Travels Enhances Every Experience, from Holidays to Business Travel</h2>
      </div>
   </div>
</section>
<section class="round_trip_booking">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/cropped-hand-with-ticket-train-min_2_11zon.jpg') }}"
                     alt="best travel agency in usa" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package new-flight_t">
                     <li class="icon-list-item">
                        <h3>Flight Ticket</h3>
                     </li>
                     <li class="icon-list-item "><i class="fa-solid fa-plane-circle-check"></i>
                     </li>
                  </ul>
                  <p>Our experienced representatives at Royal Care Travels leverage a large network of contacts to get
                     you the best deals on flight tickets, whether you want to <a
                        href="https://royalcaretravels.com/blogs/when-are-the-most-affordable-days-to-book-international-flights">book
                        international flights</a> for a weekend getaway to a sweltering tropical beach or a crazy
                     escapade through Europe. Additionally, you can even book tickets with free cancellations.
                  </p>
                  <a href="{{route('flights')}}" class="clearfix_btn clearfix_btn packages">
                     Learn More
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{custom_asset('assets/img/family-checking-hotel-min_3_11zon.jpg') }}"
                     alt="top travel agency in usa" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package new-flight_t">
                     <li class="icon-list-item">
                        <h3>Hotel Ticket</h3>
                     </li>

                     <li class="icon-list-item ">
                        <span class="icon-list-text"><i class="fa-solid fa-hotel"></i></span>
                     </li>
                  </ul>
                  <p>We at Royal Care Travels offer you excellent hotel booking services because we have experienced
                     professionals who can meet your demands. You can now book hotels now and pay later, as we have all
                     available options ranging from luxury and budget-friendly. Our professionals ensures you find the
                     perfect accommodation for your travels!
                  </p>
                  <a href="{{route('hotel')}}" class="clearfix_btn clearfix_btn packages">
                     Learn More
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img
                     src="{{ custom_asset('assets/img/buying-carthe-young-woman-is-wheel-seller-gives-her-keys-min_1_11zon.jpg') }}"
                     alt="best travel agency" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package new-flight_t">
                     <li class="icon-list-item">
                        <h3>Car Rentals</h3>
                     </li>
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <i class="fa-solid fa-car"></i>
                        </span>
                     </li>
                  </ul>
                  <p>At Royal Care Travels, we make car rental booking hassle-free to complement your travel experience.
                     We are the best car rental company in the industry and can provide you with all varieties of
                     vehicles at competitive prices to let you travel comfortably and conveniently anywhere you want to.
                  </p>
                  <a href="{{route('car.rental')}}" class="clearfix_btn clearfix_btn packages">
                     Learn More
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="popular-destions">
   <div class="container">
      <div class="trip_booking_text about_text_box paddingtop_media">
         <h2>Easy & Affordable Round Trip Flight Booking with Royal Care Travels</h2>
         <p>Looking for cheap Round Trip Flights or Last Minute Flights? Royal Care Travels helps you easily book your
            round trip flights without any hassle, utilizing cheap last minute flight hacks to ensure it’s super
            affordable too!
         </p>
      </div>
   </div>
</section>
<section class="round_trip_booking">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/beautiful-shot-golden-gate-bridge (1).webp') }}"
                     alt="best travel agency in usa" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>San Francisco</h3>
                        </span>
                     </li>
                     <li class="icon-list-item">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>Los Angeles</h3>
                        </span>
                     </li>
                  </ul>
                  <p>“Find the Best Flight Deals from San Francisco to Los Angeles.</p>
                  <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal"
                     data-bs-target="#flightt_booking_modal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{custom_asset('assets/img/famous-tower-bridge-evening-london-england (1).webp') }}"
                     alt="top travel agency in usa" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>UK</h3>
                        </span>
                     </li>
                     <li class="icon-list-item">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>Antalya</h3>
                        </span>
                     </li>
                  </ul>
                  <p>“Grab the Best Flight Deals from the UK to Rome.</p>
                  <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal"
                     data-bs-target="#flightt_booking_modal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/Francisco (1) (1).webp') }}" alt="best travel agency"
                     class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>Francisco</h3>
                        </span>
                     </li>
                     <li class="icon-list-item">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item">
                        <span class="icon-list-text">
                           <h3>Chelyabinsk</h3>
                        </span>
                     </li>
                  </ul>
                  <p>“Find the Best Flight Deals from San Francisco to Chelyabinsk.</p>
                  <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal"
                     data-bs-target="#flightt_booking_modal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="popular-destions pb-0">
   <div class="container">
      <div class="trip_booking_text about_text_box paddingpara paddingtop_media">
         <h2>Exclusive Hotel Deals with Travel Agency NYC</h2>
         <p>Discover unbeatable hotel deals with Royal Care Travel, the best travel agency for international travel.
            Enjoy luxurious accommodations at affordable prices. Book now and experience comfort and convenience on your
            next journey.
         </p>
      </div>
   </div>
</section>
<section class="round_trip_booking pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img card_min_height">
                  <img src="{{ custom_asset('assets/img/AFFORDABLE HOTELS_image1 (1).webp') }}"
                     alt="last minute travel packages​" class="img-fluid">
               </div>
               <div class="card_text hotel_btn_respo">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">The Townhouse Manchester</span>
                     </li>
                  </ul>
                  <div class="btn_main">
                     <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow " data-bs-toggle="modal"
                        data-bs-target="#FormModal">
                        Book Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img card_min_height">
                  <img src="{{ custom_asset('assets/img/AFFORDABLE HOTELS_image2 (1).webp') }}"
                     alt="domestic travel agency​" class="img-fluid">
               </div>
               <div class="card_text hotel_btn_respo">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">Britannia Manchester Hotel</span>
                     </li>
                  </ul>
                  <div class="btn_main">
                     <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow " data-bs-toggle="modal"
                        data-bs-target="#FormModal">
                        Book Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking  ">
               <div class="card_img card_min_height">
                  <img src="{{ custom_asset('assets/img/AFFORDABLE HOTELS_image3.webp') }}"
                     alt="best travel agency for international travel" class="img-fluid">
               </div>
               <div class="card_text hotel_btn_respo">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">Sachas Hotel Manchester</span>
                     </li>
                  </ul>
                  <div class="btn_main">
                     <a href="javascript:void(0)" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal"
                        data-bs-target="#FormModal">
                        Book Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="popular-destions car_rental pb-0">
   <div class="container">
      <div class="trip_booking_text about_text_box paddingtop_media content_para_padding">
         <h2>Affordable and Reliable Car Rentals</h2>
         <p>xperience affordable and reliable car rentals with us. Enjoy quality vehicles at budget-friendly
            prices for
            your travel needs. Reserve your ride today!
         </p>
      </div>
      <div class="row mt-4">
         <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/ZDUSECAR.jpg') }}" alt="best car rental company"
                     class="img-fluid">
               </div>
               <div class="card_text affordable_min_height">
                  <div class="price_box_c">
                     <div class="similar_text">
                        <span class="icon-list-text">Economy Car</span>
                        <p>Kia Rio or similar</p>
                     </div>
                  </div>
                  <div class="-icon-list_package">
                     <ul class="car_in">
                        <li><i class="fa-solid fa-user"></i><span>5</span></li>
                        <li><i class="fa-solid fa-suitcase-rolling"></i><span>2</span></li>
                        <li><i class="fa-solid fa-temperature-three-quarters"></i><span>Automatic</span>
                        </li>
                     </ul>
                     <ul class="car_fre">
                        <li><i class="fa-solid fa-check"></i>Free Cancellation</li>
                        <li><i class="fa-solid fa-check"></i>Pay at Pick-up</li>
                        <li><i class="fa-solid fa-check"></i>Unlimited Mileage</li>
                     </ul>
                  </div>
                  <a href="#" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal" data-bs-target="#car">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/ZDUSECAR.jpg') }}" alt="best rental car company"
                     class="img-fluid">
               </div>
               <div class="card_text affordable_min_height">
                  <div class="price_box_c">
                     <div class="similar_text">
                        <span class="icon-list-text">Compact Car</span>
                        <p>Kia Soul or similar</p>
                     </div>
                  </div>
                  <div class="-icon-list_package">
                     <ul class="car_in">
                        <li><i class="fa-solid fa-user"></i><span>5</span></li>
                        <li><i class="fa-solid fa-suitcase-rolling"></i><span>2</span></li>
                        <li><i class="fa-solid fa-temperature-three-quarters"></i><span>Automatic</span>
                        </li>
                     </ul>
                     <ul class="car_fre">
                        <li><i class="fa-solid fa-check"></i>Free Cancellation</li>
                        <li><i class="fa-solid fa-check"></i>Pay at Pick-up</li>
                        <li><i class="fa-solid fa-check"></i>Unlimited Mileage</li>
                     </ul>
                  </div>
                  <a href="#" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal" data-bs-target="#car">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{custom_asset('assets/img/AV_ECAR_US.png') }}" alt="car rental california"
                     class="img-fluid">
               </div>
               <div class="card_text affordable_min_height">
                  <div class="price_box_c">
                     <div class="similar_text">
                        <span class="icon-list-text">Economy Car</span>
                        <p>Kia Rio or similar</p>
                     </div>
                  </div>
                  <div class="-icon-list_package">
                     <ul class="car_in">
                        <li><i class="fa-solid fa-user"></i><span>5</span></li>
                        <li><i class="fa-solid fa-suitcase-rolling"></i><span>2</span></li>
                        <li><i class="fa-solid fa-temperature-three-quarters"></i><span>Automatic</span>
                        </li>
                     </ul>
                     <ul class="car_fre">
                        <li><i class="fa-solid fa-check"></i>Free Cancellation</li>
                        <li><i class="fa-solid fa-check"></i>Pay at Pick-up</li>
                        <li><i class="fa-solid fa-check"></i>Unlimited Mileage</li>
                     </ul>
                  </div>
                  <a href="#" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal" data-bs-target="#car">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/ZDUSPCAR.jpg') }}" alt="car rental usa california"
                     class="img-fluid">
               </div>
               <div class="card_text affordable_min_height">
                  <div class="price_box_c">
                     <div class="similar_text">
                        <span class="icon-list-text">Premium Car</span>
                        <p>Volkswagen Passat or similar</p>
                     </div>
                  </div>
                  <div class="-icon-list_package">
                     <ul class="car_in">
                        <li><i class="fa-solid fa-user"></i><span>5</span></li>
                        <li><i class="fa-solid fa-suitcase-rolling"></i><span>2</span></li>
                        <li><i class="fa-solid fa-temperature-three-quarters"></i><span>Automatic</span></li>
                     </ul>
                     <ul class="car_fre">
                        <li><i class="fa-solid fa-check"></i>Free Cancellation</li>
                        <li><i class="fa-solid fa-check"></i>Volkswagen Passat or similar</li>
                        <li><i class="fa-solid fa-check"></i>Volkswagen Passat or similar</li>
                     </ul>
                  </div>
                  <a href="#" class="clearfix_btn packages btn_booknow" data-bs-toggle="modal" data-bs-target="#car">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="form-spce">
   @include('commonform.flight_booking_form')
</section>
<section class="our_reference height_according">
   <div class="container">
      <div class="our_reference_cnt about_text_box">
         <span>Our References</span>
         <h3 class="text-white">What Individuals Say</h3>
      </div>
      <div class="owl-carousel owl-theme">
         <div class="item">
            <div class="our_references">
               <p class="testimonials_description">I had an awesome experience booking my flight with Royal
                  Care
                  Travels. Their team hooked me up with a great deal, and the whole process was super smooth.
                  I’ll for
                  sure be using them again for my next trip!
               </p>
               <div class="author-info">
                  <span>Liza M. from New York, NY</span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-regular fa-star-half-stroke"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">

               <p class="testimonials_description">Royal Care Travels hooked me up with an awesome hotel for my
                  vacation
                  in Miami. Their team really paid attention to what I wanted and booked a perfect spot right
                  in the
                  center of the city.
               </p>
               <div class="author-info">
                  <span>Michael from New York, NY</span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">

               <p class="testimonials_description">Royal Care Travels made booking my flight a total breeze.
                  They found
                  the best flight that fit my budget, and everything was locked in super fast. I highly
                  recommend their
                  services!
               </p>
               <div class="author-info">
                  <span>James from Los Angeles, CA </span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-regular fa-star-half-stroke"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">

               <p class="testimonials_description">I was so impressed with Royal Care Travels. They took care
                  of all my
                  flight booking needs and found me at an amazing price. Their customer service was top-notch,
                  and I’ll
                  definitely book with them again!
               </p>
               <div class="author-info">
                  <span>Liam from Austin, TX </span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">

               <p class="testimonials_description">Royal Care Travels helped me find an affordable flight for
                  my
                  business trip, and I couldn’t be happier. They saved me a lot of time, and their staff was
                  so
                  professional and friendly. I’ll be using them for all my future travel needs.
               </p>
               <div class="author-info">
                  <span>Daniel from Chicago, IL</span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">
               <p class="testimonials_description">Thanks to Royal Care Travels, my vacation was
                  unforgettable! They
                  helped me find the ideal hotel that was close to all the attractions. I’ll definitely
                  use them
                  again for my next trip!
               </p>
               <div class="author-info">
                  <span>Amanda C. from Miami, FL</span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-regular fa-star-half-stroke"></i>
                     <i class="fa-regular fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="our_references">
               <p class="testimonials_description">I booked a full travel package with Royal Care Travels and
                  I’m beyond
                  impressed. They got me a great flight deal, found the perfect hotel, and set up a reliable
                  rental car.
                  Everything was super easy and stress-free. Highly recommend them for a hassle-free travel
                  experience!
               </p>
               <div class="author-info">
                  <span>Lucas from Chicago, IL</span>
                  <div class="star_authorrr">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-regular fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection