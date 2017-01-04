<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password - Flat Admin V.3</title>
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
                            <div class="title">Reset Password</div>
                        </div>
                        <div class="app-block">
                            <div class="app-form">
                                <div class="form-header">
                                    <div class="app-brand">Reset Password</div>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form role="form" method="POST" action="{{ url('/password/email') }}">

                                    {{ csrf_field() }}

                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Your e-mail...">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success btn-submit" value="Send Password Reset Link">
                                    </div>
                                </form>
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