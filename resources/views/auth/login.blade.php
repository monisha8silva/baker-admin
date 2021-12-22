@extends('frontend.common.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                <a href="/auth/google" class="btn btn-danger "><i class="fab fa-google-plus-g fa-2x"></i> Google</a>
                                        <a href="/auth/facebook" class="btn btn-primary "><i class="fab fa-facebook-square fa-2x"></i> Facebook</a>
                                </div>
                       

                         
                        </div>

                       
                            </div>
                    </div>
                </div>
            </div>
        </div>
 
@endsection
