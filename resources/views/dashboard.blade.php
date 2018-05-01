@extends('layouts.app')
@section('content')
    <div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <span class="breadcrumb-item active">Dashboard</span>
        </nav>
        <div class="summary-statement">
        <h1>Lion Asset Management</h1>
        <h3>Report at a Glance- <span>{{ $currentdate }}</span></h3>
            <div class="income">
                <h3>Income <span>{{ $totalincomemonth }}</span></h3>
            </div>
            <div class="expense">
                <h3>Expense <span>{{ $totoalexpensemonth }}</span></h3>
            </div>
        </div>
    </div>
      <!--/main col-->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
@endsection
