@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('acrents/create') }}">Create AC Rent</a>
          <span class="breadcrumb-item active">AC Rent</span>
        </nav>

        <div class="col-md-6" style="padding-bottom: 2%;">
          <form action="{{ url('acrent-report') }}" method="post" target="blank">
          {{ csrf_field() }}
            <div class="col-md-4">
              <input type="text" class="form-control" name="shop_no" placeholder="Input Shop No..">
            </div>
            <div class="col-md-2">
              <input type="submit" class="btn-ac btn-success">
            </div>
          </form>
        </div>
         
        <div class="company-list">       
            <table id="company-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Shop No</th>
                        <th>Square Feet</th>
                        <th>Per Rent</th>
                        <th>Total Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Client Name</th>
                        <th>Shop No</th>
                        <th>Square Feet</th>
                        <th>Per Rent</th>
                        <th>Total Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($acrents as $ac)
                    <tr>
                        <td>{{ $ac->acclient_name }}</td>
                        <td>{{ $ac->acshop_no }}</td>
                        <td>{{ $ac->acsqu_feet }}</td>
                        <td>{{ $ac->acper_rent }}</td>
                        <td>{{ $ac->ac_tamount }}</td>
                        <td>{{ $ac->ac_date }}</td>
                        <td>
                          @if($ac->status == 1)
                            <button class="btn btn-success">Paid</button>
                          @endif
                          @if($ac->status == 0)
                            <button class="btn btn-danger">Unpaid</button>
                          @endif    
                        </td>                         
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