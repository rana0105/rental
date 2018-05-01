{!! Form::model( $category, ['route' => ['categories.update', $category->id], 'files' => true, 'method' => 'PUT']) !!}
    <div class="form-group">
      <label>Category Name*</label>
      <input type="text" name="cat_name" class="form-control" value="{{ $category->cat_name }}">
    </div>
    <div class="form-group">
      <label>Description*</label>
      <textarea name="cat_des" class="form-control" value="{{ $category->cat_des }}">{{ $category->cat_des }}</textarea> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}