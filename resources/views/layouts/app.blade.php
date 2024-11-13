<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $metatitle ?? 'Royal Care Travels | Online Flight, Hotels, Rental Cars Booking site')</title>
    @yield('heads')
    <meta name="description"
        content="@yield('description', $metaDescription ?? 'Royal Care Travels | Online Flight, Hotels, Rental Cars Booking site')">
    <meta name="keywords" content="@yield('keywords', $metakeyword ?? 'flights, hotels, rental cars, travel booking')">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="Royalcare Travels" />
    <meta property="og:title"
        content="{{ $metatitle ?? 'Royal Care Travels - Packages for Flight, Hotel, Car Booking' }}" />
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Welcome to Royal Care Travels - Online last-minute flight booking and cancellation, cheap hotel booking, rental car booking site. Get affordable deals.' }}" />
    <meta property="og:url" content="https://royalcaretravels.com" />
    <meta property="og:site_name" content="Royalcare Travels" />
    <meta property="article:modified_time" content="2024-05-31T09:20:07+00:00" />
    <meta name="image" property="og:image"
        content="{{ isset($meta_img) && filter_var($meta_img, FILTER_VALIDATE_URL) ? $meta_img : 'https://royalcaretravels.com/public/assets/img/royalcare-logo.jpg' }}">
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="shortcut icon" href="https://royalcaretravels.com/public/assets/img/logo_f.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ custom_asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="{{custom_asset('assets/css/select2.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Royal Care Travels",
        "url": "https://royalcaretravels.com/",
        "logo": "https://royalcaretravels.com/public/assets/img/royalcare-logo.jpg",
        "alternateName": "Royal Care Travels",
        "contactPoint": [
            {
            "@type": "ContactPoint",
            "telephone": "+1-8886297628",
            "contactType": "reservations",
            "email": "contact@royalcaretravels.com",
            "areaServed": "US",
            "availableLanguage": "en"
            }
        ]
        }
        </script>
    <meta name="google-site-verification" content="mSRQO-_z271w9I0CMdyrIVvkjB_VrkmxfVBFibh23mg" />
    <meta name="robots" content="index">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R5DD2LXR02"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-R5DD2LXR02');
    </script>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"
        integrity="sha512-Ww1y9OuQ2kehgVWSD/3nhgfrb424O3802QYP/A5gPXoM4+rRjiKrjHdGxQKrMGQykmsJ/86oGdHszfcVgUr4hA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ custom_asset('assets/js/select2.min.js') }}"></script>
    @yield('scripts')

    <script>
    $(document).ready(function () {
        $(".nav-link").click(function () {
            $(".nav-link").removeClass("active"); // Remove 'active' class from all links
            $(this).addClass("active"); // Add 'actssive' to the clicked link
        });
    });
</script>





     <script>
        function validatePhoneNumber(phoneClass, errorId) {
            var phoneVal = $("." + phoneClass).val();
            var phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phoneVal)) {
                $("#" + errorId).show();
                return false;
            }
            $("#" + errorId).hide();
            return true;
        }
        $(document).ready(function () {
            $('#car_book').on('click', function () {
                $.ajax({
                    url: "{{route('car.booking')}}",
                    method: "post",
                    data: {
                        _token: "{{ csrf_token() }}",
                        form: {
                            phone, email, car_preference, picking_up, dropping_off, checkin_date, dropping_off, checkout_date
                        }
                    },
                    success: function (response) {
                        console.log(response);
                        $().append(response);
                    }
                })
            });
        });
    </script>





    <script>
        $('.close').click(function () {
            $('#flightt_booking_modal').modal('hide');
        });
        jQuery(document).ready(function () {

            $('#car_booking_form').submit(function (event) {
                e.preventDefault();
                form = $(this).serialize();
                $(this).validate();
                if (!$(this).valid()) return false;
                {
                    var phone = $('#visitor_phone').val();
                    var email = $('#visitor_email').val();
                    var car_preference = $('#car_preference').val();
                    var picking_up = $('#picking_up').val();
                    var dropping_off = $('#dropping_off').val();
                    var checkin_date = $('#visitor_checkin_date').val();
                    var dropping_off = $('#dropping_off').val();
                    var checkout_date = $('#visitor_checkout_date').val();
                }

                $.ajax({
                    url: "{{route('car.booking')}}",
                    method: "post",
                    data: {
                        _token: "{{ csrf_token() }}",
                        form: {
                            phone, email, car_preference, picking_up, dropping_off, checkin_date, dropping_off, checkout_date
                        }
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });
        });
    </script>
    
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        jQuery(document).ready(function () {
            var arr = [];

            $.getJSON('public/assets/airport.json', function (data) {
                arr = data;
                setupDropdowns();
            });

            function validatePhoneNumber(phoneClass, errorId) {
                var phoneVal = $("." + phoneClass).val();
                var phoneRegex = /^\d{10}$/;
                if (!phoneRegex.test(phoneVal)) {
                    $("#" + errorId).show();
                    return false;
                }
                $("#" + errorId).hide();
                return true;
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departure_date1').setAttribute('min', today);
        });
        document.addEventListener('DOMContentLoaded', (event) => {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('datepicker3').setAttribute('min', today);
        });
        document.addEventListener('DOMContentLoaded', (event) => {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departure_date1').setAttribute('min', today);
        });
    </script>

    <script>
        function validateDate() {
            const dateInput = document.getElementById('departure_date');
            const dateValue = dateInput.value;
            if (!dateValue || dateValue.split("-").length !== 3) {
                return;
            }
            const year = dateValue.split("-")[0];
            const len = year.length;
            if (year.length !== 4 || year < 1000 || year > 9999) {
                alert('Please select a valid 4-digit year.');
                dateInput.value = '';
            }
        }
    </script>
    <script type="text/javascript">
        function show_date(data) {

            function setAttributes(element, disabled, required) {
                if (element) {
                    element.disabled = disabled;
                    if (required !== undefined) {
                        if (required) {
                            element.setAttribute("required", true);
                        } else {
                            element.removeAttribute("required");
                        }
                    }
                }
            }
            var datepicker2 = document.getElementById("datepicker2");
            var datepicker2 = document.getElementById("datepicker2");
            var return_date1 = document.getElementById("return_date1");
            var datepicker3 = document.getElementById("datepicker3");
            if (data === 'oneway') {
                setAttributes(datepicker2, true, false);
                setAttributes(datepicker2, true, false);
                setAttributes(return_date1, true, false);
                setAttributes(datepicker3, true, false);
            } else if (data === 'roundtrip') {
                setAttributes(datepicker2, false, true);
                setAttributes(datepicker2, false, false);
                setAttributes(return_date1, false, false);
                setAttributes(datepicker3, false, false);
            }
        }
    </script>

    <script type="text/javascript">
        function changePassengerCount(button, type, delta) {
            const input = $(button).siblings('.passengers_count.' + type);
            let count = parseInt(input.val()) || 0;

            if (type === 'infant') {
                if (count + delta > 2) {
                    $(input).siblings('.infant-error').show().text('Maximum number of infants is 2.');
                    return;
                } else {
                    $(input).siblings('.infant-error').hide();
                }
            }
            count = Math.max(0, count + delta);
            input.val(count);
            $(input).siblings('.infant-error').hide();
        }

        function updatePassengerSummary(button) {
            const form = $(button).closest('.psg_dls');
            const adults = parseInt(form.find('.adult').val()) || 0;
            const children = parseInt(form.find('.child').val()) || 0;
            const infants = parseInt(form.find('.infant').val()) || 0;
            const total = adults + children + infants;

            if (total > 9) {
                form.find('.total-error').show().text('Total number of passengers cannot exceed 9.');
                return;
            } else {
                form.find('.total-error').hide();
            }

            form.closest('form').find('.adults-count').val(adults);
            form.closest('form').find('.children-count').val(children);
            form.closest('form').find('.infants-count').val(infants);
            form.hide('slideUp');
            $(button).closest('.form-group').find('.passengers_display').val('Passengers ' + total);
        }

        $(document).ready(function () {
            $(".passengers_display").click(function () {
                $(this).siblings('.psg_dls').toggle('slideUp');
            });
        });
    </script>

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Flight Booking",
            "item": "https://royalcaretravels.com/last-minute-flights-booking-deals"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Hotel Booking",
            "item": "https://royalcaretravels.com/cheap-hotels-booking"  
        },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Car Rental Booking",
            "item": "https://royalcaretravels.com/cheap-car-rental-deals"  
        },{
            "@type": "ListItem", 
            "position": 4, 
            "name": "Cheap Tour Package At Low Prices",
            "item": "https://royalcaretravels.com/tour-and-travel-packages"  
        },{
            "@type": "ListItem", 
            "position": 5, 
            "name": "About Royal Care Travels",
            "item": "https://royalcaretravels.com/about"  
        },{
            "@type": "ListItem", 
            "position": 6, 
            "name": "Contact Us",
            "item": "https://royalcaretravels.com/contact"  
        }]
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr(".departure-datee", {
                dateFormat: "Y-m-d",
                allowInput: true,
                onChange: function (selectedDates) {
                    if (selectedDates.length > 0) {
                        returnDatePicker.set('minDate', selectedDates[0]);
                    }
                },
                onOpen: function (selectedDates, dateStr, instance) {
                    instance.set('minDate', 'today');
                }
            });

            flatpickr(".return_dateee", {
                dateFormat: "Y-m-d",
                allowInput: true,
                onOpen: function (selectedDates, dateStr, instance) {
                    instance.set('minDate', 'today');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let arr = [];

            $.getJSON('public/assets/airport.json', function (data) {
                arr = data.map(item => item.toLowerCase());
                setupDropdowns();
            });


            function validateField(field) {
                const value = $(field).val();
                const fieldName = $(field).attr('name');
                let errorMessage = '';

                $(field).next('.error-message').remove();

                if (!value) {
                    errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} is required.`;
                } else {
                    if (fieldName === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        errorMessage = 'Invalid email format.';
                    }

                    if ((fieldName === 'from' || fieldName === 'to') && !validAirports.includes(value.toLowerCase())) {
                        errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} must be a valid airport selection.`;
                    }
                    if (errorMessage) {
                        $(field).after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
                    }
                }
            }

            function setupDropdowns() {
                $(".location-fld").each(function () {
                    const $input = $(this);
                    const $dropdown = $('<div class="dropdown" id="new" style="display:none;"></div>').insertAfter($input);

                    $input.on('keyup', function () {
                        const query = $input.val().toLowerCase().trim();
                        $dropdown.empty();

                        if (query.length === 0) {
                            $dropdown.hide();
                            return;
                        }

                        let matched = false;

                        $.each(arr, function (index, value) {
                            if (value.includes(query)) {
                                matched = true;
                                $dropdown.append(`<div class="dropdown-item"  id="dropitem1" data-value="${value}">${value}</div>`);
                            }
                        });

                        if (matched) {
                            $dropdown.show();
                        } else {
                            $dropdown.hide();
                        }
                    });

                    $dropdown.on('click', '.dropdown-item', function () {
                        const selectedValue = $(this).data('value');
                        $input.val(selectedValue);
                        $dropdown.hide();
                        validateField($input);
                    });

                    $(document).click(function (event) {
                        if (!$(event.target).closest($input).length) {
                            $dropdown.hide();
                        }
                    });
                });
            }

            $(document).on('input change', '#form_book2 input, #form_book2 select', function () {
                validateField(this);
            });

            $(document).on('submit', '#form_book2', function (event) {
                event.preventDefault();

                $('.error-message').remove();
                let isValid = true;
                const form = $(this);
                const requiredFields = ['origin', 'destination', 'phone', 'email'];
                $.each(requiredFields, function (index, field) {
                    const value = $(this).find(`[name="${field}"]`).val();
                    if (!value) {
                        isValid = false;
                        $(this).find(`[name="${field}"]`).after(`<span class="error-message" style="color:red;">${field.charAt(0).toUpperCase() + field.slice(1)} is required.</span>`);
                    }
                }.bind(this));

                const phoneElement = $(this).find('[name="phone"]');
                const phoneValue = phoneElement.val();

                if (phoneValue.length < 10 || phoneValue.length > 11) {
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); 
                }
                const departureDate = $(this).find('[name="departure_date"]').val();
                const returnDate = $(this).find('[name="return_date"]').val();

                if (!departureDate && !returnDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Departure Date is required.</span>`);
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Return Date is required.</span>`);
                } else if (departureDate && !returnDate) {
                    isValid = false;
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Return Date is required.</span>`);
                } else if (!departureDate && returnDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Departure Date is required.</span>`);
                } else if (departureDate && returnDate) {
                    const depDate = new Date(departureDate);
                    const retDate = new Date(returnDate);

                    if (retDate <= depDate) {
                        isValid = false;
                        $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Return date cannot be before or the same as the departure date.</span>`);
                    }
                }

                const origin = $(this).find('[name="origin"]').val().toLowerCase();
                const destination = $(this).find('[name="destination"]').val().toLowerCase();
                if (!arr.includes(origin)) {
                    isValid = false;
                    $(this).find('[name="origin"]').after(`<span class="error-message" style="color:red;">Origin must be a valid airport selection.</span>`);
                }
                if (!arr.includes(destination)) {
                    isValid = false;
                    $(this).find('[name="destination"]').after(`<span class="error-message" style="color:red;">Destination must be a valid airport selection.</span>`);
                }

                if (isValid) {
                    $.ajax({
                        url: "{{ route('flight.booking') }}",
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            window.location.href = "{{ route('flight.thankyou') }}";
                        },
                        error: function (xhr) {
                            let errors = xhr.responseJSON.errors;
                            $('.error-message').remove();
                            if (errors) {
                                $.each(errors, function (key, value) {
                                    $(this).find(`[name="${key}"]`).after(`<span class="error-message" style="color:red;">${value[0]}</span>`);
                                }.bind(this));
                            } else {
                                alert('An unexpected error occurred. Please try again.');
                            }
                        }
                    });
                }
            });
        });
    </script>

    </script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function validateField(field) {
                const value = $(field).val();
                const fieldName = $(field).attr('name');
                let errorMessage = '';

                $(field).next('.error-message').remove();

                if (!value) {
                    errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} is required.`;
                } else {
                    if (fieldName === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        errorMessage = 'Invalid email format.';
                    }
                    if (errorMessage) {
                        $(field).after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
                    }
                }

            }

            $(document).on('input change', '#form_book1 input, #form_book1 select', function () {
                validateField(this);
            });

            $(document).on('submit', '#form_book1', function (event) {
                event.preventDefault();

                $('.error-message').remove();
                let isValid = true;

                const requiredFields = ['name', 'phone', 'email', 'room_preference'];
                $.each(requiredFields, function (index, field) {
                    const value = $(this).find(`[name="${field}"]`).val();
                    if (!value) {
                        isValid = false;
                        $(this).find(`[name="${field}"]`).after(`<span class="error-message" style="color:red;">${field.charAt(0).toUpperCase() + field.slice(1)} is required.</span>`);
                    }
                }.bind(this));

                const phoneElement = $(this).find('[name="phone"]');
                const phoneValue = phoneElement.val();
                if (phoneValue.length < 10 || phoneValue.length > 11) {
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); 
                }

                const departureDate = $(this).find('[name="checkin_date"]').val();
                const returnDate = $(this).find('[name="checkout_date"]').val();

                if (!departureDate && !returnDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Check-in Date is required.</span>`);
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Check-out Date is required.</span>`);
                    errorMessage = 'Both departure and return dates are required.';
                } else if (departureDate && !returnDate) {
                    isValid = false;
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Check-out Date is required.</span>`);
                    errorMessage = 'Check-out date is required when a departure date is selected.';
                } else if (!departureDate && returnDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Check-in Date is required.</span>`);
                    errorMessage = 'Check-in date is required when a return date is selected.';
                } else if (departureDate && returnDate) {
                    const depDate = new Date(departureDate);
                    const retDate = new Date(returnDate);

                    if (retDate <= depDate) {
                        isValid = false;
                        $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Return date cannot be before or the same as the Check-in Date.</span>`);
                        errorMessage = 'Return date cannot be before or the same as the departure date.';
                    }
                }

                if (!isValid) {
                    console.error(errorMessage);
                }

                if (isValid) {
                    $.ajax({
                        url: "{{ route('hotel.booking') }}",
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            window.location.href = "{{ route('hotel.thankyou') }}";
                            console.log(response);
                        },
                        error: function (xhr) {
                            let errors = xhr.responseJSON.errors;
                            $('.error-message').remove();
                            if (errors) {
                                $.each(errors, function (key, value) {
                                    $(this).find(`[name="${key}"]`).after(`<span class="error-message" style="color:red;">${value[0]}</span>`);
                                }.bind(this));
                            } else {
                                alert('An unexpected error occurred. Please try again.');
                            }
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let validAirports = [];

            $.getJSON('public/assets/airport.json', function (data) {
                validAirports = data.map(item => item.toLowerCase());
            });

            function validateField(field) {
                const value = $(field).val();
                const fieldName = $(field).attr('name');
                let errorMessage = '';

                $(field).next('.error-message').remove();

                if (!value) {
                    errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} is required.`;
                } else {
                    if (fieldName === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        errorMessage = 'Invalid email format.';
                    }
                    if ((fieldName === 'from' || fieldName === 'to') && !validAirports.includes(value.toLowerCase())) {
                        errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} must be a valid airport selection.`;
                    }

                    if (errorMessage) {
                        $(field).after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
                    }
                }
            }

            $(document).on('input change', '#form_book3 input, #form_book3 select', function () {
                validateField(this);
            });

            $(document).on('submit', '#form_book3', function (event) {
                event.preventDefault();

                $('.error-message').remove();
                let isValid = true;

                const requiredFields = ['picking_up', 'dropping_off', 'phone', 'email'];
                $.each(requiredFields, function (index, field) {
                    const value = $(this).find(`[name="${field}"]`).val();
                    if (!value) {
                        isValid = false;
                        $(this).find(`[name="${field}"]`).after(`<span class="error-message" style="color:red;">${field.charAt(0).toUpperCase() + field.slice(1)} is required.</span>`);
                    }
                }.bind(this));

                const phone = $(this).find('#phone').val();
                if (phone.length < 10 || phone.length > 11) {
                    isValid = false;
                }

                const departureDate = $(this).find('[name="checkin_date"]').val();
                const returnDate = $(this).find('[name="checkout_date"]').val();
                if (!departureDate && !returnDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Check-in Date is required</span>`);
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Check-out Date is required</span>`);
                } else if (!departureDate) {
                    isValid = false;
                    $(this).find('.departure-datee').after(`<span class="error-message" style="color:red;">Check-in Date is required</span>`);
                } else if (!returnDate) {
                    isValid = false;
                    $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Check-out Date is required</span>`);
                } else {
                    const depDate = new Date(departureDate);
                    const retDate = new Date(returnDate);

                    if (depDate.getTime() >= retDate.getTime()) {
                        isValid = false;
                        $(this).find('.return_dateee').after(`<span class="error-message" style="color:red;">Check-out Date must be after the Check-in Date.</span>`);
                    }
                }

                const fromAirport = $(this).find('[name="picking_up"]').val().toLowerCase();
                const toAirport = $(this).find('[name="dropping_off"]').val().toLowerCase();
                if (!validAirports.includes(fromAirport)) {
                    isValid = false;
                    $(this).find('[name="picking_up"]').after(`<span class="error-message" style="color:red;">From must be a valid airport selection.</span>`);
                }
                if (!validAirports.includes(toAirport)) {
                    isValid = false;
                    $(this).find('[name="dropping_off"]').after(`<span class="error-message" style="color:red;">To must be a valid airport selection.</span>`);
                }

                if (isValid) {
                    $.ajax({
                        url: "{{ route('car.booking') }}",
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            window.location.href = "{{ route('flight.thankyou') }}";
                            console.log(response);
                        },
                        error: function (xhr) {
                            let errors = xhr.responseJSON.errors;
                            $('.error-message').remove();
                            if (errors) {
                                $.each(errors, function (key, value) {
                                    $(this).find(`[name="${key}"]`).after(`<span class="error-message" style="color:red;">${value[0]}</span>`);
                                }.bind(this));
                            } else {
                                alert('An unexpected error occurred. Please try again.');
                            }
                        }
                    });
                }
            });
        });

        $('#flightt_booking_modal, #FormModal, #car').on('hidden.bs.modal', function () {
    var modalForm = $(this).find('form')[0]; 
    if (modalForm) {
        modalForm.reset();
    }
    $(this).find('.error-message').remove(); 
    $(this).find('.is-invalid').removeClass('is-invalid'); 
    $(this).find('.text-danger').remove(); 

    $(this).find('.phone-error').remove();
    $(this).find('.form_valid_imp_numbererror').remove();
   $(this).find('#emailError').remove();
    
   $(this).find('#errorMessage').removeClass('is-invalid');
     $(this).find('#emailError').removeClass('is-invalid');
});

