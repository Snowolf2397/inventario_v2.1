<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('monitores_marca_id') }}
            {{ Form::text('monitores_marca_id', $monitore->monitores_marca_id, ['class' => 'form-control' . ($errors->has('monitores_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Monitores Marca Id']) }}
            {!! $errors->first('monitores_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrada') }}
            {{ Form::text('entrada', $monitore->entrada, ['class' => 'form-control' . ($errors->has('entrada') ? ' is-invalid' : ''), 'placeholder' => 'Entrada']) }}
            {!! $errors->first('entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alimentacion') }}
            {{ Form::text('alimentacion', $monitore->alimentacion, ['class' => 'form-control' . ($errors->has('alimentacion') ? ' is-invalid' : ''), 'placeholder' => 'Alimentacion']) }}
            {!! $errors->first('alimentacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monitores_ubicacion_id') }}
            {{ Form::text('monitores_ubicacion_id', $monitore->monitores_ubicacion_id, ['class' => 'form-control' . ($errors->has('monitores_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Monitores Ubicacion Id']) }}
            {!! $errors->first('monitores_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monitores_funcionario_id') }}
            {{ Form::text('monitores_funcionario_id', $monitore->monitores_funcionario_id, ['class' => 'form-control' . ($errors->has('monitores_funcionario_id') ? ' is-invalid' : ''), 'placeholder' => 'Monitores Funcionario Id']) }}
            {!! $errors->first('monitores_funcionario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>