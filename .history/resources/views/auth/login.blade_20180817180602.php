@extends('layouts.master') 

@section('content')
<div class="login-box">
    <div class="login-logo">
      Laravel Starter
    </div>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
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
            <div class="row">
                <div class="col-8">
                    <div class="checkbox icheck">
                        <label>
                <input type="checkbox"> Remember Me
              </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook-f mr-2"></i> Sign in using Facebook
        </a>
            <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus-g mr-2"></i> Sign in using Google+
        </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="#">I forgot my password</a>
        </p>
        <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->

@endsection