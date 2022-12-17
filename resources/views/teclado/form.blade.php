<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::select('teclados_marca_id',$teclado_marcas, $teclado->teclados_marca_id, ['class' => 'form-control' . ($errors->has('teclados_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Teclados Marca Id']) }}
            {!! $errors->first('teclados_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicacion') }}
            {{ Form::select('teclados_ubicacion_id',$teclado_ubicaciones, $teclado->teclados_ubicacion_id, ['class' => 'form-control' . ($errors->has('teclados_ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Teclados Ubicacion Id']) }}
            {!! $errors->first('teclados_ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teclados_funcionario_id') }}
            {{ Form::select('teclados_funcionario_id',$teclado_funcionarios, $teclado->teclados_funcionario_id, ['class' => 'form-control' . ($errors->has('teclados_funcionario_id') ? ' is-invalid' : ''), 'placeholder' => 'Teclados Funcionario Id']) }}
            {!! $errors->first('teclados_funcionario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>