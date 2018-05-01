@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Library</a>
          <a class="breadcrumb-item" href="#">Data</a>
          <span class="breadcrumb-item active">Bootstrap</span>
        </nav>
        <div class="company-list">
            <table id="company-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Shop No.</th>
                        <th>Tenant Name</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Shop No.</th>
                        <th>Tenant Name</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($rentcollects as $r)
                    <tr>
                        <td>{{ $r->companies->company_name }}</td>
                        <td>{{ $r->complexes->complex_name }}</td>
                        <td>{{ $r->shops->shop_no }}</td>
                        <td>{{ $r->tenants->tenat_name }}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection