{!! Form::model( $tenant, ['route' => ['tenants.update', $tenant->id], 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'PUT']) !!}
      <div class="form-group">
      <label>Tenant Name </label>
      <input type="text" name="tenat_name" class="form-control" value="{{ $tenant->tenat_name }}">
    </div>
    <div class="form-group">
      <label>Father/Hasband</label>
      <input type="text" name="father_hus" class="form-control" value="{{ $tenant->father_hus }}">
    </div>
    <div class="form-group">
      <label>Mother Name</label>
      <input type="text" name="t_mother" class="form-control" value="{{ $tenant->t_mother }}">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input type="date" name="t_date" class="form-control" value="{{ $tenant->t_date }}">
    </div>
    <div class="form-group">
      <label>Proprietor Name</label>
      <input type="text" name="t_propiter" class="form-control" value="{{ $tenant->t_propiter }}">
    </div>
    <div class="form-group">
      <label>Address</label>
      <textarea name="t_address" class="form-control" value="{{ $tenant->t_address }}">{{ $tenant->t_address }}</textarea>
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input type="tel" name="t_phone" class="form-control" value="{{ $tenant->t_phone }}">
    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="tel" name="t_mobile" class="form-control" value="{{ $tenant->t_mobile }}">
    </div>
    <div class="form-group">
      <label>Fax</label>
      <input type="text" name="t_fax" class="form-control" value="{{ $tenant->t_fax }}">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="t_email" class="form-control" value="{{ $tenant->t_email }}">
    </div>
    <div class="form-group">
      <label>Web</label>
      <input type="url" name="t_web" class="form-control" value="{{ $tenant->t_web }}">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="file" id="t_image" name="t_image">
      <img src="{{asset('upload_file/resize_images/')}}/{{ $tenant->t_image }}" alt="" height="50" width="50" class="img-thumbnail" style ="margin-top:7px" style="float:right">
    </div>
    <div class="form-group">
       {{ Form::label('condition','Status *')}} <br/>
         @if($tenant->condition == '1')
           {{Form::radio('condition', '1', true, ['checked' => 'checked']) }} Active 
           {{Form::radio('condition', '0', false) }} Inactive
           @else
           {{Form::radio('condition', '1', false) }}  Active 
           {{Form::radio('condition', '0', true, ['checked' => 'checked']) }} Inactive  
         @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}