{!! Form::model( $complex, ['route' => ['complexes.update', $complex->id], 'files' => true, 'method' => 'PUT']) !!}

	<div class="form-group">
	<label>Complex Name *</label>
	<input type="text" name="complex_name" class="form-control" value="{{ $complex->complex_name }}" required="">
	</div>
	<div class="form-group">
	<label>Address *</label>
	<textarea class="form-control" name="plex_address" value="{{ $complex->plex_address }}" required="">{{ $complex->plex_address }}</textarea>
	</div>
	<div class="form-group">
	<label>Phone</label>
	<input type="tel" name="plex_phone" class="form-control" value="{{ $complex->plex_phone }}">
	</div>
	<div class="form-group">
	<label>Mobile</label>
	<input type="tel" name="plex_mobile" class="form-control" value="{{ $complex->plex_mobile }}">
	</div>
	<div class="form-group">
	<label>Fax</label>
	<input type="text" name="plex_fax" class="form-control" value="{{ $complex->plex_fax }}">
	</div>
	<div class="form-group">
	<label>Email</label>
	<input type="email" name="plex_email" class="form-control" value="{{ $complex->plex_email }}">
	</div>
	<div class="form-group">
	  <label>Company Name *</label>
	  {{ Form::select('company_id', $comp , null, ["class" => 'form-control'])}}
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
