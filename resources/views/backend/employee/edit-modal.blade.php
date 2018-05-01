{!! Form::model( $employee, ['route' => ['employees.update', $employee->id], 'files' => true, 'method' => 'PUT']) !!}

  <div class="form-group">
    <label>Employee Name </label>
    <input type="text" name="e_name" class="form-control" value="{{ $employee->e_name }}">
  </div>
  <div class="form-group">
    <label>Father</label>
    <input type="text" name="e_father" class="form-control" value="{{ $employee->e_father }}">
  </div>
  <div class="form-group">
    <label>Hasband</label>
    <input type="text" name="e_hus" class="form-control" value="{{ $employee->e_hus }}">
  </div>
  <div class="form-group">
    <label>Mother Name</label>
    <input type="text" name="e_mother" class="form-control" value="{{ $employee->e_mother }}">
  </div>
  <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" name="date_birth" class="form-control" value="{{ $employee->date_birth }}">
  </div>
  <div class="form-group">
    <label>Nationality </label>
    <input type="text" name="nationality" class="form-control" value="{{ $employee->nationality }}">
  </div>
  <div class="form-group">
    <label>Blood group</label>
    <input type="text" name="blood_g" class="form-control" value="{{ $employee->blood_g }}">
  </div>
  <div class="form-group">
    <label>Marital Status</label>
    <select name="m_status" id="m_status" class="form-control">
      <option value="{{ $employee->m_status }}">{{ $employee->m_status }}</option>
      <option value="Married">Married</option>
      <option value="Unmarried">Unmarried</option>
    </select>
  </div>
  <div class="form-group">
    <label>Qualification</label>
    <input type="text" name="qualification" class="form-control" value="{{ $employee->qualification }}">
  </div>
  <div class="form-group">
    <label>Designation </label>
    <input type="text" name="designation" class="form-control" value="{{ $employee->designation }}">
  </div>
  <div class="form-group">
    <label>Job Status</label>
    <select name="job_status" id="job_status" class="form-control">
      <option value="{{ $employee->job_status }}">{{ $employee->job_status }}</option>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="text" name="e_salary" class="form-control" value="{{ $employee->e_salary }}">
  </div>
  <div class="form-group">
    <label>Contact Number</label>
    <input type="text" name="e_mobile" class="form-control" value="{{ $employee->e_mobile }}">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="e_email" class="form-control" value="{{ $employee->e_email }}">
  </div>
  <div class="form-group">
    <label>Joining Date</label>
    <input type="date" name="join_date" class="form-control" value="{{ $employee->join_date }}">
  </div>
  <div class="form-group">
    <label>Present Address</label>
    <textarea name="pre_address" class="form-control" value="{{ $employee->pre_address }}">{{ $employee->pre_address }}</textarea>
  </div>
  <div class="form-group">
    <label>Permanent Address</label>
    <textarea name="per_address" class="form-control" value="{{ $employee->per_address }}">{{ $employee->per_address }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
