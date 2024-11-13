@extends('layouts.admin.app')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<style>
    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #aaa;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        color: inherit;
        padding: 5px 19px !important;
    }
</style>
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blogs</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i
                                    class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('blog.create')}}"><button type="button" class="btn btn-primary">Blog
                            Create</button></a>
                </div>
            </div>
        </div>
        <h6 class="mb-0 text-uppercase">Blog List</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Blog</h5>
                </div>
                <div class="table-responsive mt-3">
                    <table id="flight_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Short Description</th>
                                <th>Status</th>
                                <th>Created date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                                    <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                                                        <p class="mb-0">{{ $blog->title }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>



                                                                @if ($blog->category != null)
                                                                    {{ $blog->category->category_name }}
                                                                @else
                                                                    --
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $words = explode(' ', $blog->short_description);
                                                                    $displayText = implode(' ', array_slice($words, 0, 20));
                                                                    $isLongText = count($words) > 20;
                                                                @endphp
                                                                <div class="text-wrap" style="min-width: 200px; max-width: 300px;">
                                                                    <p>{{ $displayText }}{{ $isLongText ? '...' : '' }}</p>
                                                                </div>
                                                            </td>
                                                            <td>{{ $blog->status }}</td>
                                                            <td>{{ $blog->created_at }}</td>
                                                            <td>
                                                                <div class="table-actions d-flex align-items-center gap-2 fs-6">
                                                                    <a href="{{ route('blog.edit', $blog->id) }}" target="_blank"
                                                                        class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                        title="Edit"><i class="lni lni-pencil"></i></a>

                                                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                                        class="delete-form" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="text-danger border-0 bg-transparent"
                                                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                                            <i class="lni lni-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="flight_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <div class="">
                                            <p class="mb-0">{{ $blog->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($blog->category != null)
                                    {{ $blog->category->category_name }}
                                    @else
                                    --
                                    @endif
                                </td>
                                <td>{{ $blog->status }}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-2 fs-6">
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary mb-3"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Edit</a>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                            class="delete-form" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
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