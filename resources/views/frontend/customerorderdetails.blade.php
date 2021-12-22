@extends('frontend.common.main')

@section('content')


    

 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">
 
 <link rel="stylesheet" href="{{mix('/css/main.css')}}" >
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
    .box {
        box-sizing: content-box;
        width: 400px;
        height: 220px;
       
        border: 2px solid gray;
        margin-left: 140px;
        padding-right: 120px;
        padding-bottom:40px;
    }
    
    </style>
    <section>
 
<!-- 
    <div class="container">
    @foreach($orderheader as $row)

                <div class="row">
           
                    <div class="col-md-6 box" style="margin-top:30px;">
                      
                      <h3 style="font-size:17px;">Delivery Address</h3>
                      <h2 style="font-size:15px;">First Name</h2>
                      {{$row->customer_first_name }}
                      <h2 style="font-size:15px;">Last Name</h2>
                      {{$row->customer_last_name }}
                       <h2 style="font-size:15px;">Address:</h2>
                       <address>
                          <p>{{$row->customer_delivery_address }}</p>
                      </address>

                      <h2 style="font-size:15px;">phone No:</h2>
                                {{$row->customer_phone}}
                    </div>

                    <div class="col-md-6 box" style="margin-left:30px;margin-top:30px;">
                      <h3 style="font-size:17px;">Total Summary</h3>
                      
                      <h2 style="font-size:15px;">Total : LKR {{$row->TotalPrice }}</h2>
                    
                 
                         </div>
               
              </div>

 
          </div>
        </div>
</div>

</div> -->

<div class="container">
<div class="row">
    <div class="col-md-12">



<h4 style="font-size:20px;margin-left:100px;margin-top:50px;">My orders/tracking</h4>


<ol class="steps" style="margin-top:120px;"> 

@if (($row->Status) === 1)
    <li class="step is-complete" data-step="1">
   Pending
  </li>
  <li class="step" data-step="2">
   Deliverd
  </li>
  
@else
       <li class="step is-complete" data-step="1">
   Pending
  </li>
  <li class="step is-complete" data-step="2">
   Deliverd
  </li>
@endif
   @endforeach  
    
 

</ol>
</div>
</div>

</div>
</section>
<section>

<!-- 
    <div class="container">
        <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
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
  @foreach($orderdetails as $row)
    <tr>
      
      <td><img src="/img/{{$row->Img }}" class="w-20 rounded" alt="Thumbnail" width="50px" height="50px" ></td>
      <td>{{$row->Name }}</td>
      <td>{{$row->Quantity }}</td>
      <td>{{$row->foodPrice }}</td>
      <td>{{$row->TotalPrice }}</td>
    </tr>
    @endforeach  
   
   
   
  </tbody>
</table>
        </div>
            -->
</section>
                			
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