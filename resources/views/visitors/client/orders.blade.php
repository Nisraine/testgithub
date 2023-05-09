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
  <style>

    .progress-step-container:nth-of-type(3) .step-check::after{
        display: none;
    }
    .progress-step-container:nth-of-type(4) .step-check{
        background-image: none;
        background-color: white;
        border: 2px solid grey;
    }

    .progress-step-container:nth-of-type(4) .step-check::after{
        background-color: grey;
    }

    .progress-step-container:nth-of-type(3) .step-check{

        background-color: hsl(123, 76%, 49%);

    }
</style>
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
              <a class="nav-link " href="{{ route('list') }}">Restaurants</a>
            </li>
            @auth
            <li><a class="nav-link active" href="{{route('authc.order')}}">Orders</a></li>
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
<section style="background: #fff" id="menu">

<div class="container" style="width: 63% ;margin-top: 30px ; margin-left: 30% ; margin-bottom: 30px; background:#ffff ">
    <div class="progress-checkout-container">
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Shipping</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Payment</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Order</span>
        </div>
    </div>


</div>


<div class="form-container" style="margin-left: 20%">
    <h2 class="form-title">Orders Log</h2>
    <form action="" class="checkout-form">


            <table class="table table-dark table-striped">
                <tr>
                    <td>Restaurant</td>
                    <td>Total Producs</td>
                    <td>Total price</td>
                    <td>Status</td>
                    <td>Order Date</td>
                    <td>Delivery date </td>
                </tr>
                @if($commandes->count() > 0)
                    @foreach($commandes as $commande)
                    <tr>
                        <td>{{$commande->restaurant->name}}</td>
                        <td>{{$commande->produit->count()}}</td>
                        <td>MAD. {{$commande->prix}}</td>
                        <td class="text-muted"><b>{{Str::ucfirst($commande->etat)}}...</b></td>
                        <td>{{$commande->created_at->diffForHumans()}}</td>
                        <td>{{$commande->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                @endif
            </table>

    </form>
</div>



</section>
@endsection
