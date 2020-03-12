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
          <h4 class="card-title">Room Details</h4>
          @if(auth()->user()->type_id == 2)
            
             <h6 class="text-danger text-lg"> </h6>
          @else
          <a href="/insertRoom" class="btn btn-primary ">add</a>
          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table mt-5">
              <thead class=" text-primary">
                <th>ID</th>
                <th class="text-center">Room Name</th>
                <th class="text-center">Room Price</th>
                <th class="text-center">Capacity</th>
                <th>Images</th>
               
                {{-- <th class="text-right">
                    Delete
                </th> --}}
              </thead>
              <tbody>
                  @foreach ($rooms as $room)
                      
                  
                <tr>
                <td class="text-center">{{$room->id}}</td>
                <td class="text-center">{{$room->room_name}}</td>
                <td class="text-center">{{$room->price}}</td>
                <td class="text-center">{{$room->capacity}} persons</td>
             

               
        

                  {{-- <td class="text-center">
                    <a href="{{ url('editroom/'.$room->id)}}">
                      <button class="btn btn-warning btn-sm">Edit
                      </button>
                    </a>

                    <a href={{url('/room-booked',$room->id)}}>
                      @if($room->status === 'vacant')
                      
                      <button class="btn btn-info btn-sm">Assign</button> 
                      
                    @else
                
                    @endif
                  </a>
                  <a href="{{ url('roomdisplay/'.$room->id)}}">
                    <button class="btn btn-success btn-sm">Display
                    </button>
                  </a>
                    </td>   --}}
                    <td>
                      <div class="btn-group dropup text-center">
                        <button class="btn btn-secondary text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                          <a href="{{ url('editroom/'.$room->id)}}">
                            <button class="btn btn-warning btn-sm">Edit
                            </button>
                          </a>
                          <a href="{{ url('roomdisplay/'.$room->id)}}">
                            <button class="btn btn-success btn-sm">Display
                            </button>
                          </a>
                          <a href={{url('/room-booked',$room->id)}}>
                            @if($room->status === 'vacant')
                            
                            <button class="btn btn-info btn-sm mt-1">Assign</button> 
                            
                          @else
                      
                          @endif
                        </a>
                        </div>
                      </div>
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
    
@endsection