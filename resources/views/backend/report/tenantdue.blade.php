@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Tenant Due Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('tenant-due-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>Select Company</label>
                  <select class="form-control" id="complex_id" name="company_due">
                    <option value="">Select Company</option>
                    @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Select Complex First</label>
                  <select class="form-control" id="complex_id" name="complex_due">
                    <option value="">Select Complex</option>
                    @foreach($complex as $plex)
                    <option value="{{ $plex->id }}">{{ $plex->complex_name }}</option>
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