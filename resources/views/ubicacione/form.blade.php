<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
           {{ Form::select('id_restaurantes',$restaurante, $ubicacione->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'nombre_restauarante']) }} 
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}

        </div>
        <div class="form-group">
            {{ Form::label('nombre_sede') }}
            {{ Form::text('nombre_sede', $ubicacione->nombre_sede, ['class' => 'form-control' . ($errors->has('nombre_sede') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Sede']) }}
            {!! $errors->first('nombre_sede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::text('departamento', $ubicacione->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::text('municipio', $ubicacione->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_postal') }}
            {{ Form::text('codigo_postal', $ubicacione->codigo_postal, ['class' => 'form-control' . ($errors->has('codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('barrio') }}
            {{ Form::text('barrio', $ubicacione->barrio, ['class' => 'form-control' . ($errors->has('barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrio']) }}
            {!! $errors->first('barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $ubicacione->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anexo') }}
            {{ Form::text('anexo', $ubicacione->anexo, ['class' => 'form-control' . ($errors->has('anexo') ? ' is-invalid' : ''), 'placeholder' => 'Anexo']) }}
            {!! $errors->first('anexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>