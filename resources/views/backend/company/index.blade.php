@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('companies/create') }}">Create Company</a>
          <span class="breadcrumb-item active">All Company</span>
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
                        <th>Company Name</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Owner Name</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Company Name</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Owner Name</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->created_at }}</td>
                        <td>{{ $company->c_email }}</td>
                        <td>{{ $company->ownner_cname }}</td>
                        <td>{{ $company->c_mobile }}</td>
                        <td>
                          @can('edit_companies')
                            <button type="button" class="company_modal btn btn-primary" data-toggle="modal" data-target="#companyEditModal" data-id="{{ $company->id }}">Edit</button>
                          @endcan
                          @can('delete_companies')
                            {!! Form::open(['route' => ['companies.destroy', $company->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
                            {{Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-responsive delete-btn'))}}
                            {!! Form::close() !!}
                          @endcan
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

    <!-- Edit Company Modal -->
    <div class="modal fade company_modal" id="companyEditModal" tabindex="-1" role="dialog" aria-labelledby="companyEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-company">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection