@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <h4>Edit Hotel Booking</h4>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ old('email', $hotel->email) }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $hotel->name) }}"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ old('phone', $hotel->phone) }}" required>
            </div>
            <div class="form-group">
                <label for="adults">Adults</label>
                <input type="number" name="adults" id="adults" class="form-control"
                    value="{{ old('adults', $hotel->adults) }}" required>
            </div>
            <div class="form-group">
                <label for="children">Children</label>
                <input type="number" name="children" id="children" class="form-control"
                    value="{{ old('children', $hotel->children) }}" required>
            </div>
            <div class="form-group">
                <label for="checkin_date">Check-in Date</label>
                <input type="date" name="checkin_date" id="checkin_date" class="form-control"
                    value="{{ \Carbon\Carbon::parse($hotel->checkin_date)->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="checkout_date">Check-out Date</label>
                <input type="date" name="checkout_date" id="checkout_date" class="form-control"
                    value="{{ \Carbon\Carbon::parse($hotel->checkout_date)->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="room_preference">Room Preference</label>
                <input type="text" name="room_preference" id="room_preference" class="form-control"
                    value="{{ old('room_preference', $hotel->room_preference) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin_date').setAttribute('min', today);
        document.getElementById('checkout_date').setAttribute('min', today);
    });
</script>
@endsection