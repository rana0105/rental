<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Company Report</title>
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
  <h3 style="text-align: center;">Company Information: {{ $model->complex_name }}</h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Shop No.</th>
        <th>Tenant Name</th>
        <th>Address</th>
        <th>Booking Date</th>
        <th>Mobile</th>
      </tr>
    </thead>
    <tbody>
    @foreach($sho as $co)
      <tr>
        <td>{{ $co->id }}</td>
        <td>{{ $co->shops->shop_no }}</td>
        <td>{{ $co->tenants->tenat_name }}</td>
        <td>{{ $co->tenants->t_address }}</td>
        <td>{{ $co->created_at }}</td>
        <td>{{ $co->tenants->t_mobile }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>