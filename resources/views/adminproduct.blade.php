

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  
 


 <style>
     ::placeholder{
         font-size:17px;
     }
     .wrapper{width:0em !important}
.cake-price h6{
    color: #04AA6D;
    font-weight: bold;
}

 </style>
<br><br>
                                    
        <section>

    

<div class="container" style="margin-top:40px;">
    <div class="row">
   <table class="table">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Product</th>
      <th scope="col">Qty</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Status</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($foodlist as $item)
    <tr>
      
      <td><img src="public/Img/{{ $item->Img }}" class="w-20 rounded" alt="Thumbnail" width="50px" height="50px" ></td>
      <td>{{ $item->Name }}</td>
      <td>{{ $item->Quantity }}</td>
      <td>{{ $item->Price }}</td>
      <td>{{ $item->Status }}</td>
      <td>{{ $item->Price * $item->Quantity }}</td>
    
    </tr>
    @endforeach
    
  </tbody>
</table>


</div>
</div><br><br> 
<!-- <div class="card" style="width: 18rem;">
  <div class="card-header">
    Your Cart
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Product Name&nbsp&nbsp &nbsp&nbsp  </li>
    

  
  </ul>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Total(LKR)  &nbsp&nbsp </li>
    

  
  </ul>
</div> -->


<!-- 
<div class="container">
                   <div class="row"><br><br>
           
                       <div class="col-md-6" style="margin-top:20px;">
                       <div class="card-title">
                           
                           <h3 style="font-weight:bold;color:black">Payment</h3>
</div>
                  


<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    COD
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
  <label class="form-check-label" for="exampleRadios3">
    Online
  </label>
</div>
 <button type="submit" class="btn btn-primary btn-lg" style="margin-top:20px;margin-left:120px;width:200px;">Confirm</button>
</form>
</div >

<div class="col-md-6" >


</div> -->


  

    
  

</section>
   
    
