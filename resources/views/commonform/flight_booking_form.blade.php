<div class="footer_form">
    <div class="container">
        <div class="form_bx">
            <form id="form_book2">
                @csrf
                <div class="col-sm-12">
                    <div class="row">
                        <div class="flight_type">
                            <div class="form-check-inline">
                                <label class="radio-inline customradio">Round Trip
                                    <input type="radio" {{ old('tripType') == 'roundtrip' ? 'checked' : '' }}
                                        value="roundtrip" name="tripType">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-inline customradio">One Way
                                    <input type="radio" {{ old('tripType') == 'oneway' ? 'checked' : '' }}
                                        value="oneway" name="tripType">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fm_ln1">
                    <div class="rsts ffrms_ppd airportwidthrespo from-in">
                        <input type="hidden" name="form_type" value="home_page2">
                        <input type="hidden" name="adults" class="adults-count" value="1">
                        <input type="hidden" name="children" class="children-count" value="0">
                        <input type="hidden" name="infants" class="infants-count" value="0">
                        <div class="res_hh">From Airport</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-solid fa-location-dot"></i></label>
                            <input type="text" required="required" class="form-control location-fld" name="origin"
                                value="{{ old('origin') }}" autocomplete="off" data-error="originError1">
                        </div>
                    </div>
                    <div class="rsts ffrms_ppD airportwidthrespo">
                        <div class="res_hh">To Airport</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-solid fa-location-dot"></i></label>
                            <input required="required" type="text" class="form-control location-fld"
                                name="destination" value="{{ old('destination') }}" autocomplete="off"
                                data-error="destinationError1">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh">Departure Date</div>
                        <div class="form-group">
                            <label class="frm_llbs">
                                <i class="fa-solid fa-calendar-days"></i>
                            </label>
                            <input required type="text" autocomplete="off"
                                class="form-control form1_date form_padding readtrue date-input departure-datee"
                                name="departure_date" value="{{ old('departure_date') }}" placeholder="Select Date"
                                readonly>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh">Return Date</div>
                        <div class="form-group">
                            <label class="frm_llbs">
                                <i class="fa-solid fa-calendar-days"></i>
                            </label>
                            <input required="required" type="text" autocomplete="off"
                                class="form-control form1_date form_padding readtrue date-input return_dateee"
                                name="return_date" value="{{ old('return_date') }}" placeholder="Select Date" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh">Passengers</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-solid fa-user"></i></label>
                            <input type="text"
                                class="form-control ipt1_small readtrue form_padding focusform_home passengers_display"
                                readonly value="Passenger 1">
                            <div class="psg_dls" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pass_bx">
                                            <label>Adults <small>(+17 yrs)</small></label>
                                            <div class="input-group number-spinner">
                                                <a class="btn mns_btn"
                                                    onclick="changePassengerCount(this, 'adult', -1)"><i
                                                        class="fa fa-minus"></i></a>
                                                <input type="text"
                                                    class=" text-center add_num passengers_count adult" value="1">
                                                <a class="btn add_btn"
                                                    onclick="changePassengerCount(this, 'adult', 1)"><i
                                                        class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass_bx">
                                            <label>Children <small>(0-17 yrs)</small></label>
                                            <div class="input-group number-spinner">
                                                <a class="btn mns_btn"
                                                    onclick="changePassengerCount(this, 'child', -1)"><i
                                                        class="fa fa-minus"></i></a>
                                                <input type="text"
                                                    class="text-center add_num passengers_count child" value="0">
                                                <a class="btn add_btn"
                                                    onclick="changePassengerCount(this, 'child', 1)"><i
                                                        class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass_bx">
                                            <label>Infants <small>(Upto 2 yrs)</small></label>
                                            <div class="input-group number-spinner">
                                                <a class="btn mns_btn"
                                                    onclick="changePassengerCount(this, 'infant', -1)"><i
                                                        class="fa fa-minus"></i></a>
                                                <input type="text"
                                                    class=" text-center add_num passengers_count infant"
                                                    value="0">
                                                <a class="btn add_btn"
                                                    onclick="changePassengerCount(this, 'infant', 1)"><i
                                                        class="fa fa-plus"></i></a>
                                            </div>
                                            <span class="infant-error" style="display:none;color:red;"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-6">
                                    <div class="btn_dn">
                                        <button type="button" onclick="updatePassengerSummary(this);"
                                            class="btn_done">Done</button>
                                    </div>
                                </div>
                                <span class="total-error" style="display:none;color:red;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ffrms_ppD">
                        <div class="res_hh">Phone</div>
                        <div class="form-group new">
                            <select id="country_code" class="ud_s">
                                <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>+1 (USA)
                                </option>
                                <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>+44 (UK)
                                </option>
                                <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>+91 (India)
                                </option>
                            </select>
                            <label class="frm_llbs"></label>
                            <input type="tel" id="phone" placeholder="Enter your Number"
                                class="phone-input form-control p_border" name="phone" value="{{ old('phone') }}"
                                minlength="10" maxlength="10" oninput="validatePhone(this)" required>
                        </div>
                        <span class="phone-error" style="color:red; display: none;">Phone
                            number must be exactly 10 digits.</span>
                    </div>
                    <div class="col-lg-4 col-md-6 ffrms_ppD">
                        <div class="res_hh">Email</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-solid fa-envelope"></i> </label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email"
                                id="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-8 ffrms_ppD mb-4" style="text-align:center;">
                        <button type="submit" name="submitForm"> <i class="fa fa-search"
                                class="popupbotpadding"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
