@extends('layouts.app')
@section('content')
<h1>Flight Results</h1>
@if(isset($flights['data']) && is_array($flights['data']))
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights['data'] as $flight)
                <tr>
                    <td>{{ $flight['origin'] }}</td>
                    <td>{{ $flight['destination'] }}</td>
                    <td>{{ $flight['departureDate'] }}</td>
                    <td>{{ $flight['returnDate'] ?? 'N/A' }}</td>
                    <td>
                        @if(isset($flight['price']['total']))
                            {{ $flight['price']['total'] }} {{ $flights['dictionaries']['currencies']['EUR'] ?? 'Currency' }}
                        @else
                            Price not available
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No flight data available.</p>
@endif
@if(isset($flights['dictionaries']['locations']) && is_array($flights['dictionaries']['locations']))
    <h2>Locations</h2>
    <ul>
        @foreach($flights['dictionaries']['locations'] as $code => $location)
            <li>{{ $code }}: {{ implode(', ', $location) }}</li>
        @endforeach
    </ul>
@endif
@endsection