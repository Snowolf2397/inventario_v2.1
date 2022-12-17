<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('desktops_procesador_id') }}
            {{ Form::text('desktops_procesador_id', $desktop->desktops_procesador_id, ['class' => 'form-control' . ($errors->has('desktops_procesador_id') ? ' is-invalid' : ''), 'placeholder' => 'Desktops Procesador Id']) }}
            {!! $errors->first('desktops_procesador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('almacenamiento') }}
            {{ Form::text('almacenamiento', $desktop->almacenamiento, ['class' => 'form-control' . ($errors->has('almacenamiento') ? ' is-invalid' : ''), 'placeholder' => 'Almacenamiento']) }}
            {!! $errors->first('almacenamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_almacenamiento') }}
            {{ Form::text('cant_almacenamiento', $desktop->cant_almacenamiento, ['class' => 'form-control' . ($errors->has('cant_almacenamiento') ? ' is-invalid' : ''), 'placeholder' => 'Cant Almacenamiento']) }}
            {!! $errors->first('cant_almacenamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_ram') }}
            {{ Form::text('cant_ram', $desktop->cant_ram, ['class' => 'form-control' . ($errors->has('cant_ram') ? ' is-invalid' : ''), 'placeholder' => 'Cant Ram']) }}
            {!! $errors->first('cant_ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desktops_sistema_operativo_id') }}
            {{ Form::text('desktops_sistema_operativo_id', $desktop->desktops_sistema_operativo_id, ['class' => 'form-control' . ($errors->has('desktops_sistema_operativo_id') ? ' is-invalid' : ''), 'placeholder' => 'Desktops Sistema Operativo Id']) }}
            {!! $errors->first('desktops_sistema_operativo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desktops_ubicacion_id') }}
            {{ Form::text('desktops_ubicacion_id', $desktop->desktops_ubicacion_id, ['class' => 'form-control' . ($errors->has('desktops_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Desktops Ubicacion Id']) }}
            {!! $errors->first('desktops_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desktops_funcionario_id') }}
            {{ Form::text('desktops_funcionario_id', $desktop->desktops_funcionario_id, ['class' => 'form-control' . ($errors->has('desktops_funcionario_id') ? ' is-invalid' : ''), 'placeholder' => 'Desktops Funcionario Id']) }}
            {!! $errors->first('desktops_funcionario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>