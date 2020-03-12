@section('title')
Rental Manangement
@endsection

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">


    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    



                    
                      
                       
                        {{-- <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address> --}}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date:  {{date('F d Y')}}</em>
                    </p>
                  
                </div>
            </div>            
            
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
               
                <br>


                <div class="table-hover">
                    <table class="table">
                      <thead class=" text-default">
                        <td class="text-left">
                            <p>
                                <strong>Name:</strong>
                            </p>
                            </td>
                            <td class="text-left">
                            <p>
                                {{-- <strong>150</strong> --}}
                            </p>
                             <p>
                                <strong> <h4>{{$room->user()->first()->fname}} {{$room->user()->first()->lname}}</h4></strong>
                            </p>
                          </td>
                          
                    
                    <tr>  
                        <th>Room</th>
                        <th>Rent Fee</th>
                        <th class="text-center"><th>

                        </tr>
                       
                      </thead>
                      
                      <tbody>
        
        
                      @foreach ($billings as $bill)
                          <tr>
                              <td class="col-md-9"><em> {{$room->room()->first()->room_name}} </em></td>
                          <td class="col-md-9">{{$bill->price}}</td>
                            <td class="col-md-1" style="text-align: center">
                                @if($bill->status === 'paid')
                                    <h6>Paid</h6>
                                    @else
                                    <a href="{{url('pay-billing',$bill->id)}}">
                                        <button class="btn btn-primary">Unpaid</button>
                                    </a>
                                    @endif
                            </td>
        
                        </tr>
                        <tr>
                         
                            <td class="text-left">
                            <p>
                                <strong> Plus other charge </strong>
                            </p>
                            </td>
                            <td class="text-left">
                            <p>
                                {{-- <strong>150</strong> --}}
                            </p>
                             <p>
                                <strong>150 Pesos</strong>
                            </p>
                          </td>
                          
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            {{-- <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong></strong></h4></td>
                        </tr> --}}
                      @endforeach
                      </tbody>
                    </table>
                  </div>

            </td>

            <input type="button" class="btn btn-info btn-sm btn-block" id="btnprint" value="Print" onclick="print_page()" />

             

                 <style type="text/css">
                    @media print {
                        #backtbtn {
                            display :  none;
                        }
                    }
                    </style>
                    <input id ="backtbtn" type="button" value="Back" class="btn btn-primary btn-block btn-sm" name="back" onclick="window.location='{{url('/booked-rooms')}}';" />




            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            ButtonControl.style.visibility = "hidden";
            
            window.print();
            ButtonControl.style.visibility = "visible";
            
        }
      </script>
    