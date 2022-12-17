<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rut') }}
            {{ Form::text('rut', $funcionario->rut, ['class' => 'form-control' . ($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $funcionario->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $funcionario->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $funcionario->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('funcionarios_telefono_id') }}
            {{ Form::text('funcionarios_telefono_id', $funcionario->funcionarios_telefono_id, ['class' => 'form-control' . ($errors->has('funcionarios_telefono_id') ? ' is-invalid' : ''), 'placeholder' => 'Funcionarios Telefono Id']) }}
            {!! $errors->first('funcionarios_telefono_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('funcionarios_departamento_id') }}
            {{ Form::text('funcionarios_departamento_id', $funcionario->funcionarios_departamento_id, ['class' => 'form-control' . ($errors->has('funcionarios_departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Funcionarios Departamento Id']) }}
            {!! $errors->first('funcionarios_departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>