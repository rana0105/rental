@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Utility Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('utility-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" name="datefrom" class="form-control">
                </div>
                <div class="form-group">
                  <label>From Date</label>
                  <input type="date" name="dateto" class="form-control">
                </div>
                <div class="form-group">
                  <label>Select Company</label>
                  <select class="form-control" id="company_id" name="company_uti">
                    <option value="">Select Company</option>
                    @foreach($uticom as $utic)
                    <option value="{{ $utic->id }}">{{ $utic->company_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Select Complex</label>
                  <select class="form-control" id="complex_id" name="complex_uti">
                    <option value="">--Select Complex--</option>
                    @foreach($utiplex as $utip)
                    <option value="{{ $utip->id }}">{{ $utip->complex_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Print</label>
                  <select class="form-control" id="" name="">
                    <option value="">Print</option>
                 </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection