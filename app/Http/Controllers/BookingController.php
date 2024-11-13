<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Upload;
use App\Models\Car;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class BookingController extends Controller
{

    public function index(){

        $cars = Car::orderBy('id','desc')->get();
        return view("admin.car_booking.index", compact('cars'));
    }

    public function flight_booking_list(){

        $flights = Flight::orderBy('id','desc')->get();
        return view("admin.flight_booking.list", compact('flights'));
    }

    public function store(Request $request) {
        $car = new Car();
        $car->picking_up = $request->picking_up;
        $car->form_type = $request->form_type;
        $car->dropping_off = $request->dropping_off;
        $car->email = $request->email;
        $car->phone = $request->phone;
        $car->total_adults = $request->total_adults;
        $car->total_children = $request->total_children;
        $car->checkin_date = $request->checkin_date;
        $car->checkout_date = $request->checkout_date;
        $car->car_preference = $request->car_preference; 
        $car->save();
    
        return redirect()->route('flight.thankyou')->with('successful', 'Car booking request has been successfully submitted!');
    }
 
    public function thankyou(Request $request){
        return view("frontend.thankyou");
    }

    public function flight_store(Request $request)
    {
        $car = new Flight;
        $car->origin = $request->origin;
        $car->form_type = $request->form_type;
        $car->destination = $request->destination;
        $car->email = $request->email;
        $car->phone = $request->phone;
        $car->adults = $request->adults;
        $car->children = $request->children;
        $car->infant = $request->infants;
        $car->departure_date = $request->departure_date;
        $car->return_date = $request->return_date;
        $car->trip_type = $request->tripType;
        $car->trip_class = $request->classType;
        $car->save();

        return redirect()->route('flight.thankyou')->with('successful', 'Flight booking request has been successfully submitted!');
    }

 
    
    public function flight_store_package(Request $request)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'phone' => 'required',
        ]);
        $car = new Flight;
        $car->origin = $request->origin;
        $car->destination = $request->destination;
        $car->email = $request->email;
        $car->phone = $request->phone;
        $car->adults = $request->adt;
        $car->children = $request->chd;
        $car->infant = $request->inf;
        $car->departure_date = $request->departure_date;
        $car->return_date = $request->return_date;
        $car->trip_type = $request->tripType;
        $car->trip_class = $request->classType;
        $car->save();

        return redirect()->route('flight.thankyou')->with('successful','Flight booking request has been successfully submitted!');
    }


    public function hotel_store(Request $request){
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->email = $request->email;
        $hotel->phone = $request->phone;
        $hotel->adults = $request->adults;
        $hotel->children = $request->children;
        $hotel->infants = $request->infants;
        $hotel->checkin_date = $request->checkin_date;
        $hotel->checkout_date = $request->checkout_date;
        $hotel->room_preference = $request->room_preference;
        $hotel->form_type = $request->form_type;
        $hotel->save();
        return redirect()->route('hotel.thankyou')->with('successful','Hotel booking request has been successfully submitted!!');

        return back();  
    }

    public function editflight($id) {
        $flight = Flight::findOrFail($id); 
        return view('admin.flight_booking.edit', compact('flight')); // Return the edit view
    }

    public function updateflight(Request $request, $id)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
        ]);
    
        $flight = Flight::findOrFail($id);
        $flight->update($request->only(['origin', 'destination', 'email', 'phone', 'departure_date', 'return_date']));
        return redirect()->route('flight.booking_list')->with('success', 'Flight booking updated successfully.');
    }

    public function destroyflight($id) {
        $flight = Flight::findOrFail($id);
        $flight->delete();

        return redirect()->route('flight.booking_list')->with('success', 'Flight booking deleted successfully.');
    }

    public function editcars($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.car_booking.edit', compact('car'));
    }

    public function updatecars(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        
        $request->validate([
            'picking_up' => 'required',
            'dropping_off' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
        ]);

        $car->update($request->all());

        return redirect()->route('car.index')->with('success', 'Car booking updated successfully!');
    }

    public function destroycars($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('car.index')->with('success', 'Car booking deleted successfully!');
    }

    public function showForm()
    {
        $airports = Product::all(); 
        return view('frontend.flight-search', compact('airports')); 
    }

    public function searchFlights(Request $request)
    {
        \Log::info('Request Data:', $request->all());
        $request->validate([
            'originLocationCode' => 'required|max:3',
            'destinationLocationCode' => 'required|max:3',
            'departureDate' => 'required|date',
        ]);

        $origin = strtoupper($request->originLocationCode);
        $destination = strtoupper($request->destinationLocationCode);
        $departureDate = Carbon::createFromFormat('Y-m-d', $request->departureDate)->format('Y-m-d');
        $adults = $request->adults;
        $nonStop ='false';
        $maxResults = $request->max;
        $accessToken = $this->getAccessToken(); 
        \Log::info('Flight Search Request Data:', [
            'origin' => $origin,
            'destination' => $destination,
            'departureDate' => $departureDate,
            'adults' => $adults,
            'nonStop' => $nonStop,
            'maxResults' => $maxResults,
        ]);

        $response = Http::withToken($accessToken)->get("https://test.api.amadeus.com/v2/shopping/flight-offers", [
            'originLocationCode' => $origin,
            'destinationLocationCode' => $destination,
            'departureDate' => $departureDate,
            'adults' => $adults,
            'nonStop' => $nonStop,
            'max' => $maxResults,
        ]);

        \Log::info('API Response Status:', ['status' => $response->status()]);
        \Log::info('API Response Data:', [$response->json()]);

        if ($response->successful()) {
            $flights = $response->json();
            return view('frontend.flight-search', compact('flights'));
        }

        \Log::error('API Response Error:', $response->json());
        return back()->withErrors(['error' => 'No flight offers available.']);
    }

    // Method to get the access token
    private function getAccessToken()
    {
        $clientId = '68Y1HhiowzxcD0rGgf7dXhQS0fqZRGmN';
        $clientSecret = 'GK2pen7CxG3npSkj';

        // API call to retrieve the access token
        $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        \Log::error('Failed to retrieve access token: ', [$response->json()]);
        throw new \Exception('Unable to retrieve access token.');
    }

    public function thankyouhotelpage(Request $request){
        return view("frontend.thankyouhotelpage");
    }
}