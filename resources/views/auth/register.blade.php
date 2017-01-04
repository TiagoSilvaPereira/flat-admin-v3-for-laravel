<!DOCTYPE html>
<html>
    <head>
        <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('flat-admin/css/vendor.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('flat-admin/css/flat-admin.css')}}">
    </head>
    <body>
        <div class="app app-default">
            <div class="app-container app-login">
                <div class="flex-center">
                    <div class="app-header"></div>
                    <div class="app-body">
                        <div class="loader-container text-center">
                            <div class="icon">
                                <div class="sk-folding-cube">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                                </div>
                            </div>
                            <div class="title">Logging in...</div>
                        </div>
                        <div class="app-block">
                            <div class="app-right-section">
                                <div class="app-brand"><span class="highlight">Laravel</span> Admin</div>
                                <div class="app-info">
                                    <ul class="list">
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="title">Increase <b>Productivity</b></div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                            </div>
                                            <div class="title">Lot of <b>Components</b></div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                            </div>
                                            <div class="title">Forever <b>Free</b></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="app-form">
                                <div class="form-suggestion">
                                    Create an account for free.
                                </div>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                    <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus aria-describedby="basic-addon1" placeholder="Name">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon" id="basic-addon2">
                                        <i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required aria-describedby="basic-addon2" placeholder="E-mail">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon" id="basic-addon3">
                                        <i class="fa fa-key" aria-hidden="true"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" required aria-describedby="basic-addon3" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon4">
                                        <i class="fa fa-check" aria-hidden="true"></i></span>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required aria-describedby="basic-addon4"  placeholder="Confirm Password">
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success btn-submit" value="Register">
                                    </div>
                                </form>
                                <div class="form-line">
                                    <div class="title">OR</div>
                                </div>
                                <div class="form-footer">
                                    <span class="title"><a href="login">Login</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-footer">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>