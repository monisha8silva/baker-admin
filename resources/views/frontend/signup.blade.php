@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">


 <div class="card bg-light ">
     <article class="card-body mx-auto " style="max-width: 400px;">
     <h4 class="card-title mt-3 text-center">Create Account</h4>
     <p class="text-center">Get started with your free account</p>
     <!-- <p>
         <a href="" class="btn btn-block btn-gmail"><i class="fab fa-google-plus-g"></i>
        Login via Gmail</a>
        <a href="fblogin.php" class="btn btn-block btn-facebook"><i class="fab fa-facebook"></i>
        Login via Facebook</a>
     </p> -->
    
    
     @if(count($errors)>0)

     @endif
     @if(\Session::has('success'))
     <div class="alert alert-success">

     <p>{{\Session::get('success')  }}</p>
      </div>
      @endif
       <form action="{{ url('customer') }}" method="POST">
           {{csrf_field() }}

         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="far fa-user"></i></span>
             </div>
             <input name="firstname" class="form-control" placeholder="First Name" type="text" required>
         </div>
         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="far fa-user"></i></span>
             </div>
             <input namw="lastname" class="form-control" placeholder="Last Name" type="text" required>
         </div>
         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-envelope"></i></span>
             </div>
             <input name="email" class="form-control" placeholder="Email" type="email" required>
         </div>
         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-mobile"></i></span>
             </div>
             <input name="mobile" class="form-control" placeholder="Mobile Number" type="text" required>
         </div>
         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
             </div>
             <input name="address" class="form-control" placeholder="Address" type="text" required>
         </div>
         <div class="form-group ">
             <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Create Account

             </button>
        </div>
           <!-- <p class="text-center">Have an account?<a href="login.php">Log In</a>
        </p> -->

       </form>
     </article>
 </div>
</div>
</div>
</div>





    



@endsection