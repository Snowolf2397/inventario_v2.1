<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $ubicacione->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicaciones_sede_id') }}
            {{ Form::select('ubicaciones_sede_id',$ubicacione_sedes, $ubicacione->ubicaciones_sede_id, ['class' => 'form-control' . ($errors->has('ubicaciones_sede_id') ? ' is-invalid' : ''), 'placeholder' => 'Ubicaciones Sede Id']) }}
            {!! $errors->first('ubicaciones_sede_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>