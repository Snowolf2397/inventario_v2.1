<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('notebooks_marca_id') }}
            {{ Form::text('notebooks_marca_id', $notebook->notebooks_marca_id, ['class' => 'form-control' . ($errors->has('notebooks_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Notebooks Marca Id']) }}
            {!! $errors->first('notebooks_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notebooks_modelo_id') }}
            {{ Form::text('notebooks_modelo_id', $notebook->notebooks_modelo_id, ['class' => 'form-control' . ($errors->has('notebooks_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Notebooks Modelo Id']) }}
            {!! $errors->first('notebooks_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('almacenamiento') }}
            {{ Form::text('almacenamiento', $notebook->almacenamiento, ['class' => 'form-control' . ($errors->has('almacenamiento') ? ' is-invalid' : ''), 'placeholder' => 'Almacenamiento']) }}
            {!! $errors->first('almacenamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('can_almacenamiento') }}
            {{ Form::text('can_almacenamiento', $notebook->can_almacenamiento, ['class' => 'form-control' . ($errors->has('can_almacenamiento') ? ' is-invalid' : ''), 'placeholder' => 'Can Almacenamiento']) }}
            {!! $errors->first('can_almacenamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('can_ram') }}
            {{ Form::text('can_ram', $notebook->can_ram, ['class' => 'form-control' . ($errors->has('can_ram') ? ' is-invalid' : ''), 'placeholder' => 'Can Ram']) }}
            {!! $errors->first('can_ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notebooks_procesador_id') }}
            {{ Form::text('notebooks_procesador_id', $notebook->notebooks_procesador_id, ['class' => 'form-control' . ($errors->has('notebooks_procesador_id') ? ' is-invalid' : ''), 'placeholder' => 'Notebooks Procesador Id']) }}
            {!! $errors->first('notebooks_procesador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notebooks_ubicacion_id') }}
            {{ Form::text('notebooks_ubicacion_id', $notebook->notebooks_ubicacion_id, ['class' => 'form-control' . ($errors->has('notebooks_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Notebooks Ubicacion Id']) }}
            {!! $errors->first('notebooks_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notebooks_funcionario_id') }}
            {{ Form::text('notebooks_funcionario_id', $notebook->notebooks_funcionario_id, ['class' => 'form-control' . ($errors->has('notebooks_funcionario_id') ? ' is-invalid' : ''), 'placeholder' => 'Notebooks Funcionario Id']) }}
            {!! $errors->first('notebooks_funcionario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>