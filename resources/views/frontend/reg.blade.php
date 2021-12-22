@extends('frontend.common.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('login')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login')}}">

                       @csrf

                       <div class="form-group row">
                       <div class="col-md-6 offset-md-3">
                           <a href="{{  route('login.facebook') }}" class="btn btn-danger btn-block">Login Via Facebook</a>
                           
                      </div>
                      </div>

                      <p style="text-align:center">OR</p>


                       <div class="form-group row">
                           <div class="col-md-6 offset-md-3">
                               <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                       <div class="col-md-6  offset-md-3">
                               <input type="email" class="form-control @error('password') is-invalid @enderror " name="email" value="{{old('email')}}" required autocomplete="current-password" autofocus placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                        </div>


                        <div class="form-group row">
                       <div class="col-md-6  offset-md-4">
                           <form class="form-check">
                               <input type="form-check-input" type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }}>
                           </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection