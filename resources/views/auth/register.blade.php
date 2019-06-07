<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dispensary Smart Card System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/ico" href="{{ URL::asset('favicon.ico') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="row content">
            <div class="col-sm-6 right">
                <h1>Dispensary Smart Card System</h1>
            </div>
            <div class="col-sm-6 left">
                <form class="login-form" role="form" method="POST" action="{{ url('/login') }}" data-toggle="validator">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" class="form-control" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" data-pattern-error="Invalid email address" value="{{ old('email') }}" placeholder="E-mail..." required>
                        <div class="help-block with-errors"></div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                        <div class="help-block with-errors"></div>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input name="remember" type="checkbox"><p>Remember me</p></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
<!--===============================================================================================-->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/login.js') }}"></script>
</body>
</html>