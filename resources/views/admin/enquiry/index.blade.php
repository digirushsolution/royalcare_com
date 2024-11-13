@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Contact List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone_number }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', $contact->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
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