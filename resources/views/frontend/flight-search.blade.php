@extends('layouts.app')
@section('content')

    <h1>Flight Search</h1>
    <form action="{{ route('flight.search.submit') }}" method="POST">
        @csrf
        <label for="originLocationCode">Origin (IATA code):</label>
        <input type="text" id="originLocationCode" name="originLocationCode" maxlength="3"
            oninput="this.value = this.value.toUpperCase()" required>
        <label for="destinationLocationCode">Destination (IATA code):</label>
        <input type="text" id="destinationLocationCode" name="destinationLocationCode" maxlength="3" required>
        <label for="departureDate">Departure Date:</label>
        <input type="date" id="departureDate" name="departureDate" required>
        <p id="formattedDate"></p>
        <label for="adults">Number of Adults:</label>
        <input type="number" id="adults" name="adults" min="1" required>
        <label for="max">Max Results:</label>
        <input type="number" id="max" name="max" value="10" required>
        <button type="submit">Search Flights</button>
    </form>
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
                    <!-- <th>Number of Stops</th> -->
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
                                <!-- <td>{{ $segment['numberOfStops'] }}</td> -->
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
    <script>
        // Disable previous dates for the departure date input
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departureDate').setAttribute('min', today);
        });
    </script>
    <script>
        // Display the selected date in a different format
        document.getElementById('departureDate').addEventListener('change', function () {
            const dateValue = this.value; // Get the value in YYYY-MM-DD format
            const dateParts = dateValue.split('-'); // Split into parts [YYYY, MM, DD]
            if (dateParts.length === 3) {
                const formattedDate = `${dateParts[0]}-${dateParts[1]}-${dateParts[2]}`; // You can change this to format differently if needed
                document.getElementById('formattedDate').innerText = `Selected Date: ${formattedDate}`;
            }
        });
        // Disable previous dates for the departure date input
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departureDate').setAttribute('min', today);
        });
    </script>

@endsection