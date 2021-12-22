@extends('frontend.common.main')

@section('content')

    
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
          <div class="container">
<div class="row">
    <div class="modal fade" id="addadressmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Delivery Address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
  <div class="row">
    <div class="col-12">
      <form class="needs-validation" method="get" action="/addcustomerdeliverdetails" novalidate>
      
      
       <div class="form-group">
          <label for="name">First Name*</label>
            <input type="text" class="form-control" name="customerfirstname"  id="customerfirstname" placeholder="Your First Name" required>
              <div class="valid-feedback">
              Your First Name
              </div>
            <div class="invalid-feedback">
            Please add a email.
            </div>
        </div>

        <div class="form-group">
          <label for="name">Last Name*</label>
            <input type="text" class="form-control" name="customerlastname" id="customerlastname" placeholder="Your Last Name" required>
              <div class="valid-feedback">
              Your Last Name
              </div>
            <div class="invalid-feedback">
            Please add a email.
            </div>
        </div>



        <div class="form-group">

          <label for="telephone">Telephone*</label>
          <input type="text" class="form-control" id="telephone"  name="telephone" placeholder="Your telephone number" required minlength="7" maxlength="12">
          <div class="valid-feedback">
            Fine!
          </div>
          <div class="invalid-feedback">
            Please choose a valid telephone number ( 10 characters).
          </div>
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea type="text" class="form-control " name="address" id="address" placeholder="Your delivery address" required></textarea>
          <div class="valid-feedback">
            Fine
          </div>
          <div class="invalid-feedback">
            Please add an address.
          </div>
        </div>

  

        <!-- <button type="submit" class="btn btn-info" style="margin-top:30px;">Submit</button> -->
     
    </div>
  </div>
</div>
          
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div> 
    </form>
    </div>
       
    </div>
</div> 


<div class="container">
<div class="row">
<table class="table">
  <tr>
      <td>
      <h5  style="margin-bottom:20px;font-weight:bold;margin-top:30px; ">Delivery Address</h5>
          <form class="row g-3 needs-validation" novalidate action="/ordersubmit">
            
                  
                     <select name="idCustomer" id="idCustomer" class="form-select dynamic" data-dependent="idCustomer" required>
                          <option selected disabled value="">Choose...</option>
                                  @foreach($customer_delivery_details as $detail)
                                       <option value="{{ $detail->idCustomer}}">{{ $detail->customer_delivery_address }}</option>
                                   @endforeach
                       </select>

                       <button type="button" class="btn btn-success "  style="width:300px;margin-top:30px;margin-left:10px;" onclick="addressaddclick()">
                        Add New Delivery Address 
                    </button>
                        {{ csrf_field() }} 
                     <h5 name="customer_first_name" id="customer_first_name"  ></h5>
        

          

      </td>
      <td>
        
      
      
            
                           
                           <h5 style="font-weight:bold;color:black;margin-left:100px;">Payment</h5>
                  


             <div class="form-check" style="margin-left:100px;">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
             <label class="form-check-label" for="exampleRadios1">
                COD
            </label>
           </div>
           <div class="form-check" style="margin-left:100px;">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="2" disabled>
               <label class="form-check-label" for="exampleRadios3">
                 Online
               </label>
               </div>   
               <h5 style="font-weight:bold;color:black;margin-left:100px;">Outlet</h5>
             
                <div class="col-md-6" style="margin-left:100px;" >
               
                
       <select id="selectoutlet" name="selectoutlet" class="form-select" required >
       <option selected disabled value="">Choose...</option>
          @foreach($outlets as $outlet)
                                       <option value="{{ $outlet->outletid }}">{{ $outlet->outlet_name  }}</option>
                                   @endforeach
     </select>

  </div>
              <button type="submit" class="btn btn-success" style="margin-top:50px;width:200px;margin-left:120px;">Check Out</button>
             
              
     
 
    </td>
    
  </tr>


</table>
</div>
</div>

</form>

<div class="container">    
        <!-- <h5 style="margin-top:30px;" style="margin-bottom:200px;">Delivery Address</h5>
          <form class="row g-3 needs-validation" novalidate>
             <div class="col-md-6">
                 <h5></h5>
                 
                     <select name="idCustomer" id="idCustomer" class="form-select dynamic" data-dependent="idCustomer" required>
                          <option selected disabled value="">Choose...</option>
                                  @foreach($customer_delivery_details as $detail)
                                       <option value="{{ $detail->idCustomer}}">{{ $detail->customer_delivery_address }}</option>
                                   @endforeach
                       </select>

        

              </div>
              <div class="col-md-6" >
            
                           
                           <h3 style="font-weight:bold;color:black;">Payment</h3>
                  


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
              <button type="submit" class="btn btn-primary btn-lg" style="margin-top:50px;margin-left:120px;width:200px;">Confirm</button>
                 
             </div> -->
             
                    
                   </div>

               
</div>


</div>
</div>

    

<div class="container" style="margin-top:40px;">
    <div class="row">
   <table class="table">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Product</th>
      <th scope="col">Qty</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cartItems as $item)
    <tr>
      
      <td><img src="public/Img/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail" width="50px" height="50px" ></td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->quantity }}</td>
      <td>{{ $item->price }}</td>
      <td>{{ $item->price * $item->quantity }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

<h4 style="margin-left:700px;">Total :{{ Cart::getTotal() }}</h4>


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
   
    



        <!--End block 1 -->
                			
<!--                 			
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end Single product -->
<!-- 
                			</div>
                		</div>
                	</div>
                </div> -->

        {{--<div class="container-fluid" style="background-color: #048343; color:#fff; margin-top:20px">--}}
            {{--<div class="row" style="color: white; padding: 30px;">--}}
                {{--<div class="col-lg-2"> <h6 style="color:white">CONTACT US</h6></div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--Our customers service personel are available to answer any requests. we will respond within business hours from 8am to 6pm--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

<!-- </div> -->




@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>

function addressaddclick() {

  $('#addadressmodel').modal('show');  // The function returns the product of p1 and p2
}
$(document).ready(function()
{     
        $('.dynamic').change(function()
        {
                if($(this).val() != '')
                {
              
                                
                                var value = $(this).val();
                               
                                var _token = $('input[name="_token"]').val();
                        $.ajax({
                                    url:"{{ route('checkoutpageController.fetch') }}",
                                    method:"POST",
                                    data:{
                                             value:value, _token:_token
                                            },
                                                success:function(result)
                                                                        {
                                                                             document.getElementById('customer_first_name').innerHTML=result;
                                                                            //$('#'+dependent).html(result);
                                                                        }

                                })
                }
        });




 

});


</script>