<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>fast food</title>
   <!--=============== BOXICONS ===============-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


  <link rel="stylesheet" href="{{  asset('assets/css/maicons.css')  }}">

  <link rel="stylesheet" href="{{  asset('assets/css/bootstrap.css')  }}">

  <link rel="stylesheet" href="{{  asset('assets/vendor/animate/animate.css')  }}">


  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
  <link rel="stylesheet"href="{{ asset('assets/css/style.css') }}">

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
   <header >

    <nav class="navbar navbar-expand-lg navbar-light sticky" data-offset="500"
     >

      <div class="container">
        <a href="#" class="navbar-brand"><span style="color: red;">Fast</span><span
            class="text-primary">Food.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent" style="padding-left: 25%">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{ route('list') }}">Restaurants</a>
            </li>
            @auth
            <li><a class="nav-link" href="{{route('authc.order')}}">Orders</a></li>
            @endauth

           <li class="nav-item">
                <button style="margin-top: -3px" type = "button" id = "cart-btn">
                    <img src="{{ asset('Resources/Cart.svg') }}"  alt="" class="site-header__icon">
                        <span id = "cart-count-info"></span>
                        <div style="position: absolute;background: yellow; margin-top: -36px;margin-left: 30px ;width: 15px;height: 15px; border-radius: 50% ;font-size: 10px" >
                            {{isset($data)?$card->getDetails()->get('items')->count():0}}
                        </div>

                  </button>
            </li>

          </ul>

        </div>
        {{-- <div class="site-header__icons">

            <img src="{{ asset('assets/img/search.png') }}" alt="" class="site-header__icon">

                <button style="margin-top: -3px" type = "button" id = "cart-btn">
                    <img src="{{ asset('assets/img/bagg.png') }}" alt="" class="site-header__icon">
                        <span id = "cart-count-info"></span>
                  </button>

           </div> --}}
        {{-- -----------------------------rechaerche w add to card----------------------------------- --}}

      {{-- ----------------------------------add to card------------------------------------------- --}}
       <div>
            <nav style="background:transparent !important; color:white; padding-left: 250px" class="navbar navbar-expand-md navbar-light bg-white ">
                <div class="container" >

                    <button type = "button" class = "navbar-toggler">
                    </button>
                    <div class = "cart">


                      <div class = "cart-container" >
                        <div class = "cart-list">

                                <div class="card-header" style="background:#24b824;">
                                    <h5 class="text-light">Commandes Lits</h5>
                                </div>
                                <section >
                                    <div class="row d-flex justify-content-center align-items-center ">
                                      <div class="col">
                                        <div class="card">
                                          <div class="card-body p-4">
                                            <div class="row">
                                              <div class="col-lg-7">
                                                <div class="d-flex " >
                                                </div>
                                                @if($card->getDetails()->get('items')->count() > 0 && isset($data))
                                                @foreach($card->getDetails()->get('items') as $cart)
                                                <div class="card mb-3 mb-lg-0" style="width: 200px">
                                                  <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                      <div class="d-flex flex-row align-items-center">
                                                        <div>
                                                          <img
                                                            src="{{$cart->get('img')}}"
                                                            class="img-fluid rounded-3" >
                                                        </div>
                                                        <div class="">
                                                          <h5 style="color: black">{{$cart->get('title')}}</h5>
                                                        </div>
                                                      </div>
                                                      <div class="d-flex flex-row align-items-center">
                                                        <div style="width: 50px;">
                                                          <h5  style="color: black" class="fw-normal mb-0">{{$cart->get('')}}</h5>
                                                        </div>
                                                        <div style="width: 80px;">
                                                          <h5 class="mb-0"><span class="badge bg-secondary">{{$cart->get('quantity')}} x  </span></h5>
                                                        </div>
                                                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                @endforeach
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                </section>

                        </div>

                        <div class = "cart-total" style="width: 360px">
                          <h3>Total :  MAD. {{$card->getItemsSubtotal()}}</h3>
                          <span id = "cart-total-value"></span>

                        </div>
                        <a class="btn btn-success" href="{{route('pay')}}">Order</a>
                        <a class="btn btn-dark" href="{{route('deleteCard')}}">Cancel</a>
                        @else
                        <p>choose restaurant and items to order</p>
                        @endif
                      </div>
                    </div>
                </div>
            </nav>
        </div>
        {{-- -------------------dyal profil w loguout--------------------------------- --}}
        <div  class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Right Side Of Navbar -->
            <ul class="menu food-nav-menu">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                <div   class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style=" border: none ; align-items: center ;cursor: pointer">
                                            <a  class="nav-link"  href="{{ route('authc.show') }}">
                                                {{ __('Profile') }}
                                            </a>


                                            <a class="nav-link" "  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </li>
                            @endguest

                     </ul>
             </div>
        </div>
        {{-- ============================================= --}}
      </div>
    </nav>
  </header>

  <div class="" style=" padding: 0% ;margin: 0% 10% ;width: 80%;background: #fff ;" >
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/img/delivery icons/restcover.png') }}">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="{{ asset('assets/img/icons/address-icon.svg') }}" alt="Logo" class="tm-site-logo" />
							<div class="" style="margin-top: -75px ; padding-left: 100px">
								<h1 class="tm-site-title"  >{{$data->name}}</h1>
								<h6 class="tm-site-description" >{{$data->adresse}}</h6>
							</div>
                            {{-- <div class="col-md-6 col-12" style="margin-left: 400px;margin-top: -53px">
                                <img src="{{ asset('assets/img/icons/phone-icon.svg') }}"  class="tm-site-logo "  />
                                <div class="" style="margin-top: -35px ; padding-left: 60px">
                                    <h3  style="font-size: 15 ;color: #27db27" > +{{$data->tele}}</h3>
                                </div>
                            </div> --}}
						</div>



						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li">
                                    <div class="col-md-6 col-12" style="">
                                        <img src="{{ asset('assets/img/icons/phone-icon.svg') }}"  class="tm-site-logo "  />
                                        <div class="" style="margin-top: -35px ; padding-left: 85px ;">
                                            <h3  style="font-size: 20px ;color: #08ffea;" > +{{$data->tele}}</h3>

                                        </div>
                                    </div>
                                </li>

                                <li class="tm-nav-li" style="margin-top: 10px">
                                    @empty($record=0)
                                    @foreach ($data->categorie as $rest)
                                    <a  class="tm-nav-link" href="{{route('rest.show',['restaurant'=>$rest])}}">Review </a>

                                    @if ($record =1)
                                    @break
                                    @endif
                                    @endforeach
                                @endempty

                                </li>

							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>


		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Restaurant {{$data->name}}</h2>

			</header>
