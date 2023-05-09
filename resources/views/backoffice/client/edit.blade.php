@extends('backoffice.layouts.app')
@section('content')
@if($errors->any())
      <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </div>
      @endif  
 

{{--  --}}


<div class="col-xl-6 col-lg-12">
  <div class="card">
      <div class="card-header" style="background-color:#f35757">
        <strong> <h6> <i class="fa fa-edit"></i> Edit <span class='text-white '> Customer</span></h6></strong> 
      </div>
      <div class="card-body">
          <div class="basic-form">
            <form action="{{route('client.update',['id' =>$client->id])}}" method="post">
                  @csrf
                  <div class="row">
                      <div class="mb-3 col-md-6">
                          <label class="form-label"> User Name :</label>
                          <input type="text" class="form-control" value="{{$client->user->name}}"  autocomplete="false" name="nameutili">
                      </div>
                      <div class="mb-3 col-md-6">
                          <label class="form-label"> Last Name :</label>
                          <input type="text" class="form-control" value="{{$client->name}}"  name="name">
                      </div>
                      <div class="mb-3 col-md-6">
                          <label class="form-label">First Name :</label>
                          <input type="text" class="form-control" id="prenom" value="{{$client->prenom}}"  name="prenom" >
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label">Phone Number :</label>
                        <input type="tele" class="form-control" name='tele' id="tele"  value="{{$client->tele}}" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label">  E_mail :</label>
                      <input type="email" class="form-control" name='email' id="email"  value="{{$client->user->email}}">
                  </div>
             
                  <div class="col-md-7 mb-4 "> 
                  <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Modify" >
                </div>
               </form>
          </div>
      </div>
  </div>
</div>



      </form>   
@endsection