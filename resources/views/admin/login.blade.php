@extends('admin.index2')
<title>{{ trans('admin.login') }}</title>
@section('content')
<div class="container" style="margin-top: 0px">
    <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9"><br><br>
                <h2 class="text-white">Welcome to Ducks Dashboard.</h2>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-bottom: 150px;">    
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="POST" >
            {!! csrf_field() !!}
            <div class="card card-login">
                <div class="card-header ">
                    <div class="card-header ">
                        <h3 class="header text-center">Login</h3>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user-secret"></i>
                            </span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="email"  required="" >
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" name="password" placeholder="Password" type="password" value="secret" required="">   
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" name="rememberme" type="checkbox" value="1">
                                <span class="form-check-sign"></span>
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning btn-round mb-3">Sign in</button>
                    </div>
                </div>
            </div>
        </form>
        <a href="https://paper-dashboard-pro-laravel.creative-tim.com/password/reset" class="btn btn-link">
            Forgot password
        </a>
    </div>
</div>
@endsection