<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('televisores_marca_id') }}
            {{ Form::text('televisores_marca_id', $televisore->televisores_marca_id, ['class' => 'form-control' . ($errors->has('televisores_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Televisores Marca Id']) }}
            {!! $errors->first('televisores_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('televisores_ubicacion_id') }}
            {{ Form::text('televisores_ubicacion_id', $televisore->televisores_ubicacion_id, ['class' => 'form-control' . ($errors->has('televisores_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Televisores Ubicacion Id']) }}
            {!! $errors->first('televisores_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pulgadas') }}
            {{ Form::text('pulgadas', $televisore->pulgadas, ['class' => 'form-control' . ($errors->has('pulgadas') ? ' is-invalid' : ''), 'placeholder' => 'Pulgadas']) }}
            {!! $errors->first('pulgadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>