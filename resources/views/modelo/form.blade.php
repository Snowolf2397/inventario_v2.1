<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('modelos_marca_id') }}
            {{ Form::text('modelos_marca_id', $modelo->modelos_marca_id, ['class' => 'form-control' . ($errors->has('modelos_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Modelos Marca Id']) }}
            {!! $errors->first('modelos_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $modelo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>