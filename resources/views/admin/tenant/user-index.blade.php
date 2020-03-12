@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
@include('sweetalert::alert')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users List </h4>
          <a href="/user-store" class="btn btn-primary ">Add</a>
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>First name</th>
                <th>Middle name</th>
                <th>Last name</th>
    
                <th class="text-center">Email</th>
        
               
            

               

              </thead>
              <tbody>
                {{-- @foreach ($admins as $admin)
               
                <tr>
                  <td>{{$admin->fname}} </td>
                  <td>{{$admin->mname}}</td>
                  <td>{{$admin->lname}}</td>
                  <td class="text-center" >{{$admin->email}}</td>
                           
                  
                </tr>
                @endforeach  --}}

                @foreach ($staffs as $staff)
               
                <tr>
                  <td>{{$staff->fname}} </td>
                  <td>{{$staff->mname}}</td>
                  <td>{{$staff->lname}}</td>
                  <td class="text-center" >{{$staff->email}}</td>
                  <td class="text-center">{{$staff->type}}</td>
                  <td>
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