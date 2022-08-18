<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{ Form::text('id_restaurantes', $horario->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Restaurantes']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_semana_LV') }}
            {{ Form::text('dia_semana_LV', $horario->dia_semana_LV, ['class' => 'form-control' . ($errors->has('dia_semana_LV') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana Lv']) }}
            {!! $errors->first('dia_semana_LV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_apertura_LV') }}
            {{ Form::text('hora_apertura_LV', $horario->hora_apertura_LV, ['class' => 'form-control' . ($errors->has('hora_apertura_LV') ? ' is-invalid' : ''), 'placeholder' => 'Hora Apertura Lv']) }}
            {!! $errors->first('hora_apertura_LV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_cierre_LV') }}
            {{ Form::text('hora_cierre_LV', $horario->hora_cierre_LV, ['class' => 'form-control' . ($errors->has('hora_cierre_LV') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cierre Lv']) }}
            {!! $errors->first('hora_cierre_LV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_semana_S') }}
            {{ Form::text('dia_semana_S', $horario->dia_semana_S, ['class' => 'form-control' . ($errors->has('dia_semana_S') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana S']) }}
            {!! $errors->first('dia_semana_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_apertura_S') }}
            {{ Form::text('hora_apertura_S', $horario->hora_apertura_S, ['class' => 'form-control' . ($errors->has('hora_apertura_S') ? ' is-invalid' : ''), 'placeholder' => 'Hora Apertura S']) }}
            {!! $errors->first('hora_apertura_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_cierre_S') }}
            {{ Form::text('hora_cierre_S', $horario->hora_cierre_S, ['class' => 'form-control' . ($errors->has('hora_cierre_S') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cierre S']) }}
            {!! $errors->first('hora_cierre_S', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_semana_DF') }}
            {{ Form::text('dia_semana_DF', $horario->dia_semana_DF, ['class' => 'form-control' . ($errors->has('dia_semana_DF') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana Df']) }}
            {!! $errors->first('dia_semana_DF', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_apertura_DF') }}
            {{ Form::text('hora_apertura_DF', $horario->hora_apertura_DF, ['class' => 'form-control' . ($errors->has('hora_apertura_DF') ? ' is-invalid' : ''), 'placeholder' => 'Hora Apertura Df']) }}
            {!! $errors->first('hora_apertura_DF', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_cierre_DF') }}
            {{ Form::text('hora_cierre_DF', $horario->hora_cierre_DF, ['class' => 'form-control' . ($errors->has('hora_cierre_DF') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cierre Df']) }}
            {!! $errors->first('hora_cierre_DF', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>