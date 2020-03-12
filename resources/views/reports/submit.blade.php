@extends('layouts.master')
@section('title')
    Rental Management
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

         </div>
         <div class="card-collapse">
          <div class="card-header">
              <div class="card-collapse text-center text-black mb-3">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-overlay" src="{{asset('assets/img/marie-logo.png')}}" alt="Card image cap">
                 
                </div>
              <div class="card-body">
                      <div class="card-body">
                 </div>
                  {{-- <h4 class="card-title">Marie's Rental Management System</h4> --}}
             
                 
                  <p class="card-text text-white">   ..</p>
                  <p class="card-title">Corner Pres. Quirino Avenue, Santol St. General Santos City</p>
                  <p class="card-text ">marierental@gmail.com</p>
                  <h4> Status Report For the month : {{date('F d Y',strtotime($month))}}</h4>
              </div>
        

          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

              <th>Tenant</th>
                <th>Fee</th>
                <th> status</th>
                <th> month</th>
            
            
              </thead>
              @foreach($booking as $b)
              <tbody>

                  <td>  
                            {{$b->room()->first()->user()->first()->fname}}

                            {{$b->room()->first()->user()->first()->lname}}
                  </td>
                             
                    <td>{{$b->price}} </td>
                <td> {{$b->status}}</td>
               
                <td>{{date('F',strtotime($b->month))}}</td>
               
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection