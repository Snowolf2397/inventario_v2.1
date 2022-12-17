<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('procesadores_marca_id') }}
            {{ Form::text('procesadores_marca_id', $procesadore->procesadores_marca_id, ['class' => 'form-control' . ($errors->has('procesadores_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Procesadores Marca Id']) }}
            {!! $errors->first('procesadores_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('procesadores_modelo_id') }}
            {{ Form::text('procesadores_modelo_id', $procesadore->procesadores_modelo_id, ['class' => 'form-control' . ($errors->has('procesadores_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Procesadores Modelo Id']) }}
            {!! $errors->first('procesadores_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('frecuencia') }}
            {{ Form::text('frecuencia', $procesadore->frecuencia, ['class' => 'form-control' . ($errors->has('frecuencia') ? ' is-invalid' : ''), 'placeholder' => 'Frecuencia']) }}
            {!! $errors->first('frecuencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nucleos') }}
            {{ Form::text('nucleos', $procesadore->nucleos, ['class' => 'form-control' . ($errors->has('nucleos') ? ' is-invalid' : ''), 'placeholder' => 'Nucleos']) }}
            {!! $errors->first('nucleos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hilos') }}
            {{ Form::text('hilos', $procesadore->hilos, ['class' => 'form-control' . ($errors->has('hilos') ? ' is-invalid' : ''), 'placeholder' => 'Hilos']) }}
            {!! $errors->first('hilos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>