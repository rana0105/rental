@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('expenses') }}">Expense</a>
          <span class="breadcrumb-item active">Create Expense</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('expenses.store') }}" method="POST" files="true">
              {{ csrf_field() }}

              <div class="form-group">
                <label>Expense Name*</label>
                <input type="text" name="ex_name" class="form-control" placeholder="Enter Expense Name" required="">
              </div>
              <div class="form-group">
                <label>Category*</label>
                  <select class="form-control" id="cat_id" name="cat_id">
                  <option value="">--Select--</option>
                    @foreach($cats as $cat)
                      <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Company Name*</label>
                  <select class="form-control" id="company_id" name="company_id">
                  <option value="">--Select--</option>
                    @foreach($company as $com)
                      <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Complex Name*</label>
                  <select class="form-control" id="complex_id" name="complex_id">
                  <option value="">--Select--</option>
                    @foreach($complex as $cop)
                      <option value="{{ $cop->id }}">{{ $cop->complex_name }}</option>
                    @endforeach
                  </select>
              </div>
              
              <div class="form-group">
                <label>Amount*</label>
                <input type="text" name="ex_amount" class="form-control" placeholder="Enter Amount Name" required="">
              </div>
              <div class="form-group">
                <label>Date of Expense*</label>
                <input type="date" name="ex_date" class="form-control">
              </div>
              <div class="form-group">
                <label>Note*</label>
                <textarea name="ex_note" class="form-control" placeholder="Please note here" required=""></textarea>
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