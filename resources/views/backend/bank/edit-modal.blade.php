{!! Form::model( $b, ['route' => ['banks.update', $b->id], 'files' => true, 'method' => 'PUT']) !!}
  <div class="form-group">
    <label>Bank Name*</label>
    <input type="text" name="bank_name" class="form-control" value="{{ $b->bank_name }}">
  </div>
  <div class="form-group">
    <label>Branch Name*</label>
    <input type="text" name="branch_cname" class="form-control" value="{{ $b->branch_cname }}">
  </div>
  <div class="form-group">
    <label>Account Number*</label>
    <input type="text" name="account_num" class="form-control" value="{{ $b->account_num }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}