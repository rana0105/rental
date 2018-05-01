@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Complex Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('complex-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>Company Name</label>
                  <select class="form-control" id="company-id" name="company">
                    <option value="">--Select Company--</option>
                    @foreach($modelcom as $com )
                      <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Complex</label>
                    <select class="form-control" id="complex_id" name="complex">
                      <option value="">--Select Complex--</option>
                      @foreach($compx as $cox)
                      <option value="{{ $cox->id }}">{{ $cox->complex_name }}</option>
                      @endforeach
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