<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{ Form::select('id_restaurantes',$restaurante, $tiposocasione->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'nombre_restauarante']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_ocasion') }}
            {{ Form::text('tipo_ocasion', $tiposocasione->tipo_ocasion, ['class' => 'form-control' . ($errors->has('tipo_ocasion') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Ocasion']) }}
            {!! $errors->first('tipo_ocasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>