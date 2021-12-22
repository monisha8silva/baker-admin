
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
       @if (count($errors) > 0)
         <div class="col-md-6 alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
     <form  method="post" action="/add_category">{{ csrf_field() }}

      <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
          <div class="form-group row">

            <div class="col-sm-6">
              <input type="text" class="form-control" name="category" placeholder="Add Main Category">
            </div>
          </div>
        </div>

      </div><!--end row-->
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

<!--start color switcher-->
<div class="right-sidebar">
  <div class="switcher-icon">
    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
  </div>
  <div class="right-sidebar-content">

    <p class="mb-0">Gaussion Texture</p>
    <hr>

    <ul class="switcher">
      <li id="theme1"></li>
      <li id="theme2"></li>
      <li id="theme3"></li>
      <li id="theme4"></li>
      <li id="theme5"></li>
      <li id="theme6"></li>
    </ul>

    <p class="mb-0">Gradient Background</p>
    <hr>

    <ul class="switcher">
      <li id="theme7"></li>
      <li id="theme8"></li>
      <li id="theme9"></li>
      <li id="theme10"></li>
      <li id="theme11"></li>
      <li id="theme12"></li>
      <li id="theme13"></li>
      <li id="theme14"></li>
      <li id="theme15"></li>
    </ul>

  </div>
</div>
<!--end color switcher-->

</div><!--End wrapper-->
@endsection