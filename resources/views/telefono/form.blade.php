<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('telefonos_modelo_id') }}
            {{ Form::text('telefonos_modelo_id', $telefono->telefonos_modelo_id, ['class' => 'form-control' . ($errors->has('telefonos_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Telefonos Modelo Id']) }}
            {!! $errors->first('telefonos_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_telefono') }}
            {{ Form::text('numero_telefono', $telefono->numero_telefono, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefono']) }}
            {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('compania') }}
            {{ Form::text('compania', $telefono->compania, ['class' => 'form-control' . ($errors->has('compania') ? ' is-invalid' : ''), 'placeholder' => 'Compania']) }}
            {!! $errors->first('compania', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>