@extends('layouts.app')
@section('content')
<section class="royal-care-hero-section hotel">
   <div class="container">
      <div class="anim_text round">
         <p class="animate__animated animate__shakeY m-0 p-0"> Experience Our Service</p>
         <h1 class="animate__animated animate__shakeY m-0">Book Hotel Pay Later</h1>
      </div>
      @include('commonform.booking_form_hotel')
   </div>
</section>
<section class="royal-care-hotel-deals">
   <div class="container">
      <div class="heading_newly_tr">
         <h2>Best Value Hotel Booking Portal in USA</h2>
         <p>Royal Care Travels proudly stands as the best and <a href="{{route('hotel')}}">cheapest
               hotel
               booking website</a> in the USA. Whether you're searching for cheap hotels in the USA
            or looking
            for the best time to book hotels, our platform offers unmatched options and value. As
            the best site
            to book hotels, we provide a wide selection of hotel bookings tailored to your needs.
            Discover why
            we're known as the cheapest hotel booking site with exceptional deals and the best
            booking hotel
            experience. Plan your next stay with ease and flexibility by choosing to <a href="{{route('hotel')}}">book
               hotel pay later</a> on the best site to book hotel
            accommodations
            with Royal Care Travels!
         </p>
      </div>

      <div class="owl-carousel owl-theme">
         <div class="blog-card">
            <div class="blog-card-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-deal-1.jpg')}}"
                  alt="book hotel pay later">
            </div>
            <div class="blog-card-content">
               <div class="blog-card-tittle">
                  <h3>Book Hotels in Boston</h3>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p>9.2 Excellent</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-location-dot"></i> Miami Beach</p>
                  </div>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p><i class="fa-solid fa-umbrella-beach"></i> Direct beach access</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-water-ladder"></i></i> Pool</p>
                  </div>
               </div>
               <div class="blog-card-a blog_btn_position">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2">
                        <i class="fa-solid fa-arrow-right"></i></span></button>
               </div>
            </div>
         </div>
         <div class="blog-card">
            <div class="blog-card-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-2.jpg')}}"
                  alt="priceline hotels nyc">
            </div>
            <div class="blog-card-content">
               <div class="blog-card-tittle">
                  <h3>
                     Book Hotels in Miami
                  </h3>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p>9.2 Excellent</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-location-dot"></i> Miami Beach</p>
                  </div>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p><i class="fa-solid fa-umbrella-beach"></i> Direct beach access</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-water-ladder"></i></i> Pool</p>
                  </div>
               </div>
               <div class="blog-card-a blog_btn_position">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2"><i
                           class="fa-solid fa-arrow-right"></i></span></button>
               </div>
            </div>
         </div>
         <div class="blog-card">
            <div class="blog-card-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-3.jpg')}}"
                  alt="book now pay later hotels">
            </div>
            <div class="blog-card-content">
               <div class="blog-card-tittle">
                  <h3>
                     Book Hotels in New York
                  </h3>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p>9.2 Excellent</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-location-dot"></i> Miami Beach</p>
                  </div>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p><i class="fa-solid fa-umbrella-beach"></i> Direct beach access</p>
                  </div>
                  <div class="location">
                     <p><i class="fa-solid fa-water-ladder"></i>Pool</p>
                  </div>
               </div>
               <div class="blog-card-a blog_btn_position">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2"><i
                           class="fa-solid fa-arrow-right"></i></span></button>
               </div>
            </div>
         </div>
         <div class="blog-card">
            <div class="blog-card-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-4.jpg')}}"
                  alt="cheap hotels in usa ">
            </div>
            <div class="blog-card-content">
               <div class="blog-card-tittle">
                  <h3>
                     Book Hotels in California
                  </h3>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p>9.2 Excellent</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-location-dot"></i> Miami Beach</p>
                  </div>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p><i class="fa-solid fa-umbrella-beach"></i> Direct beach access</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-water-ladder"></i></i> Pool</p>
                  </div>
               </div>
               <div class="blog-card-a blog_btn_position">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2"><i
                           class="fa-solid fa-arrow-right"></i></span></button>
               </div>
            </div>
         </div>
         <div class="blog-card">
            <div class="blog-card-img">
               <img class="img-fluid" src="{{custom_asset('assets/Images/hotel-img-5.jfif')}}"
                  alt="book hotels now pay later ">
            </div>
            <div class="blog-card-content">
               <div class="blog-card-tittle">
                  <h3> Book Hotels in Los Angeles</h3>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p>9.2 Excellent</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-location-dot"></i> Miami Beach</p>
                  </div>
               </div>
               <div class="rating_location">
                  <div class="rating">
                     <p><i class="fa-solid fa-umbrella-beach"></i> Direct beach access</p>
                  </div>
                  <div class="location">
                     <p> <i class="fa-solid fa-water-ladder"></i>Pool</p>
                  </div>
               </div>
               <div class="blog-card-a blog_btn_position">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2"><i
                           class="fa-solid fa-arrow-right"></i></span></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="royal-care-travel-card book_pay_services">
   <div class="container">
      <div class="heading_newly_tr">
         <h2>Book Hotels Now Pay Later Services</h2>
         <p>At Royal Care Travels, we understand the importance of flexibility when planning your trips. That’s
            why we
            offer convenient <a href="{{route('hotel')}}">Book Now Pay Later hotels</a> options. With our <a
               href="{{route('hotel')}}">Book Hotels Now Pay Later</a> service, you can secure your ideal
            accommodation
            today without immediate payment. Our <a href="{{route('hotel')}}">Hotel Booking Pay Later
            </a>feature
            ensures you can plan your stay with peace of mind, knowing that you can book your hotel now and pay
            later at
            your convenience. Enjoy a stress - free booking experience with Royal Care Travels!
         </p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="royal-care-travel-card-1">
               <div class="royal-card-travel-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-6.jfif')}}"
                     alt="priceline hotels las vegas">
               </div>
               <div class="card_text">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">
                           Motel One Manchester Piccadilly
                        </span>
                     </li>
                  </ul>
                  <p>Manchester City Center, Manchester - 0.1 km to center</p>
                  <a href="#" class="clearfix_btn packages" data-bs-toggle="modal" data-bs-target="#FormModal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="royal-care-travel-card-1">
               <div class="royal-card-travel-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-7.webp')}}"
                     alt="last minute luxury hotel deals">
               </div>
               <div class="card_text">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Motel One Manchester-Royal Exchange</span>
                     </li>
                  </ul>
                  <p>Manchester City Center, Manchester - 0.1 km to center</p>
                  <a href="#" class="clearfix_btn packages" data-bs-toggle="modal" data-bs-target="#FormModal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="royal-care-travel-card-1">
               <div class="royal-card-travel-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-img-8.webp')}}"
                     alt="priceline hotels san diego">
               </div>
               <div class="card_text">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item">
                        <span class="icon-list-text">Holiday Inn Express
                        </span>
                     </li>
                  </ul>
                  <p>Manchester City Center, Manchester - 0.1 km to center</p>
                  <a href="#" class="clearfix_btn packages" data-bs-toggle="modal" data-bs-target="#FormModal">
                     Book Now
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="online-hotel-booking-section pb-0">
   <div class="container">
      <div class="row">
         <div class="main_box">
            <div class="online-hotel-booking-section-tittle box_a">
               <h2>Discover the Ultimate Convenience of Online Hotel Booking with Royal Care Travels</h2>
               <p>Book your hotels with convenience through Royal Care Travels and enjoy our easy method of
                  booking
                  online. Our simple-to-use search lets you quickly find, compare, and select hotels in
                  different
                  countries according to your criteria. Additionally, take advantage of our <a
                     href="https://royalcaretravels.com/cheap-car-rental-deals">car rental services</a> to complement
                  your stay and travel with ease. Experience great discounts and get confirmation on orders
                  made in the
                  shortest time possible to make your trip as smooth as possible. With many choices and
                  available
                  opportunities worldwide, tourists can find the best accommodations for their needs. Trust
                  Royal Care
                  Travels to relieve you of the stress of bookings and make your hotel and travel experience a
                  wonderful
                  one.
               </p>
            </div>
            <div class="online-hotel-booking-section-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-booking-img.jpg')}}"
                  alt="priceline hotels chicago">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="Your-Dream-Website-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-12">
            <div class="payhotelpadding">
               <div class="your-dream-website-content">
                  <div class="your-dream-website-section-tittle about_text_box">
                     <span>Why?</span>
                     <h2>Royal Care Travels: Book Now Pay Later Hotels</h2>
                  </div>
               </div>
               <div class="your-dream-website-section-text">
                  <p>Royal Care Travel company’s primary goal is to make every traveler feel as comfortable as
                     possible.
                     That is why our choice of cheap hotels in the USA ranges from comfortable, affordable
                     designs to
                     luxurious suites with impressive amenities and services. Savor the convenience of no
                     upfront
                     payment hotels and enjoy the option to pay later with our easy payment solutions. Being
                     the world’s
                     leading hotel booking site, we also offer <a href="{{route('hotel')}}">last minute
                        luxury hotel
                        deals</a>, along with tips on when it is most effective to book hotels to receive
                     the most
                     value.
                  </p>
                  <p>Believe us to be the cheapest hotel booking site with competitive prices, without any
                     compromise.
                  </p>
                  <p>Why choose us for your hotel booking services? Our offerings are stronger than ever and
                     our new
                     hotel books feature millions of accommodations for every traveler. Choose us now to book
                     today and
                     discover why Royal Care Travel is the best travel agency to use.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-12">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="your-dream-website-section-card">
                     <div class="your-dream-website-section-card-1 mb-4">
                        <div class="flxxx">
                           <i class="fa-solid royal-icon fa-hotel"></i>
                           <span>Easy Booking</span>
                        </div>
                        <p>The way has been transformed by online travel agencies (OTAs) and hotel booking
                           platforms
                        </p>
                     </div>
                     <div class="your-dream-website-section-card-1">
                        <div class="flxxx">
                           <i class="fa-solid royal-icon fa-user"></i>
                           <span>Support Guide</span>
                        </div>
                        <p>Carefully review the hotel options, paying attention to factors like proximity to
                           attractions.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="your-dream-website-section-card">
                     <div class="your-dream-website-section-card-1 mb-4">
                        <div class="flxxx">
                           <i class="fa-solid royal-icon fa-user"></i>
                           <span>Friendly Interface</span>
                        </div>
                        <p>Once you have a clear idea of what you are looking for you can turn to various
                           hotel booking.
                        </p>
                     </div>
                     <div class="your-dream-website-section-card-1 mb-4">
                        <div class="flxxx">
                           <i class="fa-solid royal-icon fa-briefcase"></i>
                           <span>24/7 Hours Services</span>
                        </div>
                        <p>In the rare event of encountering any issues or needing to make changes to your
                           reservation.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="explore-the-world">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 col-12">
            <div class="payhotelpadding">
               <div class="explore-the-world-tittle">
                  <p>Locate the next location</p>
               </div>
               <div class="explore-the-world-heading">
                  <h3>Explore Hotels in USA</h3>
               </div>
               <div class="explore-the-world-text">
                  <p>Royal Care Travel takes you to the pulsating city of New York. Whether you are in awe of
                     the
                     Illuminated New York Times Square, taking a peaceful walk in the quiet oasis – Central
                     Park, or
                     shopping/dining in any of the luxury brand outlets throughout the city, you shall be
                     well taken
                     care of by our team of professionals. Search for cheap hotels in USA, best and discount
                     hotels or
                     any sort of accommodation according to your need. When using Book Now Pay Later Hotels
                     to organize
                     your New York trip, the process and, more importantly, the budget is adaptable. Contact
                     us for
                     travel related services in the Big Apple to avoid hitches.
                  </p>
               </div>
               <div class="explore-the-world-butn">
                  <button data-bs-toggle="modal" data-bs-target="#FormModal">Book Now <i
                        class="fa-solid fa-arrow-right"></i></button>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-12 mt-4">
            <div class="explore-the-world-img">
               <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel-explore.webp')}}"
                  alt="last minute hotel deals nyc">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="online_Flight_cards">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="main_under_flight_card new_css_main">
               <div class="img_under_flight">
                  <img src="{{custom_asset('assets/img/hotel_booking_1.png')}}" alt="image"
                     class="img-fluid animate__animated animate__backInLeft" alt="last minute hotel">
               </div>
               <div class="main_text">
                  <h3>Book Your Hotel Room With Royal Care Travel</h3>
                  <p>Welcome to Royal Care Travel, your trusted partner in booking hotels across the USA with
                     ease and
                     flexibility. Whether you're planning a business trip or a family vacation, Royal Care
                     Travel offers
                     convenient options like book now, pay later hotels to suit your needs. We pride
                     ourselves on being
                     the best site to book hotels, providing a seamless experience for travelers looking for
                     cheap
                     hotels in the USA without compromising on quality or comfort.
                  </p>
                  <p> Our platform features a diverse selection of accommodations, from budget-friendly
                     options to
                     luxurious stays, ensuring there's something for every traveler and budget. With our
                     intuitive
                     booking system, you can browse through various hotels, compare prices, and secure your
                     reservation
                     effortlessly. We understand that timing is crucial when booking hotels, which is why we
                     offer
                     insights on the best time to book hotels to help you maximize savings and availability.
                  </p>
                  <p>At Royal Care Travel, we prioritize customer satisfaction and transparency. Our dedicated
                     team is
                     available around the clock to assist you in finding the best booking hotel deals and
                     answering any
                     questions you may have. Whether you're looking for a last-minute getaway or planning
                     ahead, trust
                     Royal Care Travel to make your hotel booking experience smooth and stress-free.
                  </p>
                  <p>Start planning your next adventure today with Royal Care Travel and discover why we're
                     the
                     preferred choice for travelers seeking convenience, affordability, and exceptional
                     service in hotel
                     bookings across the USA.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="main_under_flight_card new_css_main">
               <div class="img_under_flight">
                  <img src="{{custom_asset('/assets/img/hotel_booking_2.png')}}" alt="image"
                     class="img-fluid animate__animated animate__backInLeft" alt="cheap hotels in usa">
               </div>
               <div class="main_text">
                  <h3>Luxury Hotels Experience with Royal Care Travel</h3>
                  <p>Indulge in the pinnacle of luxury with Royal Care Travel, where we redefine your travel
                     experience
                     through exclusive access to the finest luxury hotels across the USA. As a distinguished
                     travel
                     agent, we specialize in curating unparalleled stays that cater to discerning travelers
                     seeking
                     elegance, sophistication, and personalized service. From opulent urban retreats to
                     serene
                     beachfront hideaways, Royal Care Travel ensures every aspect of your stay exceeds
                     expectations
                  </p>
                  <p> Discover our handpicked selection of luxury hotels, each chosen for its exceptional
                     amenities,
                     breathtaking locations, and meticulous attention to detail. Whether you're planning a
                     romantic
                     getaway, a family celebration, or a corporate retreat, our expert travel advisors are
                     dedicated to
                     crafting bespoke experiences tailored to your preferences. Benefit from our partnerships
                     with top
                     hotel brands, gaining access to exclusive perks such as room upgrades, spa credits, and
                     personalized concierge services.
                  </p>
                  <p>Booking your luxury hotel through Royal Care Travel guarantees more than just
                     accommodation; it
                     promises a seamless journey marked by unparalleled comfort and sophistication. Our
                     commitment to
                     excellence and our passion for delivering exceptional travel experiences ensure that
                     your stay in a
                     luxury hotel booked with Royal Care Travel becomes a cherished memory.
                  </p>
                  <p>Experience the epitome of hospitality and luxury with Royal Care Travel. Visit our
                     website today to
                     explore our collection of luxury hotels in the USA and embark on your next unforgettable
                     journey
                     with us.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="royal-care-hotel-deals bottom_hotels_img">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="online-hotel-booking-section-tittle box_a">
               <h2>Affordable Hotels at Your Locations</h2>
               <p>Discover cheap and affordable hotels at your locations with Royal Care Travels. Find
                  budget-friendly
                  options and enjoy great deals on cheap hotels in the USA, wherever your travels take you
               </p>
            </div>
         </div>
         <div class="owl-carousel owl-theme">
            <div class="blog-card">
               <div class="blog-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel_one1.png')}}"
                     alt="priceline hotels chicago">
               </div>
               <div class="blog-card-content">
                  <div class="blog-card-tittle">
                     <h5>Affordable Hotels in Boston</h5>
                  </div>
                  <div class="rating_location">
                     <div class="rating">
                        <p>Discover the cheap and <a href="https://royalcaretravels.com/cheap-hotels-booking">affordable
                              hotels in California</a> with Royal Care Travels. Find cheap hotels in the
                           USA on the best
                           site to book hotels, offering the best booking hotel options for a
                           budget-friendly stay.
                        </p>
                     </div>
                  </div>
                  <div class="blog-card-a blog_btn_position">
                     <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span class="pr-2"><i
                              class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
               </div>
            </div>
            <div class="blog-card">
               <div class="blog-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel_one2.png')}}"
                     alt="priceline hotels nyc">
               </div>
               <div class="blog-card-content">
                  <div class="blog-card-tittle">
                     <h5>
                        Affordable Hotels in New York
                     </h5>
                  </div>
                  <div class="rating_location">
                     <div class="rating">
                        <p>Discover affordable hotels in New York with Royal Care Travels and take advantage
                           of <a href="{{route('hotel')}}">last minute hotel deals NYC</a> has to offer.
                           Enjoy unbeatable
                           rates on cheap hotels in the USA and experience the city’s charm while staying
                           at the best
                           booking hotel in the heart of NYC.
                        </p>
                     </div>
                  </div>
                  <div class="blog-card-a blog_btn_position">
                     <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span><i
                              class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
               </div>
            </div>
            <div class="blog-card">
               <div class="blog-card-img">
                  <img class="img-fluid" src="{{custom_asset('assets/Images/hotel_one3.png')}}"
                     alt="priceline hotels chicago">
               </div>
               <div class="blog-card-content">
                  <div class="blog-card-tittle">
                     <h5>
                        Affordable Hotels in Miami
                     </h5>
                  </div>
                  <div class="rating_location">
                     <div class="rating">
                        <p>Explore <a href="https://royalcaretravels.com/cheap-hotels-booking">affordable hotels in
                              Boston</a> with Royal Care Travels. We provide access to cheap hotels in the
                           USA, ensuring
                           you find the best booking hotel for your stay in this historic city.
                        </p>
                     </div>
                  </div>
                  <div class="blog-card-a blog_btn_position">
                     <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span><i
                              class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
               </div>
            </div>
            <div class="blog-card">
               <div class="blog-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel_one4.png')}}"
                     alt="last minute luxury hotel deals">
               </div>
               <div class="blog-card-content">
                  <div class="blog-card-tittle">
                     <h5>
                        Affordable Hotels in California
                     </h5>
                  </div>
                  <div class="rating_location">
                     <div class="rating">
                        <p>Discover <a href="{{route('hotel')}}">affordable hotels in New
                              York</a> with Royal Care Travels. Enjoy unbeatable rates on cheap hotels in
                           the USA and
                           experience the city’s charm while staying at the best booking hotel in the heart
                           of NYC.
                        </p>
                     </div>
                  </div>
                  <div class="blog-card-a blog_btn_position">
                     <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span><i
                              class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
               </div>
            </div>
            <div class="blog-card">
               <div class="blog-card-img">
                  <img class="img-fluid" src="{{custom_asset('/assets/Images/hotel_one5.png')}}" alt="book hotel pay later
                     ">
               </div>
               <div class="blog-card-content">
                  <div class="blog-card-tittle">
                     <h5>
                        Affordable Hotels in Los Angeles
                     </h5>
                  </div>
                  <div class="rating_location">
                     <div class="rating">
                        <p>Find <a href="{{route('hotel')}}">affordable hotels in
                              Miami</a> with Royal Care Travels. Enjoy budget-friendly stays at cheap
                           hotels in the USA
                           and discover the best booking hotel for your Miami adventure.
                        </p>
                     </div>
                  </div>
                  <div class="blog-card-a blog_btn_position">
                     <button data-bs-toggle="modal" data-bs-target="#FormModal"> Book Now<span><i
                              class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="get-special-airline">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12 col-12">
            <div class="get-special-airline-content">
               <div class="get-special-airline-tittle offers_get_hh">
                  <h6>Avail Special Hotel Booking Offers</h6>
               </div>
               <div class="get-special-airline-text">
                  <p>Join our community and get the latest updates on hotel bookings.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-12 col-12">
            <a href="{{route('contact')}}">
               <div class="explore-the-world-butn">
                  <button>Contact Us</button>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
@endsection