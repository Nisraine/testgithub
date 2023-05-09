@extends('backoffice.layouts.app')
@section('content')



<div class="col-xl-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                     
        <form action="{{route('commande.filter')}}" class="ms-form" method="post">
            @csrf
            <div class="border-0 ">   <div class="row">
         
            <div class="mb-3">
              
                    <select class="form-select form-select-lg rounded-pill" name="etat" style="background-color:#ffffff;color:#f35757">
                        <option disabled selected >Orders Etat</option>
                        {{-- @foreach ($collection as $item) --}}
                        <option value="commande">Order</option> 
                        <option value="prepare">Prepare</option> 
                        <option value="delivrer">Delivery</option> 
                        <option value="confirmer">Confirmed</option> 
                        {{-- @endforeach  --}}
                    </select>
            </div>
            <div class="mb-3">
                {{-- <div class="input-group"> --}}
                    <select class="form-select form-select-lg rounded-pill" name="restaurant_id" style="background-color:#ffffff;color:#f35757">
                        <option disabled selected>Restaurants</option>
                        @foreach ($restaurants as $rest)
                        <option value="{{$rest->id}}">{{$rest->name}}</option> 
                        @endforeach 
                    </select>
                {{-- </div>  --}}
            </div>
            <div class="mb-3">
                
                <button class="btn btn-primary">Filter <i class="pl-4 fa fa-filter" ></i></button>
            </div>
           
        </div>
            
        </div>     
        </form>
            </div>
        </div>
    </div>
    
      
          
     
   <div class="col-sm-9">
    <div class="card">
        <div class="card-body">
<table  class="table thead-primary" >
    <thead  class="border">
        <tr role="row">
            <th>Id </th>
            <th>Customer</th>
            <th>Restaurant </th>
            <th>State</th>
            <th>Price</th>
            <th>Action</th>
           

        </tr>
   <tbody>
   @foreach($commandes as $commande)  
           <tr>
               <td>{{$commande->id}}</td>
               <td>{{$commande->client->name}}</td>
               <td>{{$commande->restaurant->name}}</td>
               @if($commande->etat == "commande")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-secondary"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "prepare")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-warning"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "delivrer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-info"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "confirmer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-success"><i class="fa fa-check"></i> {{$commande->etat}} </a></td>
               @endif
               <td>{{$commande->prix}}</td>             
               <td>
                <a class="text-black" data-bs-toggle="modal" data-bs-target="#exampleModal{{$commande->id}}"><i class="fa fa-eye"></i></a>
                <a class="text-black" href="{{route('commande.delete',['id'=>$commande->id])}}"><i class="fa fa-trash"></i></a>
            </td>
               @include('backoffice.commande.show')
        
     </tr>  
     @endforeach
    </tbody>
</table> 
</div>  
</div>   

</div> 

</div> 
</div>
@endsection  
