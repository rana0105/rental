@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('banks') }}">Bank</a>
          <span class="breadcrumb-item active">Bank Create</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('banks.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Bank Name*</label>
                <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name" required="">
              </div>
              <div class="form-group">
                <label>Branch Name*</label>
                <input type="text" name="branch_cname" class="form-control" placeholder="Enter Branch Name">
              </div>
              <div class="form-group">
                <label>Account Number*</label>
                <input type="text" name="account_num" class="form-control" placeholder="Enter Account Number" required="">
              </div>
              
              <button type="submit" class="btn btn-primary mar-bottom">Submit</button>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection