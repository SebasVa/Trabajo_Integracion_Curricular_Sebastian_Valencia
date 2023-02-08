@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.settings.update", [$setting->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- <div class="form-group {{ $errors->has('key') ? 'has-error' : '' }}">
                <label for="key">{{ trans('cruds.setting.fields.key') }}*</label>
                <input type="text" id="key" name="key" class="form-control" value="{{ old('key', isset($setting) ? $setting->key : '') }}" required>
                @if($errors->has('key'))
                    <p class="help-block">
                        {{ $errors->first('key') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.setting.fields.key_helper') }}
                </p>
            </div> -->
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value">{{ trans('cruds.setting.fields.value') }}</label>
                <textarea id="value" name="value" class="form-control ">{{ old('value', isset($setting) ? $setting->value : '') }}</textarea>
                @if($errors->has('value'))
                    <p class="help-block">
                        {{ $errors->first('value') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.setting.fields.value_helper') }}
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