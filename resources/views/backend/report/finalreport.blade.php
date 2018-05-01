<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Final Report</title>
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
  <h3 style="text-align: center;">Final Report </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <div>
    <h3 style="text-align: center;">All times Report</h3> 
  <table style="float: center;">
    <thead>
      <tr>
        <th>ChasInhand</th>
        <th>Due</th>
        <th>Income</th>
        <th>Expense</th>
        <th>Profit/Loss</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $cashinhand }}</td>
        <td>{{ $due }}</td>
        <td>{{ $totalincome }}</td>
        <td>{{ $totalexpense }}</td>
        <td>{{ $profit }}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div style="margin-top: 50px;">
    <h3 style="text-align: center;">This Months Report</h3>
  <table style="float: center;">
    <thead>
      <tr>
        <th>ChasInhand</th>
        <th>Income</th>
        <th>Expense</th>
        <th>Profit/Loss</th>
    </thead>
    <tbody>
      <tr>
        <td>{{ $cashinhandmonth }}</td>
        <td>{{ $totalincomemonth }}</td>
        <td>{{ $totoalexpensemonth }}</td>
        <td>{{ $profitmonth }}</td>
      </tr>
    </tbody>
  </table>
  </div>
<div style="margin-top: 50px;">
    <h3 style="text-align: center;">Yesterday's Report</h3>
  <table style="float: center;">
    <thead>
      <tr>
        <th>ChasInhand</th>
        <th>Income</th>
        <th>Expense</th>
        <th>Profit/Loss</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $cashinhandy }}</td>
        <td>{{ $totalincomey }}</td>
        <td>{{ $totalexpensey }}</td>
        <td>{{ $profity }}</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>