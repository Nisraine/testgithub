@extends('backoffice.layouts.app')
@section('content')
<form action="{{route('produit.update',['produit' => $produit])}}" method="post" enctype="multipart/form-data">
    @csrf


{{-- <div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="ms-panel-header ">
     <strong> <h6> <i class="fa fa-plus"></i> Edit <span class='text-danger '> Product</span></h6></strong> 
    </div>
    <div class="ms-panel-body">
      <form action="{{route('produit.update',['produit' => $produit])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$produit->id}}" />
  <img src="{{asset('img/product.jfif')}}" id="preview" class="img-thumbnail" alt="..." width="300" height="300">
  <div class="col-md-12 mb-3">
    <label for="formFile" class="form-label"></label>
    <input class="form-control" name="image"  type="file" onchange="previewImage(event)" id="formFile">
  </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" value="{{$produit->name}}" name='name' id="name">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Price :</strong></label>
          <div class="input-group">
            <input type="text" class="form-control rounded-pill" value="{{$produit->prix}}"  name='prix' id="prix">
          </div>
        </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Description :</strong></label>
            <div class="input-group">
              <textarea name="description" id="" cols="30" rows="10" class="form-control ">{{$produit->desc}}</textarea>
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
          <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> State :</strong></label>

          <div class="form-check">
            <input class="form-check-input"  value="1" type="radio" name="disponibilite" id="disponibilite1" checked>
            <label class="form-check-label" for="disponibilite1">
              Available
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="0" type="radio" name="disponibilite" id="disponibilite2" checked>
            <label class="form-check-label" for="disponibilite2">
           Not Available
            </label>
          </div>
           <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Runtime:</strong></label>
            <div class="input-group">
              <input type="time" class="form-control rounded-pill" value="{{$produit->duree_preparation}}" name='duree' id="duree" >
        </div> </div> 
         
          </div>
         
          </div>
          <div class="col-md-6 mb-3">
            <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Modify" >
          </div>
          </div>
        </div>




      </form>  --}}
      
      {{--  --}}
      <div class="row">
        <div class="col-sm-6">
        <div class="col-xl-12 col-md-12">
        <div class="ms-panel ms-panel-fh">
          <div class="card-header" style="background-color:#f35757">
            <strong> <h6> <i class="fa fa-edit"></i> Edit <span class='text-white '> Product</span></h6></strong> 
          </div>
          <div class="ms-panel-body">
                  
            <form action="{{route('produit.update',['produit' => $produit])}}" method="post" enctype="multipart/form-data">
              @csrf
          
                
                  <div class="form-row">
                          <div class="col-md-9 mb-3">
                              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
                            <div class="input-group">
                              <input type="text" class="form-control rounded-pill"value="{{$produit->name}}" name='name' id="name">
                            </div>
                          </div>
                          <div class="col-md-9 mb-3">
                            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Price :</strong></label>
                          <div class="input-group">
                            <input type="text" class="form-control rounded-pill"  value="{{$produit->prix}}"  name='prix' id="prix">
                          </div>
                        </div>
      
                          <div class="col-md-9 mb-3">
                            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Description :</strong></label>
                            <div class="input-group">
                              <textarea name="description" id="" cols="30" rows="10" class="form-control ">{{$produit->desc}}</textarea>
                            </div>
                          </div> </div>
                          
                            <div class="col-md-6 mb-3">
                              
                                <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Modify" >
                           
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
                                              <input type="hidden" name="id" value="{{$produit->id}}" />
                                              <label for="formFile" class="form-label"></label>
                                             
                                              <input class="form-control" name="image"  type="file" onchange="previewImage(event)" id="formFile" value="{{$produit->image}}"">
                                           
                                  </div>
                                            
                                  <div class="col-md-9 mb-3">
                                    <img src="{{asset('img/product.jfif')}}" id="preview" class="img-thumbnail" alt="..." width="300" height="300"> 
                                  </div>
      
                                            <div class="col-md-9 mb-3">
                                             
                                              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> State :</strong></label>  
                                              
                                              <div class="input-group ml-5">
                                                <input class="form-check-input"  value="1" type="radio" name="disponibilite" id="disponibilite1" checked>
                                                <label class="form-check-label" for="disponibilite1">
                                                  Available
                                                </label>
                                              </div>
                                              <div class="input-group ml-5">
                                                <input class="form-check-input" value="0" type="radio" name="disponibilite" id="disponibilite2" checked>
                                                <label class="form-check-label" for="disponibilite2">
                                               Not Available
                                                </label>
                                              </div>
                                            </div> </div>
                                            <div class="col-md-9 mb-3">
                                              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Runtime :</strong></label>
                                              <div class="input-group">
                                                <input type="time" class="form-control rounded-pill" value="{{$produit->duree_preparation}}" name='duree' id="duree" >
                                              </div>
                                            </div>
                                            
                                              </div></div>          
                          </div></div>
      </div>
                    
                      </form>   
@endsection