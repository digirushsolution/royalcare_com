		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{custom_asset('assets/img/royalcare-logo.jpg')}}" class="logo-text" alt="logo icon" width="100%">
				</div>
				{{-- <div>
					<h4 class="logo-text">RoyalCare Trave</h4>
				</div> --}}
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<ul class="metismenu" id="menu">

                <li>
					<a href="{{route('admin.dashboard')}}" >
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				
                {{-- <li class="menu-label">Blogs &amp; Category</li> --}}
                <li>
					<a href="javascript:;" class="has-arrow" >
						<div class="parent-icon"><i class="bx bx-cart"></i>
						</div>
						<div class="menu-title">Blogs</div>
					</a>
					<ul>
						<li> <a href="{{route('admin.blog')}}"><i class="bx bx-radio-circle"></i>All Blogs</a>
						</li>
						<li> <a href="{{route('blog-category')}}"><i class="bx bx-radio-circle"></i>Category</a>
						</li>
						
					</ul>
				</li>
				{{-- <li class="menu-label">Booking</li> --}}
				<li>
					<a href="{{route('flight.booking_list')}}">
						<div class="parent-icon"><i class='lni lni-plane'></i>
						</div>
						<div class="menu-title">Flights</div>
					</a>
				</li>
				<li>
					<a href="{{route('car.index')}}">
						<div class="parent-icon"><i class='lni lni-car-alt'></i>
						</div>
						<div class="menu-title">Cars</div>
					</a>
				</li>
				<li>
					<a href="{{route('hotels.index')}}">
						<div class="parent-icon"><i class='lni lni-restaurant'></i>
						</div>
						<div class="menu-title">Hotel</div>
					</a>
				</li>
				
				
				{{-- <li class="menu-label">UI Elements</li> --}}
				<li>
					<a href="{{route('setting.index')}}">
						<div class="parent-icon"><i class='bx bx-cog'></i>
						</div>
						<div class="menu-title">Setting</div>
					</a>
				</li>

				{{-- <li class="menu-label">Enquiry Form</li> --}}
				
				<li>
					<a href="{{route('contact.admin')}}">
					

						<div class="parent-icon"><i class='lni lni-customer'></i>
						</div>
						<div class="menu-title">Contact Management</div>
					</a>
				</li>

				{{-- <li class="menu-label">Newsletter Form</li> --}}
				<li>
					<a href="{{route('newsletter.admin')}}">
						<div class="parent-icon"><i class='lni lni-certificate'></i>
						</div>
						<div class="menu-title">Newsletter</div>
					</a>
				</li>
				
				
			</ul>
		</div>
