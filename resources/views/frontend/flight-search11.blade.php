@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviationstack Flight Search</title>
</head>
<body>
    <h1>Flight Search Form</h1>
    <form id="flightSearchForm" method="GET" action="/search-flights">
        <label for="access_key">API Access Key (required):</label><br>
        <input type="text" id="access_key" name="access_key" required><br><br>
        <label for="flight_date">Flight Date (YYYY-MM-DD):</label><br>
        <input type="date" id="flight_date" name="flight_date"><br><br>
        <label for="dep_iata">Departure IATA Code:</label><br>
        <input type="text" id="dep_iata" name="dep_iata" placeholder="e.g. MAD"><br><br>
        <label for="arr_iata">Arrival IATA Code:</label><br>
        <input type="text" id="arr_iata" name="arr_iata" placeholder="e.g. JFK"><br><br>
        <label for="flight_status">Flight Status:</label><br>
        <select id="flight_status" name="flight_status">
            <option value="">-- Select Status --</option>
            <option value="scheduled">Scheduled</option>
            <option value="active">Active</option>
            <option value="landed">Landed</option>
            <option value="cancelled">Cancelled</option>
            <option value="incident">Incident</option>
            <option value="diverted">Diverted</option>
        </select><br><br>
        <label for="limit">Limit (default 100):</label><br>
        <input type="number" id="limit" name="limit" value="100" min="1" max="1000"><br><br>
        <label for="offset">Offset:</label><br>
        <input type="number" id="offset" name="offset" value="0" min="0"><br><br>
        <label for="airline_name">Airline Name:</label><br>
        <input type="text" id="airline_name" name="airline_name"><br><br>
        <label for="flight_number">Flight Number:</label><br>
        <input type="text" id="flight_number" name="flight_number"><br><br>
        <input type="submit" value="Search Flights">
    </form>
</body>
</html>
@endsection