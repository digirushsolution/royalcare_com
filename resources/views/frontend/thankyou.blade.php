@extends('layouts.app')
@section('heads')
    <meta name="robots" content="index">
@endsection
@section('content')
    <div class="main_pagesbn"
        style="background: url({{ custom_asset('assets/image/abouts_bn.jpg') }}); padding: 80px 0; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hpls_heaps">
                        <h1> Thank You </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="thnk-yu">
                <h2>Thank you for Contacting us.</h2>
                <img src="{{ custom_asset('assets/image/trian.gif') }}" alt="image">
                <p>One of Our Travel Expert will contact you soon, or you can reach out immediately by Dialing <br>
                    <a href="tel: +1-88839-30673" class="blink"> Click Here for 20% Discount on Booking: +1-88839-30673
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <link rel="stylesheet" href="{{ custom_asset('assets/css/dsnp-pullu.css') }}">
    <script>
        document.documentElement.classList.add('cooke');
        var showMsg = localStorage.getItem('showMsg');
        if (showMsg == 'false') {
            $('.cookies-stripdiv').hide();
        }
        $('.accept').on('click', function() {
            $('.cookies-stripdiv').fadeOut('slow');
            localStorage.setItem('showMsg', 'false');
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myModal_44").modal("show");

            $("#myBtn").click(function() {
                $("#myModal_44").modal("hide");
            });
        });
    </script>
@endsection
