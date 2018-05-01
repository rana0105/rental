<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RenCollect Report</title>
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
  <h3 style="text-align: center;">Rent Collection Report: </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Company Name</th>
        <th>Complex Name</th>
        <th>Tenant Name</th>
        <th>RentPerFeet</th>
        <th>Total Rent</th>
        <th>Security Money</th>
        <th>Advanced Money</th>
        <th>Advanced Refound</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach($model as $m)
      <tr>
        <td>{{ $m->id }}</td>
        <td>{{ $m->companies->company_name }}</td>
        <td>{{ $m->complexes->complex_name }}</td>
        <td>{{ $m->tenants->tenat_name }}</td>
        <td>{{ $m->rent_feet }}</td>
        <td>{{ $m->total_rent }}</td>
        <td>{{ $m->secu_money }}</td>
        <td>{{ $m->adv_money }}</td>
        <td>{{ $m->adv_refund }}</td>
        <td>{{ $m->book_date }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>