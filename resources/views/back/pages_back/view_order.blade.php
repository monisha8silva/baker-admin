
@extends('back/layouts_back.main_layout')
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Form Input</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
          <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form Input</li>
        </ol>
      </div>
      <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
          <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->

  <div class="card">
    <div class="card-header text-uppercase">Add Main Category</div>
    <div class="card-body">
     <form  method="post" enctype="multipart/form-data" action="/add_product">{{ csrf_field() }}


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Order Id</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Address</th>
                      <th>Start date</th>
                      <th>View</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($orders as $row)
                    <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->phone }}</td>
                      <td>{{ $row->address }}</td>
                      <td><button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1">PRIMARY</button></td>
                      <td><a class="btn btn-primary btn-round waves-effect waves-light m-1 order" data-id="{{$row->id}}"  >View</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->


      <div class="form-footer">
        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
      </div>
    </form>
  </div>
</div>




<!--start overlay-->
<div class="overlay"></div>
<!--end overlay-->
</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<footer class="footer">
  <div class="container">
    <div class="text-center">
      Copyright © 2020 Dashtreme Admin
    </div>
  </div>
</footer>
<!--End footer-->


</div><!--End wrapper-->
<!-- Modal -->
<div class="modal fade" id="largesizemodal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Your modal title here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody id="tbl_order">
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-white"><i class="fa fa-check-square-o"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
<script src="<?php echo asset('back/assets/js/jquery.min.js');?>"></script>
<!--Data Tables js-->
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/jszip.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/pdfmake.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/vfs_fonts.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/buttons.print.min.js');?>"></script>
<script src="<?php echo asset('back/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js');?>"></script>

<script>
 $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();


      var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );

      table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
    } );

  </script>

  <script type="text/javascript">

    $(document).on('click', '.order', function(){
    $('#tbl_order').html('');
     var order_id = $(this).data('id');
     var token = "{{ csrf_token() }}";
     $('.product-popup').html('');
     $("#product_name").text('');
     $(".price").text('');
     $("#pro_id").val('');
     $("#pro_name").val('');
     $("#pro_price").val('');
     $.ajax({

      type:'post',
      url:"/dashboard/order_products/"+order_id,
      dataType: 'JSON',
      data: {
       "_method": 'post',
       "_token": token,
       "order_id": order_id
     },
     success:function(response){
      
      $.each(response.product, function (index, val) {
      $('#tbl_order').append(
            "<tr>"+
              "<td>"+val.product_name+"</td>"+
              "<td id='item_serial'>"+val.price+"</td>"+
              "<td id='item_code'>"+val.quantity+"</td>"+
              "<td id='item_name'>"+val.image+"</td>"+
             
            "</tr>"
          );

      });

    },
    error:function(){

    },

  });

     $('#largesizemodal').modal('toggle');
   });


 </script>