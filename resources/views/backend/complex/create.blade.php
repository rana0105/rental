@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('complexes') }}">Complex</a>
          <span class="breadcrumb-item active">Create Complex</span>
        </nav>
        <div class="add-complex">
            <form action="{{ route('complexes.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Complex Name *</label>
                <input type="text" name="complex_name" class="form-control" placeholder="Enter complex name" required="">
              </div>
              <div class="form-group">
                <label>Address *</label>
                <textarea name="plex_address" class="form-control" placeholder="Address" required=""></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="plex_phone" class="form-control" placeholder="Enter phone no">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="plex_mobile" class="form-control" placeholder="Enter phone no">
              </div>
              <div class="form-group">
                <label>Fax</label>
                <input type="text" name="plex_fax" class="form-control" placeholder="Enter fax">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="plex_email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                  <label>Company Name *</label>
                  <select class="form-control" id="company_id" name="company_id">
                  <option value="">--Select Company--</option>
                  @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                  @endforeach
                  </select>
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