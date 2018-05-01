@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('companies') }}">Company</a>
          <span class="breadcrumb-item active">Create Company</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('companies.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required="">
              </div>
              <div class="form-group">
                <label>Short Name</label>
                <input type="text" name="short_cname" class="form-control" placeholder="Enter short name">
              </div>
              <div class="form-group">
                <label>Owner Name</label>
                <input type="text" name="ownner_cname" class="form-control" placeholder="Enter owner name" required="">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="c_address" class="form-control" placeholder="Address" required=""></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="c_phone" class="form-control" placeholder="Enter phone no">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="c_mobile" class="form-control" placeholder="Enter phone no" required="">
              </div>
              <div class="form-group">
                <label>Fax</label>
                <input type="text" name="c_fax" class="form-control" placeholder="Enter fax">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="c_email" class="form-control" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <label>Web</label>
                <input type="url" name="c_web" class="form-control" placeholder="Enter website's url" required="">
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