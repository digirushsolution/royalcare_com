@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Newsletter List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsletters as $newsletter)
                            <tr>
                                <td>{{ $newsletter->email }}</td>
                                <td>
                                    <a href="{{ route('newsletter.edit', $newsletter->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('newsletter.destroy', $newsletter->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
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