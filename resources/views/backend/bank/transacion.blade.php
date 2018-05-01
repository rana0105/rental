@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main mar-bottom">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <span class="breadcrumb-item active">Transaction</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('banks.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Bank / Branch*</label>
                  <select class="form-control" id="company_id" name="bank_name">
                    @foreach($bank as $b)
                      <option value="{{ $b->id }}">{{ $b->bank_name }} / {{ $b->branch_cname }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Branch Name*</label>
                  <select class="form-control" id="company_id" name="branch_cname">
                      <option value="Credit(Deposit)">Credit(Deposit)</option>
                      <option value="Debit(Withdraw)">Debit(Withdraw)</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Note *</label>
                <input type="text" name="account_num" class="form-control" placeholder="No not yet" required="">
              </div>
              <div class="form-group">
                <label>Date*</label>
                <input type="date" name="tra_date" class="form-control">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection