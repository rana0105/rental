@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('shopbooks') }}">All ShopBook</a>
          <span class="breadcrumb-item active">Create ShopBook</span>
        </nav>
        <div class="add-complex">
            <form action="{{ route('shopbooks.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              @if (count($errors) > 0)
                              <div class="alert alert-danger">
                      {{-- <strong>Whoops!</strong> There were some problems with your input.<br><br> --}}
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </div>
                @endif
              <div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
                  <label>Company Name *</label>
                  <select class="form-control" id="company_id" name="company_name" required="">
                  <option value="">Select Company</option>
                  @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group {{ $errors->has('complex_name') ? ' has-error' : '' }}">
                  <label>Complex Name *</label>
                  <select class="form-control" id="complex_id" name="complex_name" required="">
                  <option value="">Select Complex</option>
                  @foreach($complex as $comp)
                    <option value="{{ $comp->id }}">{{ $comp->complex_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group {{ $errors->has('shop_no') ? ' has-error' : '' }}">
                  <label>Shop No.*</label>
                  <select class="form-control" id="shop_id" name="shop_id" required="">
                  <option value="">Select Shop No.</option>
                  @foreach($shop as $s)
                    <option value="{{ $s->id }}">{{ $s->shop_no }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group {{ $errors->has('tenant_id') ? ' has-error' : '' }}">
                  <label>Tenant ID.*</label>
                  <select class="form-control" id="tenant_id" name="tenant_id" required="">
                  <option value="">Select Tenant</option>
                  @foreach($ten as $t)
                    <option value="{{ $t->id }}">{{ $t->tenat_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group {{ $errors->has('book_date') ? ' has-error' : '' }}">
                <label>Date</label>
                <input type="date" name="book_date" class="form-control" required="">
              </div>
              <div class="form-group {{ $errors->has('rent_feet') ? ' has-error' : '' }}">
                <label>Rent Per Feet</label>
                <input type="hidden" name="squ_feet" class="squ_feet form-control" value="1">
                <input type="text" name="rent_feet" class="rent_feet form-control" placeholder="Rent Per Feet" required="">
              </div>
              <div class="form-group {{ $errors->has('type_name') ? ' has-error' : '' }}">
                <label>Total Rent</label>
                <input type="text" name="total_rent" readonly="" class="total form-control" placeholder="Total Rent">
              </div>
              <div class="form-group {{ $errors->has('type_name') ? ' has-error' : '' }}">
                <label>Security Money</label>
                <input type="text" name="secu_money" class="form-control" placeholder="Security Money">
              </div>
              <div class="form-group {{ $errors->has('type_name') ? ' has-error' : '' }}">
                <label>Advance Money</label>
                <input type="text" name="adv_money" class="form-control" placeholder="Advance Money">
              </div>
              <div class="form-group {{ $errors->has('type_name') ? ' has-error' : '' }}">
                <label>Advance Refund</label>
                <input type="text" name="adv_refund" class="form-control" placeholder="Advance Refund">
              </div>
              <button type="submit" class="btn btn-primary mar-bottom">Booked</button>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection