<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ custom_asset('assets/img/logo_f.png') }}" type="image/png" />
	<link href="{{ custom_asset('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ custom_asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
		rel="stylesheet" />
	<link href="{{ custom_asset('assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ custom_asset('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ custom_asset('assets/admin/js/pace.min.js') }}"></script>
	<link href="{{ custom_asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ custom_asset('assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ custom_asset('assets/admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ custom_asset('assets/admin/css/icons.css') }}" rel="stylesheet">
	<title>Royal Care Travels | Online Flight, Hotels, Rental Cars Booking site</title>
</head>
<body class="">
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="{{custom_asset('assets/img/royalcare-logo.jpg')}}" width="135px"
											alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Royal Care Travels</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action='{{ route("login") }}' method="post">
											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control"
													id="inputEmailAddress" placeholder="jhon@example.com" required>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password"
														class="form-control border-end-0" id="inputChoosePassword"
														placeholder="Enter Password"> <a href="javascript:;"
														class="input-group-text bg-transparent"><i
															class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked">
													<label class="form-check-label"
														for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end"> <a href="#">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											@if(Session::has('errors'))
												<div class="alert alert-danger">
													{{-- Session::get('errors') --}}
													@php
            $errorMessages = json_decode(Session::get('errors'), true);
        @endphp
        
        @if(isset($errorMessages['email']))
            {{ $errorMessages['email'][0] }}
        @endif
													
												</div>
											@endif
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="#">Sign up
															here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
										<hr />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ custom_asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ custom_asset('assets/admin/js/jquery.min.js')}}"></script>
	<script src="{{ custom_asset('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ custom_asset('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ custom_asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<script src="{{ custom_asset('assets/admin/js/app.js')}}"></script>
</body>
</html>