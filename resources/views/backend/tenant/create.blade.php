@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('tenants') }}">All Tenant</a>
          <span class="breadcrumb-item active">Create Tenant</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('tenants.store') }}" method="POST" enctype="multipart/form-data" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Tenant Name </label>
                <input type="text" name="tenat_name" class="form-control" placeholder="Enter Tenant Name " required="">
              </div>
              <div class="form-group">
                <label>Father/Hasband</label>
                <input type="text" name="father_hus" class="form-control" placeholder="Enter Father/Hasband">
              </div>
              <div class="form-group">
                <label>Mother Name</label>
                <input type="text" name="t_mother" class="form-control" placeholder="Enter Mother Name" required="">
              </div>
              <div class="form-group">
                <label>Date</label>
                <input type="date" name="t_date" class="form-control">
              </div>
              <div class="form-group">
                <label>Proprietor Name</label>
                <input type="text" name="t_propiter" class="form-control" placeholder="Enter Proprietor Name" required="">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="t_address" class="form-control" placeholder="Address" required=""></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="t_phone" class="form-control" placeholder="Enter phone no">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="t_mobile" class="form-control" placeholder="Enter phone no" required="">
              </div>
              <div class="form-group">
                <label>Fax</label>
                <input type="text" name="t_fax" class="form-control" placeholder="Enter fax">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="t_email" class="form-control" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <label>Web</label>
                <input type="url" name="t_web" class="form-control" placeholder="Enter website's url" required="">
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" id="t_image" name="t_image">
              </div>
              <div class="form-group">
                <label for="tenant_status">Status <span class="required">*</span></label>
                <br />
                <input id="tenant_status" name="tenant_status" type="radio" class="" value="1"  />
                <label for="tenant_status" class="">Active</label>

                <input id="tenant_status" name="tenant_status" type="radio" class="" value="0"  />
                <label for="tenant_status" class="">Inactive</label>
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