<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Newsletter;

class HomeController extends Controller
{
    //

    public function home(){

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_home']->value ?? '';
        $metatitle = $settings['title_home']->value ?? '';
        $metakeyword = $settings['keyword_home']->value ?? '';
        return view('home', compact('metaDescription', 'metatitle', 'metakeyword'));
    }

    public function dashboard(){
        return view("admin.dashboard");
    }

    public function flights(){

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_flights']->value ?? '';
        $metatitle = $settings['title_flights']->value ?? '';
        $metakeyword = $settings['keyword_flights']->value ?? '';
        return view('frontend.flights', compact('metaDescription', 'metatitle', 'metakeyword'));
    }
    
    
    public function car_rental(){
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_cars']->value ?? '';
        $metatitle = $settings['title_cars']->value ?? '';
        $metakeyword = $settings['keyword_cars']->value ?? '';
        return view("frontend.car_rental", compact('metaDescription', 'metatitle', 'metakeyword'));
    }

    public function hotel(){
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_hotels']->value ?? '';
        $metatitle = $settings['title_hotels']->value ?? '';
        $metakeyword = $settings['keyword_hotels']->value ?? '';
        return view("frontend.hotel", compact('metaDescription', 'metatitle' , 'metakeyword'));
    }

    public function packages(){
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_packages']->value ?? '';
        $metatitle = $settings['title_packages']->value ?? '';
        $metakeyword = $settings['keyword_packages']->value ?? '';
        return view('frontend.packages', compact('metaDescription', 'metatitle', 'metakeyword'));
    }
    
    public function about(){

        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_about']->value ?? '';
        $metatitle = $settings['title_about']->value ?? '';
        $metakeyword = $settings['keyword_about']->value ?? '';
        return view('frontend.about',compact('metaDescription', 'metatitle' , 'metakeyword'));
    }

    public function car_book_form(){
        return view("modal.car_booking");
    }

    public function terms(){
        return view("frontend.term_conditions_policy");
    }

    public function royal_care_form(){
        return view('frontend.royalcare_form');
    }

    public function getAirports()
    {
        $airports = Product::pluck('airport_code')->toArray(); 
        return response()->json($airports);
    }

    public function subscribe_form(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        return redirect()->route('flight.thankyou');
    }

}
