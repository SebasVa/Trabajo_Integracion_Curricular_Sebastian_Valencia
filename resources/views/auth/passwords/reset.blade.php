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
    @if (Session::has('sent'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
        </button>
        <h4>{{ Session::get('sent') }}</h4>
      </div>
    @endif
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ trans('global.reset_password') }}</p>
            <form method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <div>
                    <input name="token" value="{{ $token }}" type="hidden">
                    <div class="form-group has-feedback">
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control"
                            required placeholder="{{ trans('global.login_email') }}"
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
                            <p class="help-block">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control" 
                            required placeholder="{{ trans('global.login_password') }}"
                            oninvalid="
                            if (this.value ===''){
                                this.setCustomValidity('Ingresa la contraseña!')
                            }"
                            oninput="this.setCustomValidity('')"
                        >
                        @if($errors->has('password'))
                            <p class="help-block">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            class="form-control" 
                            required placeholder="{{ trans('global.login_password_confirmation') }}"
                            oninvalid="
                            if (this.value ===''){
                                this.setCustomValidity('Ingresa la contraseña!')
                            }"
                            oninput="this.setCustomValidity('')"
                        >
                        @if($errors->has('password_confirmation'))
                            <p class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.reset_password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection