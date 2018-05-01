@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Rent Collection Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('rentcollect-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>From Date</label>
                  <input type="date" class="form-control" name="datefrom" id="datefrom">
                </div>
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" class="form-control" name="dateto" id="dateto"">
                </div>
                <div class="form-group">
                  <label>Select Company</label>
                  <select class="form-control" id="company-id" name="company">
                    <option value="">Select Company</option>
                    @foreach($modelcom as $com )
                      <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Complex</label>
                  <select class="form-control" id="complex-id" name="complex">
                    <option value="">Complex</option>
                    @foreach($compx as $cox)
                      <option value="{{ $cox->id }}">{{ $cox->complex_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Shop</label>
                  <select class="form-control" id="shop_id" name="shop">
                    <option value="">Shop No</option>
                    @foreach($sop as $so)
                        <option value="{{ $so->id }}">{{ $so->shop_no }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Print</label>
                  <select class="form-control" id=" " name="">
                    <option value="">Print.</option>
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