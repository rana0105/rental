@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Tenant Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('tenant-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>Complex Wise Tenant List</label>
                  <select class="form-control" id="complex_id" name="complex">
                  <option value="">--Select Complex--</option>
                  @foreach($com as $co)
                    <option value="{{ $co->id }}">{{ $co->complex_name }}</option>
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
        <div class="add-complex">
            <form action="{{ url('tenant-due-complex') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>Complex Wise Tenant Payment (DUE)</label>
                  <select class="form-control" id="complex_id" name="complex_id">
                  <option value="">--Select Complex--</option>
                     @foreach($com as $co)
                      <option value="{{ $co->id }}">{{ $co->complex_name }}</option>
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