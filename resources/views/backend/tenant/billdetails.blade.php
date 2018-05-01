<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bill Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  <table style="float: center;">
  <h1 style="text-align: center;">Lion Asset Managemnt</h1>
  <h3 style="text-align: center;">Bill Details::{{ $shopno->shops->shop_no }}</h3>
  <h4 style="text-align: center;">Corporate Office: 126-131 Monipuripara, Tejgaon, Dhaka - 1215, Bangladesh</h4>
    <thead>
      <tr>
        <th>#ID</th>
        <th>Shop No</th>
        <th>Month/Year</th>
        <th>Total Amount</th>
        <th>Generate Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($billdetails as $bill)
      <tr>
        <td>{{ $bill->id }}</td>
        <td>{{ $bill->shops->shop_no }}</td>
        <td>{{ date('M / Y', strtotime($bill->bi_pdate)) }}</td>
        <td>{{ $bill->bi_tamount }}</td>
        <td>{{ date('d-m-Y', strtotime($bill->bi_pdate)) }}</td>
        <td>
          @if($bill->status == 1)
            <button class="btn btn-success">Paid</button>
          @endif
          @if($bill->status == 0)
            <button class="btn btn-danger">Unpaid</button>
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>