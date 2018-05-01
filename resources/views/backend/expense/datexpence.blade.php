@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('expenses/create') }}">Create Expense</a>
          <span class="breadcrumb-item active">All Expense</span>
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
                        <th>#ID</th>
                        <th>Expense Name</th>
                        <th>Company Name</th>
                        <th>Expense Note</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Expense Name</th>
                        <th>Company Name</th>
                        <th>Expense Note</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($expe as $ex)
                    <tr>
                        <td>{{ $ex->id }}</td>
                        <td>{{ $ex->ex_name }}</td>
                        <td>{{ $ex->companies->company_name }}</td>
                        <td>{{ $ex->ex_note }}</td>
                        <td>{{ $ex->ex_amount }}</td>
                        <td>{{ $ex->ex_date }}</td>
                       
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

    <!-- Edit Company Modal -->
    <div class="modal fade expense_modal" id="expenseEditModal" tabindex="-1" role="dialog" aria-labelledby="companyEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-expense">
                
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection