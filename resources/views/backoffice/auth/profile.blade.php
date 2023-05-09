@extends('backoffice.layouts.app')
@section('content')
@section('table','Admin')
@section('subtable','Auth')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
@if(Session::has('success'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
  <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        {{Session::get('success')}}
    </div>
  </div>
@endif
{{-- <div class="card">
    <div class="card-body">
        <form action="{{route('auth.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1"  class="form-label">Name :</label>
                <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->name}}" name='name' >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-mail :</label>
                <input type="email" class="form-control" value="{{Auth::guard('admin')->user()->email}}" name='email'  >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
            </div>
            <div class="mb-3">
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-link">Nouveau Mot de pass</a>
            </div>
        </form>
        @include('backoffice.auth.edit')
    </div>
</div> --}}


<div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">

    <div class="ms-panel-body">
      <form action="{{route('auth.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="col-md-7 mb-3">
            
              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" value="{{Auth::guard('admin')->user()->name}}" name='name' >
            
            </div>
          </div>

          <div class="col-md-7 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-truncate text-dark"><strong>E-mail :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" value="{{Auth::guard('admin')->user()->email}}" name='email' >
            </div>
          </div>
       
          <div class="col-md-9 mb-3">
            <button type="button" class="btn btn-pill btn-gradient-primary" name='btn'><i class="div flaticon-tick-inside-circle"> Enregistrer </i></button>
  
          </div><br>
          <div class="mb-3">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Nouveau Mot de pass
              </a>
        </div> @include('backoffice.auth.edit')
          </div>
        </div>




      </form>
@endsection

