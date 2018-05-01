@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('tenants/create') }}">Create Tenant</a>
          <span class="breadcrumb-item active">All Tenant</span>
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
                        <th>Tenant Name</th>
                        <th>Father/Husband</th>
                        <th>Address</th>
                        <th>Phone/Mobile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Tenant Name</th>
                        <th>Father / Husband</th>
                        <th>Address</th>
                        <th>Phone / Mobile</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($tenants as $t)
                    <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->tenat_name }}</td>
                        <td>{{ $t->father_hus }}</td>
                        <td>{{ $t->t_address }}</td>
                        <td>{{ $t->t_phone }} / {{ $t->t_mobile }}</td>
                        <td>
                            <a href="{{ url('tprofile', $t->id) }}" class="btn btn-info">Profile</a>
                            <button type="button" class="tenant_modal btn btn-primary" data-toggle="modal" data-target="#tenantEditModal" data-id="{{ $t->id }}">Edit</button>
                            {!! Form::open(['route' => ['tenants.destroy', $t->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
                            {{Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-responsive delete-btn'))}}
                            {!! Form::close() !!}
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
    <div class="modal fade tenant_modal" id="tenantEditModal" tabindex="-1" role="dialog" aria-labelledby="tenantEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-tenant">
               
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection