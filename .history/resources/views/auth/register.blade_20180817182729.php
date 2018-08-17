@extends('layouts.master')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        Laravel Starter
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">{{ __('Register') }}</p>
    
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              <div class="input-group-append">
                  <span class="fa fa-user input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                  <span class="fa fa-envelope input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                  <span class="fa fa-lock input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                  <span class="fa fa-lock input-group-text"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook-f mr-2"></i>
              Sign up using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus-g mr-2"></i>
              Sign up using Google+
            </a>
          </div>
    
          <a href="{{route('login')}}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    


@endsection
