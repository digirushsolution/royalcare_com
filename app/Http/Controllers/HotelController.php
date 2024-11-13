<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // Display a listing of hotels
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotel_booking.index', compact('hotels'));
    }

    // Show the form for editing the specified hotel
    public function edit(Hotel $hotel)
    {
        return view('admin.hotel_booking.edit', compact('hotel'));
    }

    // Update the specified hotel in storage
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'adults' => 'required|integer',
            'children' => 'nullable|integer',
            'checkin_date' => 'required|date',
            'checkout_date' => 'nullable|date',
            'room_preference' => 'nullable|string|max:255',
        ]);

        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel booking updated successfully.');
    }

    // Remove the specified hotel from storage
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel booking deleted successfully.');
    }
}
