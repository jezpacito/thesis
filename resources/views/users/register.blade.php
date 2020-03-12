<!--internatinal flags scripts-->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/img/flags.png"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/img/flags.png"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/utils.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css">
{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css"></script> --}}

@extends('layouts.master')

@section('title')
    Rental Management
@endsection


@section('content')



    <div class="row">
        <div class="col-md-10 text-center">
            <form method="POST" action="/user-store">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Register Tenant</h4>

                        {{csrf_field()}}
                        {{-- 
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control"  name="password" value="{{old('email')}}" placeholder="Enter Password">
                            <div>{{ $errors->first('email')}}</div>
                        </div>--}}
                        
                        <div class="card-body">
                            <form>
                              <div class="row">
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control"  name="firstname" value="{{old('firstname')}}" placeholder="Enter First Name">
                                    <div>{{ $errors->first('firstname')}}</div>
                                  </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control"  name="middlename" value="{{old('middlename')}}" placeholder="Enter Middle Name">
                                    <div>{{ $errors->first('middlename')}}</div>
                                  </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control"  name="lastname"  value="{{old('lastname')}}"  placeholder="Enter Last Name">
                                    <div>{{ $errors->first('lastname')}}</div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control"  name="email" value="{{old('email')}}" placeholder="Enter Email">
                                    <div>{{ $errors->first('email')}}</div>
                                  </div>
                                </div>

                                <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                    <label>Phone no.</label>
                                    <input type="text" class="form-control"  name="phone" value="{{old('phone')}}">
                                    <div>{{ $errors->first('phone')}}</div>
                                  </div>
                                </div> 

                                 <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                    <label>Capacity</label>
                                    <input type="tel" class="form-control" id="phone"  name="capacity" value="{{old('capacity')}}">
                                    {{-- <div>{{ $errors->first('phone')}}</div> --}}
                                  </div>
                                </div> 
 

                                
                                <div class="invisible">
                                  <label for="">Type</label>
                                 <select class="form-control" name="type">
                                     @foreach($type as $types)
                                         <option value="{{$types->id}}">{{$types->type}}</option>
                                         @endforeach
                                 </select>
                              </div>
                              
                              </div>
                              <div class="modal-footer">
                              <a href="{{url('/tenant')}}" type="button" class="btn btn-secondary">Close</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                          </div>
{{-- 
                        <div class="modal-footer">
                            <a href="" type="button" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div> --}}
                    </div>
                </div>
        </form>
        </div>
{{--      
        <script>
        $('#phone').intlTelInput({
          utilScript: 'js/utils.js'
        });
        </script>      --}}

@endsection