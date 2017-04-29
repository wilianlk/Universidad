@extends('layouts.app')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">

            <div class="panel-body text-center">
                <h1>Bienvenido al sistema de Electivas </h1>
            </div>
        </div>
        {{--<div class="flags-wrapper">--}}
            {{--<a href="?lang=en">--}}
                {{--<img src="assets/img/en.png" alt="English" title="English" class="" />--}}
            {{--</a>--}}

            {{--<a href="?lang=es">--}}
                {{--<img src="assets/img/es.png" alt="Spanish" title="Spanish" class="fade" />--}}
            {{--</a>--}}

        {{--</div>--}}
    </div>

    <div class="container" style="position:absolute;margin-top: 2.4cm;">
        <div class="modal modal-visible" id="loginModal" style="position:relative;left: 15px;">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Seguridad</h3>
                    </div>
                    <div class="modal-body">
                        <div class="well">

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                                <li><a href="#create" data-toggle="tab">Create Account</a></li>
                            </ul>

                            <div class="tab-content">
                                <!-- start: Login Tab -->
                                <div class="tab-pane active in" id="login">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div id="legend">
                                                <legend class="">Login</legend>
                                            </div>
                                        </fieldset>
                                    </form>


                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">Login</div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                                            {{ csrf_field() }}

                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                                    @if ($errors->has('email'))
                                                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-md-6 col-md-offset-4">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Login
                                                                    </button>

                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        Forgot Your Password?
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <!-- end: Login Tab -->

                                <!-- start: Registration Tab -->
                                <div class="tab-pane fade" id="create">
                                    <form class="form-horizontal register-form" id="tab">
                                        <fieldset>
                                            <div id="legend">
                                                <legend class="">Create Account</legend>
                                            </div>

                                            <div class="control-group  form-group">
                                                <label class="control-label col-lg-4" for='reg-email' >
                                                    Email <span class="required">*</span>
                                                </label>
                                                <div class="controls col-lg-8">
                                                    <input type="text" id="reg-email" class="input-xlarge form-control">
                                                </div>
                                            </div>

                                            <div class="control-group  form-group">
                                                <label class="control-label col-lg-4" for="reg-username">
                                                    Username <span class="required">*</span>
                                                </label>
                                                <div class="controls col-lg-8">
                                                    <input type="text" id="reg-username" class="input-xlarge form-control">
                                                </div>
                                            </div>

                                            <div class="control-group  form-group">
                                                <label class="control-label col-lg-4" for="reg-password">
                                                    Password <span class="required">*</span>
                                                </label>
                                                <div class="controls col-lg-8">
                                                    <input type="password" id="reg-password" class="input-xlarge form-control">
                                                </div>
                                            </div>

                                            <div class="control-group  form-group">
                                                <label class="control-label col-lg-4" for="reg-repeat-password">
                                                    Repeat Password <span class="required">*</span>
                                                </label>
                                                <div class="controls col-lg-8">
                                                    <input type="password" id="reg-repeat-password"
                                                           class="input-xlarge form-control">
                                                </div>
                                            </div>

                                            <div class="control-group  form-group">
                                                <div class="controls col-lg-offset-4 col-lg-8">
                                                    <button id="btn-register" class="btn btn-success">
                                                        Create Account                                                        </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="assets/js/sha512.js"></script>
    <script type="text/javascript" src="ASLibrary/js/asengine.js"></script>
    <script type="text/javascript" src="ASLibrary/js/register.js"></script>
    <script type="text/javascript" src="ASLibrary/js/login.js"></script>
    <script type="text/javascript" src="ASLibrary/js/passwordreset.js"></script>
    </body>
</html>
@stop