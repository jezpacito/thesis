@extends('layouts.master')

@section('title')
    Rental Management
@endsection

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

            <h4 class="card-title text-primary">Report for the Month of {{date('F',strtotime($date))}} </h4>
            
        </div>
        {{-- <h6>{{date('F',strtotime($date))}}</h6> --}}
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">

              <input type="button" id="btnprint" value="Print this Page" onclick="print_page()" />
            

        
              <thead class=" text-primary">
                {{-- <th>ID</th> --}}
                
                <th>Tenant Name</th>
                <th>Room</th>
                <th>Price</th>
                <th class="text-center">Payment Status</th>
              
              </thead>
              <tbody>
                  {{-- @foreach ($rooms as $room) --}}
                  @if($count == 0)
                <div class="text-center" >
                <h2 class="text-primary"> NO RECORD FOR THIS MONTH</h2></div>
                  @else

                  @foreach($result as $r)
                  
                <tr>
                
                <td>{{$r->room()->first()->user()->first()->fname}}
                     {{$r->room()->first()->user()->first()->lname}}</td>
                <td>{{$r->room()->first()->room()->first()->room_name}}</td>
                <td>{{$r->price}}</td>
                <td class="text-center">{{$r->status}}</td>
                
         
        
              
                </tr>
                @endforeach

                @endif
            
              </tbody>
            </table>
            <div class="card-collapse text-left text-black">
              {{-- <div class="card-header">
               
              </div> --}}
              <div class="card-body">
                <p class="card-text">Unpaid: {{number_format($total_unpaid)}} </p>
                <p class="card-text">Total Paid: {{number_format($total_paid)}}</p>
          
               </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <!--PRINT--->
  <script type="text/javascript">
    function print_page() {
        var ButtonControl = document.getElementById("btnprint");
        ButtonControl.style.visibility = "hidden";
        
        window.print();
        ButtonControl.style.visibility = "visible";
        
    }
  </script>
 


    
@endsection