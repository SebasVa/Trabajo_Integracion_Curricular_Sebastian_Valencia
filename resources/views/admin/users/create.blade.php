@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="form-control"  
                    value="{{ old('name', isset($user) ? $user->name : '') }}" 
                    required
                    pattern="[ A-Za-záéíóú]+"
                    oninvalid="
                    if (this.value ===''){
                        this.setCustomValidity('Ingresa el nombre!')
                    } else if (this.value !='') {
                        this.setCustomValidity('El nombre debe contener solo letras!')
                    }"
                    oninput="this.setCustomValidity('')"
                >
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group ">
                <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="form-control" 
                    value="{{ old('email', isset($user) ? $user->email : '') }}"
                    required
                    pattern="[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_]+(\.[a-zA-Z]{2,4}){1,2}"
                    oninvalid="
                    if (this.value ===''){
                        this.setCustomValidity('Ingresa el correo!')
                    } else if (this.value !='') {
                        this.setCustomValidity('No es un correo!')
                    }"
                    oninput="this.setCustomValidity('')"
                >
                <!-- @if($errors->has('email'))
                    <p class="help-block">
                        Este correo ya está registrado!
                    </p>
                @endif -->
                <p class="helper-block">
                    {{ trans('cruds.user.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="form-control" 
                    required
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
                <p class="helper-block">
                    {{ trans('cruds.user.fields.password_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <p class="help-block">
                        {{ $errors->first('roles') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" onclick="return confirm('Desea guardar los cambios?');" value="{{ trans('global.save') }}">
            </div>
            <a style="margin-top:20px;" class="btn btn-default" onclick="return confirm('Está seguro de regresar sin guardar?')" href="{{ url()->previous() }}">
                    {{ trans('global.back_to_list') }}
            </a>
        </form>
    </div>
</div>
@endsection