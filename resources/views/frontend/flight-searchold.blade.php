@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Flight Search</h1>
    <form action="{{ route('flight.search.submit') }}" method="POST">
        @csrf
        <label for="originLocationCode">Origin (IATA code):</label>
        <select id="originLocationCode" name="originLocationCode" required>
            <option value="">Select an airport</option>
            @foreach ($airports as $airport)
                <option value="{{ $airport->airport_code }}">{{ $airport->airport_code }}</option>
            @endforeach
        </select>
        <label for="destinationLocationCode">Destination (IATA code):</label>
        <select id="destinationLocationCode" name="destinationLocationCode" required>
            <option value="">Select an airport</option>
            @foreach ($airports as $airport)
                <option value="{{ $airport->airport_code }}">{{ $airport->airport_code }}</option>
            @endforeach
        </select>
        <label for="departureDate">Departure Date:</label>
        <input type="date" id="departureDate" name="departureDate" required>
        <label for="adults">Number of Adults:</label>
        <input type="number" id="adults" name="adults" min="1" required>
        <label for="nonStop">Non-stop Flights:</label>
        <select id="nonStop" name="nonStop">
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
        <label for="max">Max Results:</label>
        <input type="number" id="max" name="max" value="10" required>
        <button type="submit">Search Flights</button>
    </form>
    @if (isset($flights) && !empty($flights['data']))
        <h2>Flight</h2>
        <table>
            <thead>
                <tr>
                    <th>Flight ID</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Duration</th>
                    <th>Price (EUR)</th>
                    <th>Currency</th>
                    <th>Airline</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights['data'] as $flight)
                    @foreach ($flight['itineraries'] as $itinerary)
                        @foreach ($itinerary['segments'] as $segment)
                            <tr>
                                <td>{{ $flight['id'] }}</td>
                                <td>{{ $segment['departure']['iataCode'] }} ({{ $segment['departure']['at'] }})</td>
                                <td>{{ $segment['arrival']['iataCode'] }} ({{ $segment['arrival']['at'] }})</td>
                                <td>{{ $itinerary['duration'] }}</td>
                                <td>{{ $flight['price']['total'] }}</td>
                                <td>{{ $flight['price']['currency'] }}</td>
                                <td>{{ implode(', ', $flight['validatingAirlineCodes']) }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @else
        <p>No flight offers available. Please fill out the search form and try again.</p>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#originLocationCode, #destinationLocationCode').select2({
                placeholder: 'Select an airport',
                allowClear: true
            });
        });
        // Disable previous dates for the departure date input
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departureDate').setAttribute('min', today);
        });
    </script>
</body>
</html>
@endsection