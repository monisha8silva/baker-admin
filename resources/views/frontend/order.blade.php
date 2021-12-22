<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Order No</th>
      <th scope="col">Customer</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($orders as $order)
  <tr>
      <th scope="row">{{$order->OrderID}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  @endforeach
   
   
  </tbody>
</table>
    
</body>
</html>