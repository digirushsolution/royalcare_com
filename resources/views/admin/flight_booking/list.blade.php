@extends('layouts.admin.app')

<style>
	/* General DataTables styling */
	.dataTables_wrapper .dataTables_length select {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		color: inherit;
		padding: 5px 19px !important;
	}

	/* Table styling */
	#flight_table {
		border-collapse: collapse;
		width: 100%;
	}

	/* #flight_table thead th {
		background-color: #007bff;
		color: white;
		text-align: center;
		padding: 10px;
		border-bottom: 2px solid #ddd;
	} */

	#flight_table tbody td {
		padding: 10px;
		text-align: center;
		border-bottom: 1px solid #f0f0f0;
	}

	/* Button styling */
	.btn-warning {
		color: #fff;
		background-color: #f0ad4e;
		border-color: #f0ad4e;
	}

	.btn-danger {
		color: #fff;
		background-color: #d9534f;
		border-color: #d9534f;
	}

	/* Add hover effects */
	#flight_table tbody tr:hover {
		background-color: #f9f9f9;
		cursor: pointer;
	}
</style>

@section('content')
<div class="page-wrapper">
	<div class="page-content">
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Booking</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i
									class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Flight Booking</li>
					</ol>
				</nav>
			</div>
		</div>
		<h6 class="mb-0 text-uppercase">Booking List</h6>
		<hr />
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{Session::get('success')}}
		</div>
		@endif
		@if(Session::has('errors'))
		<div class="alert alert-danger">
			{{Session::get('errors')}}
		</div>
		@endif
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="flight_table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Sr No.</th>
								<th>Origin</th>
								<th>Destination</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Departure Date</th>
								<th>Return Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($flights as $key=>$flight)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$flight->origin}}</td>
								<td>{{$flight->destination}}</td>
								<td>{{$flight->email}}</td>
								<td>{{$flight->phone}}</td>
								<td>{{$flight->departure_date}}</td>
								<td>{{$flight->return_date}}</td>
								<td>
									<!-- <a href="{{ route('flights.edit', $flight->id) }}"><button type="button"
											class="btn btn-warning">Edit</button></a> -->

											<a href="{{ route('flights.edit', $flight->id) }}" target="_blank"
                                                                        class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                        title="Edit"><i class="lni lni-pencil"></i></a>


																		<form action="{{route('flights.destroy',$flight->id)}}" method="POST"
                                                                        class="delete-form" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="text-danger border-0 bg-transparent"
                                                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                                            <i class="lni lni-trash"></i>
                                                                        </button>
                                                                    </form>

									<!-- <form action="{{ route('flights.destroy', $flight->id) }}" method="POST"
										style="display:inline-block;">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"
											onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
									</form> -->
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<link href="{{custom_asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<script src="{{custom_asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{custom_asset('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
	$(document).ready(function () {
		$('#flight_table').DataTable();
	});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-form').forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

@endsection
