@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
  <div class="col-md-10 text-center">
    <form method="POST" enctype="multipart/form-data" action="{{route('addRoom')}}">
      
      {{csrf_field()}}
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Add Room</h4>
      

        <div class="card-body">
          <form>
         
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Room Name</label>
                  <input type="text" class="form-control"  id="room_name" name="room_name" value="{{old('room_name')}}" placeholder="Enter Room Name">
                  <div>{{ $errors->first('room_name')}}</div>
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Room Description</label>
                  <input type="text" class="form-control"  id="description" name="description" value="{{old('description')}}" placeholder="Enter Room Description">
                  <div>{{ $errors->first('description')}}</div>
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Room Capacity</label>
                  <input type="text" class="form-control"  id="capacity" name="capacity" value="{{old('capacity')}}" placeholder="Enter Room capacity">
                  <div>{{ $errors->first('capacity')}}</div>
                </div>
              </div>
              
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Room Type</label>
                  <select name="room_type" id="room_type"class="form-control" value="{{old('room_type')}}">
                    <option value="Single">Single Type</option>
                    <option value="Apartment">Apartment Type</option>
                  </select>
                </div>
              </div>

            
              
            </div>
     
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label>Room Price</label>
                  <select name="price" id="price"class="form-control" value="{{old('price')}}">
                    <option value="3000">3000</option>
                    <option value="3500">3500</option>
                  </select>
                 
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="input-group">
                  <div class="custom-file">
                   <input type="file" class="custom-file-input" name="image">
                   <label class="custom-file-label">Choose File</label>

                  </div>
               
                </div>
              </div>
           
              
              
            </div>
           
                  
            
            <div class="modal-footer">
              <a href="" type="button" class="btn btn-secondary">Close</a>
              <button type="submit" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>

        
    </div>
</div>
</form>
</div> 
@endsection