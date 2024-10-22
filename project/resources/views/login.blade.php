@extends('main')

@section ('title','Login')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="#" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <a href="/register" type="submit" class="btn btn-info">Register</a>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="/" type="submit" class="btn btn-primary btn-block">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection