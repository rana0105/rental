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
  <h3 style="text-align: center;">Expense Information: </h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Expense Name</th>
        <th>Category Name</th>
        <th>Company Name</th>
        <th>Complex Name</th>
        <th>Cost</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach($model as $exp)
      <tr>
        <td>{{ $exp->id }}</td>
        <td>{{ $exp->ex_name }}</td>
        <td>{{ $exp->categories->cat_name }}</td>
        <td>{{ $exp->companies->company_name }}</td>
        <td>{{ $exp->complexes->complex_name }}</td>
        <td>{{ $exp->ex_amount }}</td>
        <td>{{ $exp->ex_date }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>