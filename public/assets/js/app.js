
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
            if (fieldName === 'phone' && (value.length <= 10)) {
                errorMessage = 'Phone number must be between 10 and 10 digits.';
            }
            if ((fieldName === 'from' || fieldName === 'to') && !validAirports.includes(value.toLowerCase())) {
                errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} must be a valid airport selection.`;
            }
        }

        $(field).closest('.form-group').next('.error-message').remove();

        if (errorMessage) {

            $(field).closest('.form-group').after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
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

        const requiredFields = ['origin', 'destination', 'phone', 'email'];
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
            $(this).find('#phone').after(`<span class="error-message" style="color:red;">Phone number must be between 10 and 11 digits.</span>`);
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
                    alert('Flight booked successfully!');
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
            if (fieldName === 'phone' && (value.length < 10 || value.length > 11)) {
                errorMessage = 'Phone number must be between 10 and 11 digits.';
            }

        }

        if (errorMessage) {
            $(field).after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
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

        const phone = $(this).find('#phone').val();
        if (phone.length < 10 || phone.length > 11) {
            isValid = false;
            $(this).find('#phone').after(`<span class="error-message" style="color:red;">Phone number must be between 10 and 11 digits.</span>`);
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
                    alert('Hotel booked successfully!');
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
            if (fieldName === 'phone' && (value.length < 10 || value.length > 11)) {
                errorMessage = 'Phone number must be between 10 and 11 digits.';
            }
            if ((fieldName === 'from' || fieldName === 'to') && !validAirports.includes(value.toLowerCase())) {
                errorMessage = `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} must be a valid airport selection.`;
            }
        }

        if (errorMessage) {
            $(field).after(`<span class="error-message" style="color:red;">${errorMessage}</span>`);
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
            $(this).find('#phone').after(`<span class="error-message" style="color:red;">Phone number must be between 10 and 11 digits.</span>`);
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
                    alert('Car booked successfully!');
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






