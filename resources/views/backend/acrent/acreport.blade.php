<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AC Rent Report</title>
  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        width: auto;
        font-size: 12px;
        border: 1px solid #000000;
        /*border: none;*/
        text-align: center;
        padding-top: 4px;
        padding-bottom:  5px;
        margin-top: 2px;
        margin-bottom: 2px;
    }
    input {
        border: none;
    }

    textarea {
        border: none;
  }
  </style>
</head>
<body>
  <h1 style="text-align: center;">Lion Asset Managemnt</h1>
  <h3 style="text-align: center;">AC Rent Shop No: {{ $acshop->acshop_no }}</h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Shop No</th>
        <th>Square Feet</th>
        <th>Per Rent</th>
        <th>Total Amount</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($acreport as $acr)
      <tr>
        <td>{{ $acr->acclient_name }}</td>
        <td>{{ $acr->acshop_no }}</td>
        <td>{{ $acr->acsqu_feet }}</td>
        <td>{{ $acr->acper_rent }}</td>
        <td>{{ $acr->ac_tamount }}</td>
        <td>{{ $acr->ac_date }}</td>
        <td>
          @if($acr->status == 1)
            <button style="background: green; color: #fff; font-size: 12px;" class="btn btn-success">Paid</button>
          @endif
          @if($acr->status == 0)
            <button style="background: red; color: #fff; font-size: 12px;" class="btn btn-danger">Unpaid</button>
          @endif    
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>