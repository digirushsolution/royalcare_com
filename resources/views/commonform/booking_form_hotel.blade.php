<div class="footer_form">
    <div class="container">
        <div class="form_bx">
            <form id="form_book1">
                @csrf
                <div class="row fm_ln1">
                    <div class="rsts ffrms_ppD airportwidthrespo">
                        <input type="hidden" name="form_type" value="hotel_booking_form1">
                        <input type="hidden" name="adults" class="adults-count" value="{{ old('adults', 1) }}">
                        <input type="hidden" name="children" class="children-count" value="{{ old('children', 0) }}">
                        <input type="hidden" name="infants" class="infants-count" value="{{ old('infants', 0) }}">
                        <div class="res_hh"> Name *</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-regular fa-user"></i></label>
                            <input type="text" id="name" placeholder="Name" class="form-control" name="name"
                                value="{{old('name')}}"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            @error('name')
                                <span class="error-message" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="rsts ffrms_ppD airportwidthrespo">
                        <div class="res_hh"> Email *</div>
                        <div class="form-group">
                            <label class="frm_llbs"><i class="fa-solid fa-envelope"></i></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your E-mail"
                                id="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="rsts ffrms_ppD airportwidthrespo">
                        <div class="res_hh"> Phone *</div>
                        <div class="form-group new">
                            <select id="country_code" class="ud_s">
                                <option value="+1"{{old('country_code') == '+1' ? 'selected' : '' }}>+1 (USA)
                                </option>
                                <option value="+44"{{ old('country_code') == '+44' ? 'selected' : '' }}>+44 (UK)
                                </option>
                                <option value="+91"{{old('country_code') == '+91' ? 'selected' : '' }}>+91 (India)
                                </option>
                            </select>
                            <label class="frm_llbs"></label>
                            <input type="tel" id="phone" placeholder="Enter your Number"
                                class="phone-input form-control p_border" name="phone" value="{{ old('phone')}}"
                                maxlength="10" minlength="10" oninput="validatePhone(this);" required>
                        </div>
                        <div class="form_valid_imp_numbererror" style="color:red; display:none;">Phone
                            number must be exactly 10 digits.</div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh">Adults </div>
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
                                                    class=" text-center add_num passengers_count adult"
                                                    value="{{ old('adults', 1) }}">
                                                <a class="btn add_btn"
                                                    onclick="changePassengerCount(this, 'adult', 1)"><i
                                                        class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pass_bx">
                                            <label>Children *<small>(0-17 yrs)</small></label>
                                            <div class="input-group number-spinner">
                                                <a class="btn mns_btn"
                                                    onclick="changePassengerCount(this, 'child', -1)"><i
                                                        class="fa fa-minus"></i></a>
                                                <input type="text"
                                                    class=" text-center add_num passengers_count child"
                                                    value="{{ old('children', 0) }}">
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
                                                    value="{{ old('infants', 0) }}">
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
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh"> Check-in Date *</div>
                        <div class="form-group date-group">
                            <label class="frm_llbs"><i class="fa-solid fa-calendar-days calendar-icon"></i></label>
                            <input type="text" autocomplete="off"
                                class="form-control form1_date form_padding readtrue date-input departure-datee"
                                name="checkin_date" id="datepicker3" placeholder="dd/mm/yyyy"
                                value="{{old('checkin_date')}}" readonly>
                            @error('checkin_date')
                                <span class="error-message" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppD">
                        <div class="res_hh"> Check-out Date *</div>
                        <div class="form-group date-group">
                            <label class="frm_llbs"><i class="fa-solid fa-calendar-days calendar-icon"></i></label>
                            <input type="text" autocomplete="off"
                                class="form-control form1_date form_padding readtrue date-input return_dateee "
                                name="checkout_date" id="datepicker3" placeholder="dd/mm/yyyy"
                                value="{{old('checkout_date')}}" readonly>
                            @error('checkout_date')
                                <span class="error-message" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ffrms_ppd">
                        <div class="res_hh">Select Room *</div>
                        <div class="form-group ddtpst">
                            <label class="frm_llbs phon"><i class="fa-solid fa-hotel"></i></label>
                            <select class="form-control ipt1" name="room_preference" placeholder="First Class">
                                <option value="" {{ old('room_preference') == '' ? 'selected' : '' }}>Choose a
                                    Room
                                </option>
                                <option value="connecting"
                                    {{ old('room_preference') == 'connecting' ? 'selected' : '' }}>Connecting</option>
                                <option value="adjoining"
                                    {{ old('room_preference') == 'adjoining' ? 'selected' : '' }}>Adjoining</option>
                                <option value="adjacent" {{ old('room_preference') == 'adjacent' ? 'selected' : '' }}>
                                    Adjacent</option>
                            </select>
                            @error('room_preference')
                                <span class="error-message" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-8 ffrms_ppd mb-4" style="text-align:center;">
                        <button type="submit" name="submitForm" class="btn_book">Book Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
