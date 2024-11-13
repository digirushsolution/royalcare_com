@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Flight Booking</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Flight Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('flights.update', $flight->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="origin" class="form-label">Origin</label>
                        <input type="text" class="form-control" id="origin" name="origin" value="{{ $flight->origin }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination"
                            value="{{ $flight->destination }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $flight->email }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $flight->phone }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" name="departure_date" class="form-control" id="departure_date"
                            value="{{ \Carbon\Carbon::parse($flight->departure_date)->format('Y-m-d') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="return_date" class="form-label">Return Date (optional)</label>
                        <input type="date" class="form-control" id="return_date" name="return_date"
                            value="{{ $flight->return_date ? \Carbon\Carbon::parse($flight->return_date)->format('Y-m-d') : '' }}">
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
        document.getElementById('departure_date').setAttribute('min', today);
        document.getElementById('return_date').setAttribute('min', today);
    });
</script>
@endsection