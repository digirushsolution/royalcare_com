<section class="footer_form">
    <div class="container">
        <div class="tdrp_serch">
            <div class="tab-pane in active" id="tab1default">
                <div class="form_bx">
                    <form id="form_book3">
                        @csrf
                        <div class="row fm_ln1">
                            <div class="rsts ffrms_ppd airportwidthrespo">
                                <input type="hidden" name="form_type" value="car_rental_form">
                                <input type="hidden" name="total_adults" class="adults-count" value="1">
                                <input type="hidden" name="total_children" class="children-count" value="0">
                                <input type="hidden" name="infants" class="infants-count" value="0">
                                <div class="res_hh">Picking Up Location</div>
                                <div class="form-group">
                                    <label class="frm_llbs"><i class="fa-solid fa-location-dot"></i></label>
                                    <input type="text" class="form-control location-fld" name="picking_up"
                                        placeholder="Picking Up Location" required id="Location"
                                        value="{{ old('picking_up') }}">
                                </div>
                            </div>
                            <div class="rsts ffrms_ppD airportwidthrespo">
                                <div class="res_hh">Dropping Off Location</div>
                                <div class="form-group">
                                    <label class="frm_llbs"><i class="fa-solid fa-location-dot"></i></label>
                                    <input type="text" class="form-control location-fld" name="dropping_off" required
                                        placeholder="Dropping Off Location" id="dropping-l"
                                        value="{{ old('dropping_off') }}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 ffrms_ppd">
                                <div class="res_hh"> Departure Date </div>
                                <div class="form-group date-group">
                                    <label class="frm_llbs"><i
                                            class="fa-solid fa-calendar-days calendar-icon"></i></label>
                                    <input type="text" autocomplete="off"
                                        class="form-control form1_date form_padding readtrue date-input departure-datee"
                                        name="checkin_date" id="departure_date1" placeholder="dd/mm/yyyy"
                                        value="{{ old('checkin_date') }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 ffrms_ppD">
                                <div class="res_hh"> Return Date </div>
                                <div class="form-group date-group">
                                    <label class="frm_llbs"><i
                                            class="fa-solid fa-calendar-days calendar-icon"></i></label>
                                    <input type="text" autocomplete="off"
                                        class="form-control form1_date form_padding readtrue date-input return_dateee"
                                        name="checkout_date" id="datepicker3" placeholder="dd/mm/yyyy"
                                        value="{{ old('checkout_date') }}" readonly>
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
                                                            class=" text-center add_num passengers_count adult"
                                                            value="1">
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
                                                            class=" text-center add_num passengers_count child"
                                                            value="0">
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
                            <div class="col-lg-3 col-md-6 ffrms_ppd">
                                <div class="res_hh"> Phone </div>
                                <div class="form-group new">
                                    <select id="country_code" class="ud_s">
                                        <option value="+1">+1 (USA)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+91">+91 (India)</option>
                                    </select>
                                    <label class="frm_llbs"></label>
                                    <input type="tel" id="phone" placeholder="Enter your Number"
                                        class="form-control p_border" name="phone" minlength="10"
                                        maxlength="10"oninput="validatePhone(this);" value="{{ old('phone') }}"
                                        required>
                                </div>
                                <div class="form_valid_imp_numbererror" style="color:red; display:none;">Phone number
                                    must be exactly 10 digits.</div>
                            </div>
                            <div class="col-lg-3 col-md-6 ffrms_ppd">
                                <div class="res_hh"> Email</div>
                                <div class="form-group">
                                    <label class="frm_llbs"><i class="fa-solid fa-envelope"></i></label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email" id="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-8 ffrms_ppD mb-4" style="text-align:center;">
                                <button type="submit" name="submitForm"><i class="fa fa-search"
                                        class="popupbotpadding"></i> Search </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
