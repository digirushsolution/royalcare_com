@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Contact</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $contact->first_name) }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $contact->email) }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control"
                                value="{{ old('phone', $contact->phone_number) }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control"
                                value="{{ old('subject', $contact->subject) }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" rows="4"
                                required>{{ old('message', $contact->message) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection