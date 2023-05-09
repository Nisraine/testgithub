@extends('backoffice.layouts.app')
@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="border-0 pb-0">
          
            <a class="btn btn-dark mt-5 mb-5 ml-5 rounded-pill" href="{{route('restaurant.add')}} "style="background-color:#f35757;color:white">Add</a>
                
            </div> 
        
        <form action="{{route('restaurant.filterRest')}}" class="ms-form" method="post">
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
            <table  class="table w-100 thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
    
            <thead class=" text-white" style="background-color:#f35757;color:white">
                <tr role="row">
                <th> ID</th>
                <th > Name</th>
                <th >Address</th>
                <th >Phone Number</th>
                <th >Action</th>
              
                 </tr>
            </thead>
            <tbody>
                @if($restaurants->count() > 0)
                @foreach($restaurants as $restaurant)
                <tr>
                   
                    <td>{{$restaurant->id}}</td>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->adresse}}</td>
                    <td>{{$restaurant->tele}}</td>
                    <td> <a class="text-black" href="{{route('restaurant.show',['id' => $restaurant->id])}}"><i class="fa fa-eye"></i></a>
                    <a class="text-black"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}"><i class="fa fa-pen"></i></a>
                    <a class="text-black" onclick="return confirm('Are you sure ??')" href="{{route('restaurant.delete',['id' => $restaurant->id])}}"><i class="fa fa-trash"></i></a> </td>
           
                  
                    <tr>
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