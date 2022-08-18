<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{ Form::text('id_restaurantes', $imagene->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Restaurantes']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('res_ruta') }}
            {{ Form::text('res_ruta', $imagene->res_ruta, ['class' => 'form-control' . ($errors->has('res_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Res Ruta']) }}
            {!! $errors->first('res_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>