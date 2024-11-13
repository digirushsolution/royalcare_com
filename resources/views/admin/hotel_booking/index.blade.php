@extends('layouts.admin.app')
<style>
    .dataTables_wrapper .dataTables_length select,
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 6px 12px;
        background-color: #f8f9fa;
        color: #495057;
        margin-left: 5px;
        font-size: 0.875rem;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.375rem 0.75rem;
        border-radius: 4px;
        border: 1px solid #007bff;
        margin: 0 2px;
        color: #007bff;
        font-size: 0.875rem;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #007bff;
        color: #fff;
    }

    table.table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table.table th, table.table td {
        text-align: left;
        padding: 12px;
        border: 1px solid #ddd;
        font-size: 0.875rem;
    }

    table.table th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    table.table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        margin-right: 5px;
        font-size: 0.875rem;
    }

    .dataTables_wrapper .dataTables_length {
        margin-bottom: 1rem;
    }
</style>

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <h4>Hotel Bookings</h4>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="hotel_table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Room Preference</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hotels as $index => $hotel)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $hotel->email }}</td>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->phone }}</td>
                        <td>{{ $hotel->adults }}</td>
                        <td>{{ $hotel->children }}</td>
                        <td>{{ $hotel->checkin_date }}</td>
                        <td>{{ $hotel->checkout_date }}</td>
                        <td>{{ $hotel->room_preference }}</td>
                        <td>
                            <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
<!-- jQuery JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- DataTables Bootstrap CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- DataTables Bootstrap JS -->
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#hotel_table').DataTable({
            "scrollY": "400px", 
            "scrollX": true, 
            "lengthMenu": [10, 25, 50, 100],
            "responsive": true,
            "language": {
                "search": "Filter records:",
                "lengthMenu": "Show _MENU_ entries"
            }
        });
    });
</script>
@endsection
