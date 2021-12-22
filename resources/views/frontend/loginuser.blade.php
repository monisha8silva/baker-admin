@extends('frontend.common.main')

@section('content')
 <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/card.css') }}">

 

 <div class="card bg-light ">
     <article class="card-body mx-auto " style="max-width: 400px;">
     <h4 class="card-title mt-3 text-center">Create Account</h4>
     <p class="text-center">Get started with your free account</p>
     
          
     <p>
         <a href="" class="btn btn-block btn-gmail"><i class="fab fa-google-plus-g"></i>
        Login via Gmail</a>
        <a href="login.php" class="btn btn-block btn-facebook"><i class="fab fa-facebook"></i>
        Login via Facebook</a>
     </p>
     <p class="divider-text">
         <span class="bg-light">OR</span>

     </p>
     <form action="" method="POST">
     
     

         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="far fa-user"></i></span>
             </div>
             <input name="firstname" class="form-control" placeholder="Username" type="text" required>
         </div>
         <div class="form-group input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="far fa-user"></i></span>
             </div>
             <input name="password" class="form-control" placeholder="Password" type="password" required>
         </div>
        
         <div class="form-group ">
             <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Login

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