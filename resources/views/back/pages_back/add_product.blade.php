
@extends('back/layouts_back.main_layout')
@section('content')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<style type="text/css">
.dropzone .dz-preview .dz-remove {
  color: red !important;
}
.dropzone .dz-message .dz-button {
    background: none;
    color: black;
    border: none;
    padding: 0;
    font: inherit;
    cursor: pointer;
    outline: inherit;
}
</style>
<style type="text/css">

</style>
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
     <form  method="post" id="frm_submit" enctype="multipart/form-data" >{{ csrf_field() }}

      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="form-group row">
            <div class="col-sm-6">
             <select class="form-control valid"   required="" aria-invalid="false" name="maincat" id="maincat">
              <option value="0">Select Category</option>
              @foreach($categories as $row)
              <option value="{{ $row->id }}">{{ $row->category }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-12 col-xl-12">
        <div class="form-group row">
          <div class="col-sm-6">
           <select class="form-control valid"   required="" aria-invalid="false" name="subcat" id="subcategory">
            <option value="0">Select Category</option>

          </select>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-12 col-xl-12">
      <div class="form-group row">
        <div class="col-sm-6">
          <input type="text" class="form-control" name="product_name" placeholder="Add Product">
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-12">
      <div class="form-group row">
        <div class="col-sm-8">
          <div class="dropzone" id="my_awesome_dropzone"></div>

        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-12">
      <div class="form-group row">
        <div class="col-sm-6">
          <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-12 col-xl-12">
      <div class="form-group row">
        <div class="col-sm-6">
          <textarea rows="4" class="form-control" id="basic-textarea" placeholder="Description" name="description"></textarea>
        </div>
      </div>
    </div>
    <div id="wrapper">
     <div class="col-12 col-lg-12 col-xl-12">
       

     </div>
   </div><!--end row-->
   <div class="form-footer">
    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
    <button type="button" id="btn_save" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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
@endsection
<script src="<?php echo asset('back/assets/js/jquery.min.js');?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

<script type="text/javascript">
  Dropzone.autoDiscover = false;

  window.onload = function() {

    var myDropzone = new Dropzone("#my_awesome_dropzone",{
      url: "/add_product",
      uploadMultiple: true,
      autoProcessQueue: false,
      parallelUploads: 4,
      addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10, // MB
            sending: function(file, xhr, formData) {
              var data = $('#frm_submit').serializeArray();
              formData.append("_token", "{{ csrf_token() }}");
              $.each(data, function(key, el) {
                formData.append(el.name, el.value);
              });
            },
             success: function (file, response) {
              // window.location.replace("/preview.php");
            }
          });

    $('#btn_save').click(function(formData) {
          //e.preventDefault();
          myDropzone.processQueue();
        });
  }




  $(document).on('change','#maincat',function(e){
   e.preventDefault();
   var maincat = this.value;

   $.ajax({

     type: 'GET',
     url:"/product/change_maincat",

     data: {

       "maincat": maincat

     },
     success: function(res)
     {

        // amusing res = {"3":"home","4":"home duplex"}; 
        var html = "";

        $.each(res.data, function (key, value) {
         html += "<option value="+value.id+">"+value.subcategory+"</option>";
       });
        $("#subcategory").html(html);

      }
    });
 });
</script>