@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <h2>All Receipts & Paymnet Reports</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('in-out-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
              <div class="main">
                <div class="form-group">
                  <label>From Date</label>
                  <input type="date" name="datefrom" class="form-control">
                </div>
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" name="dateto" class="form-control">
                </div>
                <div class="form-group">
                  <label>Payment & Receipts</label>
                  <select class="form-control" id="id" name="bill_pay">
                    <option value="">--Select Invoice--</option>
                    @foreach($paybill as $payinv)
                    <option value="{{ $payinv->id }}">{{ $payinv->id }}</option>
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
    </div>
  </div>
@endsection