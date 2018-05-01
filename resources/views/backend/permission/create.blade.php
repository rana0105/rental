@extends('layouts.app')

@section('content')

	
	<div class="col-md-10 col-offest-2">
		<div class="panel panel-heading">
			<div class="panel-title text-left">
				<h3 class="title">Permssion Created</h>
				<hr/>
			</div>
		</div>
		<form action="{{ route('permissions.store') }}" method="POST">
			{{ csrf_field() }}
			<div class="row main">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						
						<label for="name" class="cols-sm-2 control-label">Name</label>
						<div class="cols-sm-10">
							<input type="text" name="name" id="name" class="form-control" placeholder="Input permission name..">
							<small class="text-danger">{{ $errors->first('name') }}</small>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : '' }}">
						
						<label for="guard_name" class="cols-sm-2 control-label">Guard</label>
						<div class="cols-sm-10">
							<input type="text" name="guard_name" id="guard_name" class="form-control" placeholder="Input guard name..">
							<small class="text-danger">{{ $errors->first('guard_name') }}</small>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit" class="btn btn-success">
				<a href="{{ URL::route('permissions.index') }}" class="btn btn-warning btn-resposive">Cancel</a>
			</div>
		</form>
	</div>

@endsection