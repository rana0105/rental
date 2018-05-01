@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-lg-6 main">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="/dashboard">Home</a>
          <a class="breadcrumb-item" href="{{ url('employees') }}">Employee</a>
          <span class="breadcrumb-item active">Create Employee</span>
        </nav>
        <div class="add-company">
            <form action="{{ route('employees.store') }}" method="POST"  files="true">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Employee Name </label>
                <input type="text" name="e_name" class="form-control" placeholder="Enter Employee Name " required="">
              </div>
              <div class="form-group">
                <label>Father</label>
                <input type="text" name="e_father" class="form-control" placeholder="Enter Father">
              </div>
              <div class="form-group">
                <label>Hasband</label>
                <input type="text" name="e_hus" class="form-control" placeholder="Enter Hasband">
              </div>
              <div class="form-group">
                <label>Mother Name</label>
                <input type="text" name="e_mother" class="form-control" placeholder="Enter Mother Name">
              </div>
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="date_birth" class="form-control">
              </div>
              <div class="form-group">
                <label>Nationality </label>
                <input type="text" name="nationality" class="form-control" placeholder="Enter Nationality">
              </div>
              <div class="form-group">
                <label>Blood group</label>
                <input type="text" name="blood_g" class="form-control" placeholder="Enter Blood group" >
              </div>
              <div class="form-group">
                <label>Marital Status</label>
                <select name="m_status" id="m_status" class="form-control">
                  <option value="">--Select--</option>
                  <option value="Married">Married</option>
                  <option value="Unmarried">Unmarried</option>
                </select>
              </div>
              <div class="form-group">
                <label>Qualification</label>
                <input type="text" name="qualification" class="form-control" placeholder="Enter Qualification">
              </div>
              <div class="form-group">
                <label>Designation </label>
                <input type="text" name="designation" class="form-control" placeholder="Enter Designation ">
              </div>
              <div class="form-group">
                <label>Job Status</label>
                <select name="job_status" id="job_status" class="form-control">
                  <option value="">--Select--</option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <label>Salary</label>
                <input type="text" name="e_salary" class="form-control" placeholder="Enter Salary" >
              </div>
              <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="e_mobile" class="form-control" placeholder="Enter Contact Number">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="e_email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Joining Date</label>
                <input type="date" name="join_date" class="form-control" placeholder="Enter Joining Date" required="">
              </div>
              <div class="form-group">
                <label>Present Address</label>
                <textarea name="pre_address" class="form-control" placeholder="Present Address"></textarea>
              </div>
              <div class="form-group">
                <label>Permanent Address</label>
                <textarea name="per_address" class="form-control" placeholder="Permanent Address"></textarea>
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