<div class="container">


            <div class="step-container" style="margin-top: -60px;margin-left: 12%  ">

                <section class="steps">
                    <div class="box">
                        <img src="{{ asset('assets/img/insert/step-1.jpg') }}" alt="">
                        <h3>choose your favorite food</h3>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/insert/step-2.jpg') }}" alt="">
                        <h3>free and fast delivery</h3>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/insert/step-3.jpg') }}" alt="">
                        <h3>easy payments methods</h3>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/insert/step-4.jpg') }}" alt="">
                        <h3>and finally, enjoy your food</h3>
                    </div>

                </section>

            </div>

        </div>



            {{-- ---------------------------------- --}}




         <div class="container">
            @foreach ($data->categorie as $categ)
            <div class="menu-tab-wp" style="margin-top: 30px">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="menu-tab text-center">

                            <ul class="">
                                <div class=""></div>


                                <li class="filter" >
                                    <img src="{{ asset('assets/images/menu-2.png') }}" alt="">
                                    {{$categ->name}}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-list-row" style="width: 100% ;margin-left: 40px">

                <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                    @foreach ($categ->produit as $item)
                                <!-- 2 -->
            <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                <div class="dish-box text-center">
                  <div class="dist-img">
                    <img src="{{asset('products/'.$item->image)}}" alt="">
                  </div>

                  <div class="dish-title">
                    <h3 class="h3-title">{{$item->name}}</h3>

                  </div>
                  <div class="dish-info">
                    <ul>
                      <li>
                        <p>Type</p>
                        <b>{{$item->desc}}</b>
                      </li>
                      <li>
                        <p class="gg" style="padding-right: 30px">Time</p>
                        <b class="gg" style="padding-left: 30px">{{$item->duree_preparation}}</b>
                      </li>
                    </ul>
                  </div>
                  <div class="dist-bottom-row">
                    <ul>
                      <li>
                        <b>{{$item->prix}} MAD</b>
                      </li>
                      <li>
                        <a href="{{route('AddToCart',['produit' => $item])}}" class="dish-add-btn">
                          <i class="uil uil-plus"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- 3 -->
                     @endforeach
                 </div>
             </div>
              @endforeach
     </div>





			<div class="tm-section tm-container-inner">

			</div>
		</main>
</div>
{{-- -----------------footer------------------------- --}}

<footer class="page-footer bg-image">
    <div class="container" style="background: rgba(0, 0, 0, 0)" >
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3><label style="color: rgb(247, 109, 109);" >Fast</label> <label style="color: rgb(71, 235, 57);">Food</label></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto
            eligendi iure.</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-4">
          <h5>Contact Us</h5>
          <p>ksar el kbir rue c33 n 4 ofppt delivery food</p>
          <ul class="footer-menu">

            <li> <a href="#" class="footer-link">+212 123456789</a></li>
            <li><a href="#" class="footer-link">ofpptgmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Social Media</h5>
          <p>Follow Us.</p>
          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
      </div>


    </div>
  </footer>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

  <script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/google-maps.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
