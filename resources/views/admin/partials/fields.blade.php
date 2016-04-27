<div class="col-md-12 alert alert-info">
    <div class="form-group col-md-3">
        {!! Form::text('brand',null,['class' => 'form-control','placeholder' => 'Marca',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Marca TV']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text('mod_tv',null,['class' => 'form-control','placeholder' => 'Modello',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Modello TV']) !!}
    </div>
    <div class="form-group{{ $errors->has('panel') ? ' has-error' : '' }} col-md-3">
        {!! Form::text('panel',null,['class' => 'form-control','placeholder' => 'Pannello',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Pannello']) !!}
        @if ($errors->has('panel'))
            <span class="help-block">
                    <strong><i class="fa fa-exclamation-triangle"></i>
                        {{ $errors->first('panel') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text('panel_place',null,['class' => 'form-control','placeholder' => 'Posto',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Posto Pannello']) !!}
    </div>
</div>

<div class="col-md-12 alert alert-warning">

    <div class="form-group">
        {!! Form::text('main',null,['class' => 'form-control', 'placeholder' => 'MainBoard',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Main']) !!}
    </div>
    <div class="form-group">
        {!! Form::selectRange('main_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!} 
    </div>
    <span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
    <div class="form-group">
        {!! Form::text('inverter',null,['class' => 'form-control','placeholder' => 'Inverter',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Inverter']) !!}
    </div>
    <div class="form-group">
        {!! Form::selectRange('inverter_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
    <span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
    <div class="form-group">
        {!! Form::text('power_supply',null,['class' => 'form-control','placeholder' => 'Alimentatore',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore']) !!}
    </div>
    <div class="form-group">
        {!! Form::selectRange('power_supply_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
    <br><br>
    <div class="form-group">
        {!! Form::text('power_supply_alt',null,['class' => 'form-control','placeholder' => 'Alimentatore Alt.',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore Alt.']) !!}
    </div>
    <div class="form-group">
        {!! Form::selectRange('power_supply_alt_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!} 
    </div>
    <span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
    <div class="form-group">
        {!! Form::text('t_con',null,['class' => 'form-control','placeholder' => 'T_Con',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'T_Con']) !!}
    </div>
    <div class="form-group">
        {!! Form::selectRange('t_con_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
    <span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
    <div class="form-group{{ $errors->has('type') ? 'has-error' : '' }}">
        {!! Form::label('available','Disponibilità del Pannello:  &nbsp; &nbsp; ') !!}
        {!! Form::radio('available','1') !!} Si &nbsp; &nbsp;
        {!! Form::radio('available','0') !!} No <br>
        @if ($errors->has('available'))
            <span class="help-block" style="color:#A94442">
                    <strong><i class="fa fa-exclamation-triangle"></i>
                        {{ $errors->first('available') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="alert alert-success col-md-12">
    <div class="form-group">
        {!! Form::textarea('note',null,['size' => '107x2', 'class' => 'form-control', 'placeholder' => 'Nota']) !!}
    </div>
</div>
