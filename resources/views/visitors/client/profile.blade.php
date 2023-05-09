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
<section style="">
<main class="body-content" >


    <div class="" style=" padding: 0% ;margin: 0% 10% ;width: 80%;background: #fff">
        <!-- Top box -->
            <!-- Logo & Site Name -->
            <div class="placeholder">
                <div  class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/footer.jpg') }}" >
                    <div class="tm-header" >
                        <div class="row tm-header-inner">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('img/uaer.png') }}" alt="Logo" class="tm-site-logo" width="90px" />
                                <div class="" style="margin-top: -75px ; padding-left: 100px">
                                    <h1 class="tm-site-title" style="color: #fff" >{{Auth::user()->name}}</h1>
                                    <h6 class="tm-site-description" >{{Auth::user()->email}}</h6>
                                </div>

                            </div>



                            <nav class="col-md-6 col-12 tm-nav">
                                <ul class="tm-nav-ul">


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<div class="container" style="padding: 50px">
    <div class="ms-content-wrapper">



        <div class="row">

          <div class="col-xl-7 col-md-12">
            <div class="ms-panel ms-panel-fh">
              <div class="ms-panel-body">
                <h2 class="section-title">About Me</h2>
                <div class="container"  >

                  <form action="{{route('authc.update')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="exampleFormControlInput1"  class="form-label">Utilisateur :</label>
                          <input type="text" class="form-control" value="{{Auth::user()->name}}" name='nameU' >
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                          <input type="text" class="form-control" value="{{Auth::user()->email}}" name='email'  >
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1"  class="form-label">Nom :</label>
                          <input type="text" class="form-control" value="{{Auth::user()->client->name}}" name='name' >
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Prenom :</label>
                          <input type="text" class="form-control" value="{{Auth::user()->client->prenom}}" name='prenom'  >
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Telephone:</label>
                          <input type="text" class="form-control" value="{{Auth::user()->client->tele}}" name='tele'  >
                      </div>
                      <div class="mb-3">
                          <button type="submit" class="btn btn-secondary">Enregistrer</button>
                      </div>
                      <div class="mb-3">
                          {{-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="link">Nouveau Mot de pass</a> --}}
                          </div>

                  </form>
                  @include('visitors.client.edit')

               </div>


              </div>

            </div>
          </div>
          <div class="col-xl-5 col-md-12">
              <img style="padding: 30px" src="{{ asset('img/register.png') }}" alt="" srcset="" width="500px">
            {{-- <div class="ms-panel ms-panel-fh">
              <div class="ms-panel-body">
                <ul class="ms-profile-stats">
                  <li>
                    <h3 class="ms-count">5790</h3>
                    <span>Followers</span>
                  </li>
                  <li>
                    <h3 class="ms-count">4.8</h3>
                    <span>User Rating</span>
                  </li>
                </ul>
                <h2 class="section-title">Basic Information</h2>
                <table class="table ms-profile-information">
                  <tbody>
                    <tr>
                      <th scope="row">Full Name</th>
                      <td>Chihoo Hwang</td>
                    </tr>
                    <tr>
                      <th scope="row">Birthday</th>
                      <td>January 25th, 1996</td>
                    </tr>
                    <tr>
                      <th scope="row">Language</th>
                      <td>English (US)</td>
                    </tr>
                    <tr>
                      <th scope="row">Website</th>
                      <td>www.example.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Phone Number</th>
                      <td>+123 456 789</td>
                    </tr>
                    <tr>
                      <th scope="row">Email Address</th>
                      <td>example@mail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">Location</th>
                      <td>New York, USA</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> --}}
          </div>





        </div>
</div>


</main>
</section>
@endsection
{{-- -----------------footer------------------------- --}}

