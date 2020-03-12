@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
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
            </div>
            {{-- <h4 class="card-title text-primary">Bookings History From Room</h4> --}}
            <h4 class="card-title text-primary">Room Detailsssssssss </h4>
          
            
              

              {{--new--}}

              <div class="card bg-light" style="width: 18rem;">
                <img class="card-img-top"  src="{{asset('uploads/rooms/'. $rooms->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$rooms->room_name}}</h5>
                  <h5 class="card-title">{{$rooms->room_type}}</h5>
                  <p class="card-text">Room Description: {{$rooms->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Room Price: {{$rooms->price}}</li>
                  <li class="list-group-item bg-info">Room status: {{$rooms->status}}</li>
             
                </ul>   
                
              </div>
            </div>
          



            
              
          </div>
        </div>
      </div>
    </div>
   
  </div>
    
@endsection