{!! Form::model( $company, ['route' => ['companies.update', $company->id], 'files' => true, 'method' => 'PUT']) !!}

 	<div class="form-group">
 		<label>Company Name</label>
 		<input type="text" name="company_name" class="form-control" value="{{ $company->company_name }}">
 	</div>
 	<div class="form-group">
 		<label>Short Name</label>
 		<input type="text" name="short_cname" class="form-control" value="{{ $company->short_cname }}">
 	</div>
 	<div class="form-group">
 		<label>Owner Name</label>
 		<input type="text" name="ownner_cname" class="form-control" value="{{ $company->ownner_cname }}">
 	</div>
 	<div class="form-group">
 		<label>Address</label>
 		<textarea name="c_address" class="form-control">{{ $company->c_address }}</textarea>
 	</div>
 	<div class="form-group">
 		<label>Phone</label>
 		<input type="tel" name="c_phone" class="form-control" value="{{ $company->c_phone }}">
 	</div>
 	<div class="form-group">
 		<label>Mobile</label>
 		<input type="tel" name="c_mobile" class="form-control" value="{{ $company->c_mobile }}">
 	</div>
 	<div class="form-group">
 		<label>Fax</label>
 		<input type="text" name="c_fax" class="form-control" value="{{ $company->c_fax }}">
 	</div>
 	<div class="form-group">
 		<label>Email</label>
 		<input type="email" name="c_email" class="form-control" value="{{ $company->c_email }}">
 	</div>
 	<div class="form-group">
 		<label>Web</label>
 		<input type="url" name="c_web" class="form-control" value="{{ $company->c_web }}">
 	</div>
 	<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
