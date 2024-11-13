@extends('layouts.app')
@section('content')
    <section class="about_us_banner contact_banner_royal">
        <div class="container">
            <h1 class="aboutus_banner text-center">Contact Us</h1>
        </div>
    </section><br>
    <section class="get_in_touch_contact">
        <div class="container">
            <div class="whatsup_heading text-center ">
                <h2>Get in Touch with the Best Travel Agency in the USA – Royal Care Travels</h2>
                <p>Have questions or need help planning your next adventure? Our expert team at Royal Care Travels is ready
                    to assist you. Whether it's <a
                        href="https://royalcaretravels.com/blogs/when-are-the-most-affordable-days-to-book-international-flights">booking
                        flights</a>, vacation packages or travel advice, we’re here for you. Contact us today via phone or
                    email and let's make your travel dreams a reality!
                </p>
            </div>
        </div>
    </section>
    <section class="contact_info pt-0">
        <div class="container">
            <div class="whatsup_heading text-center ">
                <h2>Contact Information</h2>
                <p>Need flight assistance? Contact us for booking, inquiries, or support. We’re here to help!</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="contact_info_box">
                        <a href="mailto:contact@royalcaretravels.com">
                            <div class="contact_icon">
                                <i class="fa-solid fa-envelope" style="color: #FFBB4F;"></i>
                            </div>
                            <div class="mail_contact">
                                <h3>Email address</h3>
                                <a href="mailto:contact@royalcaretravels.com">contact@royalcaretravels.com</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="contact_info_box">
                        <a href="tel:+1-8886297628 ">
                            <div class="contact_icon">
                                <i class="fa-solid fa-phone" style="color: #FFBB4F;"></i>
                            </div>
                            <div class="mail_contact">
                                <h3>Phone Number</h3>
                                <a href="tel:+1-8886297628 ">+1-8886297628 </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="contact_info_box">
                        <div class="contact_icon">
                            <i class="fa-solid fa-location-dot" style="color: #FFBB4F;"></i>
                        </div>
                        <div class="mail_contact">
                            <h3>Office Location </h3>
                            <a href="https://maps.app.goo.gl/XXtVGWwsTDQXBtF76">16192 Coastal Highway, Lewes DE-19958</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get_in_touch_contact">
        <div class="container">
            <div class="getintouch_left">
                <h2>Get In Touch</h2>
                <p>For flight inquiries, bookings, or assistance, feel free to reach out. We’re here for you!</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{custom_asset('assets/img/contact_getintouch.jpg')}}" alt="affordable travel agency"
                        class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="contact_form">
                        <form id="contactForm" class="row g-3">
                            @csrf
                            <div class="col-lg-6 form_a">
                                <label for="inputName" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="inputName" name="first_name"
                                    placeholder="Enter your name"
                                    oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                <span id="nameError" class="text-danger" style="display: none;">Invalid name.</span>
                            </div>
                            <div class="col-lg-6 form_a">
                                <label for="inputEmail" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    placeholder="Enter your email">
                                <span id="emailError" class="text-danger" style="display: none;">Invalid email.</span>
                            </div>
                            <div class="col-lg-6 form_a">
                                <label for="inputPhone" class="form-label">Number *</label>
                                <div class="form-group new">
                                    <select id="country_code" class="ud_s">
                                        <option value="+1">+1 (USA)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+91">+91 (India)</option>
                                    </select>
                                    <input type="tel" id="phone" name="phone" class="form-control p_border"
                                        placeholder="Enter your Number" required minlength="10" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                                <span id="phoneError" class="text-danger" style="display: none;">Phone number must be
                                    exactly 10 digits.</span>
                            </div>
                            <div class="col-lg-6 form_a">
                                <label for="inputSubject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="inputSubject" name="subject"
                                    placeholder="Subject">
                                <span id="subjectError" class="text-danger" style="display: none;">Subject is
                                    required.</span>
                            </div>
                            <div class="col-md-12 form_a">
                                <label for="inputMessage" class="form-label">Message *</label>
                                <textarea id="inputMessage" class="form-control text_ariya" name="message" placeholder="Enter your message"
                                    required></textarea>
                                <span id="messageError" class="text-danger" style="display: none;">Message is
                                    required.</span>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-primary contact_btn_msg">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();

                $(".error").hide();
                var email = $("#inputEmail").val();
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if (email.trim() === "") {
                    $("#emailError").text("Email is required.").show();
                    return;
                }

                if (!emailPattern.test(email)) {
                    $("#emailError").text("Invalid email format.").show();
                    return;
                }

                var formData = new FormData(this);
                $.ajax({
                    url: "{{route('submit.contactform')}}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.status === 'success') {
                            window.location.href = "{{route('flight.thankyou')}}";
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;

                            if (errors.first_name) {
                                $("#nameError").text(errors.first_name[0]).show();
                            }
                            if (errors.subject) {
                                $("#subjectError").text(errors.subject[0]).show();
                            }
                            if (errors.email) {
                                $("#emailError").text(errors.email[0]).show();
                            }
                            if (errors.phone) {
                                $("#phoneError").text(errors.phone[0]).show();
                            }
                            if (errors.message) {
                                $("#messageError").text(errors.message[0]).show();
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
@endsection
