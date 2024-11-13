@extends('layouts.app')
@section('heads')
<style>
    a.nav-link {
        color: color: rgba(0, 0, 0, .55);
    }
    .nav-pills .nav-link {
        background-color: #007bff;
        color: white;
        border-radius: 25px;
        padding: 10px 20px;
        margin: 5px;
        transition: background-color 0.3s;
    }
    .nav-pills .nav-link:hover {
        background-color: #0056b3;
    }
    .nav-pills .nav-link.active {
        background-color: #0056b3;
    }
    .blog-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s;
        background-color: #f8f9fa;
    }
    .blog-card:hover {
        transform: scale(1.05);
    }
    .card-body {
        padding: 15px;
    }
    .card-title {
        font-size: 1.2rem;
        color: #343a40;
    }
    .card-text {
        font-size: 0.9rem;
        color: #6c757d;
    }
    a.read_more_btn {
        background-color: #0d6efd;
        color: white;
        padding: 14px;
        width: 30%;
        text-decoration: none;
    }
</style>
@endsection
@section('content')
<section class="about_us_banner">
    <div class="container">
        <h1 class="aboutus_banner text-center">Blog</h1>
    </div>
</section>

<section class="get_in_touch_contact  mt-5">
    <div class="container">
        <div class="getintouch_left text-center">
            <h2>Travel Tips, Guides, and Inspiration from Royal Care Travels Blog</h2>
            <p>Welcome to the Royal Care Travels blog! Here, we share expert travel tips, destination guides and the latest updates on international travel, vacation packages and more. Whether you’re planning your next getaway or seeking inspiration, our blog has everything you need for a smooth and memorable journey.
            </p>
        </div>
    </div>
</section>

<section class="nav_tab_blogs">
    <div class="container">
        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->input('type') ? '' : 'active' }}"
                    href="{{ route('our-blog') }}">All</a>
            </li>
            @foreach($categories as $category)
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ request()->input('type') === $category->slug ? 'active' : '' }}"
                        href="{{ route('our-blog', ['type' => $category->slug]) }}">
                        {{ $category->category_name }}
                    </a>
                </li>
            @endforeach
            <form class="form-inline" style="height:45px;margin-top:4px;" action="{{ route('our-blog') }}" method="GET">
                <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search"
                    value="{{ request()->input('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card blog-card p-3">
                        <a href="{{ url('blogs/' . $blog->slug) }}">
                            <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->banner_alt }}"
                                class="card-img-top img-fluid">
                        </a>
                        <div class="card-body">
                            <a href="{{ url('blogs/' . $blog->slug) }}" style="text-decoration:none;">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                            </a>
                            <p class="card-text">{{ $blog->meta_description }}</p>
                        </div>
                        <a href="{{ url('blogs/' . $blog->slug) }}" class="read_more_btn">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection