@extends('layouts.app')
@section('body-class','login-page sidebar-collapse')
@section('content')

<div class="page-header header-filter" style="background-image: url('{{asset('/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
        <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Registro</h4>
    
            </div>
            <p class="description text-center">Completa tus datos</p>
            <div class="card-body">
            
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">face</i>
                </span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre." name="name" value="{{ old('name') }}" required autofocus >
            </div>

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
                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña.">
              
            </div>

  <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                </span>
                </div>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required required placeholder="Confirmar Contraseña...">
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar Registro</button>
            </div>
        </form>
        </div>
    </div>
    @if ($errors->has('email'))
                <div class="alert alert-warning">
                    
                        <div class="alert-icon">
                            <i class="material-icons">warning</i>
                        </div>

                    {{ $errors->first('email') }}
                    
                 </div>
             @endif

 @if ($errors->has('password'))
                <div class="alert alert-warning">
                    
                    <div class="alert-icon">
                        <i class="material-icons">warning</i>
                    </div>
                                        {{ $errors->first('password') }}
                    </div>          
                                @endif

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
        &copy; made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
    </div>
    </div>
</footer>
</div>
@endsection
