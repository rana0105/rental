@extends('layouts.app')
@section('content')
 <div class="col-md-8 col-lg-10 main">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="#">Home</a>
        <a class="breadcrumb-item" href="#">Library</a>
        <a class="breadcrumb-item" href="#">Data</a>
        <span class="breadcrumb-item active">Bootstrap</span>
      </nav>
      <div class="add-complex">
          <form action="{{ route('shops.store') }}" method="POST" files="true">
            {{ csrf_field() }}
            <div class="col-md-6">
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
                  <label>Booked*</label>
                  <select class="form-control" id="floor" name="floor">
                    <option value="">--Select Booked--</option>
                    <option value="Booked">Booked</option>
                    <option value="Unbooked">Unbooked</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Year*</label>
                  <select class="form-control" id="floor" name="floor">
                    <option value="">--Select Year--</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label>Month*</label>
                  <select class="form-control" id="floor" name="floor" multiple="" style="height: 290px;">
                    <option value="">--Select Year--</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Bill Generate*</label>
                <button type="submit" class="btn btn-primary">Bill Generate</button>
              </div>
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