$(document).ready(function () {
    $('.crosssearch').on('click', function () {
        $(this).closest('.modal').modal('hide');
        
        console.log('Modal closed');
    });
});
    </script>

    <script>
        $(document).ready(function () {
            $('input[name="tripType"]').change(function () {
                const selectedTripType = $('input[name="tripType"]:checked').val();

                if (selectedTripType === "oneway") {
                    $('input[name="return_date"]').prop('disabled', true).val('');
                } else {
                    $('input[name="return_date"]').prop('disabled', false);
                }
            });
            $('input[name="tripType"]:checked').trigger('change');
        });
    </script>


    <script>
        function validatePhone(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            const errorMessage = input.parentElement.nextElementSibling; 
            if (input.value.length !== 10) {
                errorMessage.style.display = 'block'; 
            } else {
                errorMessage.style.display = 'none'; 
            }
        }

        function validateName() {
            var nameInput = document.getElementById("inputName");
            var nameError = document.getElementById("nameError");

            var regex = /^[a-zA-Z\s]*$/;

            if (!regex.test(nameInput.value)) {
                nameInput.value = nameInput.value.replace(/[^a-zA-Z\s]/g, '');
                nameError.style.display = "inline";  
            } else {
                nameError.style.display = "none";   
            }
        }

        function validateEmail() {
            var emailInput = document.getElementById("inputEmail");
            var emailError = document.getElementById("emailError");
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 

            if (!emailPattern.test(emailInput.value)) {
                emailError.style.display = "inline"; 
                emailError.textContent = "Please enter a valid email address.";
            } else {
                emailError.style.display = "none"; 
            }
        }
    </script>

    <script>
        $('#closeModal').on('click', function () {
            $('#FormModal').modal('hide');
        });
    </script>
</body>

</html>