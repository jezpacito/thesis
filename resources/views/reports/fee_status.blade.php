@extends('layouts.master')
@section('title')
    
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Fee's Report </h4>
          {{-- <a href="/registerTenant" class="btn btn-primary">Add</a> --}}
         </div>
         

          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

              <th>Date</th>
                <th>Status</th>
                <th> Action</th>
            
              </thead>
              <tbody>
              <form action="{{url('/submit-status')}}" method="post">@csrf
                  <td>
                    <input type="month" name="date" class="form-control">
                  </td>
                <td>
                    <select class="form-control" name="status">
                    <option value='unpaid'>Unpaid </option>
                    <option value='paid'>Paid </option>
                    </select>
                </td>
                <td>
                    <button class="btn btn-primary" type="submit" >Submit </button>
                </td>

            </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection