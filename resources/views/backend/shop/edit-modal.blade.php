{!! Form::model( $shop, ['route' => ['shops.update', $shop->id], 'files' => true, 'method' => 'PUT']) !!}
    <div class="form-group">
      <label>Company Name *</label>
      {{ Form::select('company_id', $comp , null, ["class" => 'form-control'])}}
    </div>
    <div class="form-group">
      <label>Complex Name *</label>
      {{ Form::select('complex_id', $complex , null, ["class" => 'form-control'])}}
    </div>
    <div class="form-group">
      <label>Shop No: *</label>
      <input type="text" name="shop_no" class="form-control" value="{{ $shop->shop_no }}">
    </div>
    <div class="form-group">
      <label>Square Feet</label>
      <input type="text" name="squ_feet" class="form-control" value="{{ $shop->squ_feet }}">
    </div>
    <div class="form-group">
        <label>Floor*</label>
        <select class="form-control" id="floor" name="floor">
          <option value="{{ $shop->floor }}">{{ $shop->floor }}</option>
          <option value="Ground Floor">Ground Floor</option>
          <option value="1st Floor">1st Floor</option>
          <option value="2nd Floor">2nd Floor</option>
          <option value="3rd Floor">3rd Floor</option>
          <option value="4th Floor">4th Floor</option>
          <option value="5th Floor">5th Floor</option>
          <option value="6th Floor">6th Floor</option>
          <option value="7th Floor">7th Floor</option>
          <option value="8th Floor">8th Floor</option>
          <option value="9th Floor">9th Floor</option>
          <option value="10th Floor">10th Floor</option>
        </select>
    </div>
    <div class="form-group">
      <label>Description *</label>
      <textarea name="description" class="form-control" value="{{ $shop->description }}">{{ $shop->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}