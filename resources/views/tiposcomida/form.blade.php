<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{Form::select('id_restaurantes',$restaurante, $tiposcomida->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'nombre_restauarante']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipos_comida') }}
            {{ Form::text('tipos_comida', $tiposcomida->tipos_comida, ['class' => 'form-control' . ($errors->has('tipos_comida') ? ' is-invalid' : ''), 'placeholder' => 'Tipos Comida']) }}
            {!! $errors->first('tipos_comida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>