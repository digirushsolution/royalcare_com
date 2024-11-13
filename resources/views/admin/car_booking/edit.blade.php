@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Car Booking</h5>
                <form action="{{ route('cars.update', $car->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="picking_up" class="form-label">Picking Up</label>
                        <input type="text" name="picking_up" class="form-control" value="{{ $car->picking_up }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="dropping_off" class="form-label">Dropping Off</label>
                        <input type="text" name="dropping_off" class="form-control" value="{{ $car->dropping_off }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $car->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $car->phone }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkin_date" class="form-label">Checkin Date</label>
                        <input type="date" name="checkin_date" class="form-control" id="checkin_date"
                            value="{{ \Carbon\Carbon::parse($car->checkin_date)->format('Y-m-d') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkout_date" class="form-label">Checkout Date</label>
                        <input type="date" name="checkout_date" class="form-control" id="checkout_date"
                            value="{{ \Carbon\Carbon::parse($car->checkout_date)->format('Y-m-d') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="car_preference" class="form-label">Car Preference</label>
                        <input type="text" name="car_preference" class="form-control" value="{{ $car->car_preference }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
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