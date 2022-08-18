<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{ Form::select('id_restaurantes',$restaurante, $redessociale->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'nombre_restauarante']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red_social') }}
            {{ Form::text('red_social', $redessociale->red_social, ['class' => 'form-control' . ($errors->has('red_social') ? ' is-invalid' : ''), 'placeholder' => 'Red Social']) }}
            {!! $errors->first('red_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_red_social') }}
            {{ Form::text('usuario_red_social', $redessociale->usuario_red_social, ['class' => 'form-control' . ($errors->has('usuario_red_social') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Red Social']) }}
            {!! $errors->first('usuario_red_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enlace_red_social') }}
            {{ Form::text('enlace_red_social', $redessociale->enlace_red_social, ['class' => 'form-control' . ($errors->has('enlace_red_social') ? ' is-invalid' : ''), 'placeholder' => 'Enlace Red Social']) }}
            {!! $errors->first('enlace_red_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>