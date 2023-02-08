@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.amenity.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.amenities.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.amenity.fields.name') }}*</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="form-control" 
                    value="{{ old('name', isset($amenity) ? $amenity->name : '') }}" 
                    required
                    oninvalid="
                    if (this.value ===''){
                        this.setCustomValidity('Ingresa el nombre!')
                    }"
                    oninput="this.setCustomValidity('')"
                >
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.amenity.fields.name_helper') }}
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