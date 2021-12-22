

@extends('frontend.common.main')

@section('content')

    
 
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 <style>
     
     .wrapper{width:0em !important}
.cake-price h6{
    color: #04AA6D;
    font-weight: bold;
}

#careericon{
  height:auto;
  width:50px;
  float:left;
  margin-top:20px;
  margin-left:30px;
  margin-right:20px;
}

#careertext{
  margin-top:50px;
  /* text-transform:UPPERCASE; */
}
 </style>

<div class="row" style="min-height: 200px; display:flex">

<div class="row" style="min-height: 200px; display:flex;background-image:url(public/images/bannersfinal/22.png); background-repeat:no-repeat; background-position:center;">
      <div class="col-md-12" style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
              <!-- <h3 class="mb-3" style="color: #FFFFFF;text-transform: uppercase;margin-bottom: 2%;">Burgers</h3> -->
            
      </div>
 </div>
</div>

        <!-- Carrers -->

        <section id="careers">
            <!-- <div class="carrers-title text-center" style="padding-top:60px;">
                <h2>VACANCIES</h2>
            </div> -->
            <div class="carrers-title text-center" style="margin-top:90px; text-transform: uppercase;">
                        <h3>current vacancies</h3>
                        </div>
            <!-- <div class="careers-underline"></div> -->
            <div class="car-title-un" style="background-color:red;hieght:3px;width:30px;margin:0 auto 0 auto;"></div>
            <div class="container">
                <div class="row" style="margin-top:30px;">
                    <!-- <div class="col-md-4">
                         <div class="img-ca"  data-toggle="modal" data-target="#myModal">
                         <img src="public/images/manager.png" id="careericon">
                         </div>
 
                        <div class="car-desc" id="careertext">
                            <h5>Cook</h5>
                       </div>
                    </div>
                   -->
                    <div class="col-md-4">
                         <div class="img-ca"  data-toggle="modal" data-target="#myModal">
                         <img src="public/images/manager.png" id="careericon">
                         </div>
 
                        <div class="car-desc" id="careertext">
                            <h5>Sales Assistant</h5>
                       </div>
                    </div>

                    <!-- <div class="col-md-4">
                         <div class="img-ca"  data-toggle="modal" data-target="#myModal">
                         <img src="public/images/manager.png" id="careericon">
                         </div>
 
                        <div class="car-desc" id="careertext">
                            <h5>Officer</53>
                       </div>
                    </div> -->

                    <div class="col-md-4">
                         <div class="img-ca"  data-toggle="modal" data-target="#myModal">
                         <img src="public/images/chef.png" id="careericon">
                         </div>
 
                        <div class="car-desc" id="careertext">
                            <h5>Cook</h5>
                       </div>
                    </div>

                    <div class="col-md-4">
                         <div class="img-ca"  data-toggle="modal" data-target="#myModal">
                         <img src="public/images/chef2.png" id="careericon">
                         </div>
 
                        <div class="car-desc" id="careertext">
                            <h5>Cake Decorators</h5>
                       </div>
                    </div>

                    <div class="container">
                      <div class="row" style="margin-left:30px;margin-top:20px;">
                 <form>
                    <label for="cv">Add CV</label>
                    <input type="file" id="cv" name="cv">
                </form>

           </div>
          </div>
                    
                      
                       

                    

                      
                       
                       

<div class="car-descp">
  <h6 style="color:gray;margin-left:40px;margin-top:40px;">If the above interest you, please forward your cv to <a href="mailto:caravanfresh@lanaka.switzgroup.com" style="font-size:18px; color:#048343">caravanfresh@lanka.switzgroup.com</a></h6>
</div>
</div>
</div>
</div>
</div>
</div>


                     </section>


                     <!-- <div class="container"> -->
  <!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal Head Chef -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Head Chef </h4>
        </div>
        <div class="modal-body">
          <p>Chef vacancy.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<!-- </div> -->

 <!-- Modal Head Chef2 -->
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->


  
 <!-- Modal Head Chef3 -->
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->


  <!-- Modal Head Chef4 -->
 <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef5 -->
 <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef6 -->
 <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef7 -->
 <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef8 -->
 <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef9 -->
 <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->

  <!-- Modal Head Chef10 -->
 <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- </div> -->











        <!-- end -->

        @endsection