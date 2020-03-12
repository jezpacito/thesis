@extends('layouts.master')
@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
  @if(auth()->user()->type_id === 1)

    {{-- <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rent Details</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Tenant Name</th>
                <th>Room Name</th>
                <th>Room Type</th>
                <th class="text-center">Tenant Quantity</th>
                <th class="text-right">Rent Started</th>
                <th class="text-right">Rent Ended</th>
              </thead>
              <tbody>
                @foreach ($jointabledata as $row)
                <tr>
                <td>{{$row->lastname}}, {{$row->firstname}}</td>
                    <td>{{$row->room_name}}</td>
                    <td>{{$row->room_type}}</td>
                    <td class="text-center">{{$row->tenant_quantity}}</td>

                    <td class="text-right">sample</td>
                    <td class="text-right">sample</td>
                    
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}




<h5>Welcome . You can Check your history in this site</h5>
  @else
  <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          {{-- <h5 class="card-category">Rooms</h5> --}}
          {{-- <h4 class="card-title text-center" >Type of Rooms</h4> --}}
        </div>
        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block" src="/assets/img/bg1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Nature, United States</h5>
                </div>
              </div>
              <div class="carousel-item active">
                <img class="d-block" src="/assets/img/bg3.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Somewhere Beyond, United States</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block" src="/assets/img/bg4.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Yellowstone National Park, United States</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="now-ui-icons arrows-1_minimal-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        @include('sweetalert::alert')
        <div class="card-header">
          {{-- <h5 class="card-category">List of Rooms</h5> --}}
          {{-- <h4 class="card-title text-center ">Rooms</h4> --}}

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                  <img class="d-block" src="/assets/img/bg1.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Nature, United States</h5>
                  </div>
                </div>
                <div class="carousel-item active">
                  <img class="d-block" src="/assets/img/bg3.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Somewhere Beyond, United States</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="/assets/img/bg4.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Yellowstone National Park, United States</h5>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
