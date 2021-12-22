@extends('frontend.common.main')

@section('content')

    
 
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 <style>
     
     .wrapper{width:0em !important}
     .cake-price h5{
    color: #048343 ;
   font-weight: 600;
}

 </style>


        <!-- <div class="wrapper"> -->
                	<!-- <div class="content"> -->
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper"> -->
                				<!-- Product list start here -->

								<!-- img block 1--- -->
   
    <section id = "img-sec" style="padding-top:60px;padding-bottom:30px; " >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 style="font-size:30px;font-width:300px;">Cart List</h4><br>
                    <p style="margin-bottom:40px ;"></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col" style="padding-left:80px;">Qty</th>
      <th scope="col"></th>
      <th scope="col">Price</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cartItems as $item)
    <tr>
      <th scope="row">
      <img src="public/Img/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail" width="100px" height="100px" style="margin-left:60px; margin-right:60px">
      </th>
      <td ><p style="margin-top:25px;">{{ $item->name }} </p></td>
      <td> 
        
      <form action="{{ route('cart.update') }}" method="POST" >
                                     
                                      <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus  btn-danger fas fa-minus"  data-type="minus" data-field=""  style="margin-top:10px;">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{ $item->quantity }}" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus  btn-success fas fa-plus" data-type="plus" data-field="" style="margin-top:10px;">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>

                                  

            <td>
                                     
                                         @csrf
                                        <input type="hidden" name="id" value="{{ $item->id}}" >
                                     
                                         <button type="submit"  class="btn btn-primary" style="background-color:#048343;margin-top:20px; "  >Update</button>
                                    </form>
    
                                        
                       
      </td>
      <td ><p style="margin-top:20px">${{ $item->price }}</p></td>
      <td>
                              <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="btn btn-primary" style="background-color:#960e0e; margin-top:10px;">Delete</button>
                              </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="checkout"><button type="button" class="btn btn-success " style="margin-top:20px;margin-left:850px;width:200px;margin-bottom:30px;">Next</button></a>
</div>
</div>
               

        
               
                
      
            

               
            </div>

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

<script>

$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var $field = $(this).closest('td').find('#quantity').val();
        
        var quantity = parseInt($field);
        
        // If is not undefined
            
        $(this).closest('td').find('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var $field = $(this).closest('td').find('#quantity').val();
        var quantity = parseInt($field);
       
        // If is not undefined
      
            // Increment
            if(quantity>0){
              $(this).closest('td').find('#quantity').val(quantity - 1);
            }
    });
    
});
  </script>

@endsection