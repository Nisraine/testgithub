@extends('backoffice.layouts.app')
@section('content')
@section('table','restaurants')
@section('subtable','ajouter')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif

      <div class="col-sm-6">
  <div class="col-xl-12 col-md-12">
    <div class="ms-panel ms-panel-fh">
      <div class="card-header" style="background-color:#f35757">
        <strong> <h6> <i class="fa fa-plus"></i> Add <span class='text-danger '> Restaurant</span></h6></strong> 
      </div>
      <div class="ms-panel-body">
        <form action="{{route('restaurant.insert')}}" method="post">
          @csrf
            
              <div class="form-row">
                      <div class="col-md-9 mb-3">
                          <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
                        <div class="input-group">
                          <input type="text" class="form-control rounded-pill" name='name' id="name" >
                        </div>
                      </div>
                      <div class="col-md-9 mb-3">
                        <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Adress :</strong></label>
                      <div class="input-group">
                        <input type="text" class="form-control rounded-pill" name='adresse' id="adresse" >
                      </div>
                    </div>
  
                      <div class="col-md-9 mb-3">
                        <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Phone Number :</strong></label>
                        <div class="input-group">
                          <input type="text" class="form-control" name='tele' id="tele" >

                        </div>
                      </div> 
                      
                        <div class="col-md-6 mb-3">
                          
                            <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Add" >
                       
                      </div></div></div>          
    </div></div></div>
     
@endsection
