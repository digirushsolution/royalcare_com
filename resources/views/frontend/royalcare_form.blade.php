@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('flight.storebookings') }}" method="POST" id="form_book">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="origin">From Airport (IATA Code)</label>
                    <input type="text" required class="form-control" name="origin" id="origin"
                        placeholder="E.g., MAD (Madrid)">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="destination">To Airport (IATA Code)</label>
                    <input type="text" required class="form-control" name="destination" id="destination"
                        placeholder="E.g., JFK (New York)">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="departureDate">Departure Date</label>
                    <input type="date" required class="form-control" name="departureDate" id="departureDate">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="returnDate">Return Date</label>
                    <input type="date" class="form-control" name="returnDate" id="returnDate">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Trip Type</label><br>
                    <label><input type="radio" name="oneWay" value="false" checked> Round Trip</label>
                    <label><input type="radio" name="oneWay" value="true"> One Way</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="duration">Duration (in days)</label>
                    <input type="number" class="form-control" name="duration" id="duration" placeholder="E.g., 7">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="maxPrice">Maximum Price</label>
                    <input type="number" class="form-control" name="maxPrice" id="maxPrice" placeholder="E.g., 1000">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="viewBy">View By</label>
                    <select class="form-control" name="viewBy" id="viewBy">
                        <option value="DATE">Date</option>
                        <option value="DESTINATION">Destination</option>
                        <option value="DURATION">Duration</option>
                        <option value="WEEK">Week</option>
                        <option value="COUNTRY">Country</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
</div>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        var airports = []; 
        $.ajax({
            url: 'getairportcode',
            method: 'GET',
            success: function (data) {
                console.log(data);
                airports = data; 
            },
            error: function (xhr) {
                console.error('Failed to fetch airport codes:', xhr);
            }
        });
        function autocompleteAirport(inputElement) {
            $(inputElement).autocomplete({
                source: function (request, response) {
                    var filteredAirports = airports.filter(function (code) {
                        return code.toLowerCase().indexOf(request.term.toLowerCase()) === 0;
                    });
                    response(filteredAirports);
                }
            });
        }
        autocompleteAirport("#origin");
        autocompleteAirport("#destination");
        $('#origin, #destination').on('keyup', function () {
            $(this).autocomplete("search", $(this).val());
        });
    });
</script>
@endsection