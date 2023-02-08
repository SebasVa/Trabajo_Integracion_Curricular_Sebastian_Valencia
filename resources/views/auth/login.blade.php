@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}">
                {{ trans('panel.site_title') }}
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Inicia sesión para empezar</p>
            @if(\Session::has('message'))
                <p class="alert alert-info">
                    {{ \Session::get('message') }}
                </p>
            @endif
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <input 
                        type="email" 
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        required 
                        autofocus placeholder="{{ trans('global.login_email') }}" 
                        name="email" 
                        value="{{ old('email', null) }}"
                        pattern="[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_]+(\.[a-zA-Z]{2,4}){1,2}"
                        oninvalid="
                        if (this.value ===''){
                            this.setCustomValidity('Ingresa el correo!')
                        } else if (this.value !='') {
                            this.setCustomValidity('No es un correo!')
                        }"
                        oninput="this.setCustomValidity('')"
                    >
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            Este correo no coincide con nuestros registros!
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input 
                        type="password" 
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        required placeholder="{{ trans('global.login_password') }}" 
                        name="password"
                        oninvalid="
                        if (this.value ===''){
                            this.setCustomValidity('Ingresa la contraseña!')
                        }"
                        oninput="this.setCustomValidity('')"
                    >
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            Este correo no coincide con nuestros registros!
                        </div>
                    @endif
                </div>


                <div class="row">
                    <div class="col-8">
                        <p class="mb-0">
                            <a href="{{ route('register') }}">Registro</a>
                        </p>
                        <p class="mb-1">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('global.login') }}</button>
                    </div>

                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection