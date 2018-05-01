@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('categories/create') }}">Category</a>
          <span class="breadcrumb-item active">Category</span>
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
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($cats as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->cat_name }}</td>
                        <td>{{ $c->cat_des }}</td>
                        <td>
                            <button type="button" class="category_modal btn btn-primary" data-toggle="modal" data-target="#categoryEditModal" data-id="{{ $c->id }}">Edit</button>
                            {!! Form::open(['route' => ['employees.destroy', $c->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
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
    <div class="modal fade category_modal" id="categoryEditModal" tabindex="-1" role="dialog" aria-labelledby="companyEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-category">
                
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection