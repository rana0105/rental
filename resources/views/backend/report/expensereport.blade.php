@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>Expense Report</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('expense-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>Select Company</label>
                  <select class="form-control" id="com-exp" name="company_exp">
                    <option value="">Select Company</option>
                    @foreach($exp as $com)
                     <option value="{{ $com->company_id }}">{{ $com->companies->company_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Select Complex</label>
                  <select class="form-control" id="" name="complex_exp">
                    <option value="">Select Complex</option>
                    @foreach($exp as $cop)
                     <option value="{{ $cop->complex_id }}">{{ $cop->complexes->complex_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" id="id" name="category_exp">
                    <option value="">--Category--</option>
                    @foreach($exp as $e)
                     <option value="{{ $e->cat_id }}">{{ $e->categories->cat_name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="form-group">
                  <label>From Date</label>
                  <input type="date" name="datefrom" class="form-control">
                </div>
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" name="dateto" class="form-control">
                </div>
                <div class="form-group">
                  <label>Print</label>
                  <select class="form-control" id="" name=" ">
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