{!! Form::model( $expense, ['route' => ['expenses.update', $expense->id], 'files' => true, 'method' => 'PUT']) !!}
    {{ csrf_field() }}
    
    <div class="form-group">
      <label>Expense Name*</label>
      <input type="text" name="ex_name" class="form-control" value="{{ $expense->ex_name }}">
    </div>
    <div class="form-group">
      <label>Category Name *</label>
      {{ Form::select('cat_id', $category , null, ["class" => 'form-control'])}}
    </div>
    <div class="form-group">
      <label>Company Name *</label>
      {{ Form::select('company_id', $company , null, ["class" => 'form-control'])}}
    </div>
    <div class="form-group">
      <label>Complex Name *</label>
      {{ Form::select('complex_id', $complex , null, ["class" => 'form-control'])}}
    </div>
    
    <div class="form-group">
      <label>Amount*</label>
      <input type="text" name="ex_amount" class="form-control" value="{{ $expense->ex_amount }}">
    </div>
    <div class="form-group">
      <label>Date of Expense*</label>
      <input type="date" name="ex_date" class="form-control" value="{{ $expense->ex_date }}">
    </div>
    <div class="form-group">
      <label>Note*</label>
      <textarea name="ex_note" class="form-control" value="{{ $expense->ex_note }}">{{ $expense->ex_note }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}