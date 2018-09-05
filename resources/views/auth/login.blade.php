@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
        <form class="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Inicio de Sesión</h4>
            <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                <i class="fa fa-google-plus"></i>
                </a>
            </div>
            </div>
            <p class="description text-center">Ingresa tus datos</p>
            <div class="card-body">
            <!--
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">face</i>
                </span>
                </div>
                <input type="text" class="form-control" placeholder="First Name...">
            </div>
-->
            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">mail</i>
                </span>
                </div>
                <input id="email" type="email" class="form-control "name="email" value="{{ old('email') }}" required autofocus placeholder="Email...">
                
            </div>
            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                </span>
                </div>
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password...">
                
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>

<div class="input-group ">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar Sesión
                                    </label>
                                </div>
                            </div>
                        </div>

            </div>
            <div class="footer text-center">
            <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">INGRESAR</button>
            
            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
            
            </div>

            

        </form>
        </div>
    </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
    <nav class="float-left">
        <ul>
        <li>
            <a href="https://www.creative-tim.com">
            Creative Tim
            </a>
        </li>
        <li>
            <a href="https://creative-tim.com/presentation">
            About Us
            </a>
        </li>
        <li>
            <a href="http://blog.creative-tim.com">
            Blog
            </a>
        </li>
        <li>
            <a href="https://www.creative-tim.com/license">
            Licenses
            </a>
        </li>
        </ul>
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
    </div>
    </div>
</footer>

@endsection
