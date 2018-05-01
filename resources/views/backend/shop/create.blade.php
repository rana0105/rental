@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('shops') }}">Shop</a>
          <span class="breadcrumb-item active">Create Shop</span>
        </nav>
        <div class="add-complex">
            <form action="{{ route('shops.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                  <label>Company Name *</label>
                  <select class="form-control" id="company_id" name="company_i">
                  <option value="">--Select Company--</option>
                  @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Complex Name *</label>
                  <select class="form-control" id="complex_id" name="complex_i">
                  <option value="">--Select Complex--</option>
                  @foreach($complex as $comp)
                    <option value="{{ $comp->id }}">{{ $comp->complex_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Shop No: *</label>
                <input type="text" name="shop_no" class="form-control" placeholder="Enter Shop no.." required="">
              </div>
              <div class="form-group">
                <label>Square Feet</label>
                <input type="text" name="squ_feet" class="squ_feet form-control" placeholder="Enter square feet..">
              </div>
              <div class="form-group">
                  <label>Floor*</label>
                  <select class="form-control" id="floor" name="floor">
                    <option value="">--Select Floor--</option>
                    <option value="Ground Floor">Ground Floor</option>
                    <option value="1st Floor">1st Floor</option>
                    <option value="2nd Floor">2nd Floor</option>
                    <option value="3rd Floor">3rd Floor</option>
                    <option value="4th Floor">4th Floor</option>
                    <option value="5th Floor">5th Floor</option>
                    <option value="6th Floor">6th Floor</option>
                    <option value="7th Floor">7th Floor</option>
                    <option value="8th Floor">8th Floor</option>
                    <option value="9th Floor">9th Floor</option>
                    <option value="10th Floor">10th Floor</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Description *</label>
                <textarea name="description" class="form-control" placeholder="Description" required=""></textarea>
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