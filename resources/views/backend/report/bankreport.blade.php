@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Bank Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('companyreport') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label>From Date</label>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label>All</label>
                  <select class="form-control" id="complex_id" name="complex_id">
                    <option value="">All</option>
                 </select>
                </div>
                <div class="form-group">
                  <label>Print</label>
                  <select class="form-control" id="complex_id" name="complex_id">
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