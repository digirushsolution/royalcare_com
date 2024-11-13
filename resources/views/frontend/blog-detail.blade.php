@extends('layouts.app')
@section('image', $meta_img)
@section('heads')
<style>
    .blogs_hd_contents p {
        text-align: justify;
    }
    .blogs_hd_contents h3 {
        font-size: 22px;
        font-weight: 600;
    }
    .blogs_hd_contents h2 {
        font-size: 24px;
        font-weight: 600;
    }
    section.blogs_content_sec {
        padding: 80px 0;
    }
    .blogs_hd_contents {
        margin-top: 34px;
    }
    .blogs_main_hd {
        border: 2px solid #0000001f;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 #00000045;
    }
</style>
@endsection
@section('content')
<section class="about_us_banner">
    <div class="container">
        <h1 class="aboutus_banner text-center c">
            {{$blog->title}}
        </h1>
    </div>
</section>
<section class="blogs_content_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="blogs_main_hd">
                    <div class="blogs_hd_img_">
                        <img style="max-width: 100%; height: 100%;" src="{{custom_asset($blog->banner)}}" alt="image">
                    </div>
                    <div class="blogs_hd_contents">
                        <p>{!!$blog->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection