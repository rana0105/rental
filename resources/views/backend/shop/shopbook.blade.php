@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('shop-booking') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                  <label>Company Name *</label>
                  <select class="form-control" id="company_id" name="company_id">
                  @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Complex Name *</label>
                  <select class="form-control" id="complex_id" name="complex_id">
                  @foreach($complex as $comp)
                    <option value="{{ $comp->id }}">{{ $comp->complex_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Shop No.*</label>
                  <select class="form-control" id="shop_id" name="shop_id">
                  @foreach($shop as $s)
                    <option value="{{ $s->id }}">{{ $s->shop_no }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Tenant ID.*</label>
                  <select class="form-control" id="tenant_id" name="tenant_id">
                  @foreach($tenant as $t)
                    <option value="{{ $t->id }}">{{ $t->tenat_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Date</label>
                <input type="date" name="book_date" class="form-control">
              </div>
              <div class="form-group">
                <label>Rent Per Feet</label>
                <input type="text" name="rent_feet" class="form-control" placeholder="Rent Per Feet">
              </div>
              <div class="form-group">
                <label>Total Rent</label>
                <input type="text" name="total_rent" class="form-control" placeholder="Total Rent">
              </div>
              <div class="form-group">
                <label>Security Money</label>
                <input type="text" name="secu_money" class="form-control" placeholder="Security Money">
              </div>
              <div class="form-group">
                <label>Advance Money</label>
                <input type="text" name="adv_money" class="form-control" placeholder="Advance Money">
              </div>
              <div class="form-group">
                <label>Advance Refund</label>
                <input type="text" name="adv_refund" class="form-control" placeholder="Advance Refund">
              </div>
              <button type="submit" class="btn btn-primary">Booked</button>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection