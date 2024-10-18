@extends('mainLogin')

@section('title', 'Login')

@section('Auth')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Login</p>

        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="/admin" type="submit" name="ok" class="btn btn-primary btn-block">Sign In</a>
                </div>
            </div>
        </form>

        <p class="mb-0">
            <a href="/register" class="text-center">Register a new membership</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
@endsection