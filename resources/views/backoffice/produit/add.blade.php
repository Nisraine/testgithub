@extends('backoffice.layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<div class="row">
  <div class="col-sm-6">
  <div class="col-xl-12 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="card-header" style="background-color:#f35757">
      <strong> <h6> <i class="fa fa-edit"></i> Add <span class='text-white '> Product</span></h6></strong>
    </div>
    <div class="ms-panel-body">

          <form action="{{route('produit.insert', ['id'=>$id])}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                    <div class="col-md-9 mb-3">
                        <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
                      <div class="input-group">
                        <input type="text" class="form-control rounded-pill" value="{{old('name')}}" name='name' id="name">
                      </div>
                    </div>
                    <div class="col-md-9 mb-3">
                      <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Price :</strong></label>
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill" value="{{old('prix')}}"  name='prix' id="prix">
                    </div>
                  </div>

                    <div class="col-md-9 mb-3">
                      <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Description :</strong></label>
                      <div class="input-group">
                        <textarea name="description" id="" cols="30" rows="10" class="form-control ">{{old('description')}}</textarea>
                      </div>
                    </div> </div>

                      <div class="col-md-6 mb-3">

                          <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Add" >

                    </div></div></div>
  </div></div>
                  <div class="col-sm-6">
                    <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                      <div class="card-header" style="background-color:#f35757">
                        <strong> <h6> <i class="fa fa-edit"></i> </h6></strong>
                      </div>
                      <div class="" style="background-color:#f35757">
                        <strong> <h6></h6> </strong>
                      </div>
                      <div class="ms-panel-body">

                              <div class="form-row">
                                      <div class="col-md-9 mb-3">
                                        <label for="formFile" class="form-label"></label>
                            <input class="form-control" name="image"  type="file" onchange="previewImage(event)" id="formFile"><br>
                          <img src="{{asset('img/product.jfif')}}" id="preview" class="img-thumbnail" alt="..." width="500" height="150">
                                      </div>


                                      <div class="col-md-9 mb-3">

                                        <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> State :</strong></label>

                                        <div class="input-group ml-5">
                                 <input class="form-check-input" {{old('disponibilite')=='1'?'checked':''}} value="1" type="radio" name="disponibilite" id="disponibilite1">

                                          <label class="form-check-label" for="disponibilite1">
                                            Available
                                            </label>
                                        </div>
                                        <div class="input-group ml-5">
                              <input class="form-check-input" {{old('disponibilite')=='0'?'checked':''}} value="0" type="radio" name="disponibilite" id="disponibilite2">

                                          <label class="form-check-label" for="disponibilite1">
                                            Available
                                            </label>
                                        </div>
                                      </div> </div>
                                      <div class="col-md-9 mb-3">
                                        <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Runtime :</strong></label>
                                        <div class="input-group">
                                          <input type="time" class="form-control rounded-pill" value="{{old('duree')}}" name='duree' id="duree" >
                                        </div>
                                      </div>

                                        </div></div>
                    </div></div>
</div>

                </form>
@endsection
