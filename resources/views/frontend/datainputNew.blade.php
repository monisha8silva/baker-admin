
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">


 <style>
     #tablehead{
         text-align: center;
     }


     </style>
<!-- Carrers -->

<nav class="navbar navbar-dark bg-primary ">
<ul class="nav justify-content-right" >
  <li class="nav-item ">
    <a class="nav-link active " aria-current="page" href="datainputNew" style="color:black;">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminshow" style="color:black;">Order Items</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin" style="color:black;">Logout</a>
  </li>
  
 
</ul>
</nav>
    
<div class="row">
        <div class="col-12">
        
                <div class="container" >
    
        
                
            
                    <div class="jumbotron" style="background-color:white">

                    <!-- <div class="carrers-title text-center" style="margin-top:0px; text-transform: uppercase; font-weight: 200; color: #777; font-family: Poppins, Arial, sans-serif;">
                        <h3>Data Input</h3>
                        <a href="adminuser">logout</a>
                        </div> -->
                                    <!-- <div class="carrers-title text-center" style="padding-top:60px;">
                                        <h2>Data Input</h2>
                                    </div> -->
                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                            
                                                    <h4>{{ \Session::get('success') }}</h4>
                                                
                                            </div>


                                        @endif
                                        @if (\Session::has('danger'))
                                            <div class="alert alert-danger">
                                            
                                                    <h4>{{ \Session::get('danger') }}</h4>
                                                
                                            </div>

                                            
                                        @endif
                                            <table class=" table table-dark datatable" style="border-collapse: collapse; width: 100%;  border:1; background-color:white; color:black" id="datatable">
                                                   
                                            <thead>
                                            <tr>
                                                   
                                            
                                                    <td id="tablehead" style="width: 20%;">Food Name</td>
                                                    <td id="tablehead" style="width: 20%;">Food Category</td>
                                                    <td id="tablehead" style="width: 20%;">Price</td>
                                                    
                                                    <td id="tablehead" style="width: 20%;">Image</td>
                                                    <td id="tablehead" style="width: 20%;">Status</td>
                                                    <td id="tablehead" style="width: 20%;"></td>
                                                    
                                                    <td style="width: 20%; visibility:collapse; "></td>
                                                    <td style="width: 20%; visibility:collapse; "></td>
                                                    </tr>
</thead>
<tbody>
                                                @foreach($food as $row)
                                                    <tr>                                                  
                                                   
                                                    <td id="tablecont" style="width: 20%; text-align:center">{{$row->OrderTicketName}}</td>
                                                    <td id="tablecont" style="width: 20%; text-align:left">{{$row->Name}}</td>
                                                    <td id="tablecont" style="width: 20%; text-align:right">{{$row->Price}}</td>
                                                    
                                                    <td id="tablecont" style="width: 20%; text-align:center" ><img width = "100px" height = "100" src="/img/{{$row->Img}}"></img></td>
                                                    <td id="tablecont" style="width: 20%; text-align:center">{{$row->Status}}</td>
                                                    <td id="tablecont" style="width: 20%; text-align:right">
                                                    <div class="middle">
                                                     <button type="submit" class="btn btn-success edit" style="color: white; background-color: #048343; font-weight:bold; padding-left:20px; padding-right:20px">Edit</button>
                                                  </div>
                                                    <!-- <button type="button" class="btn btn-primary edit" >Edit</button> -->
                                                </td>
                                                    
                                                    <td style="width: 20%;  visibility:collapse;" > {{$row->FoodId}}</td>
                                                    <td style="width: 20%;  visibility:collapse;" > {{$row->WebCategoryId}}</td>
                                                    </tr>
      @endforeach
                                                </tbody>  
                                                    




                                                    
                                          
                                            </table>

</div>

                    </div>
                </div>

            </div>
            <div class="col-4">
        
        </div>

 </div>                   

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Record Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="/datainputNew/" method="post"   id="editform" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Food Name</label>
                                <input type="text" class="form-control" id="InputName" name="InputName" aria-describedby="emailHelp" placeholder="Enter Name">
                                <small id="emailHelp" class="form-text text-muted">Enter Name Here</small>
                            </div>
                          
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">Food Category</label>
                                <select class="form-control" id="InputType" name="InputType" >
                                @foreach($foodtype as $row)
                                    <option value="{{$row->WebCategoryId}}">{{$row->Name}}</option>
                                    

                                    @endforeach
                                </select>
                             </div>









                             <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" id="InputPrice" name="InputPrice" aria-describedby="emailHelp" placeholder="Enter Price">
                                <small id="emailHelp" class="form-text text-muted">Enter Price Here</small>
                            </div>
                            <div class="form-group">
                                <label for="InputQty">Quantity</label>
                                <input type="text" class="form-control" id="InputQty" name="InputQty" aria-describedby="emailHelp" placeholder="Enter Quantity">
                                <small id="emailHelp" class="form-text text-muted">Enter Quantity Here</small>
                            </div>
                            <div class="card">
                                <fieldset class="form-group row">
                                    <legend class="col-form-label col-sm-5 float-sm-left pt-0">Product Status</legend>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioStatus" id="gridRadios1" value="1" >
                                            <label class="form-check-label" for="gridRadios1">
                                            Disabled
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioStatus" id="gridRadios2" value="2">
                                            <label class="form-check-label" for="gridRadios2">
                                            Enabled
                                            </label>
                                        </div>
                                      
                                    </div>
                                </fieldset>
                             </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image file input</label>
                                <input type="file" class="form-control-file" id="InputFiles" name="InputFiles" >
                                <small id="emailHelp" class="form-text " id="InputFile">Enter Price Here</small>
                            
                            
                            </div>
                             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div>         
                                               
                        </form>
      </div>
     


      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>

$(document).ready( function()
{

            var table =$('.datatable').DataTable();
        table.on('click','.edit',function(){
        $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){

            $tr=$tr.prev('.parent');

        }
    
        var data =table.row($tr).data();
        console.log(data); 
                $('#InputName').val(data[0]);
               $('#InputType').val(data[7]);
                $('#InputPrice').val(data[2]);
                $('#InputQty').val(data[8]);
              //  $('#InputFile').text(data[7]);
               // $('#gridRadios1').val(data[4]);

               //document.getElementById("mySelect").value = "banana";

               if (data[4]==1){

                    document.getElementById('gridRadios1').checked = true;
               }
           
                else
                {

                    document.getElementById('gridRadios2').checked = true;
                }

        $('#editform').attr('action','/datainputNew/'+data[6]);
        $('#editmodel').modal('show');
    })
     
});


</script>
<!-- </div> -->