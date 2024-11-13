@extends('layouts.app')
@section('content')
    <section class="cheap_tour_packages_sec">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="cheap_tour_packages_hd anim_text">
                        <h1 class="animate__animated animate__bounceIn">Best Europe Tour Packages</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book_holidays_pack">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="book_holidays_pack_heading">
                        <h2>Book Flight and Hotel Holiday Packages</h2>
                        <p>Book your ideal flight and hotel holiday packages with Royal Care Travels! Discover
                            affordable
                            options tailored to your budget and travel preferences. Whether you're planning in advance
                            or
                            looking for last-minute deals, we have the perfect package for your next unforgettable
                            getaway.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 py-2 response_new">
                    <div class="book_holiday_pack_fligt ">
                        <div class="border_under">
                            <div class="pack_img_holiday">
                                <img src="{{ custom_asset('assets/img/new_flight_booking.png')}}"
                                    alt="holiday packages to new zealand">
                            </div>
                        </div>
                        <div class="main_txt_holiday">
                            <h2>Flight Booking </h2>
                            <p>Discover the best flight deals with Royal Care Travels. Book your next adventure
                                effortlessly
                                and enjoy top-notch customer service every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 py-2 response_new">
                    <div class="book_holiday_pack_fligt">
                        <div class="border_under">
                            <div class="pack_img_holiday">
                                <img src="{{custom_asset('assets/img/hotel_booking_im.png')}}"
                                    alt="holiday packages to switzerland">
                            </div>
                        </div>
                        <div class="main_txt_holiday">
                            <h2>Hotel Booking</h2>
                            <p>Experience luxury and comfort with Royal Care Travels' hotel booking services. Secure the
                                best rates and enjoy exclusive perks at top-rated hotels worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 py-2">
                    <div class="book_holiday_pack_fligt new_main_responsive">
                        <div class="border_under">
                            <div class="pack_img_holiday">
                                <img src="{{custom_asset('assets/img/car_rental_im.png')}}" alt="europe tour packages">
                            </div>
                        </div>
                        <div class="main_txt_holiday">
                            <h2>Rental Cars </h2>
                            <p>Explore with ease using Royal Care Travels' rental car services. Choose from a wide range
                                of
                                vehicles and enjoy competitive rates for a seamless travel experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_section ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 gf">
                    <div class="about_img">
                        <img src="{{ custom_asset('assets/img/affortable_holiday.png')}}" alt="alaska tour packages"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about_text_box affordable_padding content_para_padding">
                        <h2>Explore Affordable Holiday Packages with Royal Care Travels</h2>
                        <p>Discover Royal Care Travels' amazing affordable or budget holiday packages for your tour and
                            travel options. From a silent beach vacation or mountain expedition to city tours, we have
                            something for everyone. From flight and hotel combos to comprehensive packages, we make planning
                            your trip easy and affordable. With <a href="{{route('flights')}}">clear trip flight
                                booking</a>, book your flights in advance to get the best deal. Exclusive packages for an
                            incredible tour of Europe best of the best, the perfect Graceland tour packages and lots more:
                            take a moment to find your affordable travel packages here.
                        </p>
                        <div class="mt-4">
                            <a href="{{route('contact')}}" class="clearfix_btn clearfix_btn packages">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_section about_to_responsive ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_text_box">
                        <h2>Discover Unbeatable Deals with American Airlines Vacation Packages</h2>
                        <p>Royal Care Travels offers exclusive American Airlines vacation packages designed to offer
                            unbeatable value and convenience. From sunny escapes in San Diego vacation packages, to a
                            European adventure through our <a href="{{ route('packages')}}"> Europe tour packages</a>, or
                            even the Big Apple with our New York tour packages, we have something for every traveler. With
                            Royal Care Travels, you can have great booking, affordable prices, and memorable experiences.
                            Let us guide you in planning your trip for the perfect getaway in the best vacation packages in
                            town, all while making your travel experience stress-free and memorable. Book now and start that
                            adventure!
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('contact')}}" class="clearfix_btn clearfix_btn packages">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 gf">
                    <div class="about_img affordable_padding">
                        <img src="{{ custom_asset('assets/img/affortable_holiday_to.png')}}"
                            alt="holiday packages to los angeles" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="package_choose_us pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_text_box text-center">
                        <h2>Why Choose Us ?</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-2">
                    <div class="availble main-carsss card-a_">
                        <div class="icon_packages_choose_us">
                            <img src="{{ custom_asset('assets/img/24-hours.png')}}" alt="new york tour packages"
                                class="img-fluid">
                        </div>
                        <div class="choose_us_packages_contnt">
                            <h3>24/7 Service Available</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-2">
                    <div class="availble main-carsss card-ad">
                        <div class="icon_packages_choose_us">
                            <img src="{{ custom_asset('assets/img/customer-satisfaction.png')}}"
                                alt="best graceland tour package" class="img-fluid">
                        </div>
                        <div class="choose_us_packages_contnt">
                            <h3>100% Satisfaction Guarantee</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-2">
                    <div class="availble main-carsss card-c_">
                        <div class="icon_packages_choose_us">
                            <img src="{{custom_asset('assets/img/high-quality.png')}}" alt="7 days europe tour packages"
                                class="img-fluid">
                        </div>
                        <div class="choose_us_packages_contnt">
                            <h3>Always Best Quality</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
