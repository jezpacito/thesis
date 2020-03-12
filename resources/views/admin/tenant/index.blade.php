@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
@include('sweetalert::alert')
<div class="row">
    <div class="col-md-12 pl-1 pr-1">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tenants Lists </h4>
          <a href="/user-create" class="btn btn-primary ">Add</a>
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>First name</th>
                <th>Middle name</th>
                <th>Last name</th>
                
               
                <th class="text-center">Email</th>

                <th class="text-center">Phone no.</th>
                <th class="text-center">Address</th>
                <th class="text-center">Action</th>

              </thead>
              <tbody>
                @foreach ($tenants as $tenant)
               
                <tr>

                  <td>{{$tenant->fname}} </td>
                  <td>{{$tenant->mname}}</td>
                  <td>{{$tenant->lname}}</td>
                  <td class="text-center" >{{$tenant->email}}</td>
                  <td class="text-center">{{$tenant->phone_no}}</td>
                  <td class="text-center">{{$tenant->street}}, {{$tenant->city}} {{$tenant->state}}</td>
                  
                    <td>
                    <a href="{{url('/assign_room',$tenant->id)}}">
                      <button class="btn btn-warning"></button> </a>
                    </td>


                   
                
                    <a href="#">
                      <button class="btn btn-warning">Update</button>
                  </a>
                  </td>
                  
              

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    
<!--FUCK LIFE-->


  @endsection