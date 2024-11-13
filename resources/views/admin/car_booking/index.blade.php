@extends('layouts.admin.app')
<style>
	/* General DataTable Styles */
	.dataTables_wrapper .dataTables_length select {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		color: inherit;
		padding: 5px 19px !important;
	}

	/* Table Style Adjustments */
	.table-striped.table-bordered {
		border-collapse: separate;
		border-spacing: 0;
		border: 1px solid #ddd;
	}

	.table-striped.table-bordered th,
	.table-striped.table-bordered td {
		padding: 12px;
		text-align: left;
		border-color: #ddd;
	}

	.table-striped.table-bordered thead {
		background-color: #f8f9fa;
	}

	.table-striped.table-bordered tbody tr:hover {
		background-color: #f1f1f1;
	}

	/* Action Button Styles */
	.btn-primary, .btn-danger {
		margin-right: 5px;
		padding: 5px 12px;
		font-size: 14px;
		border-radius: 4px;
	}

	.btn-primary {
		background-color: #007bff;
		border: none;
	}

	.btn-danger {
		background-color: #dc3545;
		border: none;
	}

	.btn-primary:hover {
		background-color: #0056b3;
	}

	.btn-danger:hover {
		background-color: #c82333;
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
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Car Booking</li>
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
					<table id="car_table" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Picking Up</th>
								<th>Dropping Off</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Check-in Date</th>
								<th>Check-out Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($cars as $key => $car)
							<tr>
								<td>{{ $key + 1 }}</td>
								<td>{{ $car->picking_up }}</td>
								<td>{{ $car->dropping_off }}</td>
								<td>{{ $car->email }}</td>
								<td>{{ $car->phone }}</td>
								<td>{{ $car->checkin_date }}</td>
								<td>{{ $car->checkout_date }}</td>
								<td>
									<a href="{{ route('cars.edit', $car->id) }}">
										<button type="button" class="btn btn-primary">Edit</button>
									</a>
									<form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline-block;">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</button>
									</form>
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
<link href="{{ custom_asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<script src="{{ custom_asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ custom_asset('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
	$(document).ready(function () {
		$('#car_table').DataTable();
	});
</script>
@endsection
