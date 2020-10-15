<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('question') ? 'has-error' : ''}}">
    {!! Form::label('question', 'Question', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('question', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('answer') ? 'has-error' : ''}}">
    {!! Form::label('answer', 'Answer', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('answer', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('answer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
