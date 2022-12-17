<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('impresoras_marca_id') }}
            {{ Form::text('impresoras_marca_id', $impresora->impresoras_marca_id, ['class' => 'form-control' . ($errors->has('impresoras_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Impresoras Marca Id']) }}
            {!! $errors->first('impresoras_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impresoras_modelo_id') }}
            {{ Form::text('impresoras_modelo_id', $impresora->impresoras_modelo_id, ['class' => 'form-control' . ($errors->has('impresoras_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Impresoras Modelo Id']) }}
            {!! $errors->first('impresoras_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impresoras_ubicacion_id') }}
            {{ Form::text('impresoras_ubicacion_id', $impresora->impresoras_ubicacion_id, ['class' => 'form-control' . ($errors->has('impresoras_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Impresoras Ubicacion Id']) }}
            {!! $errors->first('impresoras_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>