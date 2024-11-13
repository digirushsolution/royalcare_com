@extends('layouts.app')
@section('content')
    <section class="about_us_banner">
        <div class="container">
            <h1 class="aboutus_banner text-center">
                About Royal Care Travels
            </h1>
        </div>
    </section>
    <section class="aboutus_first_session">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="main_class_gateway">
                        <div class="your_gateway">
                            <h2>Royal Care Travels - Who We Are</h2>
                            <p>
                                Welcome to <a href="{{route('home')}}">Royal Care Travels</a>, a budget-friendly travel
                                agency in
                                the USA. We offer flights, hotels, car rentals, and tours, known for our great service, low
                                prices,
                                and personal touch. Our travel experts work hard to match your preferences and create a
                                perfect
                                plan for you. We focus on customer satisfaction and aim to provide the best value for your
                                money
                                with affordable prices, special offers, and easy travel solutions. Whether you need a quick
                                weekend
                                trip or a longer journey, we're here to help you have an amazing time. Don't wait, book your
                                trip
                                with us today and start making your travel dreams come true!</p>
                            <p>
                                Royal Care Travels is a travel agency based in the USA, offering various travel-related
                                services
                                such as flight bookings, hotel reservations, <a href="{{route('packages')}}">tour
                                    packages</a>, and
                                other travel arrangements. We aim to provide personalized travel experiences for their
                                clients,
                                ensuring comfort, convenience, and quality service throughout the journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="gateway_image1 ing_s">
                        <img src="{{custom_asset('assets/img/car-about-p.jpg')}}" alt="affordable travel agency"
                            class="img-fluid py-2">
                        <img src="{{custom_asset('assets/img/air-ticket-flight-booking-concept.jpg')}}"
                            alt="best travel agency in usa" class="img-fluid py-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 py-3">
                    <div class="gateway_image2 ing_s">
                        <img src="{{custom_asset('assets/img/hotel-wo.jpg')}}" alt="top travel agency in usa"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whatsup_section ">
        <div class="container">
            <div class="col-md-12">
                <div class="whatsup_heading text-center ">
                    <h2>What's up with Royal care travels.</h2>
                    <p>Royal Care Travels is dedicated to providing exceptional travel services, ensuring seamless
                        experiences for our clients. From booking flights to arranging accommodations, our focus is on
                        delivering personalized and memorable journeys. Stay tuned for the latest updates and offers
                        from Royal Care Travels!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-b_">
                        <div class="about_icon_">
                            <i class="fa-solid fa-head-side-virus" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>Strong Market Understanding</h3>
                            <p>Recently, the market for business-class airline tickets has intensified into fierce
                                competition. Royal care travels come up with new strategies, methods, and prices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-b_ man-bacrd">
                        <div class="about_icon_">
                            <i class="fa-solid fa-people-arrows" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>Prolonged Collaborations</h3>
                            <p>Royal care travels has good relationships with premier airlines and aviation service
                                suppliers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-c_ ">
                        <div class="about_icon_ ">
                            <i class="fa-solid fa-medal" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>Emphasize Value and Substance</h3>
                            <p>Royal care travels primary objective is to provide specialized, high-end travel solutions
                                at the most competitive cost.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-ad">
                        <div class="about_icon_">
                            <i class="fa-solid fa-sack-dollar" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>Best Price Promise</h3>
                            <p>The cheapest airfare is available from Royal care travels. We will price match and give
                                you a $200 voucher for future flights if you discover a lower price either before or
                                within 24 hours of making the reservation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-e_">
                        <div class="about_icon_">
                            <i class="fa-solid fa-filter-circle-dollar" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>Reserve Now, Pay Later</h3>
                            <p>Royal care travels has good relationships with premier airlines and aviation service
                                suppliers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="about_box main-carsss card-b_">
                        <div class="about_icon_">
                            <i class="fa-solid fa-user-lock" style="color: #F6CE4B;"></i>
                        </div>
                        <div class="about_icon_content">
                            <h3>24-Hour Fare Lock</h3>
                            <p>Royal care travels primary objective is to provide specialized, high-end travel solutions
                                at the most competitive cost.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus_last_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="get_special">
                        <h2>GET SPECIAL AIRLINE OFFERS</h2>
                        <p>Join our email to get updated on the cheapest flights.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="newsletter_section" action="{{route('newsletter.subscribe')}}" method="POST">
                        @csrf
                        <input type="email" id="gsearch" name="email" placeholder="Enter E-mail" required>
                        <button type="submit" class="button_about_us">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
