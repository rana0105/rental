@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('acrents') }}">All AC Rent</a>
          <span class="breadcrumb-item active">Create AC Rent</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('acrents.store') }}" method="POST"  files="true"> 
              {{ csrf_field() }}
              <div class="form-group">
                <label>Tenant Name </label>
                <input type="text" name="actenat_name" class="form-control" placeholder="Enter Tenant Name " required="">
              </div>
              <div class="form-group">
                <label>Shop No</label>
                <input type="text" name="shop_no" class="form-control" placeholder="Enter Shop No">
              </div>
              <div class="form-group">
                <label>Square Feet</label>
                <input type="text" name="acsqu_feet" class="form-control acsqu_feet" placeholder="Enter Square Feet" required="">
              </div>
              <div class="form-group">
                <label>Square Feet</label>
                <input type="text" name="acper_rent" class="form-control acper_rent" placeholder="Enter Per Rent" required="">
              </div>
              <div class="form-group">
                <label>Total Amount</label>
                <input type="text" name="ac_tamount" class="form-control ac_tamount" placeholder="Total Amount" required="">
              </div>
              <div class="form-group">
                <label>Date</label>
                <input type="date" name="ac_date" class="form-control">
              </div>
              <div class="form-group">
                <label for="tenant_status">Status <span class="required">*</span></label>
                <br />
                <input id="tenant_status" name="ac_status" type="radio" class="" value="1"  />
                <label for="tenant_status" class="">Paid</label>

                <input id="tenant_status" name="ac_status" type="radio" class="" value="0"  />
                <label for="tenant_status" class="">Unpaid</label>
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