@extends('partials.head')
@extends('partials.scripts')
@section('title')
Rental Management
    
@endsection
  <!--PRINT--->
  <script type="text/javascript">
    function print_page() {
        var ButtonControl = document.getElementById("btnprint");
        ButtonControl.style.visibility = "hidden";
        
        window.print();
        ButtonControl.style.visibility = "visible";
        
    }
  </script>
<div class="container">
  <div class="card">
    
<div class="card-header">
  <span class="float-right"> <strong> Date: </strong>  {{date('F d Y')}}</span>
</div>



<style type="text/css">
  @media print {
      #backtbtn {
          display :  none;
      }
  }
  </style>
  <input id ="backtbtn" type="button" value="Back" class="btn btn-primary btn-sm" name="back" onclick="window.location='{{url('/date-range')}}';" />
<input type="button" class="btn btn-info btn-sm" id="btnprint" value="Print" onclick="print_page()" />

  
<div class="card-collapse">
  <div class="card-header">
      <div class="card-collapse text-center text-black mb-3">
        <div class="card" style="width: 20rem;">
          <img class="card-img-overlay" src="{{asset('assets/img/marie-logo.png')}}" alt="Card image cap">
         
        </div>
      <div class="card-body">
              <div class="card-body">
         </div>
          <p class="card-text text-white">   ..</p>
          <p class="card-title">Corner Pres. Quirino Avenue, Santol St. General Santos City</p>
          <p class="card-text ">marierental@gmail.com</p>
      </div>

     
      
  </div>

  </div>





</div>

<div class="table-responsive">
  <table class="table">


    <thead class=" text-secondary">
 
      <th>Tenant Name</th>
      <th>Room</th>
      <th>Price</th>
      <th class="text-center">Payment Status</th>
    
    </thead>
    <tbody>

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
 
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

          <div class="col-lg-4 col-sm-5 ml-auto">
          <table class="table table-clear">
          <tbody>
          <tr>
          <td class="left">
          <strong>Unpaid</strong>
          </td>
          <td class="right">{{number_format($total_unpaid)}}</td>
          </tr>
          <tr>
          <td class="left">
          <strong>Total Paid</strong>
          </td>
          <td class="right">
          <strong>{{number_format($total_paid)}}</strong>
          </td>
          </tr>
          </tbody>
          </table>

          </div>

</div>

</div>
</div>
</div>