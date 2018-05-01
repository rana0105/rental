<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Utility Report</title>
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
       /* border: none;*/
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
  <h3 style="text-align: center;">Utility Report: </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
         <th>#ID</th>
        <th>Tenant Name</th>
        <th>Rent Amount</th>
        <th>Payment Date</th>
        <th>Payment Type</th>
        <th>If cheque(Date)</th>
        <th>Electrical Bill</th>
        <th>Water</th>
        <th>Gas</th>
        <th>Service Charge</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
    @foreach($model as $shinbil)
      <tr>
        <td>{{ $shinbil->id }}</td>
        <td>{{ $shinbil->tenat_name ? $shinbil->tenat_name : '' }}</td>
        <td>{{ $shinbil->bi_amount }}</td>
        <td>{{ $shinbil->bi_pdate }}</td>
        <td>{{ $shinbil->bi_type }}</td>
        <td>{{ $shinbil->bi_chdate }}</td>
        <td>{{ $shinbil->bi_elec }}</td>
        <td>{{ $shinbil->bi_water }}</td>
        <td>{{ $shinbil->bi_gas }}</td>
        <td>{{ $shinbil->bi_schar }}</td>
        <td>{{ $shinbil->bi_tamount }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>