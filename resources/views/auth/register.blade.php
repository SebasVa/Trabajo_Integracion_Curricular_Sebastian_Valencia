@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-logo">
        <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}">
            {{ trans('panel.site_title') }}
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>
            

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required autocomplete="name" 
                                    autofocus
                                    pattern="[ A-Za-záéíóú]+"
                                    oninvalid="
                                    if (this.value ===''){
                                        this.setCustomValidity('Ingresa el nombre!')
                                    } else if (this.value !='') {
                                        this.setCustomValidity('El nombre debe contener solo letras!')
                                    }"
                                    oninput="this.setCustomValidity('')"
                                >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" 
                                    required autocomplete="email"
                                    pattern="[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_]+(\.[a-zA-Z]{2,4}){1,2}"
                                    oninvalid="
                                    if (this.value ===''){
                                        this.setCustomValidity('Ingresa el correo!')
                                    } else if (this.value !='') {
                                        this.setCustomValidity('No es un correo!')
                                    }"
                                    oninput="this.setCustomValidity('')"
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Este correo ya existe!</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" 
                                    required autocomplete="new-password"
                                    oninvalid="
                                    if (this.value ===''){
                                        this.setCustomValidity('Ingresa la contraseña!')
                                    }"
                                    oninput="this.setCustomValidity('')"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>La contraseña no coincide</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input 
                                    id="password-confirm" 
                                    type="password" 
                                    class="form-control" 
                                    name="password_confirmation" 
                                    required autocomplete="new-password"
                                    oninvalid="
                                    if (this.value ===''){
                                        this.setCustomValidity('Ingresa la contraseña!')
                                    }"
                                    oninput="this.setCustomValidity('')"
                                >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
