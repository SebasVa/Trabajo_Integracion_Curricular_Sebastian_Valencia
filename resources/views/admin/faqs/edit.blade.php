@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.faq.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.faqs.update", [$faq->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                <label for="question">{{ trans('cruds.faq.fields.question') }}*</label>
                <input type="text" id="question" name="question" class="form-control" value="{{ old('question', isset($faq) ? $faq->question : '') }}" required>
                @if($errors->has('question'))
                    <p class="help-block">
                        {{ $errors->first('question') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faq.fields.question_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('answer') ? 'has-error' : '' }}">
                <label for="answer">{{ trans('cruds.faq.fields.answer') }}*</label>
                <input type="text" id="answer" name="answer" class="form-control" value="{{ old('answer', isset($faq) ? $faq->answer : '') }}" required>
                @if($errors->has('answer'))
                    <p class="help-block">
                        {{ $errors->first('answer') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faq.fields.answer_helper') }}
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