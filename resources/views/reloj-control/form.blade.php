<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('reloj_marca_id') }}
            {{ Form::text('reloj_marca_id', $relojControl->reloj_marca_id, ['class' => 'form-control' . ($errors->has('reloj_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Reloj Marca Id']) }}
            {!! $errors->first('reloj_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reloj_modelo_id') }}
            {{ Form::text('reloj_modelo_id', $relojControl->reloj_modelo_id, ['class' => 'form-control' . ($errors->has('reloj_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Reloj Modelo Id']) }}
            {!! $errors->first('reloj_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reloj_ubicacion_id') }}
            {{ Form::text('reloj_ubicacion_id', $relojControl->reloj_ubicacion_id, ['class' => 'form-control' . ($errors->has('reloj_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Reloj Ubicacion Id']) }}
            {!! $errors->first('reloj_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reloj_departamento_id') }}
            {{ Form::text('reloj_departamento_id', $relojControl->reloj_departamento_id, ['class' => 'form-control' . ($errors->has('reloj_departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Reloj Departamento Id']) }}
            {!! $errors->first('reloj_departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>