
<div class="alert col-md-6">

    <div class="form-group">
        {!! Form::label('brand','Marca TV',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-sm-9 col-sm-9">
        {!! Form::text('brand',null,['class' => 'form-control','placeholder' => 'Marca',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Marca TV']) !!}
        </div>    
    </div>
    <div class="form-group">
        {!! Form::label('mod_tv','Modello',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('mod_tv',null,['class' => 'form-control','placeholder' => 'Modello',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Modello TV']) !!}
        </div>       
    </div>

    <div class="form-group{{ $errors->has('panel') ? ' has-error' : '' }}">
        {!! Form::label('panel','Pannello',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('panel',null,['class' => 'form-control','placeholder' => 'Pannello',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Pannello']) !!}
        </div>
        @if ($errors->has('panel'))
            <span class="help-block">
                    <strong><i class="fa fa-exclamation-triangle"></i>
                        {{ $errors->first('panel') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {!! Form::label('panel_place','Posto',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('panel_place',null,['class' => 'form-control','placeholder' => 'Posto',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Posto Pannello']) !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('type') ? 'has-error' : '' }}">    
            {!! Form::label('available','Disponibilità del Pannello:',['class' => 'control-label col-md-4 col-sm-4']) !!}
            <div class="col-md-8 col-sm-8">
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

    <div class="form-group{{ $errors->has('status') ? 'has-error' : '' }} ">
        {!! Form::label('status','Stato della TV:',['class' => 'control-label col-md-4 col-sm-4']) !!}
        <div class="col-md-8 col-sm-8">
            {!! Form::radio('status','monted') !!} <i class="fa fa-wrench"></i> Da Smontare &nbsp; &nbsp;
            {!! Form::radio('status','unmonted', true) !!} Smontato <br>
            @if ($errors->has('status'))
                <span class="help-block" style="color:#A94442">
                        <strong><i class="fa fa-exclamation-triangle"></i>
                            {{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>    
    </div>

    <div class="form-group{{ $errors->has('image_file') ? 'has-error' : '' }}">
        {!! Form::label('image_file','Seleziona Immagine',['class' => 'control-label col-md-4 col-sm-4']) !!}
            <span class="btn btn-default btn-file">
                <div class="col-md-8 col-sm-8">
                    {!! Form::file('image_file', null) !!} 
                    @if ($errors->has('image_file'))
                    <span class="help-block" style="color:#A94442">
                            <strong><i class="fa fa-exclamation-triangle"></i>
                                {{ $errors->first('image_file') }}</strong>
                    </span>
                    @endif 
                </div> 
        </span> 
    </div> 
</div>

{{-- second panel --}}

<div class="col-md-5">  
<br>  
    <div class="form-group controls form-inline">
        {!! Form::label('main','Mainboard',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('main',null,['class' => 'form-control', 'placeholder' => 'MainBoard',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Main']) !!}
            {!! Form::label('main_nr','Box',['class' => 'control-label']) !!}
            {!! Form::selectRange('main_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!} 
        </div>
    </div>
    <hr>

    <div class="form-group controls form-inline">
        {!! Form::label('inverter','Inverter',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('inverter',null,['class' => 'form-control','placeholder' => 'Inverter',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Inverter']) !!}
            {!! Form::label('inverter_nr','Box',['class' => 'control-label']) !!}
            {!! Form::selectRange('inverter_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group controls form-inline">
        {!! Form::label('power_supply','Alimentatore',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('power_supply',null,['class' => 'form-control','placeholder' => 'Alimentatore',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore']) !!}
            {!! Form::label('power_supply_nr','Box',['class' => 'control-label']) !!}
            {!! Form::selectRange('power_supply_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group controls form-inline">
        {!! Form::label('power_supply_alt','Alim. Alt.',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('power_supply_alt',null,['class' => 'form-control','placeholder' => 'Alimentatore Alt.',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore Alt.']) !!}
            {!! Form::label('power_supply_alt_nr','Box',['class' => 'control-label']) !!}
            {!! Form::selectRange('power_supply_alt_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!} 
        </div>
    </div>
    <hr>

    <div class="form-group controls form-inline">
        {!! Form::label('t_con','T_Con',['class' => 'control-label col-md-3 col-sm-3']) !!}
        <div class="col-md-9 col-sm-9">
            {!! Form::text('t_con',null,['class' => 'form-control','placeholder' => 'T_Con',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'T_Con']) !!}
            {!! Form::label('t_con_nr','Box',['class' => 'control-label']) !!}
            {!! Form::selectRange('t_con_nr', 1, 30, null,['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
    </div>
</div>
<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
    Nota:
    <div class="form-group">
            {!! Form::textarea('note',null,['size' => '100x1', 'class' => 'form-control']) !!}
    </div>
</div>

