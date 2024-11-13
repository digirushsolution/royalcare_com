<style>

.col-lg-10.bottom-bar {
    margin-top: -35px;
    margin-left: 42px;
}
</style>

<div class="header-area header-white header-sticky d-none d-lg-block">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-1">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{ url('/') }}"><img src="{{asset('assets/images/new-logo.png')}}" width="80" height="46" alt="Logo" /></a>
                </div>
                <!-- Header Logo End -->
            </div>
            <div class="col-lg-8">
                <div class="header-menu">
                    <ul class="nav-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Handloom</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','bedsheet')}}">Bed Sheets</a></li>
                                <li><a href="{{route('product-cat','towel')}}">Towels</a></li>
                                <li><a href="{{route('product-cat','cushion')}}">Cushion</a></li>
                                    <li><a href="{{route('product-cat','house-mat')}}">House Mat</a></li>
                            </ul>
                        </li>
                    
                            
                        <li class="menu-item-has-children">
                            <a href="#">Clothes </a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','kids')}}">Kids</a></li>
                                <li><a href="{{route('product-cat','men')}}">Men</a></li>
                                <li><a href="{{route('product-cat','women')}}">Women</a></li>
                                <!-- <li><a href="{{route('product-cat','hair-clips')}}">Hair Clips</a></li> -->
                                
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Home Appliances</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','kitchen')}}">Kitchen</a></li>
                                <li><a href="{{route('product-cat','Elastick-Clothline')}}">Elastick Clothline</a></li>
                                <li><a href="{{route('product-cat','rolling-stool')}}">Rolling Stool</a></li>
                                    <li><a href="{{route('product-cat','bathroom-items')}}">Bathroom</a></li>
                                
                            </ul>   
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Bags </a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','bag')}}">School Bag</a></li>
                                <li><a href="{{route('product-cat','ladies-purse')}}">Ladies Purse</a></li>
                                <li><a href="{{route('product-cat','other-bags')}}">Other bag</a></li>
                                
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Lunch Box</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','lunch-box-bottles')}}">Lunch Box & Bottles</a></li>
                                 <!-- <li><a href="{{route('product-cat','bottles')}}">Bottle </a></li> -->
                                
                            </ul>
                        </li>


                        <li class="menu-item-has-children">
                            <a href="#">Mobile Spare Parts</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','mobile-spare-parts')}}">Mobile Spare Parts</a></li>
                                <li><a href="{{route('product-cat','mobile-accessories')}}">Mobile Accessories</a></li>
                                <li><a href="{{route('product-cat','mobile-tool')}}">Mobile Tools</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">House Hold </a>
                            <ul class="sub-menu">
                                <li><a href="{{route('product-cat','decoration')}}">Decoration</a></li>
                                  <li><a href="{{route('product-cat','pant-organizer')}}"> Organizer</a></li>
                               <li><a href="{{route('product-cat','table-fan')}}">Table Fan</a></li>
                                <li><a href="{{route('product-cat','cover')}}">Cover</a></li>
                               
                            </ul>
                        </li>

  
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Header Meta Start -->
                <div class="header-meta">
                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-search"></i>
                        </a>

                        <div class="dropdown-menu dropdown-search">
                            <!-- Header Search Start -->
                            <div class="header-search">
                                <form action="{{ route('shop.filter') }}" method="GET">
                                    @csrf
                                    <input type="text" name="search_name" placeholder="Enter your search key ... " required>
                                    <button type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- Header Search End -->
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="action" href="javascript:void(0)" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                        <ul class="dropdown-menu dropdown-profile">
                            <li><a href="{{url('/my-account')}}">My Account</a></li>
                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                            <li>@if(auth()->user())<a href="{{ route('logout') }}">Logout</a>@else<a href="{{route('login')}}">Sign In</a>@endif</li>
                        </ul>
                    </div>
                    <a class="action" href="{{url('/wishlist')}}"><i class="pe-7s-like"></i></a>


                    @php
                        $total = 0;
                        $subtotal = 0;
                        $count = 0;
                        if (Helper::getAllProductFromCart()) {
                            $allProducts = Helper::getAllProductFromCart();
                            $count = count($allProducts);
                        }
                    @endphp
                   

                    

                    <div class="dropdown">
                        <a class="action" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">{{$count}}</span>
                        </a>

                        <div class="dropdown-menu dropdown-cart">
                            <div class="cart-content" id="cart-content">
                                <ul>
                                    @if(Helper::getAllProductFromCart())
                                    @foreach(Helper::getAllProductFromCart() as $key=>$cart)

                                    @php
                                        $product = App\Models\Product::find($cart['product_id']);
                                        $subtotal += $cart->product->price * $cart['quantity'];
                                        $total += $cart->product->discount * $cart['quantity'];
                                    @endphp
                                    <li data-id="{{ $cart->id }}">
                                        <!-- Single Cart Item Start -->
                                        <div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="{{ asset($product->photo) }}" width="98" height="98" alt="Cart">
                                                <span class="product-quantity">{{$cart['quantity']}}x</span>
                                            </div>
                                            <div class="cart-item-content">
                                                <h6 class="product-name">
                                                    <a href="#">{{ $cart->product->title }}</a>
                                                </h6>
                                                <span class="product-price">₹{{ $cart->product->discount }}</span>
                                                <a class="cart-remove remove-from-cart" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Cart Item End -->
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>

                            <div class="cart-price">
                                <div class="cart-subtotals">
                                    <div class="price-inline">
                                        <span class="label">Subtotal</span>
                                        <span class="value">₹{{ $subtotal }}</span>
                                    </div>
                                </div>
                                <div class="cart-total">
                                    <div class="price-inline">
                                        <span class="label">Total</span>
                                        <span class="value">₹{{ $total }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <a href="{{route('checkout')}}" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Meta End -->
            </div>
        </div>
    </div>
</div>

    <!-- Header Mobile Start -->
    <div class="header-mobile section d-lg-none">
        <!-- Header Mobile top Start -->
        <div class="header-mobile-top header-sticky">
            <div class="container">
                <div class="row row-cols-3 gx-2 align-items-center">
                    <div class="col">
                        <!-- Header Toggle Start -->
                        <div class="header-toggle">
                            <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <div class="col">
                        <!-- Header Logo Start -->
                        <div class="header-logo text-center">
                            <a href="{{url('/')}}"><img src="{{ asset('assets/images/new-logo.png')}}" width="154" height="46" alt="Logo" /></a>
                        </div>
                        <!-- Header Logo End -->
                    </div>
                    <div class="col">
                        <!-- Header Action Start -->
                        <!-- <div class="header-meta">
                            <div class="dropdown">
                                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                                <ul class="dropdown-menu dropdown-profile">
                                    <li><a href="{{url('/my-account')}}">My Account</a></li>
                                    <li><a href="{{route('checkout')}}">Checkout</a></li>
                                    <li><a href="{{route('login')}}">Sign In</a></li>
                                </ul>
                            </div>

                            @php
                            $count = 0;
                            if (Helper::getAllProductFromCart()) {
                                $allProducts = Helper::getAllProductFromCart();
                                $count = count($allProducts);
                            }
                            @endphp
                            <a class="action" href="cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">{{$count}}</span>
                            </a>
                        </div> -->


                        <div class="header-meta">
                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-search"></i>
                        </a>
                  

                        <div class="dropdown-menu dropdown-search">
                           
                             <!-- Header Search Start -->
                             <div class="header-search">
                                <form action="{{ route('shop.filter') }}" method="GET">
                                    @csrf
                                    <input type="text" name="search_name" placeholder="Enter your search key ... " required>
                                    <button type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- Header Search End -->
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                        <ul class="dropdown-menu dropdown-profile">
                        <li><a href="{{url('/my-account')}}">My Account</a></li>
                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                        <li>@if(auth()->user())<a href="{{ route('logout') }}">Logout</a>@else<a href="{{route('login')}}">Sign In</a>@endif</li>
                      
                        </ul>
                    </div>
                  <div class="dropdown">
                        <!-- <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">4</span>
                        </a> -->
                        <a class="action" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">{{$count}}</span>
                        </a>

                        <div class="dropdown-menu dropdown-cart">
                            <div class="cart-content" id="cart-content">
                                <ul>
                                @if(Helper::getAllProductFromCart())
                                    @foreach(Helper::getAllProductFromCart() as $key=>$cart)

                                    @php
                                        $product = App\Models\Product::find($cart['product_id']);
                                        $subtotal += $cart->product->price * $cart['quantity'];
                                        $total += $cart->product->discount * $cart['quantity'];
                                    @endphp
                                    <li data-id="{{ $cart->id }}">
                                        <!-- Single Cart Item Start -->
                                        <div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="{{ asset($product->photo) }}" width="98" height="98" alt="Cart">
                                                <span class="product-quantity">{{$cart['quantity']}}x</span>
                                            </div>
                                            <div class="cart-item-content">
                                                <h6 class="product-name">
                                                    <a href="#">{{ $cart->product->title }}</a>
                                                </h6>
                                                <span class="product-price">₹{{ $cart->product->discount }}</span>
                                                <a class="cart-remove remove-from-cart" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Cart Item End -->
                                    </li>
                                    @endforeach
                                    @endif
                                   
                                       
                                    
                                    
                                 </ul>
                            </div>

                            <div class="cart-price">
                                <div class="cart-subtotals">
                                    <div class="price-inline">
                                        <span class="label">Subtotal</span>
                                        <span class="value">₹1460</span>
                                    </div>
                                </div>
                                <div class="cart-total">
                                    <div class="price-inline">
                                        <span class="label">Total</span>
                                        <span class="value">₹1230</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="checkout-btn">
                                <a href="https://aadhyabedsheet.com/checkout" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                            </div> -->
                            <div class="checkout-btn">
                                <a href="{{route('checkout')}}" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile top End -->

        <!-- Header Mobile Bottom End -->
        <div class="header-mobile-bottom">
            <div class="container">
                <!-- Header Search Start -->
                <div class="header-search">
                    <form action="{{ route('shop.filter') }}" method="GET">
                        @csrf
                        <input type="text" name="search_name" placeholder="Enter your search key ... " required>
                        <button type="submit">
                            <i class="pe-7s-search"></i>
                        </button>
                    </form>
                </div>
                <!-- Header Search End -->
            </div>
        </div>
        <!-- Header Mobile Bottom End -->
    </div>
    <!-- Header Mobile End -->

    <!-- off Canvas Start -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header">
            <!-- Canvas Action Start -->
            <div class="canvas-action">
                <a class="action" href="{{route('cart')}}"><i class="icon-sliders"></i> Cart
                    <span class="action-num">({{$count}})</span></a>
                <a class="action" href="{{url('/wishlist')}}"><i class="icon-heart"></i> Wishlist
                    <span class="action-num"></span></a>
            </div>
            <!-- Canvas Action end -->

            <!-- Canvas Close bar Start -->
            <div class="canvas-close-bar">
                <span>Menu</span>
                <button class="menu-close" data-bs-dismiss="offcanvas">
                    <i class="pe-7s-angle-left"></i>
                </button>
            </div>
            <!-- Canvas Close bar End -->
        </div>

        <div class="offcanvas-body">
            <!-- Canvas Menu Start -->
            <div class="canvas-menu">
                <nav>
                    <ul class="nav-menu">
                        
                        <li>
                            <a href="#">Handloom</a>
                            <ul class="mega-sub-menu">
                                 <li>
                                    
                                    <ul class="">
                                        <li>
                                            <a href="{{route('product-cat','bedsheet')}}">Bed Sheet</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','towel')}}">Towels</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','cushion')}}">Cushion</a>
                                        </li>

                                    </ul>
                                 </li> 
                            </ul>
                        </li>




                        <li>
                            <a href="#">Clothes</a>
                            <ul class="mega-sub-menu">
                                 <li>
                                    <ul class="">
                                        <li>
                                            <a href="{{route('product-cat','kids')}}">Kids</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','men')}}">Men</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','women')}}">Women</a>
                                        </li>
                                    </ul>
                                 </li> 

                        
                
                            </ul>
                        </li>       
                        
                        

                        <li>
                            <a href="#">Home Appliances</a>
                            <ul class="mega-sub-menu">
                                 <li>                                    

                                    <ul class="">
                                        <li>
                                            <a href="{{route('product-cat','kitchen')}}">Kitchen</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','elastick-clothline')}}">Elastick Clothline</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','rolling-stool')}}">Rolling Stool</a>
                                        </li>
                                         <li>
                                            <a href="{{route('product-cat','bathroom-items')}}">bathroom</a>
                                        </li>
                                    </ul>
                                 </li>
                
                            </ul>
                        </li> 


                        <li>
                            <a href="#">Bags</a>
                            <ul class="mega-sub-menu">
                                 <li>
                                
                                    <ul class="">
                                        <li>
                                            <a href="{{route('product-cat','bag')}}">School Bag</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','ladies-purse')}}">Ladies Purse</a>
                                        </li>
                                        <li>
                                            <a href="{{route('product-cat','other-bags')}}">Other Bag</a>
                                        </li>
                                    </ul>
                                 </li> 
                
                            </ul>
                        </li> 


                        <li>
                            <a href="#">Lunch Box</a>
                            <ul class="mega-sub-menu">
                                 <li>
                                    <ul class="">
                                        <li>
                                            <a href="{{route('product-cat','lunch-box-bottles')}}">Lunch Box & Bottles</a>
                                        </li>
                                    </ul>
                                 </li> 
                            </ul>
                        </li> 

                        <li>
                            <a href="#">House Hold</a>
                            <ul class="mega-sub-menu">
                                 <li>
                                    <ul class="">
                                        <li><a href="{{route('product-cat','decoration')}}">Decoration</a></li>
                                        <li><a href="{{route('product-cat','pant-organizer')}}">Organizer</a></li>
                                    </ul>
                                 </li> 
                            </ul>
                        </li> 



                        

                    </ul>
                </nav>
            </div>
            <!-- Canvas Menu End -->
        </div>
    </div>
    <!-- off Canvas End -->



@section('scripts')
<script type="text/javascript">

$(".remove-from-cart").click(function(e) {

        e.preventDefault();
        var ele = $(this);

        if (confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{route('cart.delete')}}'
                , method: "get"
                , data: {
                    _token: '{{ csrf_token() }}'
                    , id: ele.parents("li").attr("data-id")
                }
                , success: function(response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection