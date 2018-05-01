@extends('layouts.app')

@section('content')
<div class="col-md-9 col-lg-10 main">
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="/dashboard">Home</a>
      <a class="breadcrumb-item" href="{{ url('tenants/create') }}">Create Tenant</a>
      <a class="breadcrumb-item" href="{{ url('tenants') }}">All Tenant</a>
      <span class="breadcrumb-item active">Tenant Profile</span>
    </nav>
    <section id="profile-page">
        <div class="container">
            <div class="row profile-header">
                <div class="col-md-2">
                    <img class="profile-img" src="{{asset('upload_file/resize_images/')}}/{{ $ten->t_image }}">
                    <h3>{{ $ten->tenat_name }}</h3>
                    <small>Tenant</small>
                </div>
                <div class="col-md-3">
                    <address>
                        {{ $ten->t_address }}
                    </address>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="offset-md-1 col-md-6">
                    <div class="live-item-1">
                        <i class="fa fa-home" aria-hidden="true"></i> <br>
                        <span class="total-shop">{{ sizeof($sbook) }}<br>Shop</span>
                    </div>
                    <div class="live-item-2">
                        <i class="fa fa-bell-o" aria-hidden="true"></i> <br>
                        <span class="total-due">
                        {{ $totaldue }}
                         <br>Due</span>
                    </div>
                    <div class="live-item-3">
                        <i class="fa fa-money" aria-hidden="true"></i> <br>
                        <span class="total-paid">                            
                        {{ $totalbill }} 
                        <br>Total Paid</span>
                    </div>
                    <div class="live-item-3">
                        <i class="fa fa-money" aria-hidden="true"></i> <br>
                        <span class="total-paid">                            
                        {{ $balance }} 
                        <br>Balance</span>
                    </div>
                </div>
            </div>
            <div class="">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#billing-history-tab" role="tab">Billing History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#shop-list-tab" role="tab">Shop List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#bill-pay-tab" role="tab">Bill Pay</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile-details-tab" role="tab">Profile Details</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="billing-history-tab" role="tabpanel">
                        <table id="billing-history-list1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Shop Info</th>
                                    <th>Month/Year</th>
                                    <th>Amount</th>
                                    <th>Generate Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Bill ID</th>
                                    <th>Shop Info</th>
                                    <th>Month/Year</th>
                                    <th>Amount</th>
                                    <th>Generate Date</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($bill as $inv)
                                <tr>
                                    <td>{{ $inv->id }}</td>                                   
                                    <td>{{ $inv->shops->shop_no }}</td>
                                    <td>{{ date('M / Y', strtotime($inv->bi_pdate)) }}</td>
                                    <td>{{ $inv->bi_tamount }}</td>
                                    <td>{{ date('d-m-Y', strtotime($inv->created_at)) }}</td>
                                    <td>
                                        @if($inv->status == 1)
                                            <button class="btn btn-success">Paid</button>
                                        @endif
                                        @if($inv->status == 0)
                                            <button class="btn btn-danger">Unpaid</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="shop-list-tab" role="tabpanel">
                        <form class="row">
                          <div class="form-group col-md-2">
                            <label>Booking ID</label>
                            <input type="text" class="form-control" placeholder="Booking ID">
                          </div>
                          <div class="form-group col-md-2">
                            <label>Amount</label>
                            <input type="text" class="form-control" placeholder="Amount">
                          </div>
                          <div class="form-group col-md-2">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="Date">
                          </div>
                            <div class="form-group col-md-2">
                                <label>Payment Type</label>
                                <select class="form-control">
                                  <option>Cash</option>
                                </select>
                            </div>
                          <button type="submit" class="btn btnstyle btn-primary col-md-1">Advance</button>
                          <button type="submit" class="btn btnstyle btn-primary col-md-1">Refund</button>
                          <button type="submit" class="btn btnstyle btn-primary col-md-1">Unbooked</button>
                        </form>
                        <table id="billing-history-list2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Company Name</th>
                                    <th>Complex Name</th>
                                    <th>Shop</th>
                                    <th>Floor</th>
                                    <th>Description</th>
                                    <th>Rent/Month</th>
                                    <th>Advance</th>
                                    <th>Booking Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Company Name</th>
                                    <th>Complex Name</th>
                                    <th>Shop</th>
                                    <th>Floor</th>
                                    <th>Description</th>
                                    <th>Rent/Month</th>
                                    <th>Advance</th>
                                    <th>Booking Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(sizeof($sbook)>0)
                                    @foreach($sbook as $sb)
                                        <tr>
                                            <td>{{ $sb->id }}</td>
                                            <td>{{ $sb->companies->company_name }}</td>
                                            <td>{{ $sb->complexes->complex_name }}</td>
                                            <td>{{ $sb->shops->shop_no }}</td>
                                            <td>{{ $sb->shops->floor }}</td>
                                            <td>{{ $sb->shops->description }}</td>
                                            <td>{{ $sb->total_rent }}</td>
                                            <td>{{ $sb->adv_money }}</td>
                                            <td>
                                                <a href="{{ url('tprofile', $sb->tenant_id) }}"><button>Booked</button></a>
                                                <a href="{{ url('bill-details', $sb->shop_id) }}"><button>Bill Details</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="bill-pay-tab" role="tabpanel">
                        <form action="{{ route('billpays.store') }}" method="POST"  files="true" target="blank">
                        {{ csrf_field() }}
                            <div class="form-check">
                                <label class="form-check-label">
                                  Include Utility ( if checked only one item can choice from list. )
                                </label>
                            </div>
                            <span>Item List:</span>
                            @foreach($sbook as $sb)
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input checkvalue" name="condationcheckbox[]" id="check-{{$sb->id}}" value="{{ $sb->total_rent}}">Shop No: {{ $sb->shops->shop_no }}:- Amount:- {{ $sb->total_rent}} 
                                 </label>
                                 <label class="form-check-label">
                                    <input type="hidden" class="form-check-input checkvalue" name="shop[]" value="{{ $sb->shop_id}}" multiple>
                                    <input type="hidden" class="form-check-input checkvalue" name="conditoncheck[]" value="{{ $sb->total_rent}}" multiple>
                                </label>
                            @endforeach
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label>Tenant </label>
                                    <input type="hidden" class="form-control" name="tenant_id" value="{{ $ten->id }}">
                                    <input type="text" class="form-control" value="{{ $ten->id }} / {{ $ten->tenat_name }}">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Amount</label>
                                    <input type="text" readonly="" name="bi_amount" class="form-control setvalue" value="" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Payment Date</label>
                                    <input type="date" name="bi_pdate" class="form-control" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Payment Type</label>
                                    <select class="form-control" name="bi_type">
                                       <option>--Select--</option>
                                       <option value="Cash">Cash</option>
                                       <option value="Cheque">Cheque</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>If cheque(Date):</label>
                                    <input type="date" name="bi_chdate" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Electrical Bill:</label>
                                    <input type="text" name="bi_elec" class="form-control bi_elec" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Water:</label>
                                    <input type="text" name="bi_water" class="form-control bi_water" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Gas:</label>
                                    <input type="text" name="bi_gas"  class="form-control bi_gas" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Service Charge:</label>
                                    <input type="text" name="bi_schar" class="form-control bi_schar" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Total Amount:</label>
                                    <input type="text" name="bi_tamount" readonly="" class="form-control bi_tamount">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="bi_status">Status <span class="required">*</span></label>
                                    <br />
                                    <input id="bi_status" name="bi_status" type="radio" class="" value="1"  />
                                    <label for="bi_status" class="">Paid</label>

                                    <input id="bi_status" name="bi_status" type="radio" class="" value="0"  />
                                    <label for="bi_status" class="">Unpaid</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Generate Invoice</button>
                            <button type="submit" class="btn btn-primary">Cancel</button>
                        </form>
                        <div class="form-check">
                            <label class="form-check-label">
                              Include Utility ( Please Input at lest 0 Input Field ! )
                            </label>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile-details-tab" role="tabpanel">
                        <div class="customer-profile">
                            <p>Customer Profile Details</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Tenant Name: {{ $ten->tenat_name }}.</h5>
                                <h5>Proprietor: {{ $ten->t_propiter }}.</h5>
                                <h5>Address: {{ $ten->t_address }}.</h5>
                                <h5>Mobile: {{ $ten->t_mobile }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h5>Father/Husband: {{ $ten->father_hus }}</h5>
                                <h5>Mother Name: {{ $ten->t_mother }}.</h5>
                                <h5>Web: {{ $ten->t_web }}</h5>
                                <h5>Phone: {{ $ten->t_phone }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('style')
<style>
    button.btn.btnstyle.btn-primary.col-md-1 {
    height: 36px;
    margin: 28px 15px 2px 11px;
    font-size: 15px;
}
</style>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#billing-history-list1').dataTable();
        $('#billing-history-list2').dataTable();

    });
</script>
@endsection