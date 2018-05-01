@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('categories') }}">Category</a>
          <span class="breadcrumb-item active">Create Category</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('categories.store') }}" method="POST" files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Category Name*</label>
                <input type="text" name="cat_name" class="form-control" placeholder="Enter Category Name" required="">
              </div>
              <div class="form-group">
                <label>Description*</label>
                <textarea name="cat_des" class="form-control" placeholder="Enter Description"></textarea> 
              </div>
              <button type="submit" class="btn btn-primary mar-bottom">Submit</button>
            </form>
        </div>
    </div>
      <!-- #main col-->
    </div>
    <!-- #row -->

  </div>
  <!-- #container -->
@endsection