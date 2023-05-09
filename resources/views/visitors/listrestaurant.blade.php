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
  <link rel="stylesheet" href="{{ asset('css/styleB.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

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
                        <a class="btn btn-success" href="{{route('c_insert',['id'=>$data->id])}}">Order</a>
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
@extends('layouts.app')
@section('content')
<section style="background-color: #fff ">


{{-- ---------------------------------- --}}
<div>

{{-- ================================= --}}
{{-- @foreach ($restaurant as $rest)
      <div class="row my-5">
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title" ><h3></h3></h5>
              <div class="post-date">
             </div>
             <div class="post-date" style="margin-top: 40px ">
                <a href="{{route('produitC.show',['restaurant' => $rest])}}" class="d-inline btn btn-primary btn-md btn-block" style="width: 30px" >Menu</a>
                <a  style="color: rgb(105, 36, 133) ;font-size: 20px ; padding: 20px" href="{{route('rest.show',['restaurant'=>$rest])}}">Review.. </a>
            </div>
            </div>
          </div>
        </div>
    </div>
    @endforeach --}}


      </div>

    </div>



















<div  class="container" >



        </div>
<!-- steps section ends -->

<!-- gallery section starts  -->

                <section class="gallery" id="gallery">
                    <h5 class="heading" style="font-size: 30px"> our  <span> restaurants </span> </h5>
                    <div class="box-container">
                        @foreach ($restaurant as $rest)
                        <div class="box" style="width: 100px">
                            <img src="{{ asset('assetss/images/blog/blog2.jpg') }}" alt="">
                            <div class="content">
                                <h3>{{$rest->name}}</h3>
                                <p><span>{{$rest->adresse}}</span>
                                    <span style="margin-left: 90px">Tele :<strong class="color-red">+{{$rest->tele}}</strong></span></p>

                                <a href="{{route('produitC.show',['restaurant' => $rest])}}" class="btn">Menu</a>
                            </div>
                        </div>
                          @endforeach
                    </div>
                </section>

<!-- gallery section ends -->



<!-- review section ends -->

<!-- order section starts  -->
</section>
@endsection
