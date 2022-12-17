<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mouses_marca_id') }}
            {{ Form::text('mouses_marca_id', $mouse->mouses_marca_id, ['class' => 'form-control' . ($errors->has('mouses_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Mouses Marca Id']) }}
            {!! $errors->first('mouses_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mouses_ubicacion_id') }}
            {{ Form::text('mouses_ubicacion_id', $mouse->mouses_ubicacion_id, ['class' => 'form-control' . ($errors->has('mouses_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Mouses Ubicacion Id']) }}
            {!! $errors->first('mouses_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mouses_funcionario_id') }}
            {{ Form::text('mouses_funcionario_id', $mouse->mouses_funcionario_id, ['class' => 'form-control' . ($errors->has('mouses_funcionario_id') ? ' is-invalid' : ''), 'placeholder' => 'Mouses Funcionario Id']) }}
            {!! $errors->first('mouses_funcionario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>