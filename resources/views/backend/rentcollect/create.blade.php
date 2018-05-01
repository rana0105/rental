@extends('layouts.app')
@section('content')
 <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <span class="breadcrumb-item active">Rent Collect</span>
        </nav>
        <div class="add-complex">
            <form action="{{ url('postProfile') }}" method="POST" files="true">
              
              {{ csrf_field() }}
              <div class="form-group">
                  <label>Company Name *</label>
                  <select class="form-control" id="company_id" name="company_id">
                  <option value="">Select Company</option>
                  @foreach($company as $com)
                    <option value="{{ $com->id }}">{{ $com->company_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Complex Name *</label>
                  <select class="form-control" id="complex_id" name="complex_id">
                  <option value="">Select Complex</option>
                  @foreach($complex as $comp)
                    <option value="{{ $comp->id }}">{{ $comp->complex_name }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Shop No.*</label>
                  <select class="form-control" id="shop_id" name="shop_no">
                  <option value="">Select Shop No.</option>                    
                  @foreach($shop as $s)
                  <option value="{{ $s->id }}">{{ $s->shop_no }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label>Tenant ID.*</label>
                  <select class="form-control" id="tenant_id" name="tenant_id">
                  <option value="">Select Tenant.</option>
                  @foreach($tenant as $t)
                    <option value="{{ $t->id }}">{{ $t->tenat_name }}</option>
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