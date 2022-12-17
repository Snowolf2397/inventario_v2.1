<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('routers_marca_id') }}
            {{ Form::text('routers_marca_id', $router->routers_marca_id, ['class' => 'form-control' . ($errors->has('routers_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Routers Marca Id']) }}
            {!! $errors->first('routers_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('routers_modelo_id') }}
            {{ Form::text('routers_modelo_id', $router->routers_modelo_id, ['class' => 'form-control' . ($errors->has('routers_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Routers Modelo Id']) }}
            {!! $errors->first('routers_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('frecuencia') }}
            {{ Form::text('frecuencia', $router->frecuencia, ['class' => 'form-control' . ($errors->has('frecuencia') ? ' is-invalid' : ''), 'placeholder' => 'Frecuencia']) }}
            {!! $errors->first('frecuencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('compania') }}
            {{ Form::text('compania', $router->compania, ['class' => 'form-control' . ($errors->has('compania') ? ' is-invalid' : ''), 'placeholder' => 'Compania']) }}
            {!! $errors->first('compania', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('routers_ubicacion_id') }}
            {{ Form::text('routers_ubicacion_id', $router->routers_ubicacion_id, ['class' => 'form-control' . ($errors->has('routers_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Routers Ubicacion Id']) }}
            {!! $errors->first('routers_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>