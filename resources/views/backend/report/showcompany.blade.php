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
        /*text-align: center;*/
        /*padding-top: 4px;
        padding-bottom:  5px;
        margin-top: 2px;
        margin-bottom: 2px;*/
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
  <h3 style="text-align: center;">Company Information</h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
  <table style="float: center;">
    <thead">
      <tr>
        <th>#ID</th>
        <th>Company Name</th>
        <th>Short Name</th>
        <th>Ownner Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Fax</th>
        <th>Email</th>
        <th>Web</th>
      </tr>
    </thead>
    <tbody>
    @foreach($modelcom as $com)
      <tr>
        <td>{{ $com->id }}</td>
        <td>{{ $com->company_name }}</td>
        <td>{{ $com->short_cname }}</td>
        <td>{{ $com->ownner_cname }}</td>
        <td>{{ $com->c_address }}</td>
        <td>{{ $com->c_phone }}</td>
        <td>{{ $com->c_mobile }}</td>
        <td>{{ $com->c_fax }}</td>
        <td>{{ $com->c_email }}</td>
        <td>{{ $com->c_web }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>