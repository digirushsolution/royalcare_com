@extends('layouts.admin.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Email</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('newsletter.update', $newsletter->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $newsletter->email) }}" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
