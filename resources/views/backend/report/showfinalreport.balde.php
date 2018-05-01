<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Expense Report</title>
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
        border: none;
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
  <table style="float: center;">
  <h1 style="text-align: center;">Lion Asset Managemnt</h1>
  <h3 style="text-align: center;">Tenant Due: </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
    <thead>
      <tr>
        <th>Shop No</th>
        <th>Complex Name</th>
        <th>Tenant Name</th>
        <th>Tenant Address</th>
        <th>Book Date</th>
        <th>Tenant Mobile</th>
        <th>Due</th>
        <th>Month</th>
      </tr>
    </thead>
    <tbody>
    {{-- {{ $array }} --}}
    @foreach($array as $mo)
      <tr>
        <td>{{ $mo['shopnumber'] }}</td>
        <td>{{ $mo['complex'] }}</td>
        <td>{{ $mo['tanant'] }}</td>
        <td>{{ $mo['address'] }}</td>
        <td>{{ $mo['bookingdate'] }}</td>
        <td>{{ $mo['mobile'] }}</td>
        <td>{{ $mo['due'] }}</td>
        <td>{{ $mo['month'] }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>