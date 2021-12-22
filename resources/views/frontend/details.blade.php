@extends('frontend.common.main')

@section('content')

    
 
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

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

<!-- <div class="container-fluid" style="padding: 0px">

        <div class="row" style="min-height: 200px; display:flex">

                <div class="row" style="min-height: 200px; display:flex; background-image:url(public/images/imagesba/8.png); background-repeat:no-repeat; background-position:center;">
                      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Special Cake</h3> -->
                              <!-- <input value="ORDER NOW " style="color: white; background-color: #9b3e1c;" type="button"> -->
                      <!-- </div>
                 </div>
        </div>
</div> -->
        <!-- <div class="wrapper"> -->
                	<!-- <div class="content"> -->
                		<!-- content here -->
                		<!-- <div class="product-grid product-grid--flexbox">
                			<div class="product-grid__wrapper"> -->
                				<!-- Product list start here -->

								<!-- img block 1--- -->
   
    <section>
           <div class="container">
           <form action="/detaildatasubmit" method="post">
            @csrf
           <div class="row g-2">

         

               <div class="col-sm-6">
              
  <label for="firstname" class="form-label"></label>
  <input type="text"  name="firstname"  class="form-control" id="firstname" placeholder="First Name" >
</div>
<div class="col-sm-6">
<label for="exampleFormControlInput1" class="form-label"></label>
  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" >
</div>
</div>
<div class="row g-2 "> 
<div class=" col-sm-6">
<label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email" name="email" class="form-control form-floating" id="email" placeholder="Email "  >
</div>
<div class=" col-sm-6 ">
<label for="exampleFormControlInput1" class="form-label"></label>
  <input type="text" name="phone" class="form-control" id="phone"  placeholder="Phone Nu" required>
</div>
</div>
<br>
<div class="row g-2">
<div class="col-sm-6">
    <input type="text" name="city" class="form-control" id="city" placeholder="City" aria-label="City">
  </div>
  <div class="col-sm-6">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <!-- <option selected>Open this select menu</option> -->
        <option value="1">Western Province</option>
        <option value="2">Southern Province</option>
        <option value="3">Central Province</option>
        <option value="3">Uva Province</option>
        <option value="3">Sabaragamuwa Province</option>
        <option value="3">North Central Province</option>
        <option value="3">North Western Province</option>
        <option value="3">North Province</option>
      </select>
      <label for="floatingSelectGrid">Select Your Province</label>
    </div>
  </div>
  <!-- <div class="col-sm">
    <input type="text" class="form-control" placeholder="State" aria-label="State">
  </div>
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
  </div> -->
</div>
  <div class="row g-2">
<div class="col-sm-6">
  <label for="exampleFormControlTextarea1" class="form-label"></label>
  <textarea name="address" class="form-control" id="address" rows="4" placeholder="Address"></textarea>
              </div>


              </div>

             
              <button type="submit"  class="btn btn-success" style="margin-top:30px;font-size:20px;">Update</button>
            
</div>

          </div>

          </form>
      
         
      

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