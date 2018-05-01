<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>In-Out Report</title>
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
  <h3 style="text-align: center;">Receipts and Payments Reports </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
        <th>Date</th>
        <th>Opening</th>
        <th>Income</th>
        <th>Expense</th>
        <th>Closing</th>
      </tr>
    </thead>
    <tbody>
    @foreach($array as $a)
      <tr>
        <td>{{ $a['date'] }}</td>
        <td>{{ $a['opening'] }}</td>
        <td>{{ $a['income'] }}</td>
        <td><a href="{{url('viewExpense/'.$a['date'])}}">{{ $a['expense'] }}</a></td>
        <td>{{ $a['closing'] }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>