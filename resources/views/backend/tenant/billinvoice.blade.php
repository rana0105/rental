<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoice Report</title>
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
  <h3 style="text-align: center;">Monthly Bill Invoice Report</h3>
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
      <tr>
        <td>{{ $bill->id }}</td> 
        <td>{{ $bill->tenants->tenat_name }}</td>
        <td>{{ $bill->bi_amount }}</td>
        <td>{{ $bill->bi_pdate }}</td>
        <td>{{ $bill->bi_type }}</td>
        <td>{{ $bill->bi_chdate }}</td>
        <td>{{ $bill->bi_elec }}</td>
        <td>{{ $bill->bi_water }}</td>
        <td>{{ $bill->bi_gas }}</td>
        <td>{{ $bill->bi_schar }}</td>
        <td>{{ $bill->bi_tamount }}</td>
      </tr>
    </tbody>
  </table>
</body>
</html>