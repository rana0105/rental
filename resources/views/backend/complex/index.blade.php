@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('complexes/create') }}">Create Complex</a>
          <span class="breadcrumb-item active">All Complex</span>
        </nav>
        <div class="company-list  mar-bottom">
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
                        <th>Complex Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($complexes as $complex)
                    <tr>
                        <td>{{ $complex->id }}</td>
                        <td>{{ $complex->companies->company_name }}</td>
                        <td>{{ $complex->complex_name }}</td>
                        <td>{{ $complex->plex_address }}</td>
                        <td>{{ $complex->plex_phone }}</td>
                        <td>{{ $complex->plex_email }}</td>
                        <td>
                            <button type="button" class="complex_modal btn btn-primary" data-toggle="modal" data-target="#complexEditModal" data-id="{{ $complex->id }}">Edit</button>
                            {!! Form::open(['route' => ['complexes.destroy', $complex->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
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
    <div class="modal fade complex_modal" id="complexEditModal" tabindex="-1" role="dialog" aria-labelledby="complexEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="complexModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-complex">
            
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection