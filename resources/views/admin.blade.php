<!-- @extends('frontend.common.main')

@section('content') -->
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 

<div class="card bg-light ">
    <article class="card-body mx-auto " style="max-width: 400px;margin-top:200px;padding-bottom:200px;">
    <h4 class="card-title text-center">Log in to your Account</h4>
    <p class="text-center"></p>
    
         <div class="container" style="margin-top:40px;">
             <div class="row">
   
    <form action="{{ route('admin.auth') }}" method="POST">
    @csrf
        <div class="form-group input-group ">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-user"></i></span>
            </div>
            <input name="email" class="form-control" placeholder="email" type="email" required>
        </div>
       
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-thermometer-empty"></i></span>
            </div>
            <input name="password" class="form-control" placeholder="Password" type="password" required>
        </div>
       
        <div class="form-group ">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" style="width:100px;">Login
          
            </button>
            {{session('error')}}   
       </div>
          <!-- <p class="text-center">Have an account?<a href="login.php">Log In</a>
       </p> -->

      </form>
   
</div>
</div>
    </article>
</div>
</div>
</div>
</div>





   



<!-- @endsection -->