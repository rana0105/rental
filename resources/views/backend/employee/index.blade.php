@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('employees/create') }}">Create Employee</a>
          <span class="breadcrumb-item active">All Employee</span>
        </nav>
        <div class="company-list">
            <table id="company-list mar-bottom" class="table table-striped table-bordered  mar-bottom" cellspacing="0" width="100%">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($emps as $em)
                    <tr>
                        <td>{{ $em->id }}</td>
                        <td>{{ $em->e_name }}</td>
                        <td>{{ $em->designation }}</td>
                        <td>{{ $em->pre_address }}</td>
                        <td>{{ $em->e_mobile }}</td>
                        <td>{{ $em->e_email }}</td>
                        <td>
                            <button type="button" class="employee_modal btn btn-primary" data-toggle="modal" data-target="#employeeEditModal" data-id="{{ $em->id }}">Edit</button>
                            {!! Form::open(['route' => ['employees.destroy', $em->id], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
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
    <div class="modal fade employee_modal" id="employeeEditModal" tabindex="-1" role="dialog" aria-labelledby="tenantEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-employee">
               
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Company Modal -->
    <div class="modal fade" id="companyDelModal" tabindex="-1" role="dialog" aria-labelledby="companyDelModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h2>Delete The Company</h2>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Delete The Company</button>
          </div>
        </div>
      </div>
    </div>
@endsection