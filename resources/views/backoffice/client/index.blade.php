@extends('backoffice.layouts.app')
@section('content')
@section('table','clients')
@section('subtable','liste')
{{-- <div class="col-xl-12">
    <div class="card">
        <div class="border-0 pb-0">
          
<a class="btn btn-dark mt-5 mb-5 ml-5 rounded-pill"  style="background-color:#f35757;color:white" href="{{route('client.add')}}">Add</a>
<form action="{{route('commande.filterClient')}}" class="ms-form" method="post">
    @csrf
      <div class="row">   
                <div class="col-sm-5">
            <div class="input-group " style="
            position: relative;
            z-index: 2;
            overflow: hidden;
            
        ">
                <input type="search" class="form-control form-control-lg rounded-pill p-3 ml-5 " name='name' placeholder="Search here ..." >
            
                <button class="card-link float-end text-right bg-white" style="
       position: absolute;
    right: 0px;
    top: -7px;
    background: #000000 !important;
    z-index: 10;
    padding: 18px;
    color: white;

                "><i class="fa fa-search"></i></button>
            </div>
        </div> </div>
</div>   
<table  class="table thead-primary table-responsive" role="grid">
    <thead class=" text-white" style="background-color:#f35757;color:white">
        <tr role="row">
            <th>Id </th>
            <th>User Name</th>
            <th>Last Name</th>
            <th>First Name </th>
            <th>E_mail</th>
            <th>Phone Number  </th>
            <th>Action</th>

        </tr>
        <tbody>
   @if($clients->count() > 0)
   @foreach($clients as $client)  
           <tr>
               <td>{{$client->id}}</td>
               <td>{{$client->user->name}}</td>
               <td>{{$client->name}}</td>
               <td>{{$client->prenom}}</td>
               <td>{{$client->user->email}}</td>
               <td>{{$client->tele}}</td>
             
               <td>
              
                <a class="text-black" href="{{route('client.delete',['id'=>$client->user->id])}}">  <i class="fa-solid fa-trash-alt"></i></a>
               <a class="text-black" href="{{route('client.edit',['id'=>$client->id])}}"> <i class="fa-solid fa-user"></i></a>
               </td>
        
            </tr>  
     @endforeach
     @else
     <tr>
        <td colspan="7" class="text-center text-danger"> No Data </td>
     </tr>
     @endif
    </tbody>

</table>
</form>
</div></div> --}}

{{--  --}}

<div class="col-xl-12">
    <div class="card">
        <div class="border-0 pb-0">
          
            <a class="btn btn-dark mt-5 mb-5 ml-5 rounded-pill" href="{{route('client.add')}} "style="background-color:#f35757;color:white">Add</a>
                
            </div> 
        
            <form action="{{route('commande.filterClient')}}" class="ms-form" method="post">

            @csrf
            <div class="row">   
                <div class="col-sm-5">
            <div class="input-group " style="
            position: relative;
            z-index: 2;
            overflow: hidden;
            
        ">
                <input type="search" class="form-control form-control-lg rounded-pill p-3 ml-5 " name='name' placeholder="Search here ..." >
            
                <button class="card-link float-end text-right bg-white" style="
       position: absolute;
    right: 0px;
    top: -7px;
    background: #000000 !important;
    z-index: 10;
    padding: 18px;
    color: white;

                "><i class="fa fa-search"></i></button>
            </div>
        </div> </div>
        <div class="card-body">
            <table  class="table thead-primary table-responsive" role="grid"  >
    
            <thead class=" text-white" style="background-color:#f35757;color:white">
                <tr role="row">
                    <th>Id </th> 
                    <th>User Name</th>
                    <th>Last Name</th>
                    <th>First Name </th>
                    <th>E_mail</th>
                    <th>Phone Number  </th>
                    <th>Action</th>
                 </tr>
            </thead>
            <tbody>
                @if($clients->count() > 0)
   @foreach($clients as $client)  
           <tr>
               <td>{{$client->id}}</td>
               <td>{{$client->user->name}}</td>
               <td>{{$client->name}}</td>
               <td>{{$client->prenom}}</td>
               <td>{{$client->user->email}}</td>
               <td>{{$client->tele}}</td>
             
               <td>
              
                <a class="text-black" href="{{route('client.delete',['id'=>$client->user->id])}}">  <i class="fa-solid fa-trash-alt"></i></a>
               <a class="text-black" href="{{route('client.edit',['id'=>$client->id])}}"> <i class="fa-solid fa-user"></i></a>
               </td>
        
            </tr>  
     @endforeach
     @else
     <tr>
        <td colspan="7" class="text-center text-danger"> No Data </td>
     </tr>
     @endif
            </tbody>
          </table>
        </div>  </form>
    </div>
</div>

  

@endsection

{{--     
</div> --}}