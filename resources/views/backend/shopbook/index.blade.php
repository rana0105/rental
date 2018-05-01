@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('shopbooks/create') }}">Create ShopBook</a>
          <span class="breadcrumb-item active">All ShopBook</span>
        </nav>
        <div class="company-list mar-bottom">
            <table id="company-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <thead>
                    <tr>
                        <th>ID#</th>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Tenant Name</th>
                        <th>Shop No.</th>
                        <th>Booking Date</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID#</th>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Tenant Name</th>
                        <th>Shop No.</th>
                        <th>Booking Date</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </tfoot>
                <tbody>
                @foreach($shopbooks as $shb)
                    <tr>
                        <td>{{ $shb->id }}</td>
                        <td>{{ $shb->companies->company_name }}</td>
                        <td>{{ $shb->complexes->complex_name }}</td>
                        <td>{{ $shb->tenants->tenat_name }}</td>
                        <td>{{ $shb->shops->shop_no }}</td>
                        <td>{{ $shb->book_date }}</td>
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
  
@endsection