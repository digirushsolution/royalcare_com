@extends('layouts.app')
@section('content')
<section class="banner_flight_page">
   <div class="container">
      <div class="anim_text round">
         <p class="animate__animated animate__shakeY m-0 p-0"> Royal Care Travels offer</p>
         <h1 class="animate__animated animate__shakeY m-0">Clear Trip Flight Booking</h1>
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
               <img src="{{ custom_asset('assets/img/plane.png') }}" alt="Cheap Last-Minute Flight Hacks"
                  class="img-fluid">
               <h3>Best Price Guarantee</h3>
               <p>We are honest to our customers. Instead of listing eye catchy offers, we provide the affordable air
                  tickets of all the major airlines.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="why_box">
               <img src="{{ custom_asset('assets/img/call.png') }}" alt="best time to book flights to Europe"
                  class="img-fluid">
               <h3>24/7 Customer Support</h3>
               <p>We are available for you 24*7. Please feel free to contact us. You can contact us through call, chat
                  or email.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="why_box">
               <img src="{{ custom_asset('assets/img/credit-card.png') }}" alt="Alaska Airlines book a flight"
                  class="img-fluid">
               <h3>Safe & Secure Payment</h3>
               <p>SSL security protocols makes all your transactions safe and secure.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="popular-destions">
   <div class="container">
      <div class="trip_booking_text about_text_box paddingtop_media">
         <h2> Last-Minute Flight Booking Deals At Royal Care Travels</h2>
         <p>
            So, you want <a href="{{route('flights')}}">Cheap Last-Minute Flight Hacks</a>, eh? Well, the
            good news is that Royal Care Travels has got you covered. Are you wondering if you need to know when to book
            your flights to Europe or you're just being spontaneous by planning an impromptu trip with last-minute
            flights from New York? Whatever your need may be, we've got it for you! And not just flights, but we'd make
            sure that your entire journey gets through the right way-from hotel booking to <a
               href="{{route('car.rental')}}">Car rental US California</a> all in one place. Make the most of your trip
            using Booking Buddy, ClearTrip, and MakeMyTrip to enjoy flexible options such as book now, and pay later
            flights with no credit check. Leave the rest of it to Royal Care Travels, so you can have the best
            adventures that are simply stress-free and memorable!
         </p>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card_flight_booking">
               <div class="card_img">
                  <img src="{{ custom_asset('assets/img/beautiful-shot-golden-gate-bridge.jpg') }}"
                     alt="book now pay later flights no credit check" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">New York</span>
                     </li>
                     <li class="icon-list-item ">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Paris</span>
                     </li>
                  </ul>
                  <p>Grab the cheapest offers on your flights from New York to Paris.</p>
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
                  <img src="{{ custom_asset('assets/img/famous-tower-bridge-evening-london-england.jpg') }}"
                     alt="booking buddy flights" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Germany</span>
                     </li>
                     <li class="icon-list-item ">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Athens</span>
                     </li>
                  </ul>
                  <p>Steal the best deals on your flights from Germany to Athens</p>
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
                  <img src="{{ custom_asset('assets/img/beautiful-shot-golden-gate-bridge.jpg') }}"
                     alt="clear trip flight booking" class="img-fluid">
               </div>
               <div class="card_text card_padding_m">
                  <ul class="-icon-list_package">
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Ireland</span>
                     </li>
                     <li class="icon-list-item ">
                        <i class="fa-solid fa-plane-departure"></i>
                     </li>
                     <li class="icon-list-item ">
                        <span class="icon-list-text">Oslo</span>
                     </li>
                  </ul>
                  <p>Grab the cheapest offers on your flights from Ireland to Oslo.</p>
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
<section class="popular-destions new-why_section">
   <div class="container">
      <div class="why_text_box about_text_box paddingtop_media">
         <h2>Top 6 Reasons to Book with Us Today</h2>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/black-shop-tag.png') }}" alt="Cheap Last-Minute Flight Hacks"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>Special Offers</h3>
                  <p>Savings on more than 50 airlines' negotiated fares. Up to 60% off.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/event.png') }}" alt="Best time to book flights to Europe"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>Last-Minute Reservations</h3>
                  <p>You can make a booking without worries, even at the last minute. Get the cheapest fare for any
                     destination, any airline, worldwide.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/route.png') }}" alt="Alaska Airlines book a flight"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>Complicated Itineraries</h3>
                  <p>Customized and complicated itineraries, mixed cabins, and multiple airlines are all designed for
                     your trip.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/communication.png') }}" alt="Cheap Last-Minute Flight Hacks"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>More than 10 years of experience</h3>
                  <p>Over 130 experts with over 10 years of experience will provide personalized service from a real
                     human being, not a search engine.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/call-agent.png') }}" alt="best time to book flights to Europe"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>24/7 Live Support</h3>
                  <p>Help at every step, whenever and wherever you need it.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center mb-4">
            <div class="why_box d-flex align-items-center">
               <img src="{{ custom_asset('assets/img/virus.png') }}" alt="COVID-19 Travel Advice"
                  class="img-fluid me-3">
               <div class="why_content">
                  <h3>COVID-19 Travel Advice</h3>
                  <p>Stay updated on the latest travel news, brought to you straight from your travel advisor.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="online_Flight_cards mb-0">
   <div class="container">
      <div class="row">
         <div class="trip_booking_text about_text_box" style="width: 75%;">
            <h2> Book Flights-Pay Later No Credit Check with Royal Care Travels</h2>
            <p><a href="{{route('flights')}}" target=>Book Now Pay Later Flights No Credit Check,</a> Royal
               Care Travels makes travel accessible to everyone through no-credit-check flights booked now and paid for
               later. We can ensure booking a last-minute getaway, planning, or securing your flight without the
               financial pressure. On a single go, you can arrange your International flight Booking, hotel, and car
               rental with Royal Care Travels. Hassle-free Book Your<a
                  href="https://royalcaretravels.com/blogs/when-are-the-most-affordable-days-to-book-international-flights">International
                  Flights</a>options that allow you to focus on your adventure while we handle the details. Travel with
               ease and a smile. Experience now with Royal Care Travels.
            </p>
         </div>
      </div>
   </div>
</section>
<section class="online_Flight_cards mt-0">
   <div class="container">
      <div class="row">
         <div class="col-md-6 mb-3">
            <div class="main_under_flight_card">
               <div class="img_under_flight">
                  <img src="{{ custom_asset('assets/img/Cheap-Flight-Booking.png') }}"
                     alt="Cheap Last-Minute Flight Hacks" class="img-fluid animate__animated animate__backInLeft">
               </div>
               <div class="main_text">
                  <h2>Online Flight Tickets Booking Website</h2>
                  <h3>1. Cheap Last-Minute Flight Hacks</h3>
                  <p>We found that finding relatively cheap last-minute flight deals can be tough, but with the right
                     strategies, it's possible to save big. Whether you're flying to any domestic destination or aiming
                     for international getaways, here are some cheap last-minute flight hacks that will help you score
                     the best fares.
                  </p>
                  <h3>2. Best Time to Book Flights to Europe</h3>
                  <p>The right time to book flights varies with travel. When traveling internationally with a long haul
                     over Europe, the best time to book flight orders is during the off-season of flights to Europe. If
                     you wish to book the best time for traveling to Europe, kindly book on off-seasons since it is
                     cheaper. At Royal Care Travels, we have different booking arrangements that suit your time and
                     budget.
                  </p>
                  <h3>3. Alaska Airlines booked a flight</h3>
                  <p>Whether you fly within the United States or abroad, Alaska Airlines combines excellent service with
                     the best value for money. Booking flights on our site with Alaska Airlines is effortless and
                     ensures easy and smooth bookings.
                  </p>
                  <h3>4. Book Now, Pay Later Flights with No Credit Check</h3>
                  <p>If you want to travel but your budget is limited, we offer the "book now, pay later flights"
                     option. No credit checks are needed, so you can book your flight now and pay for it over time
                     without the upfront costs.
                  </p>
                  <h3> 5. Booking Buddy Flights: Compare and Save</h3>
                  <p>With Booking Buddy fights, you can compare prices on several flights on several airlines in one
                     location and choose the best that fits your needs. Let Royal Care Travels help you find your way
                     into the perfect flight for those last-minute travel plans.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="main_under_flight_card">
               <div class="img_under_flight">
                  <img src="{{ custom_asset('assets/img/round-trip-bookings.png') }}"
                     alt="best time to book flights to Europe" class="img-fluid animate__animated animate__backInLeft">
               </div>
               <div class="main_text">
                  <h2>Round Trip Flight Booking & Last Minute Flight Deals</h2>
                  <h3>1. Clear trip flight booking</h3>
                  <p>We have collaborated with Clear Trip to make easy flight bookings. You can now book your flight
                     easily with competitive deals on all flights from around the world. It could be for official or
                     personal purposes, as it is easier to book now than ever before.
                  </p>
                  <h3>2.Make My Trip Flight Booking</h3>
                  <p>You can now even book your flights on Make My Trip using our booking platform. It connects with
                     Make My Trip to book flights so that you can further avail many exclusive offers and make travel
                     plans easily.
                  </p>
                  <h3>3.Best Way to Book United Flights with Miles</h3>
                  <p>Regarding frequent fliers, the best choice when one wants to book United flights with miles would
                     be to maximize your points rewards and use them in last-minute bookings. One can get their proper
                     bookings even when booking with miles thanks to Royal Care Travels.
                  </p>
                  <h3>4. Book Flight Tickets with Free Cancellation</h3>
                  <p>We understand sometimes plans go awry. For this reason, we enable you to book flight tickets with
                     free cancellations, such that in case your plans go wrong, you can cancel them without paying any
                     extra charge beyond the initial price.
                  </p>
                  <h3>5. New York Last Minute Flight</h3>
                  <p>Leaving from New York? Perhaps luck is waiting for you at our end, as we have special last-minute
                     flights out of New York to the best places around the world. Book now and save loads on your next
                     adventure.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection