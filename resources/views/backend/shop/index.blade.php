@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-10 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('shops/create') }}">Create Shop</a>
          <span class="breadcrumb-item active">All Shop</span>
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
                        <th>Complex Name</th>
                        <th>Shop No.</th>
                        <th>Floor</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Company Name</th>
                        <th>Complex Name</th>
                        <th>Shop No.</th>
                        <th>Floor</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($shops as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->companies->company_name }}</td>
                        <td>{{ $s->complexes->complex_name }}</td>
                        <td>{{ $s->shop_no }}</td>
                        <td>{{ $s->floor }}</td>
                        <td>{{ $s->description }}</td>
                        <td>
                            <button type="button" class="shop_modal btn btn-primary" data-toggle="modal" data-target="#shopEditModal" data-id="{{ $s->id }}">Edit</button>
                            {!! Form::open(['route' => ['shops.destroy', $s->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
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
    <div class="modal fade shop_modal" id="shopEditModal" tabindex="-1" role="dialog" aria-labelledby="complexEditModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="shopModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="add-shop">
            
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection