@extends('user.layout')
@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">

<div class="col-md-6">
    <div class="box-for overflow">
        <div class="col-md-12 col-xs-12 login-blocks">
            <h2>Login : </h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default"> Log in</button>
                </div>
            </form>
            <br>
        </div>

    </div>
</div>
    </div>
</div>
@endsection
